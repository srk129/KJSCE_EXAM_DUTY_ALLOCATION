<?php
require('Datasource.php');
$room_num=$_REQUEST['room_num'];
$e_id=$_REQUEST['E_id'];
$query = "DELETE FROM fact_alloc WHERE room_num = '$room_num' AND E_id='$e_id'"; 
if (mysqli_query($conn,$query)){
    echo "<script>alert('Record has been deleted successfully !');</script>";
}
else{
    echo "Error: " . $query . "
      " . mysqli_error($conn);
}
mysqli_close($conn);
?>