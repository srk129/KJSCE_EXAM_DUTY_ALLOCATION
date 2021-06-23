<?php
$mysql_host = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "duty_alloc_db";
$conn = mysqli_connect($mysql_host, $mysql_username, $mysql_password, "$mysql_database");
if (!$conn) {
	die('Could not Connect My Sql:' .mysql_error());
 }
?>

