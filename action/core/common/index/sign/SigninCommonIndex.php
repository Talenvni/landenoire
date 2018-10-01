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
		if(isset($_COOKIE['captainCook']) && !isset($_SESSION['user']) ){

			$remember_token = $_COOKIE['captainCook'];
			$parts = explode('==', $remember_token);
			$user_id = $parts[0];
			$cookie = Database::getQuery( '
	        SELECT u.id, email, pseudo, password, isConnect, isBanned, idGroup, groupName, avatar, characterValide, tokenCookie
	        FROM ln_users AS u
	        LEFT JOIN ln_users_group AS g ON u.idGroup = g.id
	        LEFT JOIN ln_users_info i on u.id = i.idUser
	        WHERE u.id = ? AND tokenConfirm IS NOT NULL AND isBanned = ?',
				[ $user_id, 0 ] )->fetch( \PDO::FETCH_OBJ );

			if($cookie){
				$expected = $user_id . '==' . $cookie->tokenCookie . sha1( $cookie->id . 'putTheCookieDown' );
				if($expected == $remember_token){
					$_SESSION['user'] = $cookie;
					setcookie('captainCook', $remember_token, time() + 60 * 60 * 24 * 7);
					MessageFlash::setFlash( 'success', 'Bon retour, ' . $cookie->pseudo );
					Helper::redirection( '/account/character-' . $cookie->id );
				} else{
					setcookie('captainCook', null, -1);
				}
			}else{
				setcookie('captainCook', null, -1);
			}
		}


		if ( isset( $_POST['signin_submit'] ) ) :
			$lower_email = strtolower( $_POST['signin_email'] );

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
                WHERE id = ?', [1, $signin_verify->id ] );

				// If cookie
				if ( isset( $_POST['signin_checkbox'] ) ) :
					$cookie_token = Helper::randomString( 'alphanumeric', 250 );

					Database::getQuery( '
					UPDATE ln_users
					SET tokenCookie = ?
					WHERE id = ?',
					[ $cookie_token, $signin_verify->id ] );

					setcookie( 'captainCook', $signin_verify->id . '==' . $cookie_token . sha1( $signin_verify->id . 'putTheCookieDown' ), time() + 60 * 60 * 24 * 7 );
				endif;
				MessageFlash::setFlash( 'success', 'Bienvenue, ' . $signin_verify->pseudo );
				Helper::redirection( '/account/character-' . $signin_verify->id );
			else :
				return $signin_validator->getFail();
			endif;
		endif;

		return null;
	}
}