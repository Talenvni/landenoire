<?php namespace action\core\admin\edit;

use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;
use action\general\TwigLabs;
use action\general\Validator;

class CreateNewsAdminEdit {
	/**
	 *
	 */
	public static function catchTwig() {
		try {
			echo TwigLabs::loadTwig()->render( '/news/createNewsAdminEdit.twig', [
				'title'      => 'Administration',
				'createNews' => self::createNews()
			] );
		} catch ( \Twig_Error_Loader $e ) {
			die( 'ERROR LOADER TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Runtime $e ) {
			die( 'ERROR RUNTIME TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Syntax $e ) {
			die( 'ERROR SYNTAX TWIG : ' . $e->getMessage() );
		}
	}

	private static function createNews() {
		if ( isset( $_POST['createNews'] ) ) :

			if ( ! empty( $_FILES['img'] ) ) :
				$target_dir    = $_SERVER['DOCUMENT_ROOT'] . '/web/img/news/';
				$target_file   = $target_dir . basename( $_FILES['img']['name'] );
				$imageFileType = strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );
				$uploadOk      = 0;

				// Check if image file is a actual image or fake image
				if ( ! empty( $_FILES['img']['tmp_name'] ) ) :
					$check = getimagesize( $_FILES['img']['tmp_name'] );
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
				if ( $_FILES['img']['size'] > 1000000 ) {
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
					move_uploaded_file( $_FILES["img"]["tmp_name"], $target_file );
					$_POST['uploadOk'] = 1;
				}
			endif;

			$exist = Database::getQuery( '
				SELECT slug
				FROM ln_news
				WHERE slug = ?', [ $_POST['slug'] ] )->fetch( \PDO::FETCH_OBJ );

			$img    = $_FILES['img']['name'];
			$verify = new Validator();
			$verify->isDiff( $_POST['uploadOk'], 0, 'Vérifiez le nom, le poids ou l\'extension' );
			$verify->isDiff( $img, null, 'Aucune image sélectionnée' );
			$verify->isDiff( $_POST['slug'], null, 'Le slug ne peut pas être nul' );
			$verify->isPreg( '/[a-z0-9\-]++/', $_POST['slug'], 'Slug invalide' );
			$verify->isEqual( $exist, null, 'Le slug existe déjà' );

			if ( empty( $verify->getFail() ) ) :
				$_POST['title']   = ucfirst( $_POST['title'] );
				$_POST['content'] = ucfirst( $_POST['content'] );
				$_POST['dateend'] = $_POST['dateend'] ?: null;

				Database::getQuery( '
					INSERT INTO ln_news (idUser, slug, img, title, content, datePub, dateEnd) 
					VALUES (?, ?, ?, ?, ?, NOW(), ?)', [
					$_SESSION['user']->id,
					$_POST['slug'],
					$img,
					$_POST['title'],
					$_POST['content'],
					$_POST['dateend']
				] );

				MessageFlash::setFlash( 'success', 'Actualité créée' );
				Helper::redirection( '/oversight/news' );
			else:
				return $verify->getFail();
			endif;
		endif;

		return null;
	}


}