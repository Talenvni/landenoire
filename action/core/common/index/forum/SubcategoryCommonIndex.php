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

	private static function showSubcategory() {
		$forum_subcategory = Database::getQuery( '
		SELECT s.id, s.slug, c.slug AS slugCategory, s.name, s.content, s.img
		FROM ln_forum_subcategory s
		LEFT JOIN ln_forum_category c on s.idCategory = c.id' )->fetchAll( \PDO::FETCH_OBJ );

		return $forum_subcategory;
	}

	private static function lastMessage() {
		$last_message = Database::getQuery( '
		SELECT DISTINCT max(m.datePub) AS datePub, m.subject, s.id, m.idTopic
		FROM ln_forum_subcategory s 
		LEFT JOIN ln_forum_topic t on s.id = t.idSubcategory
		LEFT JOIN (
		SELECT max(m2.datePub) as datePub, idTopic, max(subject) as subject
		FROM ln_forum_message m2
		LEFT JOIN ln_forum_topic t2 on m2.idTopic = t2.id
		GROUP BY idTopic ORDER BY datePub DESC
		) m ON m.idTopic = t.id
		GROUP BY s.id
		ORDER BY m.datePub DESC' )->fetchALL( \PDO::FETCH_OBJ );

		return $last_message;
	}
}