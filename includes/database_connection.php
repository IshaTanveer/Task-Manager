<?php


//Database Connection

define('HOST','127.0.0.1');
define('USER', 'root');
define('USER_PASSWORD', '');
define('DB_NAME','task-manager');

$db_connection = mysqli_connect(HOST, USER, USER_PASSWORD, DB_NAME);
if(!$db_connection){
echo 'DB_NOT_CONNECTED';
}

?>