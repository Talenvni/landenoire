<?php namespace action\core\common\index;

use action\general\Helper;
use action\general\MessageFlash;
use action\general\TwigLabs;
use PDO;
use action\general\Database;
use Twig_Error_Loader;
use Twig_Error_Syntax;
use Twig_Error_Runtime;

class StoreCommonIndex {
	public static function catchTwig(): void {
		try {
			echo TwigLabs::loadTwig()->render( '/store/storeCommonIndex.twig', [
				'title'        => 'Boutique',
				'tabStore'     => self::tabStore(),
				'articleStore' => self::articleStore()
			] );
		} catch ( Twig_Error_Loader $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( Twig_Error_Runtime $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( Twig_Error_Syntax $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		}
	}

	private static function tabStore() {
		$tabs = Database::getQuery( '
		SELECT tab, slug
		FROM ln_store_tabs t' )->fetchAll( PDO::FETCH_OBJ );

		return $tabs;
	}

	private static function articleStore() {
		$article = Database::getQuery( '
		SELECT a.id, idTab, slug, a.name, description, coin, l.name AS qualityName, color
		FROM ln_store_article a 
		LEFT JOIN ln_store_tabs t on a.idTab = t.id
		LEFT JOIN ln_store_quality l on a.idQuality = l.id
		ORDER BY l.id' )->fetchAll( PDO::FETCH_OBJ );

		return $article;
	}
}