<?php namespace action\core\common\index;

use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;
use action\general\TwigLabs;

class ProfilCommonIndex {
	/**
	 * Render Profil view
	 */
	public static function catchTwig() {
		try {
			echo TwigLabs::loadTwig()->render( '/account/profilCommonIndex.twig', [
				'title'         => 'Compte',
				'showAccount'   => self::showAccount(),
				'showHeading'   => self::showHeading(),
				'showParagraph' => self::showParagraph(),
				'showInventory' => self::showInventory(),
				'showQuality'   => self::showQuality(),
				'showVote'      => self::showVote(),
				'selectVote'    => self::selectVote(),
				'coin'          => self::coinTransform(),
				'profilTab'     => $_GET['profil_tab'] ?? 'info'
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
	 * @return mixed|null Show Character sheet
	 */
	private static function showAccount() {
		$account = Database::getQuery( '
    	SELECT DISTINCT u.id, groupName, pseudo, age as birthday, (TIMESTAMPDIFF(YEAR, age, NOW()) - 815) as age, sexe, race, avatar, creditAvatar, coin, reputation, alignement, alignText, characterValide, isBanned, experience, floor((25 + sqrt(625 + 100 * experience)) / 50) AS level
    	FROM ln_users u
    	LEFT JOIN ln_users_group g ON u.idGroup = g.id
    	LEFT JOIN ln_users_info i ON u.id = i.idUser
    	WHERE u.id = ?', [ $_GET['account_id'] ] )->fetch( \PDO::FETCH_OBJ );

		if ( ! is_null( $account->id ) ) :
			return $account;
		endif;
		MessageFlash::setFlash( 'warning', 'Cet utilisateur n\'existe pas' );
		Helper::redirection( '/home', 307 );

		return null;
	}

	/**
	 * @return array
	 */
	private static function coinTransform() {
		$account = Database::getQuery( '
    	SELECT DISTINCT coin
    	FROM ln_users u
    	LEFT JOIN ln_users_group g ON u.idGroup = g.id
    	LEFT JOIN ln_users_info i ON u.id = i.idUser
    	WHERE u.id = ?', [ $_GET['account_id'] ] )->fetch( \PDO::FETCH_OBJ );

		$coin = Helper::getcoin( $account->coin );

		return $coin;
	}

	/**
	 * @return array Show heading
	 */
	private static function showHeading() {
		$heading = Database::getQuery( '
		SELECT DISTINCT id, name
		FROM ln_users_heading' )->fetchAll( \PDO::FETCH_OBJ );

		return $heading;
	}

	/**
	 * @return array Show paragraph
	 */
	private static function showParagraph() {
		$paragraph = Database::getQuery( '
		SELECT DISTINCT idHeading, content, idUser
		FROM ln_users_paragraph p
		LEFT JOIN ln_users_heading h on p.idHeading = h.id
		LEFT JOIN ln_users u on p.idUser = u.id
		WHERE h.id = p.idHeading' )->fetchAll( \PDO::FETCH_OBJ );

		return $paragraph;
	}

	/**
	 * @return array
	 */
	private static function showInventory() {
		$inventory = Database::getQuery( '
		SELECT i.id, a.name, COUNT(i.idStore) AS number, color, q.name AS quality
		FROM ln_users_inventory i
		LEFT JOIN ln_store_article a on i.idStore = a.id
		LEFT JOIN ln_store_quality q on a.idQuality = q.id
		WHERE idUser = ?
		GROUP BY idStore', [ $_GET['account_id'] ] )->fetchAll( \PDO::FETCH_OBJ );

		return $inventory;
	}

	/**
	 * @return array
	 */
	private static function showQuality() {
		$inventory = Database::getQuery( '
		SELECT name, color
		FROM ln_store_quality q ' )->fetchAll( \PDO::FETCH_OBJ );

		return $inventory;
	}

	/**
	 * @return array Show vote
	 */
	private static function showVote() {
		$vote = Database::getQuery( '
		SELECT DISTINCT idUser, idPoster, liked, disliked, pseudo
		FROM ln_users_vote v
		LEFT JOIN ln_users u on v.idPoster = u.id
		WHERE idUser = ?', [ $_GET['account_id'] ] )->fetchAll( \PDO::FETCH_OBJ );

		return $vote;
	}

	/**
	 * @return mixed
	 */
	private static function selectVote() {
		$vote = Database::getQuery( '
		SELECT idUser, idPoster, liked, disliked
		FROM ln_users_vote
		WHERE idUser = ? AND idPoster = ?', [ $_GET['account_id'], $_SESSION['user']->id ] )->fetch( \PDO::FETCH_OBJ );

		return $vote;
	}
}