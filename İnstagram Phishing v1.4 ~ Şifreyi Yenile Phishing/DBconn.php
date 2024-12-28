<?php 

$host = "localhost";
$username = "root";
$password = "";
$db_name = "users";

$sql_conn = mysqli_connect($host, $username, $password, $db_name);
mysqli_set_charset($sql_conn, "UTF8");

?>