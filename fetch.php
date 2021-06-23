<?php  
 //fetch.php  
include_once 'Datasource.php';
 if(isset($_POST["Fid"]))  
 {  
      $query = "SELECT * FROM Faculty_data WHERE Fid = '".$_POST["Fid"]."'";  
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>