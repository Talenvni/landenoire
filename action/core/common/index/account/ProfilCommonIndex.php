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
				'showCoin'      => self::showCoin(),
				'showHeading'   => self::showHeading(),
				'showParagraph' => self::showParagraph(),
				'showVote'      => self::showVote(),
				'selectVote'      => self::selectVote(),
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
    	SELECT DISTINCT u.id, groupName, pseudo, age as birthday, (TIMESTAMPDIFF(YEAR, age, NOW()) - 815) as age, sexe, race, avatar, creditAvatar, gold, silver, copper, reputation, alignement, alignText, characterValide
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
	 * @return mixed Show coin
	 */
	private static function showCoin() {
		$user = Database::getQuery( '
			SELECT copper, silver, gold
			FROM ln_users_info
			WHERE idUser = ?', [ $_SESSION['user']->id ] )->fetch( \PDO::FETCH_OBJ );

		if ( $user->copper >= 100 ) :
			$newSilver  = floor( $user->copper / 100 );
			$restCopper = floor( $user->copper % 100 );

			Database::getQuery( '
			UPDATE ln_users_info
			SET copper = ?, silver = (? + ?)
			WHERE idUser = ?', [ $restCopper, $user->silver, $newSilver, $_SESSION['user']->id ] );
		endif;
		if ( $user->silver >= 100 ) :
			$newGold    = floor( $user->silver / 100 );
			$restSilver = floor( $user->silver % 100 );

			Database::getQuery( '
			UPDATE ln_users_info
			SET silver = ?, gold = (? + ?)
			WHERE idUser = ?', [ $restSilver, $user->gold, $newGold, $_SESSION['user']->id ] );
		endif;

		return $user;
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
		SELECT DISTINCT idHeading, content, showContent, idUser
		FROM ln_users_paragraph p
		LEFT JOIN ln_users_heading h on p.idHeading = h.id
		LEFT JOIN ln_users u on p.idUser = u.id
		WHERE h.id = p.idHeading' )->fetchAll( \PDO::FETCH_OBJ );

		return $paragraph;
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

	private static function selectVote() {
		$vote = Database::getQuery( '
		SELECT idUser, idPoster, liked, disliked
		FROM ln_users_vote
		WHERE idUser = ? AND idPoster = ?', [ $_GET['account_id'], $_SESSION['user']->id ] )->fetch( \PDO::FETCH_OBJ );

		return $vote;
	}
}