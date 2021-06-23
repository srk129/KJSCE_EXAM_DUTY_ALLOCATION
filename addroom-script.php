<?php

include('config/db_connect.php');

include_once('commonavail.php');
      // escape sql chars
      $room_num =  $conn->real_escape_string( $_POST['room_num']);
      $room_stat =   $conn->real_escape_string( $_POST['room_stat']);
      $room_dt =   $conn->real_escape_string( $_POST['room_dt']);
      $room_slot =   $conn->real_escape_string( $_POST['room_slot']);
      $room_time =   $conn->real_escape_string( $_POST['room_time']);
      
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
      $sql = "INSERT INTO room_data  SET room_num = '$room_num', room_stat = '$room_stat', room_dt = '$room_dt', room_slot = '$room_slot', room_time = '$room_time'";
      if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Record has been uploaded successfully for Room availability!');window.location.href='addroom.php';</script>";
      }else{
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>