 <!-- DataTables -->
 <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>  
  <?php  
include_once 'Datasource.php';
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $f_name = mysqli_real_escape_string($conn, $_POST["Fname"]);  
      $f_id = mysqli_real_escape_string($conn, $_POST["Fid"]);  
      $f_gender = mysqli_real_escape_string($conn, $_POST["Fgender"]);  
      $f_phone = mysqli_real_escape_string($conn, $_POST["Fphone"]); 
      $f_email = mysqli_real_escape_string($conn, $_POST["Femail"]);  
      $f_post = mysqli_real_escape_string($conn, $_POST["Fdesignation"]);  
      $f_dept = mysqli_real_escape_string($conn, $_POST["Fdept"]);  

      if($_POST["Fid"] != '')  
      {  
           $query = "  
           UPDATE Faculty_data   
           SET Fname='$f_name',  
           Femail='$f_email',  Fdept='$f_dept', 
           Fgender='$f_gender',   
           Fdesignation = '$f_post',   
           Fphone = '$f_phone'   
           WHERE Fid='".$_POST["Fid"]."'";  
           $message = 'Data Updated';  
         

      }  
      else  
      {  
     $query = "
     INSERT INTO Faculty_data(Fid, Fname, Femail, Fdept, Fdesignation, Fgender, Fphone, join_date) 
     VALUES ('$f_id', '$f_name', '$f_email', '$f_dept', '$f_post', '$f_gender', '$f_phoneno',  CURRENT_TIMESTAMP());
     ";
     $message = 'Data Inserted';  
      }  
if(mysqli_query($conn, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  

 
  
      }  
      echo $output;  

 }  
 ?>

<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
      <script>
          setTimeout(function () {
              window.location.replace("editfaculty.php"); //will redirect to main page (index.html)
          }, 3000); //will call the function after 3 secs.
      </script> 
				


               