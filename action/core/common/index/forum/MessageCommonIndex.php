<?php namespace action\core\common\index;


use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;
use action\general\TwigLabs;
use action\general\Validator;

class MessageCommonIndex {
	/**
	 * Render Messages view
	 */
	public static function catchTwig() {
		try {
			echo TwigLabs::loadTwig()->render( '/forum/messageCommonIndex.twig', [
				'title'         => 'Forum',
				'singleTopic'   => self::singleTopic(),
				'showMessage'   => self::showMessage(),
				'addMessage'    => self::addMessage(),
				'valideAccount' => self::valideAccount()
			] );
		} catch ( \Twig_Error_Loader $e ) {
			die( 'ERROR LOADER TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Runtime $e ) {
			die( 'ERROR RUNTIME TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Syntax $e ) {
			die( 'ERROR SYNTAX TWIG : ' . $e->getMessage() );
		}
	}

	private static function singleTopic() {
		$single_subcategory = Database::getQuery( '
		SELECT DISTINCT t.id, subject, slug, is_closed, idSubcategory, idUser, img, freeAccess
		FROM ln_forum_topic t
		LEFT JOIN ln_forum_subcategory s on t.idSubcategory = s.id
		WHERE t.id = ? AND s.slug = ?', [
			$_GET['topic_id'],
			$_GET['subcategory_tab']
		] )->fetch( \PDO::FETCH_OBJ );

		return $single_subcategory;
	}

	private static function showMessage() {
		$message = Database::getQuery( '
		SELECT m.id, m.idUser, m.datePub, subject, content, pseudo, avatar
		FROM ln_forum_message m 
		LEFT JOIN ln_forum_topic t on m.idTopic = t.id
		LEFT JOIN ln_users u on m.idUser = u.id
		LEFT JOIN ln_users_info i on u.id = i.idUser
		WHERE t.id = ?
		ORDER BY m.datePub', [
			$_GET['topic_id']
		] )->fetchAll( \PDO::FETCH_OBJ );

		return $message;
	}

	private static function addMessage() {
		if ( isset( $_POST['messageContent'] ) && ! empty( $_POST['messageContent'] ) ) :
//          $_POST['messageContent'] = Functions::secureString( $_POST['messageContent'], '<i><em>');
			$_POST['null'] = null;

			$message = new Validator( $_POST );
			$message->isDiff( 'null', 'messageContent', 'Le contenu est vide' );

			if ( empty( $message->getFail() ) ) :
				$subcategory = Database::getQuery( '
					SELECT id, slug
					FROM ln_forum_subcategory 
					WHERE slug = ?', [ $_GET['subcategory_tab'] ] )->fetch( \PDO::FETCH_OBJ );

				$topic = Database::getQuery( '
					SELECT id
					FROM ln_forum_topic 
					WHERE id = ?', [ $_GET['topic_id'] ] )->fetch( \PDO::FETCH_OBJ );

				$validator = new Validator();
				$validator->isDiff( $subcategory, null, 'La sous-catégorie n\'existe pas' );
				$validator->isDiff( $topic, null, 'Le sujet n\'existe pas' );

				if ( empty( $validator->getFail() ) ) :
					$content = ucfirst( $_POST['messageContent'] );

					Database::getQuery(
						'
						INSERT INTO ln_forum_message (idTopic, idUser, content, datePub) 
						VALUES (?, ?, ?, NOW())',
						[ $topic->id, $_SESSION['user']->id, $content ]
					);

					$user = Database::getQuery( '
					SELECT copper FROM ln_users_info WHERE idUser = ?',
						[ $_SESSION['user']->id ] )->fetch( \PDO::FETCH_OBJ );

					Database::getQuery( '
					UPDATE ln_users_info 
					SET copper = (? + ?)
					WHERE idUser = ?', [ $user->copper, 1, $_SESSION['user']->id ] );

					MessageFlash::setFlash( 'success', 'Message crée' );
					Helper::redirection( '/forum/' . $subcategory->slug . '/topics/' . $topic->id );
				else :
					return $validator->getFail();
				endif;
			else :
				return $message->getFail();
			endif;
		endif;

		return null;
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