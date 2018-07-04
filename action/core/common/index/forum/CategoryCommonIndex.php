<?php namespace action\core\common\index;

use action\general\Database;
use action\general\TwigLabs;

class CategoryCommonIndex {
	/**
	 * Render Category view
	 */
	public static function catchTwig() {
		try {
			echo TwigLabs::loadTwig()->render( '/forum/categoryCommonIndex.twig', [
				'title'           => 'Forum',
				'showHeading'     => self::showHeading(),
				'showCategory'    => self::showCategory()
			] );
		} catch ( \Twig_Error_Loader $e ) {
			die( 'ERROR LOADER TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Runtime $e ) {
			die( 'ERROR RUNTIME TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Syntax $e ) {
			die( 'ERROR SYNTAX TWIG : ' . $e->getMessage() );
		}
	}

	private static function showHeading() {
		$forum_heading = Database::getQuery( '
		SELECT id, name
		FROM ln_forum_heading' )->fetchAll( \PDO::FETCH_OBJ );

		return $forum_heading;
	}

	private static function showCategory() {
		$forum_category = Database::getQuery( '
		SELECT id, idHeading, slug, name, content, img
		FROM ln_forum_category' )->fetchAll( \PDO::FETCH_OBJ );

		return $forum_category;
	}
}