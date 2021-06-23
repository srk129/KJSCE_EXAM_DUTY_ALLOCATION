<?php
include_once 'Datasource.php';

if(isset($_POST['submit'])) {//Check it is comming from a form
  $E_id = uniqid();
	//mysql credentials
  $e_ac = $_POST["aca_year"];
  $ex = $_POST["exam"]; 
  $e_deg = $_POST["degree"];
  $e_year = $_POST["year"];
  $e_sem = $_POST["sem"];
  $e_sem_no = $_POST["sem_no"];
  $e_did = $_POST["d_id"];
  $e_dname = $_POST["d_name"];
 
	if (empty($e_ac)){
		die("Please enter academic year");
    }
    if (empty($ex)){
		die("Please enter exam");
    }

	if (empty($e_deg)){
		die("Please enter degree");
	}
	if (empty($e_year)){
		die("Please enter year");
    }	
    if(empty($e_sem)){
        die("Please enter sem");
    }
    if(empty($e_sem_no)){
        die("Please enter sem no.");
    }
    if(empty($e_did)){
        die("Please enter department id");
    }
    if(empty($e_dname)){
        die("Please enter department name");
    }

    $sql = "INSERT INTO exam_dept (Ex_id, Academic_Year, Year_Slot,	Degree,	Year, Sem,	Sem_No,	Dept_id, Dept_name,	in_date	) VALUES ('$E_id', '$e_ac', '$ex', '$e_deg', '$e_year', '$e_sem', '$e_sem_no', '$e_did', '$e_dname',  CURRENT_TIMESTAMP())";
               


  if(isset($_POST["Course_Code"]))
  {
  $connect = new PDO("mysql:host=localhost;dbname=examdata", "shreyak", "test123");
  
   for($count = 0; $count < count($_POST["Course_Code"]); $count++)
   {  
    $query = "INSERT INTO exam_course  
    (Course_Code,	Course_Name, Exam_id, Exam_date, Exam_slot,	Exam_time,	insert_time	) 
    VALUES (:Course_Code,	:Course_Name, :Exam_id, :Exam_date, :Exam_slot,	:Exam_time,	CURRENT_TIMESTAMP()	) 
    ";
    $statement = $connect->prepare($query);
    $statement->execute(
     array(
      
      ':Course_Code'  => $_POST["Course_Code"][$count], 
      ':Course_Name' => $_POST["Course_Name"][$count],
      ':Exam_id'   => $E_id, 
      ':Exam_date'  => $_POST["Exam_date"][$count],
      ':Exam_slot'  => $_POST["Exam_slot"][$count],
      ':Exam_time'  => $_POST["Exam_time"][$count]
     )
    );
   }
   $result = $statement->fetchAll();
   if(isset($result))
   {
    echo "<script>alert('New record has been added successfully !');window.location.href='ex.php';</script>";
   }
  }
	if (!mysqli_query($conn, $sql)) {
        echo "Error: " . $sql . "
    " . mysqli_error($conn);
      }

 
	mysqli_close($conn);
	}
?>















