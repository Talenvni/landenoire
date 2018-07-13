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
				'title'        => 'Forum',
				'showHeading'  => self::showHeading(),
				'showCategory' => self::showCategory(),
				'lastMessage'  => self::lastMessage()
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
		SELECT c.id, idHeading, c.slug, c.name, c.content, c.img 
		FROM ln_forum_category c ' )->fetchAll( \PDO::FETCH_OBJ );

		return $forum_category;
	}

	private static function lastMessage() {
		$category = Database::getQuery( '
		SELECT c.id, last_message_date as datePub, t2.id as idTopic, pseudo, s2.slug, subject
		FROM (
  			SELECT s.id, MAX(m.datePub) as last_message_date
  			FROM ln_forum_subcategory s 
    		INNER JOIN ln_forum_topic t 
      			ON t.idSubcategory = s.id
    		INNER JOIN ln_forum_message m 
      			ON m.idTopic = t.id
            INNER JOIN ln_users u 
            	ON m.idUser = u.id
            INNER JOIN ln_forum_category c 
            	ON s.idCategory = c.id
  			GROUP BY c.id
		) as temp
        INNER JOIN ln_forum_message m2 
    		ON m2.datePub = temp.last_message_date
  		INNER JOIN ln_forum_topic t2 
    		ON m2.idTopic = t2.id
    	INNER JOIN ln_users u2 
    	 	ON m2.idUser = u2.id
  		INNER JOIN ln_forum_subcategory s2 
    		ON t2.idSubcategory = s2.id AND temp.id = s2.id
  		INNER JOIN ln_forum_category c 
    		ON c.id = s2.idCategory' )->fetchAll( \PDO::FETCH_OBJ );

		return $category;

	}
}