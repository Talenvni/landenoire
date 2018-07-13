<?php

namespace action\ajax;

session_start();

require_once '../../general/Database.php';

use action\general\Database;

Database::getQuery( '
TRUNCATE TABLE ln_chatbox' );

Database::getQuery( '
INSERT INTO ln_chatbox (idUser, datePub, message)
VALUES (?, NOW(), \'Taverne rafraîchie\' )', [ $_SESSION['user']->id ] );