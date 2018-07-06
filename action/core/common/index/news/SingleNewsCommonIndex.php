<?php namespace action\core\common\index;

use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;
use action\general\TwigLabs;

class SingleNewsCommonIndex {
	/**
	 * Render Single news view
	 */
	public static function catchTwig() {
		try {
			echo TwigLabs::loadTwig()->render( '/news/singleNewsCommonIndex.twig', [
				'title'        => $_GET['news_slug'],
				'singleNews'   => self::singleNews(),
				'countComment' => self::countComment(),
				'allComment'   => self::allComment(),
				'newComment'   => self::newComment()
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
	 * @return mixed One news
	 */
	private static function singleNews() {
		$single_news = Database::getQuery( '
				SELECT n.id, slug, img, title, content, datePub, pseudo
				FROM ln_news AS n
				LEFT JOIN ln_users AS u ON n.idUser = u.id
				WHERE slug = ? AND (dateEnd > now() OR dateEnd IS NULL )', [
			$_GET['news_slug']
		] )->fetch( \PDO::FETCH_OBJ );

		if ( is_null( $single_news ) ) :
			Helper::redirection( '/news', 307 );
		endif;

		return $single_news;
	}

	/**
	 * @return int All comment
	 */
	private static function countComment() {
		$count_comment = Database::getQuery( '
		SELECT c.id
		FROM ln_news_comment c
		LEFT JOIN ln_news n on c.idNews = n.id
		WHERE slug = ?', [ $_GET['news_slug'] ] )->rowCount();

		return $count_comment;
	}

	/**
	 * @return array Each Comment
	 */
	private static function allComment() {
		$all_comment = Database::getQuery( '
    	SELECT c.datePub, message, pseudo, u.id AS idUser
    	FROM ln_news_comment c
    	LEFT JOIN ln_news n on c.idNews = n.id
    	LEFT JOIN ln_users u on c.idUser = u.id
    	WHERE slug = ?
    	ORDER BY datePub', [ $_GET['news_slug'] ] )->fetchAll( \PDO::FETCH_OBJ );

		return $all_comment;
	}

	/**
	 * @return null Create comment
	 */
	private static function newComment() {
		if ( isset( $_SESSION['user'] ) ) :
			$user = Database::getQuery( '
		SELECT isBanned
		FROM ln_users u
		WHERE id = ? ', [ $_SESSION['user']->id ] )->fetch( \PDO::FETCH_OBJ );

			if ( isset( $_POST['comment_submit'] ) && $user->isBanned == 0 ) :
				$new_comment = Database::getQuery( '
			SELECT id, slug
			FROM ln_news n
			WHERE slug = ?', [ $_GET['news_slug'] ] )->fetch( \PDO::FETCH_OBJ );

				Database::getQuery( '
			INSERT INTO ln_news_comment
			SET idUser = ?, idNews = ?, message = ?, datePub = NOW()', [
					$_SESSION['user']->id,
					$new_comment->id,
					ucfirst( $_POST['comment_message'] )
				] );

				MessageFlash::setFlash( 'success', 'Commentaire ajouté' );
				Helper::redirection( '/news/' . $new_comment->slug );
			endif;

			return $user;
		endif;

		return null;
	}
}
