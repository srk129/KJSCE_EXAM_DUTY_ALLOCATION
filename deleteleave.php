<?php
    include('config/db_connect.php');
    $id=$_REQUEST['facultyid'];
    $mainQuery = "DELETE FROM availfaculty WHERE facultyid='$id'"; 
    //$result = mysqli_query($conn,$mainQuery) or die ( mysqli_error());
    //return $result;
    if (mysqli_query($conn,$mainQuery)){
        echo "<script>alert('Record has been deleted successfully !');window.location.href='leavefact.php';</script>";
    }
    else{
        die ( mysqli_error());
    }
      /*$id=$_REQUEST['id'];
$query = "DELETE FROM new_record WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: view.php");  */
?>