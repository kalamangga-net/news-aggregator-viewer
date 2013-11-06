<?php

define('MySQLCls', 'pustaka/Quixotix-PHP-MySQL/');
include_once(MySQLCls.'mysqldatabase.php');
include_once(MySQLCls.'mysqlresultset.php');

$db = MySqlDatabase::getInstance();
try {
    $conn = $db->connect('mysqlserver', 'username', 'password', 'database');
} 
catch (Exception $e) {
    die($e->getMessage());
}

?>
