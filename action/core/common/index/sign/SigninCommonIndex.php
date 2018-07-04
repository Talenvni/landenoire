<?php namespace action\core\common\index;

use action\general\Helper;
use action\general\TwigLabs;
use action\general\Database;
use action\general\Validator;
use action\general\MessageFlash;

class SigninCommonIndex {
	/**
	 * Render Connexion view
	 */
	public static function catchTwig() {
		try {
			echo TwigLabs::loadTwig()->render( '/sign/signinCommonIndex.twig', [
				'title'  => 'Connexion',
				'sign' => self::signIn()
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
	 * @return mixed|null Connexion page
	 */
	private static function signIn() {
		if ( isset( $_POST['signin_submit'] ) ) :
			$lower_email = strtolower( $_POST['signin_email'] );

			Database::getInstance();
			$signin_verify = Database::getQuery( '
	        SELECT u.id, email, pseudo, password, isConnect, isBanned, idGroup, groupName, avatar, characterValide
	        FROM ln_users AS u
	        LEFT JOIN ln_users_group AS g ON u.idGroup = g.id
	        LEFT JOIN ln_users_info i on u.id = i.idUser
	        WHERE email = ? AND tokenConfirm IS NOT NULL AND isBanned = ?',
				[ $_POST['signin_email'], 0 ] )->fetch( \PDO::FETCH_OBJ );

			$signin_validator = new Validator();
			if ( $signin_validator->
			isDiff( $signin_verify, false, 'Utilisateur inconnu' ) ) :
				$signin_validator->
				isEmail( $lower_email, 'Email invalide' );
				$signin_validator->
				isEqual( $lower_email, $signin_verify->email, 'Email incorrect' );
				$signin_validator->
				isVerify( $_POST['signin_password'], $signin_verify->password, 'Mot de passe incorrect' );
			endif;


			// If logs sounds good
			if ( empty( $signin_validator->getFail() ) ) :
				$_SESSION['user'] = (object) $signin_verify;

				Database::getQuery( '
                UPDATE ln_users
                SET isConnect = ?, tokenValidation = NULL 
                WHERE id = ?', [1, $_SESSION['user']->id ] );

				// If cookie
				if ( isset( $_POST['signin_checkbox'] ) ) :
					$cookie_token = Helper::randomString( 'alphanumeric', 250 );

					Database::getQuery( '
					UPDATE ln_users
					SET tokenCookie = ?
					WHERE id = ?',
					[ $cookie_token, $_SESSION['user']->id ] );

					setcookie( 'captainCook', $_SESSION['user']->id . '==' . $cookie_token . sha1( $_SESSION['user']->id . 'putTheCookieDown' ), time() + 60 * 60 * 24 * 365 );
				endif;
				MessageFlash::setFlash( 'success', 'Bienvenue, ' . $_SESSION['user']->pseudo );
				Helper::redirection( '/account/character-' . $_SESSION['user']->id );
			else :
				return $signin_validator->getFail();
			endif;
		endif;

		return null;
	}
}