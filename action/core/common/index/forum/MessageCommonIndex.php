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
				'showUpvote'    => self::showUpvote(),
				'addUpvote'     => self::addUpvote(),
				'voteLike'      => self::voteLike(),
				'voteDislike'   => self::voteDislike(),
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
		$single_topic = Database::getQuery( '
		SELECT DISTINCT t.id, subject, slug, is_closed, idSubcategory, idUser, img, freeAccess, view
		FROM ln_forum_topic t
		LEFT JOIN ln_forum_subcategory s on t.idSubcategory = s.id
		WHERE t.id = ? AND s.slug = ?', [
			$_GET['topic_id'],
			$_GET['subcategory_tab']
		] )->fetch( \PDO::FETCH_OBJ );

		if ( isset( $_SESSION['user'] ) && $_SESSION['user']->id != $single_topic->idUser ):
			Database::getQuery( '
			UPDATE ln_forum_topic
			SET view = (? + ?)
			WHERE id = ?', [ $single_topic->view, 1, $single_topic->id ] );
		endif;

		return $single_topic;
	}

	private static function showMessage() {
		$message = Database::getQuery( '
		SELECT m.id, m.idUser, m.datePub, subject, content, pseudo, avatar, reputation, alignement, (TIMESTAMPDIFF(YEAR, age, NOW()) - 815) as age, race, sexe, coin
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

	/**
	 * @return array
	 */
	private static function showUpvote() {
		$vote = Database::getQuery( '
		SELECT id, idMessage, idAuthor, idPoster, is_liked, is_disliked
		FROM ln_forum_vote v ' )->fetchAll( \PDO::FETCH_OBJ );

		return $vote;
	}

	/**
	 * @return null
	 */
	private static function addUpvote() {
		if ( isset( $_POST['vote_author'], $_POST['vote_message'] ) ):
			$subcategory = Database::getQuery( '
			SELECT id, slug
			FROM ln_forum_subcategory 
			WHERE slug = ?', [ $_GET['subcategory_tab'] ] )->fetch( \PDO::FETCH_OBJ );

			$topic = Database::getQuery( '
			SELECT id
			FROM ln_forum_topic 
			WHERE id = ?', [ $_GET['topic_id'] ] )->fetch( \PDO::FETCH_OBJ );

			$message = Database::getQuery( '
			SELECT id
			FROM ln_forum_message 
			WHERE id = ?', [ $_POST['vote_message'] ] )->fetch( \PDO::FETCH_OBJ );

			$user = Database::getQuery( '
			SELECT id, pseudo
			FROM ln_users
			WHERE id = ?', [ $_POST['vote_author'] ] )->fetch( \PDO::FETCH_OBJ );

			$vote = Database::getQuery( '
			SELECT id, idPoster, idAuthor, idMessage
			FROM ln_forum_vote
			WHERE idPoster = ? AND idAuthor = ? AND idMessage = ?', [
				$_SESSION['user']->id,
				$_POST['vote_author'],
				$_POST['vote_message']
			] )->fetch( \PDO::FETCH_OBJ );

			if ( empty( $vote ) && ! empty( $user ) && ! empty( $message ) ) :
				if ( isset( $_POST['button_like'] ) ):
					Database::getQuery( '
					INSERT INTO ln_forum_vote (idPoster, idAuthor, idMessage, is_liked, is_disliked)
					VALUES (?, ?, ?, 1, 0)', [
						$_SESSION['user']->id,
						$_POST['vote_author'],
						$_POST['vote_message']
					] );

					MessageFlash::setFlash( 'success', 'Vous appréciez le contenu de : ' . $user->pseudo );
					Helper::redirection( '/forum/' . $subcategory->slug . '/topics/' . $topic->id );
				endif;

				if ( isset( $_POST['button_dislike'] ) ):
					Database::getQuery( '
					INSERT INTO ln_forum_vote (idPoster, idAuthor, idMessage, is_liked, is_disliked)
					VALUES (?, ?, ?, 0, 1)', [
						$_SESSION['user']->id,
						$_POST['vote_author'],
						$_POST['vote_message']
					] );

					MessageFlash::setFlash( 'success', 'Vous dépréciez le contenu de : ' . $user->pseudo );
					Helper::redirection( '/forum/' . $subcategory->slug . '/topics/' . $topic->id );
				endif;
			endif;

			if ( ! empty( $vote ) && ! empty( $user ) && ! empty( $message ) ) :
				if ( isset( $_POST['button_like'] ) ):
					Database::getQuery( '
					UPDATE ln_forum_vote
					SET is_liked = 1, is_disliked = 0
					WHERE idMessage = ?', [
						$_POST['vote_message']
					] );

					MessageFlash::setFlash( 'success', 'Vous appréciez le contenu de : ' . $user->pseudo );
					Helper::redirection( '/forum/' . $subcategory->slug . '/topics/' . $topic->id );
				endif;

				if ( isset( $_POST['button_dislike'] ) ):
					Database::getQuery( '
					UPDATE ln_forum_vote
					SET is_liked = 0, is_disliked = 1
					WHERE idMessage = ?', [
						$_POST['vote_message']
					] );

					MessageFlash::setFlash( 'success', 'Vous dépréciez le contenu de : ' . $user->pseudo );
					Helper::redirection( '/forum/' . $subcategory->slug . '/topics/' . $topic->id );
				endif;
			endif;
		endif;

		return null;
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
					SELECT coin, experience FROM ln_users_info WHERE idUser = ?',
						[ $_SESSION['user']->id ] )->fetch( \PDO::FETCH_OBJ );

					Database::getQuery( '
					UPDATE ln_users_info 
					SET coin = (? + ?), experience = (? + ?)
					WHERE idUser = ?', [ $user->coin, 25, $user->experience, 5, $_SESSION['user']->id ] );

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
	private static function voteLike() {
		$vote = Database::getQuery( '
		SELECT is_liked 
		FROM ln_forum_vote v 
		LEFT JOIN ln_users u on v.idAuthor = u.id
		LEFT JOIN ln_forum_message m on u.id = m.idUser
		WHERE idAuthor = m.idUser AND is_liked = 1 ' )->rowCount();

		return $vote;
	}

	/**
	 * @return mixed
	 */
	private static function voteDislike() {
		$vote = Database::getQuery( '
		SELECT is_disliked 
		FROM ln_forum_vote v 
		LEFT JOIN ln_users u on v.idAuthor = u.id
		LEFT JOIN ln_forum_message m on u.id = m.idUser
		WHERE idAuthor = m.idUser AND is_disliked = 1 ' )->rowCount();

		return $vote;
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