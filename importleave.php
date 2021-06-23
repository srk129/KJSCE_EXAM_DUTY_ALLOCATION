<?php
require 'PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';
require 'PHPExcel-1.8/Classes/PHPExcel.php';
include_once 'Datasource.php';


$inputfilename = $_FILES['facultyFile']['tmp_name'];

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
 $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
 $sql = "INSERT INTO  availfaculty (weeknum,department,daterange,facultyid,facultyname,factstat,join_avail)
 VALUES ('".$rowData[0][0]."', '".$rowData[0][1]."', '".$rowData[0][2]."', '".$rowData[0][3]."','".$rowData[0][4]."','On Leave', CURRENT_TIMESTAMP())";

  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Excel file has been uploaded successfully for faculty leave!');window.location.href='leavefact.php';</script>";
  }else{
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
}
?>