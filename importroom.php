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
function convert_date($date_string){
  $date = DateTime::createFromFormat('Y-m-d', $date_string); //2016-10-05 16:00
  return $date;
};
for ($row = 2; $row <= $highestRow; $row++)
{
  /*$cell = $sheet->getCellByColumnAndRow(3, $row);
if (PHPExcel_Shared_Date::isDateTime($cell)) {
   $dt = $cell->getValue();
   $date = PHPExcel_Shared_Date::PHPExcel_Shared_Date::ExcelToPHP(convert_date($dt))); 
} else {
    $date = $cell->getValue();
}*/
 $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
 $sql = "INSERT INTO room_data (room_num, room_stat, room_dt, room_slot, room_time, add_time)
 VALUES ('".$rowData[0][0]."', '".$rowData[0][1]."', '".$rowData[0][2]."', '".$rowData[0][3]."','".$rowData[0][4]."', CURRENT_TIMESTAMP())";

  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Excel file has been uploaded successfully for Room availability!');window.location.href='l.php';</script>";
  }else{
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
}
?>