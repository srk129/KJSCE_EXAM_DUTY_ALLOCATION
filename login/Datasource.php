<?php
$mysql_host = "localhost";
$mysql_username = "shreyak";
$mysql_password = "test123";
$mysql_database = "examdata";
$conn = mysqli_connect($mysql_host,$mysql_username,$mysql_password,"$mysql_database");
if(!$conn){
    die('Could not Connect to mysql:'.mysql_error());
}
?>