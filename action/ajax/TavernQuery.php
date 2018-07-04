<?php

namespace action\ajax;

session_start();

require_once '../general/Database.php';

use action\general\Database;
use PDO;

$chatbox = Database::getQuery( '
SELECT cb.id as id, datePub, message, u.id as idUser, pseudo
FROM ln_chatbox cb
LEFT JOIN ln_users u on cb.idUser = u.id
ORDER BY datePub DESC
LIMIT 50' )->fetchAll( PDO::FETCH_OBJ );

$json = json_encode( $chatbox, JSON_UNESCAPED_UNICODE );

echo $json;

