<?php namespace action\core\admin\edit;

use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;
use action\general\TwigLabs;
use action\general\Validator;

class HomeAdminEdit {
	/**
	 *
	 */
	public static function catchTwig() {
		try {
			echo TwigLabs::loadTwig()->render( '/home/homeAdminEdit.twig', [
				'title'     => 'Administration',
				'editUser'  => self::editUser(),
				'editGroup' => self::editGroup()
			] );
		} catch ( \Twig_Error_Loader $e ) {
			die( 'ERROR LOADER TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Runtime $e ) {
			die( 'ERROR RUNTIME TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Syntax $e ) {
			die( 'ERROR SYNTAX TWIG : ' . $e->getMessage() );
		}
	}

	private static function editUser() {
		$user = Database::getQuery( '
		SELECT pseudo, email, idGroup, isBanned
		FROM ln_users u
		WHERE id = ?', [ $_GET['userId'] ] )->fetch( \PDO::FETCH_OBJ );

		if ( isset( $_POST['editSubmit'] ) ):
			$_POST['editPseudo'] = Helper::secureString( ucfirst( $_POST['editPseudo'] ) );
			$_POST['editEmail']  = Helper::secureString( strtolower( $_POST['editEmail'] ) );

			$edit = new Validator();
			$edit->isPreg( '/(^[A-Z]{1}[\D\s]{3,20}[a-z\é]$)/', $_POST['editPseudo'], 'Pseudo invalide' );
			$edit->isEmail( $_POST['editEmail'], 'Email invalide' );
			$edit->isDiff( $user->idGroup, 3, 'Administration non modifiable' );

			if ( isset( $_POST['editBan'] ) ) :
				$ban = 1;
			else:
				$ban = 0;
			endif;

			if ( empty( $edit->getFail() ) ):
				Database::getQuery( '
				UPDATE ln_users
				SET pseudo = ?, email = ?, idGroup = ?, isBanned = ?
				WHERE id = ?', [
					$_POST['editPseudo'],
					$_POST['editEmail'],
					$_POST['editGroup'],
					$ban,
					$_GET['userId']
				] );
				MessageFlash::setFlash( 'success', 'Utilisateur mis à jour' );
				Helper::redirection( '/oversight' );
			else:
				return $edit->getFail();
			endif;
		endif;

		return $user;
	}

	private static function editGroup() {
		$group = Database::getQuery( '
		SELECT g.id, groupName
		FROM ln_users_group g' )->fetchAll( \PDO::FETCH_OBJ );

		return $group;
	}
}