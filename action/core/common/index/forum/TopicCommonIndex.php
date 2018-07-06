<?php namespace action\core\common\index;


use action\general\Database;
use action\general\TwigLabs;

class TopicCommonIndex {
	/**
	 * Render Topic view
	 */
	public static function catchTwig() {
		try {
			echo TwigLabs::loadTwig()->render( '/forum/topicCommonIndex.twig', [
				'title'             => 'Forum',
				'singleSubcategory' => self::singleSubcategory(),
				'showTopic'         => self::showTopic(),
				'valideAccount'     => self::valideAccount()
			] );
		} catch ( \Twig_Error_Loader $e ) {
			die( 'ERROR LOADER TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Runtime $e ) {
			die( 'ERROR RUNTIME TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Syntax $e ) {
			die( 'ERROR SYNTAX TWIG : ' . $e->getMessage() );
		}
	}

	private static function singleSubcategory() {
		$single_subcategory = Database::getQuery( '
		SELECT DISTINCT s.id, s.slug, c.slug AS slugCategory, s.name, s.img, idCategory, freeAccess
		FROM ln_forum_subcategory s
		LEFT JOIN ln_forum_category c on s.idCategory = c.id
		WHERE s.slug = ?', [
			$_GET['subcategory_tab']
		] )->fetch( \PDO::FETCH_OBJ );

		return $single_subcategory;
	}

	private static function showTopic() {
		$forum_topic = Database::getQuery( '
		SELECT t.id, t.idUser, idSubcategory, slug, name, subject, t.datePub, is_closed, pseudo, COUNT(m.id) AS message
		FROM ln_forum_topic t
		LEFT JOIN ln_users u ON t.idUser = u.id
		LEFT JOIN ln_forum_message m on t.id = m.idTopic
		LEFT JOIN ln_forum_subcategory s ON t.idSubcategory = s.id
		WHERE s.slug = ?
		GROUP BY t.id
		ORDER BY is_closed, datePub', [
			$_GET['subcategory_tab']
		] )->fetchAll( \PDO::FETCH_OBJ );

		return $forum_topic;
	}

	/**
	 * @return mixed
	 */
	private static function valideAccount() {
		if ( $_SESSION['user'] ) :
			$valide = Database::getQuery( '
			SELECT characterValide, isBanned
			FROM ln_users_info i
			LEFT JOIN ln_users u on i.idUser = u.id
			WHERE idUser = ?', [
				$_SESSION['user']->id
			] )->fetch( \PDO::FETCH_OBJ );

			return $valide;
		endif;

		return null;
	}
}