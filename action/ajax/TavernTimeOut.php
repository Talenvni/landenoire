<?php

namespace action\ajax;

session_start();

require_once '../general/Database.php';

use action\general\Database;
use PDO;

if ( $_POST['disconnect'] == true ) :
	if ( $_SESSION['user'] ) :
		// If not cookie
		Database::getQuery( '
		UPDATE ln_users 
		SET isConnect = 0
		WHERE id = ?', [ $_SESSION['user']->id ] );
	endif;

	return null;
Endif;

if ( $_POST['connect'] == true ) :
	if ( $_SESSION['user'] ) :
		Database::getQuery( '
		UPDATE ln_users 
		SET isConnect = 1
		WHERE id = ?', [ $_SESSION['user']->id ] );
	endif;

	return null;
Endif;