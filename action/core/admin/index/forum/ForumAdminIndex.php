<?php namespace action\core\admin\index;

use action\general\Database;
use action\general\TwigLabs;

class ForumAdminIndex {
	/**
	 *
	 */
	public static function catchTwig() {
		try {
			echo TwigLabs::loadTwig()->render( '/forum/forumAdminIndex.twig', [
				'title'            => 'Administration',
				'totalCategory'    => self::totalCategory(),
				'totalSubcategory' => self::totalSubcategory(),
				'listTitle' => self::listTitle(),
				'listCategory' => self::listCategory(),
				'listSubcategory' => self::listSubcategory()
			] );
		} catch ( \Twig_Error_Loader $e ) {
			die( 'ERROR LOADER TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Runtime $e ) {
			die( 'ERROR RUNTIME TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Syntax $e ) {
			die( 'ERROR SYNTAX TWIG : ' . $e->getMessage() );
		}
	}

	/**
	 * @return int
	 */
	private static function totalCategory() {
		$users = Database::getQuery( '
		SELECT id
		FROM ln_forum_category' )->rowCount();

		return $users;
	}

	/**
	 * @return int
	 */
	private static function totalSubcategory() {
		$users = Database::getQuery( '
		SELECT id
		FROM ln_forum_subcategory' )->rowCount();

		return $users;
	}

	/**
	 * @return array
	 */
	private static function listTitle() {
		$title = Database::getQuery( '
		SELECT id, name
		FROM ln_forum_heading' )->fetchAll( \PDO::FETCH_OBJ );

		return $title;
	}

	/**
	 * @return array
	 */
	private static function listCategory() {
		$title = Database::getQuery( '
		SELECT c.id, c.name, h.name AS nameTitle
		FROM ln_forum_category c 
		LEFT JOIN ln_forum_heading h on c.idHeading = h.id' )->fetchAll( \PDO::FETCH_OBJ );

		return $title;
	}

	/**
	 * @return array
	 */
	private static function listSubcategory() {
		$title = Database::getQuery( '
		SELECT s.id, s.name, c.name AS nameCategory, freeAccess
		FROM ln_forum_subcategory s 
		LEFT JOIN ln_forum_category c on s.idCategory = c.id' )->fetchAll( \PDO::FETCH_OBJ );

		return $title;
	}
}