<?php
require('Datasource.php');
$f_id=$_REQUEST['Fid'];
$query = "DELETE FROM Faculty_data WHERE Fid = '$f_id'"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: f.php"); 
?>