<?php namespace action\core\common\index;


use action\general\Database;
use action\general\TwigLabs;

class SubcategoryCommonIndex {
	/**
	 * Render Subcategory view
	 */
	public static function catchTwig() {
		try {
			echo TwigLabs::loadTwig()->render( '/forum/subcategoryCommonIndex.twig', [
				'title'           => 'Forum',
				'singleCategory'  => self::singleCategory(),
				'showSubcategory' => self::showSubcategory(),
				'lastMessage'     => self::LastMessage(),
				'subcategoryTab'  => $_GET['subcategory_tab'] ?? null
			] );
		} catch ( \Twig_Error_Loader $e ) {
			die( 'ERROR LOADER TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Runtime $e ) {
			die( 'ERROR RUNTIME TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Syntax $e ) {
			die( 'ERROR SYNTAX TWIG : ' . $e->getMessage() );
		}
	}

	private static function singleCategory() {
		$category = Database::getQuery( '
		SELECT name
		FROM ln_forum_category c
		WHERE slug = ? ', [ $_GET['subcategory_tab'] ] )->fetch( \PDO::FETCH_OBJ );

		return $category;
	}

	private static function showSubcategory() {
		$forum_subcategory = Database::getQuery( '
		SELECT s.id, s.slug, c.slug AS slugCategory, s.name, s.content, s.img
		FROM ln_forum_subcategory s
		LEFT JOIN ln_forum_category c on s.idCategory = c.id' )->fetchAll( \PDO::FETCH_OBJ );

		return $forum_subcategory;
	}

	private static function lastMessage() {
		$subcategory = Database::getQuery( '
		SELECT s2.id, last_message_date as datePub, t2.id as idTopic, pseudo, s2.slug, subject
		FROM (
  			SELECT s.id, MAX(m.datePub) as last_message_date
  			FROM ln_forum_subcategory s 
    		INNER JOIN ln_forum_topic t 
      			ON t.idSubcategory = s.id
    		INNER JOIN ln_forum_message m 
      			ON m.idTopic = t.id
            INNER JOIN ln_users u 
            	ON m.idUser = u.id
  			GROUP BY s.id
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

		return $subcategory;

	}
}