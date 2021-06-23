<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>  
<?php
require('Datasource.php');
$f_id=$_REQUEST['Fid'];
$query = "DELETE FROM Faculty_data WHERE Fid = '$f_id'"; 
if (mysqli_query($conn, $query)) {
    /*echo "<script>swal.fire({
        icon: 'success',
        text:'Faculty has been deleted',
      });window.location.href='del.php';</script>";*/
    echo "<script>alert('Faculty has been deleted!');window.location.href='del.php';</script>";
  }else{
   echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
//$result = mysqli_query($conn,$query) or die ( mysqli_error());
//header("Location: del.php"); 
?>
