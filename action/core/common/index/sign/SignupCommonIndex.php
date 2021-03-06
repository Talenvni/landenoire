<?php namespace action\core\common\index;


use action\general\Helper;
use action\general\TwigLabs;
use action\general\Database;
use action\general\Validator;
use action\general\MessageFlash;

class SignupCommonIndex {
	/**
	 * Render Inscription view
	 */
	public static function catchTwig() {
		try {
			echo TwigLabs::loadTwig()->render( '/sign/signupCommonIndex.twig', [
				'title'            => 'Inscription',
				'sign'             => self::signUp(),
				'signUpValidation' => self::signUpValidation()
			] );
		} catch ( \Twig_Error_Loader $e ) {
			die( 'ERROR LOADER TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Runtime $e ) {
			die( 'ERROR RUNTIME TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Syntax $e ) {
			die( 'ERROR SYNTAX TWIG : ' . $e->getMessage() );
		}
	}

	/**
	 * @return mixed|null Inscription page
	 */
	private static function signUp() {
		if ( isset( $_POST['signup_submit'] ) ) :
			// Captcha
			$secret   = "6Lc_aUwUAAAAAM_PUxRAxaA7Fi0VQYXsqmpokBMI";
			$response = $_POST['g-recaptcha-response'];
			$remoteIp = $_SERVER['REMOTE_ADDR'];
			$apiUrl   = "https://www.google.com/recaptcha/api/siteverify?secret="
			            . $secret
			            . "&response=" . $response
			            . "&remoteip=" . $remoteIp;
			$decode   = json_decode( file_get_contents( $apiUrl ), true );

			$decode          = $decode['success'];
			$signup_pseudo   = Helper::secureString( ucfirst( $_POST['signup_pseudo'] ) );
			$signup_email    = Helper::secureString( strtolower( $_POST['signup_email'] ) );
			$signup_password = Helper::secureString( $_POST['signup_password'] );
			$signup_confirm  = Helper::secureString( $_POST['signup_password_confirm'] );
			$rules = isset( $_POST['rule_accepted']) ? 1 : 0;

			$signup_validator = new Validator();
			$signup_validator->isEqual( $decode, true, 'Captcha invalide' );
			$signup_validator->isEmail( $signup_email, 'Email invalide' );
			$signup_validator->isPreg( '/^[a-zA-Z0-9]{8,}$/', $signup_password, 'Mot de passe invalide' );
			$signup_validator->isPreg( '/(^[A-Z]{1}[\D\s]{2,20}[a-z\é]$)/', $signup_pseudo, 'Pseudo invalide' );
			$signup_validator->isEqual( $signup_password, $signup_confirm, 'Mot de passe invalide' );
			$signup_validator->isEqual( 1, $rules, 'Vous devez accepter le règlement général' );

			// If logs sounds good
			if ( empty( $signup_validator->getFail() ) ) :
				$signup_verify = Database::getQuery( '
					SELECT email, pseudo
					FROM ln_users
					WHERE email = ? OR pseudo = ?',
					[ $_POST['signup_email'], $_POST['signup_pseudo'] ]
				)->fetch( \PDO::FETCH_OBJ );

				$user_validator = new Validator();
				if ( is_object( $signup_verify ) ):
					$user_validator->isDiff( $signup_pseudo, $signup_verify->pseudo, 'Ce pseudo existe déjà' );
					$user_validator->isDiff( $signup_email, $signup_verify->email, 'Cet email existe déjà' );
				endif;

				// If user not exists yet
				if ( empty( $user_validator->getFail() ) ) :
					$signup_token = Helper::randomString( 'alphanumeric', 60 );
					$signup_hash  = password_hash( $signup_password, PASSWORD_BCRYPT );

					if ( $_POST['double_account_check'] ) :
						$verify = Database::getQuery( '
							SELECT email
							FROM ln_users
							WHERE email = ?',
							[ $_POST['double_account_input'] ]
						)->fetch( \PDO::FETCH_OBJ );

						$verify = is_object( $verify ) ? $verify : null;

						$validator = new Validator();
						$validator->isEmail( $_POST['double_account_input'], 'Email invalide' );
						$validator->isDiff( $verify, null, 'Email secondaire erroné' );

						if ( is_object( $verify ) ):
							$validator->isDiff( $verify->email, $_POST['double_account_input'], 'Email secondaire erroné' );
						endif;

						if ( empty( $validator->getFail() ) ) :
							Database::getQuery( '
							INSERT INTO ln_users (email, pseudo, password, tokenValidation, tokenExpire)
							VALUES (?, ?, ?, ?, NOW())',
								[ $signup_email, $signup_pseudo, $signup_hash, $signup_token ]
							);

							$last_id = Database::lastInsertId();

							Database::getQuery( '
							UPDATE ln_users
							SET doubleAccount = 1, parentEmail = ?
							WHERE id = ?', [
								$_POST['double_account_input'],
								$last_id
							] );
						else:
							return $validator->getFail();
						endif;
					endif;

					if ( ! $_POST['double_account_check'] ) :
						Database::getQuery( '
							INSERT INTO ln_users (email, pseudo, password, tokenValidation, tokenExpire)
							VALUES (?, ?, ?, ?, NOW())',
							[ $signup_email, $signup_pseudo, $signup_hash, $signup_token ]
						);

						$last_id = Database::lastInsertId();
					endif;

					Helper::createEmail(
						$signup_email,
						'Validation de compte',
						'Veuillez cliquer sur ce lien pour valider vote compte sur Lande Noire.<br>Si vous n\'êtes pas l\'auteur de cette demande, veuillez ne pas tenir compte de cet email.',
						'https://www.lande-noire.online/sign-up/' . $last_id . '&' . $signup_token,
						'Confirmer le compte'
					);
					MessageFlash::setFlash( 'success', 'Veuillez suivre les instructions par email' );
					Helper::redirection( '/home' );
				else :
					return $user_validator->getFail();
				endif;
			else :
				return $signup_validator->getFail();
			endif;
		endif;

		return null;
	}

	private static function signUpValidation() {
		// Request need $_GET to confirm account
		if ( isset( $_GET['last_id'], $_GET['signup_token'] ) ) :

			$signup_verify = Database::getQuery( '
				SELECT tokenValidation, tokenExpire
				FROM ln_users
				WHERE id = ? AND tokenConfirm IS NULL AND NOW() < TIMESTAMPADD(MINUTE, 60, tokenExpire)',
				[ $_GET['last_id'] ] )->fetch( \PDO::FETCH_OBJ );

			$signup_validator = new Validator();
			if ( $signup_validator->isDiff( $signup_verify, null, 'Demande expirée' ) ) :
				$signup_validator->isEqual( $_GET['signup_token'], $signup_verify->tokenValidation, 'Validation impossible' );
			endif;

			// If token is correct
			if ( empty( $signup_validator->getFail() ) ) :
				Database::getQuery( '
					UPDATE ln_users
					SET tokenValidation = NULL, tokenConfirm = NOW(), tokenExpire = NULL 
					WHERE id = ? AND tokenValidation IS NOT NULL',
					[ $_GET['last_id'] ] );

				Database::getQuery( '
                    INSERT INTO ln_users_info (idUser, coin, avatar, reputation, alignement)
                    VALUES (?, 0, \'default.png\', 0, \'Neutre\')',
					[ $_GET['last_id'] ] );

				Database::getQuery( '
				INSERT INTO ln_users_traits (idUser)
				VALUES (?)', [ $_GET['last_id'] ] );

				$heading = Database::getQuery( '
					SELECT COUNT(*) AS nbrHead FROM `ln_users_heading`' )->fetch( \PDO::FETCH_OBJ );

				for ( $i = 1; $i <= $heading->nbrHead; $i ++ ) :
					Database::getQuery( '
	                    INSERT INTO ln_users_paragraph (idUser, idHeading, content)
	                    VALUES (?, ?, \'\')',
						[ $_GET['last_id'], $i ] );
				endfor;

				MessageFlash::setFlash( 'success', 'Compte validé' );
				Helper::redirection( '/sign-in' );
			else :
				$last_id      = $_GET['last_id'];
				$signup_token = Helper::randomString( 'alphanumeric', 60 );

				$signup_reload = Database::getQuery( '
					SELECT email
					FROM ln_users
					WHERE id = ?',
					[ $_GET['last_id'] ]
				)->fetch( \PDO::FETCH_OBJ );

				Database::getQuery( '
				UPDATE ln_users
				SET tokenValidation = ?, tokenExpire = NOW()
				WHERE id = ?', [
					$_GET['last_id'],
					$signup_token
				] );

				Helper::createEmail(
					$signup_reload->email,
					'Validation de compte',
					'Votre demande ayant expiré, nous vous renvoyons ci-joint un nouveau lien pour confirmer votre compte sur Lande Noire.<br>Si vous n\'êtes pas l\'auteur de cette demande, veuillez ne pas tenir compte de cet email.',
					'https://www.lande-noire.online/sign-up/' . $last_id . '&' . $signup_token,
					'Confirmer le compte'
				);

				return $signup_validator->getFail();
			endif;
		endif;

		return null;
	}

}