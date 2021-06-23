<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>  
<?php
require('Datasource.php');
$E_id=$_REQUEST['E_id'];
$query = "DELETE FROM exam_schedule WHERE E_id = '$E_id'"; 
if (mysqli_query($conn, $query)) {
    /*echo "<script>swal.fire({
        icon: 'success',
        text:'Faculty has been deleted',
      });window.location.href='del.php';</script>";*/
    echo "<script>alert('Exam has been deleted!');window.location.href='examschedule.php';</script>";
  }else{
   echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
//$result = mysqli_query($conn,$query) or die ( mysqli_error());
//header("Location: del.php"); 
?>
