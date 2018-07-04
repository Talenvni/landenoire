<?php namespace action\core\admin\edit;

use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;
use action\general\TwigLabs;
use action\general\Validator;

class CreateForumAdminEdit {
	/**
	 *
	 */
	public static function catchTwig() {
		try {
			echo TwigLabs::loadTwig()->render( '/forum/createForumAdminEdit.twig', [
				'title'       => 'Administration',
				'createForum' => self::createForum(),
				'chooseHeading' =>  self::chooseHeading(),
				'chooseCategory' =>  self::chooseCategory()
			] );
		} catch ( \Twig_Error_Loader $e ) {
			die( 'ERROR LOADER TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Runtime $e ) {
			die( 'ERROR RUNTIME TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Syntax $e ) {
			die( 'ERROR SYNTAX TWIG : ' . $e->getMessage() );
		}
	}

	private static function createForum() {
		if ( isset( $_POST['create_heading'] ) ) :
			$exist = Database::getQuery( '
				SELECT id, name
				FROM ln_forum_heading
				WHERE name = ?', [ $_POST['create_name'] ] )->fetch( \PDO::FETCH_OBJ );

			$verify = new Validator();
			$verify->isEqual( $exist, null, 'Le nom existe déjà' );

			if ( empty( $verify->getFail() ) ) :
				$_POST['create_name'] = ucfirst( Helper::secureString( $_POST['create_name'] ) );

				Database::getQuery( '
					INSERT INTO ln_forum_heading (name)
					VALUES (?)', [
					$_POST['create_name']
				] );

				MessageFlash::setFlash( 'success', 'En-tête crée' );
				Helper::redirection( '/oversight/forum' );
			else:
				return $verify->getFail();
			endif;
		endif;


		if ( isset( $_POST['create_category'] ) ) :

			if ( ! empty( $_FILES['create_img'] ) ) :
				$target_dir    = $_SERVER['DOCUMENT_ROOT'] . '/web/img/category/';
				$target_file   = $target_dir . basename( $_FILES['create_img']['name'] );
				$imageFileType = strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );
				$uploadOk      = 0;

				// Check if image file is a actual image or fake image
				if ( ! empty( $_FILES['create_img']['tmp_name'] ) ) :
					$check = getimagesize( $_FILES['create_img']['tmp_name'] );
					if ( $check !== false ) {
						$uploadOk = 1;
					} else {
						$uploadOk = 0;
					}
				endif;

				// Check if file already exists
				if ( file_exists( $target_file ) ) {
					$uploadOk = 0;
				}

				// Check file size
				if ( $_FILES['create_img']['size'] > 1000000 ) {
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
					move_uploaded_file( $_FILES["create_img"]["tmp_name"], $target_file );
					$_POST['uploadOk'] = 1;
				}
			endif;

			$exist = Database::getQuery( '
				SELECT slug
				FROM ln_forum_category
				WHERE slug = ?', [ $_POST['create_slug'] ] )->fetch( \PDO::FETCH_OBJ );

			$img    = $_FILES['create_img']['name'];
			$verify = new Validator();
			$verify->isDiff( $_POST['uploadOk'], 0, 'Vérifiez le nom, le poids ou l\'extension' );
			$verify->isDiff( $img, null, 'Aucune image sélectionnée' );
			$verify->isDiff( $_POST['create_slug'], null, 'Le slug ne peut pas être nul' );
			$verify->isPreg( '/[a-z0-9\-]++/', $_POST['create_slug'], 'Slug invalide' );
			$verify->isEqual( $exist, null, 'Le slug existe déjà' );

			if ( empty( $verify->getFail() ) ) :
				$_POST['create_name']   = ucfirst( Helper::secureString( $_POST['create_name'] ) );
				$_POST['create_content'] = ucfirst( $_POST['create_content'] );

				Database::getQuery( '
					INSERT INTO ln_forum_category (idHeading, slug, name, content, img) 
					VALUES (?, ?, ?, ?, ?)', [
					$_POST['choose_group'],
					$_POST['create_slug'],
					$_POST['create_name'],
					$_POST['create_content'],
					$img
				] );

				MessageFlash::setFlash( 'success', 'Catégorie créée' );
				Helper::redirection( '/oversight/forum' );
			else:
				return $verify->getFail();
			endif;
		endif;


		if ( isset( $_POST['create_subcategory'] ) ) :

			if ( ! empty( $_FILES['create_img'] ) ) :
				$target_dir    = $_SERVER['DOCUMENT_ROOT'] . '/web/img/subcategory/';
				$target_file   = $target_dir . basename( $_FILES['create_img']['name'] );
				$imageFileType = strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );
				$uploadOk      = 0;

				// Check if image file is a actual image or fake image
				if ( ! empty( $_FILES['create_img']['tmp_name'] ) ) :
					$check = getimagesize( $_FILES['create_img']['tmp_name'] );
					if ( $check !== false ) {
						$uploadOk = 1;
					} else {
						$uploadOk = 0;
					}
				endif;

				// Check if file already exists
				if ( file_exists( $target_file ) ) {
					$uploadOk = 0;
				}

				// Check file size
				if ( $_FILES['create_img']['size'] > 1000000 ) {
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
					move_uploaded_file( $_FILES["create_img"]["tmp_name"], $target_file );
					$_POST['uploadOk'] = 1;
				}
			endif;

			$exist = Database::getQuery( '
				SELECT slug
				FROM ln_forum_subcategory
				WHERE slug = ?', [ $_POST['create_slug'] ] )->fetch( \PDO::FETCH_OBJ );

			$img    = $_FILES['create_img']['name'];
			$verify = new Validator();
			$verify->isDiff( $_POST['uploadOk'], 0, 'Vérifiez le nom, le poids ou l\'extension' );
			$verify->isDiff( $img, null, 'Aucune image sélectionnée' );
			$verify->isDiff( $_POST['create_slug'], null, 'Le slug ne peut pas être nul' );
			$verify->isPreg( '/[a-z0-9\-]++/', $_POST['create_slug'], 'Slug invalide' );
			$verify->isEqual( $exist, null, 'Le slug existe déjà' );

			if ( empty( $verify->getFail() ) ) :
				$_POST['create_name']   = ucfirst( Helper::secureString( $_POST['create_name'] ) );
				$_POST['create_content'] = ucfirst( $_POST['create_content'] );

				Database::getQuery( '
					INSERT INTO ln_forum_subcategory (idCategory, slug, name, content, img) 
					VALUES (?, ?, ?, ?, ?)', [
					$_POST['choose_group'],
					$_POST['create_slug'],
					$_POST['create_name'],
					$_POST['create_content'],
					$img
				] );

				MessageFlash::setFlash( 'success', 'Sous-catégorie créée' );
				Helper::redirection( '/oversight/forum' );
			else:
				return $verify->getFail();
			endif;
		endif;

		return null;
	}

	/**
	 * @return array
	 */
	private static function chooseHeading() {
		$group = Database::getQuery( '
		SELECT id, name
		FROM ln_forum_heading' )->fetchAll( \PDO::FETCH_OBJ );

		return $group;
	}

	/**
	 * @return array
	 */
	private static function chooseCategory() {
		$group = Database::getQuery( '
		SELECT id, name
		FROM ln_forum_category' )->fetchAll( \PDO::FETCH_OBJ );

		return $group;
	}
}