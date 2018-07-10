<?php namespace action\core\common\edit;

use action\general\Helper;
use action\general\MessageFlash;
use action\general\TwigLabs;
use action\general\Validator;
use PDO;
use action\general\Database;
use Twig_Error_Loader;
use Twig_Error_Syntax;
use Twig_Error_Runtime;

class StoreCommonEdit {
	public static function catchTwig(): void {
		try {
			echo TwigLabs::loadTwig()->render( '/store/storeCommonEdit.twig', [
				'title'      => 'Boutique',
				'article'    => self::articleStore(),
				'qualityAll' => self::qualityAll(),
				'tabAll'     => self::tabAll(),
				'edit'       => self::editArticle()
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
	 * @return mixed|null
	 */
	private static function articleStore() {
		$article = Database::getQuery( '
		SELECT a.id, idTab, slug, a.name, description, coin, q.name AS qualityName, idQuality, color, img
		FROM ln_store_article a 
		LEFT JOIN ln_store_tabs t on a.idTab = t.id
		LEFT JOIN ln_store_quality q on a.idQuality = q.id
		WHERE a.id = ?', [ $_GET['store_edit'] ] )->fetch( PDO::FETCH_OBJ );

		if ( $article ) :
			return $article;
		endif;

		return null;
	}

	/**
	 * @return array
	 */
	private static function qualityAll() {
		$quality = Database::getQuery( '
		SELECT name, color, id
		FROM ln_store_quality' )->fetchAll( PDO::FETCH_OBJ );

		return $quality;
	}

	/**
	 * @return array
	 */
	private static function tabAll() {
		$tab = Database::getQuery( '
		SELECT id, tab
		FROM ln_store_tabs' )->fetchAll( PDO::FETCH_OBJ );

		return $tab;
	}

	private static function editArticle() {
		if ( isset( $_POST['edit_submit'] ) ) :
			if ( ! empty( $_FILES['article_img']['name'] ) ) :
				$target_dir    = $_SERVER['DOCUMENT_ROOT'] . '/web/img/store/';
				$target_file   = $target_dir . basename( $_FILES['article_img']['name'] );
				$imageFileType = strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );
				$uploadOk      = 0;

				// Check if image file is a actual image or fake image
				if ( ! empty( $_FILES['article_img']['name'] ) ):
					$check = getimagesize( $_FILES['article_img']['tmp_name'] );
					if ( $check !== false ) {
						$uploadOk = 1;
					} else {
						$uploadOk = 0;
					}
				endif;

				// Check file size
				if ( $_FILES['article_img']['size'] > 1000000 ) {
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
					move_uploaded_file( $_FILES["article_img"]["tmp_name"], $target_file );
					$_POST['uploadOk'] = 1;
				}
			else:
				$_POST['uploadOk'] = 1;
			endif;

			$news = Database::getQuery( '
				SELECT id
				FROM ln_store_article
				WHERE id = ?', [
				$_GET['store_edit']
			] )->fetch( \PDO::FETCH_OBJ );

			if ( isset( $news ) ) :
				$title                        = ucfirst( Helper::secureString( $_POST['article_name'] ) );
				$_POST['article_description'] = ucfirst( $_POST['article_description'] );

				$numeric = is_numeric( $_POST['article_coin'] );

				$validator = new Validator();
				$validator->isDiff( null, $title, 'Le nom est vide' );
				$validator->isDiff( null, $_POST['article_description'], 'Le contenu est vide' );
				$validator->isDiff( null, $_POST['article_coin'], 'Le prix est vide' );
				$validator->isDiff( null, $_POST['article_quality'], 'La qualité est vide' );
				$validator->isDiff( null, $_POST['article_tab'], 'L\'onglet est vide' );
				$validator->isDiff( false, $numeric, 'Le prix doit être numérique' );
				$validator->isPlusOrEqual( 0, $_POST['article_coin'], 'Le prix doit être plus grand que zéro' );
				$validator->isDiff( 0, $_POST['uploadOk'], 'Image invalide' );

				if ( empty( $validator->getFail() ) ) :
					$create = Database::getQuery( '
					SELECT img
					FROM ln_store_article
					WHERE id = ?', [ $_GET['store_edit'] ] )->fetch( \PDO::FETCH_OBJ );

					if ( ! is_null( $create->img ) && $create->img == $_FILES['article_img']['name'] || empty( $_FILES['article_img']['name'] ) ) :
						$img = $create->img;
					endif;

					// Delete old Avatar
					if ( ! is_null( $create->img ) && $create->img != $_FILES['article_img']['name'] && ! empty( $_FILES['article_img']['name'] ) ) :
						if ( file_exists( $_SERVER['DOCUMENT_ROOT'] . '/web/img/store/' . $create->img ) ) {
							unlink( $_SERVER['DOCUMENT_ROOT'] . '/web/img/store/' . $create->img );
						}
						$img = $_FILES['article_img']['name'];
					endif;

					Database::getQuery( '
					UPDATE ln_store_article
					SET name = ?, description = ?, img = ?, coin = ?, idQuality = ?, idTab = ?
					WHERE id = ?', [
						$title,
						$_POST['article_description'],
						$img,
						$_POST['article_coin'],
						$_POST['article_quality'],
						$_POST['article_tab'],
						$_GET['store_edit']
					] );

					MessageFlash::setFlash( 'success', 'Article édité' );
					Helper::redirection( '/store/article-' . $news->id );

				else :
					return $validator->getFail();
				endif;
			else :
				MessageFlash::setFlash( 'danger', 'URL incorrecte' );
				Helper::redirection( '/store', 307 );
			endif;
		endif;

		return null;
	}
}