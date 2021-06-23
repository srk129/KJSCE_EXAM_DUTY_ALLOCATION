<?php
include('config/db_connect.php');
include_once('common.php');

if($_FILES['facultyFile']['name']) {
    $arrFileName = explode('.', $_FILES['facultyFile']['name']);
    if ($arrFileName[1] == 'csv') {
        $handle = fopen($_FILES['facultyFile']['tmp_name'], "r");
        $count = 0;
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $count++;
            if ($count == 1) {
                continue; // skip the heading header of sheet
            }
                $weeknum = $conn->real_escape_string($data[0]);
                $department = $conn->real_escape_string($data[1]);
                $daterange = $conn->real_escape_string($data[2]);
                $facultyname=   $conn->real_escape_string($data[3]);
                $facultyid =   $conn->real_escape_string($data[4]);
                $common = new Common();
                $SheetUpload = $common->uploadData($conn,$weeknum,$department,$daterange,$facultyname,$facultyid);
        }
        if ($SheetUpload){
            echo "<script>alert('Excel file has been uploaded successfully !');window.location.href='l.php';</script>";
        }
    }
}
?>
