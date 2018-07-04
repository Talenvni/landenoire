<?php

namespace action\ajax;

session_start();

require_once '../general/Database.php';

use action\general\Database;

if ( strlen( $_POST['chatMessage'] <= 255 ) && isset( $_SESSION['user'] ) ) :
	Database::getQuery( '
INSERT INTO ln_chatbox (idUser, datePub, message)
VALUES (?, NOW(), ?)', [ $_SESSION['user']->id, $_POST['chatMessage'] ] );
endif;

header( 'location:/tavern' );
exit;