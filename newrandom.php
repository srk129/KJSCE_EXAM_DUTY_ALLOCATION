<!DOCTYPE html>
<html>
<body>
<?php

include_once 'Datasource.php'; //This is for db connection
if(isset($_POST['submit'])) {//
  $totalroom = $_POST["totalroom"];
  $reqroom = $_POST["reqroom"];
  $totalfact = $_POST["totalfact"];
  $reqfact = $_POST["reqfact"];

  //echo $no;
  //SELECT DISTINCT availfaculty.facultyname,availfaculty.facultyid,exam_schedule.Course_Code,exam_schedule.Course_Name,exam_schedule.Exam_date,exam_schedule.Exam_slot,exam_schedule.Exam_time from availfaculty inner join exam_schedule ON availfaculty.weeknum=exam_schedule.weeknum WHERE factstat='Available' ORDER BY RAND() limit 6
$query="INSERT INTO () VALUES(SELECT * FROM availfaculty join exam_schedule WHERE factstat='Available' ON availfaculty.weeknum=exam_schedule.weeknum  ORDER BY RAND($reqfact);)";
$result = mysqli_query($conn,$query); 
while ($row = mysqli_fetch_assoc($result)) {
    $a[] =  array($row['facultyid'] => $row['facultyname']);    //Store the values in array
}

$random=array_rand($a,$reqfact);    




echo "Allocated faculty are:<br><br>"; // Print the room number allocated

?>


<table>
  <thead>
    <th>Faculty id</th>
    <th>Faculty name</th>

</thead>
<?php
for ($i = 0; $i < $no; $i++) {   
  foreach($a[$random[$i]] as $x => $x_value) {?>
  <tr>
  <td><?php echo  $x ;?></td>
  <td><?php echo $x_value;?></td>
  </tr>
  <?php
   }
}
mysqli_close($conn);
}
?>





</body>
</html>


