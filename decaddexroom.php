
<?php
include_once 'Datasource.php';
if(!empty($_POST['submit'])) {//Check it is comming from a form
    //$room_id = uniqid();

    //mysql credentials
    $E_id = $_POST["E_id"];
   $Exam_date=$_POST["Exam_date"] ;
   $Exam_time=$_POST["Exam_time"] ;
   $Exam_slot=$_POST["Exam_slot"] ;
  if(isset($_POST["room_num"])){
    foreach ($_POST["room_num"] as $row){
      //$query = "INSERT INTO room_alloc (Exam_date, Exam_time, Exam_slot, room_num, insert_date) SELECT  VALUES ('$Exam_date', '$Exam_time', '$Exam_slot', '$row',CURRENT_TIMESTAMP()) ";
      $query = "INSERT INTO room_alloc (E_id,Exam_date, Exam_time, Exam_slot, room_num, insert_date) VALUES ('$E_id','$Exam_date', '$Exam_time', '$Exam_slot', '$row',CURRENT_TIMESTAMP())";
      if (mysqli_query($conn, $query)) {
      echo "<script>alert('Record has been uploaded successfully for Room allotment!');window.location.href='roomalloc.php';</script>";
      }else{
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
      }
    };
  }
   

  
    mysqli_close($conn);
}
?>















