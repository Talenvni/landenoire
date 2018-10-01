<?php namespace action\core\common\index;

use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;
use action\general\TwigLabs;

class MessengerCommonIndex {
	public static function catchTwig(): void {
		try {
			echo TwigLabs::loadTwig()->render( '/messenger/messengerCommonIndex.twig', [
				'title'        => 'Missives privées',
				'listUsers'    => self::listUsers(),
				'receiver'     => self::receiver(),
				'showMessage'  => self::showMessage(),
				'addMessage'   => self::addMessage(),
				'alertMessage' => self::alertMessage(),
				'showForm'     => $_GET['receiver'] ?? null
			] );
		} catch ( \Twig_Error_Loader $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Runtime $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Syntax $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		}
	}

	/**
	 * @return array
	 */
	private static function listUsers() {
		$users = Database::getQuery( '
		SELECT u.id, pseudo, avatar
		FROM ln_users u
		LEFT JOIN ln_users_info i on u.id = i.idUser
		WHERE u.id != ? AND isBanned = 0
		ORDER BY isConnect, pseudo', [
			$_SESSION['user']->id
		] )->fetchAll( \PDO::FETCH_OBJ );

		return $users;
	}

	/**
	 * @return array
	 */
	private static function receiver() {
		if ( isset( $_GET['receiver'] ) ) :
			$receiver = str_replace( '-', ' ', ucfirst( $_GET['receiver'] ) );

			$users = Database::getQuery( '
				SELECT u.id, pseudo, avatar
				FROM ln_users u
				LEFT JOIN ln_users_info i on u.id = i.idUser
				WHERE pseudo = ?', [ $receiver ] )->fetch( \PDO::FETCH_OBJ );

			return $users;
		endif;

		return null;
	}

	/**
	 * @return array|null
	 */
	private static function showMessage() {
		if ( isset( $_GET['receiver'] ) ) :
			$receiver = str_replace( '-', ' ', ucfirst( $_GET['receiver'] ) );

			$user = Database::getQuery( '
				SELECT id
				FROM ln_users u
				WHERE pseudo = ?', [ $receiver ] )->fetch( \PDO::FETCH_OBJ ) ?? null;

			if ( is_object( $user ) ) :
				$conversation = Database::getQuery( '
				SELECT id
				FROM ln_private_conversation
				WHERE (idFrom = ? OR idFrom = ?) AND (idTo = ? OR idTo = ?)', [
						$_SESSION['user']->id,
						$user->id,
						$_SESSION['user']->id,
						$user->id
					] )->fetch( \PDO::FETCH_OBJ ) ?? null;


				if ( is_object( $conversation ) ) :

					$message = Database::getQuery( '
						SELECT content, idFrom, idTo, u.id as idUser, avatar
						FROM ln_private_messages m 
						LEFT JOIN ln_private_conversation c on m.idConversation = c.id
						LEFT JOIN ln_users u on m.idPoster = u.id
						LEFT JOIN ln_users_info i on u.id = i.idUser
						WHERE idConversation = ?
						ORDER BY datePub
						LIMIT 50', [
						$conversation->id
					] )->fetchAll( \PDO::FETCH_OBJ );

					Database::getQuery( '
						UPDATE ln_private_messages
						SET seen = 1
						WHERE idReceiver = ? AND idPoster = ? AND idConversation = ?', [
						$_SESSION['user']->id,
						$user->id,
						$conversation->id
					] );

					Database::getQuery( '
					DELETE FROM ln_private_messages
					WHERE NOW() > DATE_ADD(datePub, INTERVAL 2 MONTH)' );

					return $message;
				endif;
			endif;
		endif;

		return null;
	}

	private static function addMessage() {
		if ( isset( $_POST['messenger_submit'] ) && strlen( $_POST['messenger_message'] <= 255 ) ) :

			if ( isset( $_GET['receiver'] ) ) :
				$receiver = str_replace( '-', ' ', ucfirst( $_GET['receiver'] ) );

				$user = Database::getQuery( '
				SELECT id
				FROM ln_users u
				WHERE pseudo = ?', [
					$receiver
				] )->fetch( \PDO::FETCH_OBJ );

				$conversation = Database::getQuery( '
				SELECT id
				FROM ln_private_conversation
				WHERE (idFrom = ? OR idFrom = ?) AND (idTo = ? OR idTo = ?)', [
					$_SESSION['user']->id,
					$user->id,
					$_SESSION['user']->id,
					$user->id
				] )->fetch( \PDO::FETCH_OBJ );

				if ( is_object( $conversation ) && is_object( $user ) ) :
					Database::getQuery( '
					INSERT INTO ln_private_messages (idConversation, idPoster, idReceiver, content) 
					VALUES (?, ?, ?, ?)', [
						$conversation->id,
						$_SESSION['user']->id,
						$user->id,
						$_POST['messenger_message']
					] );
					MessageFlash::setFlash( 'success', 'Message envoyé' );
					Helper::redirection( '/messenger/' . $_GET['receiver'] );
				endif;

				if ( ! is_object( $conversation ) && is_object( $user ) ) :
					Database::getQuery( '
					INSERT INTO ln_private_conversation (idFrom, idTo)
					VALUES (?, ?)', [
						$_SESSION['user']->id,
						$user->id
					] );

					$last_id = Database::lastInsertId();

					Database::getQuery( '
					INSERT INTO ln_private_messages (idConversation, idPoster, idReceiver, content)
					VALUES (?, ?, ?, ?)', [
						$last_id,
						$_SESSION['user']->id,
						$user->id,
						$_POST['messenger_message']
					] );
					MessageFlash::setFlash( 'success', 'Message envoyé' );
					Helper::redirection( '/messenger/' . $_GET['receiver'] );
				endif;

				MessageFlash::setFlash( 'warning', 'Données incorrectes' );
				Helper::redirection( '/messenger', 307 );
			endif;
		endif;

		return null;
	}

	/**
	 * @return array
	 */
	private static function alertMessage() {
		$alert = Database::getQuery( '
		SELECT seen, idPoster, idReceiver, COUNT(seen) AS total
		FROM ln_private_messages
		WHERE idReceiver = ? AND seen = 0', [
			$_SESSION['user']->id
		] )->fetchAll( \PDO::FETCH_OBJ );

		return $alert;
	}

	/**
	 * @return int
	 */
	public static function alertHome() {
		if ( isset( $_SESSION['user'] ) ) :
			$alert = Database::getQuery( '
		SELECT seen
		FROM ln_private_messages
		WHERE idReceiver = ? AND seen = 0', [
				$_SESSION['user']->id
			] )->rowCount();

			return $alert;
		endif;

		return null;
	}
}
