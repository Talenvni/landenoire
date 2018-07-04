<?php namespace action\core\common\edit;

use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;
use action\general\Validator;
use Twig_Error_Loader;
use Twig_Error_Syntax;
use Twig_Error_Runtime;
use action\general\TwigLabs;

class NewsCommonEdit {
	public static function catchTwig(): void {
		try {
			echo TwigLabs::loadTwig()->render( '/news/newsCommonEdit.twig', [
				'title'    => 'Édition',
				'editNews' => self::editTopic(),
				'getNews'  => self::getNews()
			] );
		} catch ( Twig_Error_Loader $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( Twig_Error_Runtime $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( Twig_Error_Syntax $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		}
	}

	private static function getNews() {
		if ( isset( $_GET['news_edit'] ) ) :
			$news = Database::getQuery( '
			SELECT n.id, img, slug, content, dateEnd, title
			FROM ln_news n
			WHERE n.id = ?', [ $_GET['news_edit'] ] )->fetch( \PDO::FETCH_OBJ );

			if ( ! is_null( $news->id ) ) :
				return $news;
			else :
				MessageFlash::setFlash( 'warning', 'Actualité inexistante' );
				Helper::redirection( '/news', 307 );
			endif;
		endif;

		return null;
	}

	public static function editTopic() {
		if ( isset( $_POST['edit_news_submit'] ) ) :
			if ( ! empty( $_FILES['edit_img']['name'] ) ) :
				$target_dir    = $_SERVER['DOCUMENT_ROOT'] . '/web/img/news/';
				$target_file   = $target_dir . basename( $_FILES['edit_img']['name'] );
				$imageFileType = strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );
				$uploadOk      = 0;

				// Check if image file is a actual image or fake image
				if ( ! empty( $_FILES['edit_img']['name'] ) ):
					$check = getimagesize( $_FILES['edit_img']['tmp_name'] );
					if ( $check !== false ) {
						$uploadOk = 1;
					} else {
						$uploadOk = 0;
					}
				endif;

				// Check file size
				if ( $_FILES['edit_img']['size'] > 1000000 ) {
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
					move_uploaded_file( $_FILES["edit_img"]["tmp_name"], $target_file );
					$_POST['uploadOk'] = 1;
				}
			else:
				$_POST['uploadOk'] = 1;
			endif;

			$news = Database::getQuery( '
				SELECT id, idUser, slug, dateEnd
				FROM ln_news
				WHERE id = ? AND slug = ?', [
				$_GET['news_edit'],
				$_POST['edit_slug']
			] )->fetch( \PDO::FETCH_OBJ );

			if ( isset( $news ) ) :
				$title                 = ucfirst( Helper::secureString( $_POST['edit_title'] ) );
				$_POST['edit_content'] = ucfirst( $_POST['edit_content'] );

				$exist = Database::getQuery( '
				SELECT slug
				FROM ln_news
				WHERE slug = ? AND NOT id = ?', [
					$_POST['edit_slug'],
					$_GET['news_edit']
				] )->fetch( \PDO::FETCH_OBJ );

				$date = $_POST['edit_date'] ?: null;

				$validator = new Validator();
				$validator->isDiff( null, $title, 'Le sujet est vide' );
				$validator->isDiff( null, $_POST['edit_content'], 'Le contenu est vide' );
				$validator->isDiff( null, $_POST['edit_slug'], 'Le slug est vide' );
				$validator->isEqual( null, $exist, 'Le slug existe déjà' );
				$validator->isDiff( 0, $_POST['uploadOk'], 'Image invalide' );

				if ( empty( $validator->getFail() ) ) :
					$create = Database::getQuery( '
					SELECT img
					FROM ln_news
					WHERE id = ?', [ $_GET['news_edit'] ] )->fetch( \PDO::FETCH_OBJ );

					if ( ! is_null( $create->img ) && $create->img == $_FILES['edit_img']['name'] || empty( $_FILES['edit_img']['name'] ) ) :
						$img = $create->img;
					endif;

					// Delete old Avatar
					if ( ! is_null( $create->img ) && $create->img != $_FILES['edit_img']['name'] && ! empty( $_FILES['edit_img']['name'] ) ) :
						if ( file_exists( $_SERVER['DOCUMENT_ROOT'] . '/web/img/news/' . $create->img ) ) {
							unlink( $_SERVER['DOCUMENT_ROOT'] . '/web/img/news/' . $create->img );
						}
						$img = $_FILES['edit_img']['name'];
					endif;

					Database::getQuery( '
					UPDATE ln_news
					SET title = ?, content = ?, slug = ?, img = ?, dateEnd = ?
					WHERE id = ?', [
						$title,
						$_POST['edit_content'],
						$_POST['edit_slug'],
						$img,
						$date,
						$_GET['news_edit']
					] );

					MessageFlash::setFlash( 'success', 'Actualité éditée' );
					Helper::redirection( '/news/' . $news->slug );

				else :
					return $validator->getFail();
				endif;
			else :
				MessageFlash::setFlash( 'danger', 'URL incorrecte' );
				Helper::redirection( '/news', 307 );
			endif;
		endif;

		return null;
	}
}