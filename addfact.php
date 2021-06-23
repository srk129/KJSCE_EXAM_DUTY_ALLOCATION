<!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>  -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
 include_once 'Datasource.php';

if(isset($_POST['save'])) {//Check it is comming from a form

	//mysql credentials
  $f_id = $_POST["Fid"];
  $fn = $_POST["Fname"]; 
  $f_email = $_POST["Femail"];
  $f_dept = $_POST["Fdept"];
  $f_post = $_POST["Fdesig"];
  $f_gender = $_POST["Fgender"];
  $f_phoneno = $_POST["Fphone"];
 
  $f_name=ucfirst($fn) ;
	if (empty($f_id)){
		die("Please enter employee id");
    }
    if (empty($f_name)){
		die("Please enter name");
    }

	if (empty($f_email)){
		die("Please enter valid email address");
	}
	if (empty($f_post)){
		die("Please enter designation");
    }	
    if(empty($f_gender)){
        die("Please enter gender");
    }
    if(empty($f_phoneno)){
        die("Please enter phone no.");
    }
    if(empty($f_dept)){
        die("Please enter department");
    }

    $sql = "INSERT INTO Faculty_data (Fid, Fname, Femail, Fdept, Fdesignation, Fgender, Fphone, alloc_count,join_date) VALUES ('$f_id', '$f_name', '$f_email', '$f_dept', '$f_post', '$f_gender', '$f_phoneno', '0', CURRENT_TIMESTAMP())";
               
	if (mysqli_query($conn, $sql)) {
    echo'swal.fire({
      icon: "success",
      text:"Faculty is added!",
    });';
    header('Location: Fileaddfact.php');
	} else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
  }
 
	mysqli_close($conn);
	}
?>