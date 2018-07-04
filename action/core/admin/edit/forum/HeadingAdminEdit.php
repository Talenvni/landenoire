<?php namespace action\core\admin\edit;

use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;
use action\general\TwigLabs;
use action\general\Validator;

class HeadingAdminEdit {
	/**
	 *
	 */
	public static function catchTwig() {
		try {
			echo TwigLabs::loadTwig()->render( '/forum/headingAdminEdit.twig', [
				'title'     => 'Administration',
				'editHeading'  => self::editHeading()
			] );
		} catch ( \Twig_Error_Loader $e ) {
			die( 'ERROR LOADER TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Runtime $e ) {
			die( 'ERROR RUNTIME TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Syntax $e ) {
			die( 'ERROR SYNTAX TWIG : ' . $e->getMessage() );
		}
	}

	private static function editHeading() {
		$user = Database::getQuery( '
		SELECT name
		FROM ln_forum_heading h
		WHERE id = ?', [ $_GET['forum_id'] ] )->fetch( \PDO::FETCH_OBJ );

		if ( isset( $_POST['editHeading'] ) ):
			$_POST['editName'] = Helper::secureString( ucfirst( $_POST['editName'] ) );

			$edit = new Validator();
			$edit->isPreg( '/(^[A-Z]{1}[\D\s]{3,20}[a-z\é]$)/', $_POST['editName'], 'Pseudo invalide' );

			if ( empty( $edit->getFail() ) ):
				Database::getQuery( '
				UPDATE ln_forum_heading
				SET name = ?
				WHERE id = ?', [
					$_POST['editName'],
					$_GET['forum_id']
				] );
				MessageFlash::setFlash( 'success', 'En-tête mise à jour' );
				Helper::redirection( '/oversight/forum' );
			else:
				return $edit->getFail();
			endif;
		endif;

		return $user;
	}
}