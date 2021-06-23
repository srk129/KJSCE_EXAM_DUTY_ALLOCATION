<?php

include('config/db_connect.php');

include_once('common.php');
      // escape sql chars
      $weeknum1 =  $conn->real_escape_string( $_POST['weeknum']);
      $department1 =   $conn->real_escape_string( $_POST['department']);
      $daterange1 =   $conn->real_escape_string( $_POST['daterange']);
      $facultyid1 =   $conn->real_escape_string( $_POST['facultyid']);
      $facultyname1 =   $conn->real_escape_string( $_POST['facultyname']);
      
			// create sql
			/*$sql = "INSERT INTO exam(academic_year, exam, sem_num, sem, year, date_range, department, num_days,examdate,subject,timer,timeslot ,maxduty ,factreq ,factavail,roomreq,roomavail) VALUES ('$academic_year','$exam','$sem_num','$sem','$year' , '$date_range','$department' ,'$num_days',' $examdate' ,'$subject','$timer','$timeslot','$maxduty','$factreq','$factavail','$roomreq','$roomavail')";
      if (mysqli_query($conn,$sql)) {
        echo "New record created successfully";
        //header("Location:aftexam.php");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      /*if (!mysqli_query($conn,$sql)) {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }*/
      $common = new Common();
      $SheetUpdate = $common->uploadData($conn,$weeknum1,$department1,$daterange1,$facultyname1,$facultyid1);
      if ($SheetUpdate){
        echo "<script>alert('New record has been added successfully !');window.location.href='leaveadd.php';</script>";
      }
?>