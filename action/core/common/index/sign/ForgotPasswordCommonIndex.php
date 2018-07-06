<?php namespace action\core\common\index;

use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;
use action\general\Validator;
use Twig_Error_Loader;
use Twig_Error_Syntax;
use Twig_Error_Runtime;
use action\general\TwigLabs;

class ForgotPasswordCommonIndex {
	/**
	 * Render Forgot password view
	 */
	public static function catchTwig(): void {
		try {
			echo TwigLabs::loadTwig()->render( '/sign/forgotPasswordCommonIndex.twig', [
				'title'          => 'Mot de passe oublié',
				'forgotPassword' => self::forgotPassword()
			] );
		} catch ( Twig_Error_Loader $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( Twig_Error_Runtime $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( Twig_Error_Syntax $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		}
	}

	/**
	 * @return mixed|null Reset password via email
	 */
	private static function forgotPassword() {
		if ( isset( $_POST['forgot_confirm'] ) ) :
			$lower_email = strtolower( $_POST['forgot_email'] );

			Database::getInstance();
			$email_verify = Database::getQuery( '
				SELECT id, email, tokenValidation
				FROM ln_users
				WHERE email = ? AND tokenConfirm IS NOT NULL',
				[ $_POST['forgot_email'] ] )->fetch( \PDO::FETCH_OBJ );

			$password_validator = new Validator();
			if ( $password_validator->isEmail( $email_verify, 'Email invalide' ) ):
				$password_validator->isEqual( $lower_email, $email_verify->email, 'Email invalide' );
			endif;

			// Email sent sounds good.
			if ( empty( $password_validator->getFail() ) ) :
				$forgot_token = Helper::randomString( 'alphanumeric', 60 );
				Database::getQuery( '
					UPDATE ln_users 
					SET tokenValidation = ?, tokenExpire = NOW()
					WHERE email = ?',
					[ $forgot_token, $email_verify->email ] );

				$forgot_id = $email_verify->id;

				Helper::createEmail(
					$email_verify->email,
					'Changement de mot de passe',
					'Veuillez cliquer sur ce lien pour changer votre mot de passe.<br>Si vous n\'êtes pas l\'auteur de cette demande, veuillez ne pas tenir compte de cet email.',
					'https://www.lande-noire.online/forgot-password/' . $forgot_id . '&' . $forgot_token,
					'Changer le mot de passe'
				);
				MessageFlash::setFlash( 'success', 'Veuillez suivre les instructions par email' );
				Helper::redirection( '/home' );
			else :
				return $password_validator->getFail();
			endif;
		endif;

		return null;
	}
}