<?php namespace action\core\common\index;

use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;

class SignoutCommonIndex {

	/**
	 * @return null Sign out
	 */
	public static function signOut() {
		// If cookie presented.
		if ( ini_get( "session.use_cookies" ) ) :
			Database::getInstance();

			Database::getQuery( '
				UPDATE ln_users
				SET tokenCookie = NULL, isConnect = 0
				WHERE id = ?',
				[ $_SESSION['user']->id ] );

			setcookie( 'captainCook', null, time() - 42000 );
		endif;

		// Destroy $_SESSION.
		unset( $_SESSION['user'] );

		MessageFlash::setFlash( 'success', 'Session correctement fermée' );
		Helper::redirection( '/home' );

		return null;
	}
}