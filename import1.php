
<?php
require 'PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';
require 'PHPExcel-1.8/Classes/PHPExcel.php';
include_once 'Datasource.php';


$inputfilename = $_FILES['examFile']['tmp_name'];

$exceldata = array();


if (isset($_POST['submit']))
{
 
 if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
 }
}

try
{
 $inputfiletype = PHPExcel_IOFactory::identify($inputfilename);
 $objReader = PHPExcel_IOFactory::createReader($inputfiletype);
 $objPHPExcel = $objReader->load($inputfilename);
}
catch(Exception $e)
{
 die('Error loading file "'.pathinfo($inputfilename,PATHINFO_BASENAME).'": '.$e->getMessage());
}

$sheet = $objPHPExcel->getSheet(0);
$highestRow = $sheet->getHighestRow();
$highestColumn = $sheet->getHighestColumn();

for ($row = 2; $row <= $highestRow; $row++)
{
  $order_id = uniqid();

 $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
 $sql = "INSERT INTO  exam_schedule (E_id, Academic_year, Year_slot,	Degree,	Year, Sem, Sem_No, Dept_id, Dept_name,	Course_Code,	Course_Name, Exam_date,	Exam_slot,	Exam_time,  weeknum, insert_date)
 VALUES ('$order_id', '".$rowData[0][0]."', '".$rowData[0][1]."', '".$rowData[0][2]."', '".$rowData[0][3]."','".$rowData[0][4]."', '".$rowData[0][5]."', '".$rowData[0][6]."', '".$rowData[0][7]."', '".$rowData[0][8]."','".$rowData[0][9]."', '".$rowData[0][10]."', '".$rowData[0][11]."','".$rowData[0][12]."',  '".$rowData[0][13]."', CURRENT_TIMESTAMP())";

  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Excel file has been uploaded successfully for Exam Details!');window.location.href='examschedule.php';</script>";
  }else{
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
}
?>











