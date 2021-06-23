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
$query="SELECT facultyid, facultyname FROM availfaculty join exam_schedule WHERE factstat='Available',availfaculty.weeknum=exam_schedule.weeknum  ORDER BY RAND();";
$result = mysqli_query($conn,$query); 
$a = Array();
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


