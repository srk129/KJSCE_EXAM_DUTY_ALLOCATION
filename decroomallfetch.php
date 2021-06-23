<?php  
 //fetch.php  
include_once 'Datasource.php';
 if(isset($_POST["E_id"]))  
 {  
      $query = "SELECT F.Fid, F.Eid, F.Ex_date,F.Ex_time,F.Ex_slot,R.room_num from fact_alloc F
      inner join room_alloc R
      ON F.Eid='".$_POST["E_id"]."'and
      R.E_id='".$_POST["E_id"]."'and
      F.Ex_slot=R.Exam_slot and
      F.Ex_date=R.Exam_date and
      F.Ex_time=R.Exam_time and
      R.status ='Not Allocated' and
      F.Status ='Not Allocated' ORDER BY Rand() limit 1";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_array($result) )
      {
           $data["room_num"] = $row["room_num"];
           $data["Eid"] = $row["Eid"];
           $data["Fid"] = $row["Fid"];
           $data["Ex_date"] = $row["Ex_date"];
           $data["Ex_time"] = $row["Ex_time"];
           $data["Ex_slot"] = $row["Ex_slot"];
      }

      echo json_encode($data);  
 }  
 
 ?>
