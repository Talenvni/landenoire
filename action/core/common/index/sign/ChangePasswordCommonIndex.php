<?php namespace action\core\common\index;

use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;
use action\general\Validator;
use Twig_Error_Loader;
use Twig_Error_Syntax;
use Twig_Error_Runtime;
use action\general\TwigLabs;

class ChangePasswordCommonIndex {
	/**
	 * Render Change password view
	 */
	public static function catchTwig(): void {
		try {
			echo TwigLabs::loadTwig()->render( '/sign/changePasswordCommonIndex.twig', [
				'title'          => 'Changer mot de passe',
				'changePassword' => self::changePassword()
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
	private static function changePassword() {
		if ( isset( $_POST['change_submit'] ) ) :
			$password_validator = new Validator();
			$password_validator->isDiff( $_POST['change_password'], null, 'Mot de passe vide' );

			if ( empty( $password_validator->getFail() ) ) :
				$password_validator = new Validator( $_POST );
				$password_validator->isEqual( 'change_password', 'change_password_confirm', 'Mots de passe invalide' );
				$password_validator->isPreg( '/^[a-zA-Z0-9]{8,}$/', 'change_password', 'Mot de passe invalide' );

				if ( empty( $password_validator->getFail() ) ) :
					Database::getInstance();
					$change_verify = Database::getQuery( '
						SELECT tokenValidation
						FROM ln_users
						WHERE id = ? AND tokenValidation = ? AND NOW() < TIMESTAMPADD(MINUTE, 1, tokenExpire)',
						[ $_GET['forgot_id'], $_GET['forgot_token'] ] )->fetch( \PDO::FETCH_OBJ );

					$password_validator = new Validator();
					if ( $password_validator->isDiff( $change_verify, null, 'Demande expirée' ) ) :
						$password_validator->isEqual( $_GET['forgot_token'], $change_verify->tokenValidation, 'Impossible de modifier le mot de passe' );
					endif;

					if ( empty( $password_validator->getFail() ) ) :
						$passwordHash = password_hash( $_POST['change_password'], PASSWORD_BCRYPT );

						Database::getQuery( '
							UPDATE ln_users
							SET password = ?, tokenValidation = NULL , tokenExpire = NULL 
							WHERE id = ?',
							[ $passwordHash, $_GET['forgot_id'] ] );

						MessageFlash::setFlash( 'success', 'Mot de passe mis à jour' );
						Helper::redirection( '/sign-in' );
					else :
						return $password_validator->getFail();
					endif;
				else :
					return $password_validator->getFail();
				endif;
			else :
				return $password_validator->getFail();
			endif;
		endif;

		return null;
	}
}