<?php namespace action\core\admin\index;

use action\general\Database;
use action\general\TwigLabs;

class HomeAdminIndex {
	/**
	 *
	 */
	public static function catchTwig() {
		try {
			echo TwigLabs::loadTwig()->render( '/home/homeAdminIndex.twig', [
				'title'         => 'Administration',
				'totalUsers'    => self::totalUsers(),
				'totalTopics'   => self::totalTopics(),
				'totalMessages' => self::totalMessages(),
				'listUsers'     => self::listUsers(),
				'recentUsers'   => self::recentUsers(),
				'recentTopics'   => self::recentTopics(),
				'recentMessages'   => self::recentMessage()
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
	private static function totalUsers() {
		$users = Database::getQuery( '
		SELECT id
		FROM ln_users' )->rowCount();

		return $users;
	}

	/**
	 * @return int
	 */
	private static function totalTopics() {
		$topics = Database::getQuery( '
		SELECT id
		FROM ln_forum_topic' )->rowCount();

		return $topics;
	}

	/**
	 * @return int
	 */
	private static function totalMessages() {
		$messages = Database::getQuery( '
		SELECT id
		FROM ln_forum_message' )->rowCount();

		return $messages;
	}

	/**
	 * @return array
	 */
	private static function listUsers() {
		$users = Database::getQuery( '
		SELECT u.id, pseudo, email, isBanned, isConnect, tokenConfirm, count(m.id) as message, topic
		FROM ln_users u 
		LEFT JOIN ln_forum_message m on u.id = m.idUser
		left join (
			select count(t.id) as topic, idUser
			from ln_forum_topic t 
			left join ln_users u2 on t.idUser = u2.id
			group by u2.id
		) leftbis on leftbis.idUser = u.id
		group by u.id
		ORDER BY pseudo' )->fetchAll( \PDO::FETCH_OBJ );

		return $users;
	}

	/**
	 * @return array
	 */
	private static function recentUsers() {
		$user = Database::getQuery( '
		SELECT DISTINCT u.id, pseudo, email, tokenConfirm, groupName
		FROM ln_users u
		LEFT JOIN ln_users_group g ON u.idGroup = g.id
		ORDER BY tokenConfirm DESC
		LIMIT 5' )->fetchAll( \PDO::FETCH_OBJ );

		return $user;
	}

	/**
	 * @return array
	 */
	private static function recentTopics() {
		$topic = Database::getQuery( '
		SELECT t.id, subject, datePub, pseudo, s.slug
		FROM ln_forum_topic t
		LEFT JOIN ln_users u ON t.idUser = u.id
		LEFT JOIN ln_forum_subcategory s ON t.idSubcategory = s.id
		ORDER BY datePub DESC 
		LIMIT 5' )->fetchAll( \PDO::FETCH_OBJ );

		return $topic;
	}

	private static function recentMessage() {
		$message = Database::getQuery( '
		SELECT t.id AS idTopic, t.subject, m.datePub, m.content, pseudo, slug
		FROM ln_forum_message m
		LEFT JOIN ln_users u ON m.idUser = u.id
		LEFT JOIN ln_forum_topic t ON m.idTopic = t.id
		LEFT JOIN ln_forum_subcategory subcategory ON t.idSubcategory = subcategory.id
		ORDER BY datePub DESC 
		LIMIT 5' )->fetchAll( \PDO::FETCH_OBJ );

		return $message;
	}
}