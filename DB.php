<?php
if(strpos($_SERVER['REQUEST_URI'],"DB.php")){
    require_once 'Utils.php';
    PlainDie();
}

// DATABASE SETTINGS
$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "server_db";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if($conn->connect_error != null){
    die($conn->connect_error);
}