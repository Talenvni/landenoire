<?php namespace action\core\common\index;

use action\general\TwigLabs;
use action\general\Database;

class HomeCommonIndex {
	/**
	 * Render Home view
	 */
	public static function catchTwig() {
		try {
			echo TwigLabs::loadTwig()->render( '/home/homeCommonIndex.twig', [
				'title'        => 'Accueil',
				'recentNews'   => self::recentNews()
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
	 * @return array recent news
	 */
	private static function recentNews() {
		$recent_news = Database::getQuery( '
			SELECT slug, img, title, n.datePub, COUNT(c.id) AS comment
			FROM ln_news n 
			LEFT JOIN ln_news_comment c on n.id = c.idNews
			WHERE dateEnd > now() OR dateEnd IS NULL
			GROUP BY n.id
			ORDER BY datePub DESC
			LIMIT 4' )->fetchAll( \PDO::FETCH_OBJ );

		return $recent_news;
	}
}