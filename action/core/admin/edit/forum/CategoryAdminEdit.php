<?php namespace action\core\admin\edit;

use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;
use action\general\TwigLabs;
use action\general\Validator;

class CategoryAdminEdit {
	/**
	 *
	 */
	public static function catchTwig() {
		try {
			echo TwigLabs::loadTwig()->render( '/forum/categoryAdminEdit.twig', [
				'title'        => 'Administration',
				'editCategory' => self::editCategory(),
				'editGroup'    => self::editGroup()
			] );
		} catch ( \Twig_Error_Loader $e ) {
			die( 'ERROR LOADER TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Runtime $e ) {
			die( 'ERROR RUNTIME TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Syntax $e ) {
			die( 'ERROR SYNTAX TWIG : ' . $e->getMessage() );
		}
	}

	private static function editCategory() {
		$category = Database::getQuery( '
		SELECT id, c.name, content, slug, img, idHeading
		FROM ln_forum_category c
		WHERE id = ?', [ $_GET['forum_id'] ] )->fetch( \PDO::FETCH_OBJ );

		if ( isset( $_POST['editCategory'] ) ) :
			if ( ! empty( $_FILES['editImg']['name'] ) ) :
				$target_dir    = $_SERVER['DOCUMENT_ROOT'] . '/web/img/category/';
				$target_file   = $target_dir . basename( $_FILES['editImg']['name'] );
				$imageFileType = strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );
				$uploadOk      = 0;

				// Check if image file is a actual image or fake image
				if ( ! empty( $_FILES['editImg']['name'] ) ):
					$check = getimagesize( $_FILES['editImg']['tmp_name'] );
					if ( $check !== false ) {
						$uploadOk = 1;
					} else {
						$uploadOk = 0;
					}
				endif;

				// Check file size
				if ( $_FILES['editImg']['size'] > 1000000 ) {
					$uploadOk = 0;
				}

				// Allow certain file formats
				if ( $imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg'
				     && $imageFileType != 'gif' ) {
					$uploadOk = 0;
				}

				// Check if $uploadOk is set to 0 by an error
				if ( $uploadOk == 0 ) {
					$_POST['uploadOk'] = 0;
					// if everything is ok, try to upload file
				} else {
					move_uploaded_file( $_FILES["editImg"]["tmp_name"], $target_file );
					$_POST['uploadOk'] = 1;
				}
			else:
				$_POST['uploadOk'] = 1;
			endif;

			$exist = Database::getQuery( '
				SELECT slug
				FROM ln_forum_category
				WHERE slug = ? AND NOT id = ?', [ $_POST['editSlug'], $_GET['forum_id'] ] )->fetch( \PDO::FETCH_OBJ );

			$edit = new Validator();
			$edit->isDiff( $_POST['uploadOk'], 0, 'Vérifiez le nom, le poids ou l\'extension' );
			$edit->isEqual( $_POST['editId'], $_GET['forum_id'], 'Actualité invalide' );
			$edit->isPreg( '/[a-z0-9\-]++/', $_POST['editSlug'], 'Slug invalide' );
			$edit->isEqual( $exist, null, 'Le slug existe déjà' );
			$edit->isDiff( $_POST['editSlug'], null, 'Le slug ne peut pas être nul' );

			if ( empty( $edit->getFail() ) ):
				$create = Database::getQuery( '
				SELECT img
				FROM ln_forum_category
				WHERE id = ?', [ $_GET['forum_id'] ] )->fetch( \PDO::FETCH_OBJ );

				if ( ! is_null( $create->img ) && $create->img == $_FILES['editImg']['name'] || empty( $_FILES['editImg']['name'] ) ) :
					$img = $create->img;
				endif;

				// Delete old Avatar
				if ( ! is_null( $create->img ) && $create->img != $_FILES['editImg']['name'] && ! empty( $_FILES['editImg']['name'] ) ) :
					if ( file_exists( $_SERVER['DOCUMENT_ROOT'] . '/web/img/category/' . $create->img ) ) {
						unlink( $_SERVER['DOCUMENT_ROOT'] . '/web/img/category/' . $create->img );
					}
					$img = $_FILES['editImg']['name'];
				endif;

				$_POST['editName']    = ucfirst( $_POST['editName'] );
				$_POST['editContent'] = ucfirst( $_POST['editContent'] );

				Database::getQuery( '
				UPDATE ln_forum_category
				SET name = ?, slug = ?, content = ?, img = ?, idHeading = ?
				WHERE id = ?', [
					$_POST['editName'],
					$_POST['editSlug'],
					$_POST['editContent'],
					$img,
					$_POST['editGroup'],
					$_POST['editId']
				] );
				MessageFlash::setFlash( 'success', 'Catégorie mise à jour' );
				Helper::redirection( '/oversight/forum' );
			else:
				return $edit->getFail();
			endif;
		endif;

		return $category;
	}

	private static function editGroup() {
		$group = Database::getQuery( '
		SELECT id, name
		FROM ln_forum_heading' )->fetchAll( \PDO::FETCH_OBJ );

		return $group;
	}
}