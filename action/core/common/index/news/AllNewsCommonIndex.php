<?php namespace action\core\common\index;

use action\general\Database;
use action\general\TwigLabs;

class AllNewsCommonIndex {
	/**
	 * Render News view
	 */
	public static function catchTwig() {
		try {
			echo TwigLabs::loadTwig()->render( '/news/allNewsCommonIndex.twig', [
				'title'   => 'Actualités',
				'allNews' => self::allNews()
			] );
		} catch ( \Twig_Error_Loader $e ) {
			die( 'ERROR LOADER TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Runtime $e ) {
			die( 'ERROR RUNTIME TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Syntax $e ) {
			die( 'ERROR SYNTAX TWIG : ' . $e->getMessage() );
		}
	}

	private static function allNews() {
		$all_news = Database::getQuery( '
		SELECT slug, img, title, content, n.datePub, pseudo, COUNT(c.id) AS comment
		FROM ln_news AS n
		LEFT JOIN ln_news_comment c ON n.id = c.idNews
		LEFT JOIN ln_users AS u
			ON n.idUser = u.id
		WHERE dateEnd > now() OR dateEnd IS NULL
		GROUP BY n.id
		ORDER BY datePub DESC' )->fetchAll( \PDO::FETCH_OBJ );

		return $all_news;
	}
}