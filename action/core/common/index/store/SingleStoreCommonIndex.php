<?php namespace action\core\common\index;

use action\general\Helper;
use action\general\MessageFlash;
use action\general\TwigLabs;
use PDO;
use action\general\Database;
use Twig_Error_Loader;
use Twig_Error_Syntax;
use Twig_Error_Runtime;

class SingleStoreCommonIndex {
	public static function catchTwig(): void {
		try {
			echo TwigLabs::loadTwig()->render( '/store/singleStoreCommonIndex.twig', [
				'title'   => 'Boutique',
				'article' => self::articleStore(),
				'coin'    => self::coinStore(),
				'buy'     => self::buyStore(),
				'offert'  => self::offertStore()
			] );
		} catch ( Twig_Error_Loader $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( Twig_Error_Runtime $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( Twig_Error_Syntax $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		}
	}

	private static function articleStore() {
		$article = Database::getQuery( '
		SELECT a.id, idTab, slug, a.name, description, coin, l.name AS qualityName, color, img
		FROM ln_store_article a 
		LEFT JOIN ln_store_tabs t on a.idTab = t.id
		LEFT JOIN ln_store_quality l on a.idQuality = l.id
		WHERE a.id = ?
		ORDER BY l.id', [ $_GET['store_id'] ] )->fetch( PDO::FETCH_OBJ );

		if ( $article ) :
			return $article;
		endif;

		return null;
	}

	private static function coinStore() {
		$article = Database::getQuery( '
		SELECT coin
		FROM ln_store_article a 
		WHERE a.id = ?
		ORDER BY id', [ $_GET['store_id'] ] )->fetch( PDO::FETCH_OBJ );

		if ( $article ) :
			$coin = Helper::getcoin( $article->coin );

			return $coin;
		endif;

		return null;
	}

	private static function buyStore() {
		if ( isset( $_POST['buy_store'] ) ) :
			$buy = Database::getQuery( '
			SELECT coin, name
			FROM ln_store_article a
			WHERE id = ?', [ $_GET['store_id'] ] )->fetch( PDO::FETCH_OBJ );

			if ( $buy ) :
				$user = Database::getQuery( '
				SELECT coin
				FROM ln_users u
				LEFT JOIN ln_users_info i on u.id = i.idUser
				WHERE u.id = ?', [ $_SESSION['user']->id ] )->fetch( PDO::FETCH_OBJ );

				if ( $user->coin > $buy->coin ):
					$price = ( $user->coin - $buy->coin );

					// Coin
					Database::getQuery( '
					UPDATE ln_users_info
					SET coin = ?
					WHERE idUser = ?', [ $price, $_SESSION['user']->id ] );

					// Article
					Database::getQuery( '
					INSERT INTO ln_users_inventory (idUser, idStore)
					VALUES (?, ?)', [ $_SESSION['user']->id, $_GET['store_id'] ] );

					MessageFlash::setFlash( 'success', 'Article acheté : ' . $buy->name );
					Helper::redirection( '/store' );
				endif;

				if ( $user->coin < $buy->coin ):
					MessageFlash::setFlash( 'warning', 'Pas assez d\'argent.' );
					Helper::redirection( '/store' );
				endif;


			endif;
			if ( ! $buy ) :
				MessageFlash::setFlash( 'danger', 'L\'article n\'existe pas.' );
				Helper::redirection( '/store' );
			endif;
		endif;

		return null;
	}

	private static function offertStore() {
		$user = Database::getQuery( '
		SELECT pseudo, id
		FROM ln_users u ' )->fetchAll( PDO::FETCH_OBJ );

		if ( isset( $_POST['offert_submit'] ) ) :
			if ( isset( $_POST['offert'] ) ) :
				$offert = Database::getQuery( '
				SELECT id, pseudo
				FROM ln_users
				WHERE id = ?', [ $_POST['offert'] ] )->fetch( PDO::FETCH_OBJ );

				$item = Database::getQuery( '
				SELECT id, name
				FROM ln_store_article
				WHERE id = ?', [ $_GET['store_id'] ] )->fetch( PDO::FETCH_OBJ );
				if ( ! is_null( $offert ) && ! is_null( $item ) ):
					Database::getQuery( '
					INSERT INTO ln_users_inventory (idUser, idStore)
					VALUES (?, ?)', [ $offert->id, $item->id ] );

					MessageFlash::setFlash( 'success', $offert->pseudo . ' a reçu : ' . $item->name );
					Helper::redirection( '/store/article-' . $offert->id );
				endif;
			endif;
		endif;

		return $user;
	}
}