<?php
require('Datasource.php');
$f_id=$_REQUEST['Fid'];
$e_id=$_REQUEST['Eid'];
$query = "DELETE FROM fact_alloc WHERE Fid = '$f_id' AND Eid='$e_id'"; 
if (mysqli_query($conn,$query)){
    echo "<script>alert('Record has been deleted successfully !');</script>";
}
else{
    echo "Error: " . $query . "
      " . mysqli_error($conn);
}

$sql = " UPDATE faculty_data SET alloc_count = alloc_count-1  WHERE Fid='$f_id'";
if (mysqli_query($conn,$sql)){
    echo "<script>alert('Faculty allocate count is decreased!!!');window.location.href='factallocate.php';</script>";
}
else{
    echo "Error: " . $qsql . "
      " . mysqli_error($conn);
}
mysqli_close($conn);
?>