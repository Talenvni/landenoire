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

class NewArticleCommonEdit {
	public static function catchTwig(): void {
		try {
			echo TwigLabs::loadTwig()->render( '/store/newArticleCommonEdit.twig', [
				'title'      => 'Boutique',
				'qualityAll' => self::qualityAll(),
				'tabAll'     => self::tabAll(),
				'new'        => self::newArticle()
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

	/**
	 * @return mixed|null
	 */
	private static function newArticle() {
		if ( isset( $_POST['new_submit'] ) ) :
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

			$quality = Database::getQuery( '
				SELECT id
				FROM ln_store_quality
				WHERE id = ?
				
				UNION 
				
				SELECT id
				FROM ln_store_tabs
				WHERE id = ?', [
				$_POST['article_quality'],
				$_POST['article_tab']
			] )->fetch( \PDO::FETCH_OBJ );

			if ( $quality ) :
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
					Database::getQuery( '
					INSERT INTO ln_store_article (idTab, idQuality, name, description, img, coin) 
					VALUES (?, ?, ?, ?, ?, ?)', [
						$_POST['article_tab'],
						$_POST['article_quality'],
						$title,
						$_POST['article_description'],
						$_FILES['article_img']['name'],
						$_POST['article_coin']
					] );

					$id = Database::lastInsertId();

					MessageFlash::setFlash( 'success', 'Article crée' );
					Helper::redirection( '/store/article-' . $id );

				else :
					return $validator->getFail();
				endif;
			else :
				MessageFlash::setFlash( 'danger', 'Données incorrectes' );
				Helper::redirection( '/store', 307 );
			endif;
		endif;

		return null;
	}
}