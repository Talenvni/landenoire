<?php

namespace action\ajax;

session_start();

require_once '../general/Database.php';

use action\general\Database;
use PDO;

$session = Database::getQuery( '
SELECT DISTINCT pseudo, id
FROM ln_users
WHERE isConnect = 1' )->fetchAll( PDO::FETCH_OBJ );

$json = json_encode( $session, JSON_UNESCAPED_UNICODE );

echo $json;
