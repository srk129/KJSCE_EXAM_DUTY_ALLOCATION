 
<?php  
include_once 'Datasource.php';
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $no = $_POST["reqfact"];
      $ex_id=$_POST["E_id"];
      $ex_date=$_POST["Exam_date"];
      $ex_time=$_POST["Exam_time"];
      $ex_slot=$_POST["Exam_slot"];
if($_POST["E_id"] != '')  
      {  
           $query = "  
           INSERT into fact_alloc(Fid,Fact_name,Ex_date,Ex_time,Eid,Ex_slot) SELECT Distinct availfaculty.facultyid, availfaculty.facultyname,'$ex_date','$ex_time','$ex_id','$ex_slot'
           FROM availfaculty,exam_schedule,faculty_data,fact_alloc
           WHERE exam_schedule.weeknum=availfaculty.weeknum and availfaculty.facultyid=faculty_data.Fid and  factstat='Available' and faculty_data.alloc_count<6 and exam_schedule.E_id = '$ex_id'
           and facultyid not in (select Fid from fact_alloc where Ex_date='$ex_date' and Ex_time='$ex_time')
           ORDER BY RAND() limit $no; "; 
      }  
 

      if (mysqli_query($conn, $query)) {
          echo "<script>alert('Faculty has been allocated an exam slot!!!');</script>";
      } else {
        echo "Error: " . $query . "
      " . mysqli_error($conn);
      }
      $sql = "
      SELECT Fid FROM fact_alloc where Eid='$ex_id'
      ";
      $result = mysqli_query($conn, $sql);
      $a = Array();
      while ($row = mysqli_fetch_assoc($result)) {
          $a[] =  $row['Fid'];
            //Store the values in array
      }
      print_r($a) ;
      print_r($a[0]) ;
      for ($i = 0; $i < $no ; $i++) {
        $sql = "UPDATE faculty_data SET alloc_count=alloc_count+1  WHERE Fid='$a[$i]'";
      if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Faculty allocate count is increased!!!');window.location.href='factallocate.php';</script>";
       } else {
         echo "Error: " . $sql . "
       " . mysqli_error($conn);
       }
        
      }
      
      mysqli_close($conn);

 }  
 ?>