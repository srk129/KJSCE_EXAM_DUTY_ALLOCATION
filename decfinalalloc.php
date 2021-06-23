
<?php
include_once 'Datasource.php';
if(!empty($_POST['submit'])) {//Check it is comming from a form
    //$room_id = uniqid();

    //mysql credentials
    $E_id = $_POST["E_id"];
    $Fid = $_POST["Fid"];
   $Exam_date=$_POST["Exam_date"] ;
   $Exam_time=$_POST["Exam_time"] ;
   $Exam_slot=$_POST["Exam_slot"] ;
   $room_num =$_POST["room_num"] ;
  if(isset($_POST["room_num"])){
      //INSERT INTO `final_alloc`(`Eid`, `Fid`, `Exam_date`, `Exam_time`, `room_num`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
      $query = "INSERT INTO final_alloc (Eid,Fid,Exam_date, Exam_time, Exam_slot ,room_num, report_time) VALUES ('$E_id','$Fid','$Exam_date', '$Exam_time','$Exam_slot' ,'$room_num',CURRENT_TIMESTAMP())";
      if (mysqli_query($conn, $query)) {
      echo "<script>alert('Faculty has been allocated a room for exam!');</script>";
      }else{
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
      }
  }
  $sql="UPDATE room_alloc SET status='Allocated' WHERE E_id='$E_id' AND room_num='$room_num'";
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Room status has been changed!');</script>";
    }else{
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $sql="UPDATE fact_alloc SET Status='Allocated' WHERE Eid='$E_id' AND Fid='$Fid'";
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Faculty status has been changed!');window.location.href='matten.php';</script>";
    }else{
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

   

  
    mysqli_close($conn);
}
?>