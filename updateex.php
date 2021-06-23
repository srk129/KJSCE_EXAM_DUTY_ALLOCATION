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
      $acadyear = mysqli_real_escape_string($conn, $_POST["acadyear"]);  
      $exam = mysqli_real_escape_string($conn, $_POST["exam"]);  
      $degree = mysqli_real_escape_string($conn, $_POST["degree"]);  
      $year = mysqli_real_escape_string($conn, $_POST["year"]); 
      $sem = mysqli_real_escape_string($conn, $_POST["sem"]);  
      $semnum = mysqli_real_escape_string($conn, $_POST["semnum"]);  
      $deptid = mysqli_real_escape_string($conn, $_POST["deptid"]);  
      $dept = mysqli_real_escape_string($conn, $_POST["dept"]);  
      $cocode = mysqli_real_escape_string($conn, $_POST["cocode"]);  
      $coname = mysqli_real_escape_string($conn, $_POST["coname"]);  
      $examdt = mysqli_real_escape_string($conn, $_POST["examdt"]);  
      $examslot = mysqli_real_escape_string($conn, $_POST["examslot"]);  
      $exmtime = mysqli_real_escape_string($conn, $_POST["examtime"]);  
      $weeknum = mysqli_real_escape_string($conn, $_POST["weeknum"]);  

      if($_POST["Eid"] != '')  
      {  
           $query = "  
           UPDATE Faculty_data   
           SET  Academic_year='$acadyear', 
           Year_slot='$exam',
           Degree ='$degree', 
           Year ='$year', 
           Sem = '$sem', 
           Sem_No ='$semnum',
           Dept_id = '$deptid',
           Dept_name = '$dept',
           Course_Code = '$cocode', 
           Course_Name = '$coname',
           Exam_date = '$examdt' ,
           Exam_slot = '$examslot',
           Exam_time = '$examtime',
           weeknum = '$weeknum',                    
           WHERE E_id='".$_POST["Eid"]."'"; 
           if(mysqli_query($conn, $query))  
          {  
           $output .= '<label class="text-success">' . $message . '</label>';  
          }  
          else{
               echo"";
          }
          echo $output;  

 }          

      }  
      /*else  
      {  
     $query = "
     INSERT INTO Faculty_data(Fid, Fname, Femail, Fdept, Fdesignation, Fgender, Fphone, join_date) 
     VALUES ('$f_id', '$f_name', '$f_email', '$f_dept', '$f_post', '$f_gender', '$f_phoneno',  CURRENT_TIMESTAMP());
     ";
     $message = 'Data Inserted';  
      }  */

 ?>

<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
      <script>
          setTimeout(function () {
              window.location.replace("editfaculty.php"); //will redirect to main page (index.html)
          }, 3000); //will call the function after 3 secs.
      </script> 
				


               