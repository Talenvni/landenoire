<?php namespace action\core\admin\edit;

use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;
use action\general\TwigLabs;
use action\general\Validator;

class NewsAdminEdit {
	/**
	 *
	 */
	public static function catchTwig() {
		try {
			echo TwigLabs::loadTwig()->render( '/news/newsAdminEdit.twig', [
				'title'    => 'Administration',
				'editNews' => self::editNews()
			] );
		} catch ( \Twig_Error_Loader $e ) {
			die( 'ERROR LOADER TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Runtime $e ) {
			die( 'ERROR RUNTIME TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Syntax $e ) {
			die( 'ERROR SYNTAX TWIG : ' . $e->getMessage() );
		}
	}

	private static function editNews() {
		$news = Database::getQuery( '
		SELECT id, title, slug, dateEnd, img, content
		FROM ln_news n
		WHERE n.id = ?', [ $_GET['news_id'] ] )->fetch( \PDO::FETCH_OBJ );

		if ( isset( $_POST['editSubmit'] ) ) :
			if ( ! empty( $_FILES['editImg']['name'] ) ) :
				$target_dir    = $_SERVER['DOCUMENT_ROOT'] . '/web/img/news/';
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

			$_POST['editDate'] = $_POST['editDate'] ?: null;

			$exist = Database::getQuery( '
				SELECT slug
				FROM ln_news
				WHERE slug = ? AND NOT id = ?', [ $_POST['editSlug'], $_GET['news_id'] ] )->fetch( \PDO::FETCH_OBJ );

			$edit = new Validator();
			$edit->isDiff( $_POST['uploadOk'], 0, 'Vérifiez le nom, le poids ou l\'extension' );
			$edit->isEqual( $_POST['editId'], $_GET['news_id'], 'Actualité invalide' );
			$edit->isPreg( '/[a-z0-9\-]++/', $_POST['editSlug'], 'Slug invalide' );
			$edit->isEqual( $exist, null, 'Le slug existe déjà' );
			$edit->isDiff( $_POST['editSlug'], null, 'Le slug ne peut pas être nul' );

			if ( empty( $edit->getFail() ) ):
				$create = Database::getQuery( '
				SELECT img
				FROM ln_news
				WHERE id = ?', [ $_GET['news_id'] ] )->fetch( \PDO::FETCH_OBJ );

				if ( ! is_null( $create->img ) && $create->img == $_FILES['editImg']['name'] || $_FILES['editImg']['name'] == null ) :
					$img = $create->img;
				endif;

				// Delete old Avatar
				if ( ! is_null( $create->img ) && $create->img != $_FILES['editImg']['name'] && ! empty( $_FILES['editImg']['name'] ) ) :
					if ( file_exists( $_SERVER['DOCUMENT_ROOT'] . '/web/img/news/' . $create->img ) ) {
						unlink( $_SERVER['DOCUMENT_ROOT'] . '/web/img/news/' . $create->img );
					}
					$img = $_FILES['editImg']['name'];
				endif;

				$_POST['editTitle']   = ucfirst( $_POST['editTitle'] );
				$_POST['editContent'] = ucfirst( $_POST['editContent'] );

				Database::getQuery( '
				UPDATE ln_news
				SET title = ?, slug = ?, content = ?, img = ?, dateEnd = ?
				WHERE id = ?', [
					$_POST['editTitle'],
					$_POST['editSlug'],
					$_POST['editContent'],
					$img,
					$_POST['editDate'],
					$_POST['editId']
				] );
				MessageFlash::setFlash( 'success', 'Actualité mise à jour' );
				Helper::redirection( '/oversight/news' );
			else:
				return $edit->getFail();
			endif;
		endif;

		return $news;
	}


}