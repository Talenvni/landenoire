<?php namespace action\core\admin\index;

use action\general\Database;
use action\general\TwigLabs;

class NewsAdminIndex {
	/**
	 *
	 */
	public static function catchTwig() {
		try {
			echo TwigLabs::loadTwig()->render( '/news/newsAdminIndex.twig', [
				'title'         => 'Administration',
				'totalNews'     => self::totalNews(),
				'totalComments' => self::totalComment(),
				'newsOn'        => self::showNewsOn(),
				'newsOff'       => self::showNewsOff()
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
	private static function totalNews() {
		$users = Database::getQuery( '
		SELECT id
		FROM ln_news' )->rowCount();

		return $users;
	}

	/**
	 * @return int
	 */
	private static function totalComment() {
		$users = Database::getQuery( '
		SELECT id
		FROM ln_news_comment' )->rowCount();

		return $users;
	}

	/**
	 * @return array|null
	 */
	private static function showNewsOn() {
		$_POST['searchNewsOn'] = $_POST['searchNewsOn'] ?? null;

		$news = Database::getQuery( '
		SELECT DISTINCT n.id, title, datePub, dateEnd, pseudo
		FROM ln_news n
		LEFT JOIN ln_users u on n.idUser = u.id
		WHERE (dateEnd > NOW() OR dateEnd IS NULL) 
		GROUP BY id
		ORDER BY datePub DESC ' )->fetchAll( \PDO::FETCH_OBJ );

		if ( ! is_null( $news ) ):
			return $news;
		endif;

		return null;
	}

	/**
	 * @return array|null
	 */
	private static function showNewsOff() {
		$news = Database::getQuery( '
		SELECT DISTINCT n.id, title, datePub, dateEnd, pseudo
		FROM ln_news n
		LEFT JOIN ln_users u on n.idUser = u.id
		WHERE dateEnd < NOW()
		GROUP BY id
		ORDER BY datePub DESC ' )->fetchAll( \PDO::FETCH_OBJ );

		if ( ! is_null( $news ) ):
			return $news;
		endif;

		return null;
	}
}