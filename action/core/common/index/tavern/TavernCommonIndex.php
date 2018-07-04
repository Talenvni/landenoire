<?php

namespace action\core\common\index;

use action\general\TwigLabs;
use PDO;
use action\general\Database;
use Twig_Error_Loader;
use Twig_Error_Syntax;
use Twig_Error_Runtime;

class TavernCommonIndex {
	public static function catchTwig(): void {
		try {
			echo TwigLabs::loadTwig()->render( '/tavern/tavernCommonIndex.twig', [
				'title'    => 'Taverne',
				'chatbox'  => self::chatbox(),
				'visiteur' => self::chatboxVisiteur()
			] );
		} catch ( Twig_Error_Loader $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( Twig_Error_Runtime $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( Twig_Error_Syntax $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		}
	}

	private static function chatbox() {
		Database::getQuery( '
		DELETE FROM ln_chatbox
		WHERE NOW() > DATE_ADD(datePub, INTERVAL 2 DAY)' );

		return true;
	}

	private static function chatboxVisiteur() {
		$session = Database::getQuery( '
		SELECT COUNT(*) AS totalConnect
		FROM ln_users
		WHERE isConnect = 1' )->fetch( PDO::FETCH_OBJ );

		return $session;
	}
}