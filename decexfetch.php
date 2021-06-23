<?php  
 //fetch.php  
include_once 'Datasource.php';
 if(isset($_POST["E_id"]))  
 {  
      $query = "SELECT E_id,Exam_date, Exam_time,Exam_slot FROM exam_schedule WHERE E_id = '".$_POST["E_id"]."'";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_array($result) )
      {
           $data["E_id"] = $row["E_id"];
           $data["Exam_date"] = $row["Exam_date"];
           $data["Exam_time"] = $row["Exam_time"];
           $data["Exam_slot"] = $row["Exam_slot"];

      }

      echo json_encode($data);  
 }  
 
 ?>