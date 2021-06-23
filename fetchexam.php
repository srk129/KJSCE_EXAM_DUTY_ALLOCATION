<?php  
 //fetch.php  
include_once 'Datasource.php';
 if(isset($_POST["Eid"]))  
 {  
      $query = "SELECT * FROM exam_schedule WHERE E_id = '".$_POST["Eid"]."'";  
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>