<?php
include('config/db_connect.php');
include_once('commonavail.php');

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
                $daterange = $conn->real_escape_string($data[1]);
                $department = $conn->real_escape_string($data[2]);
                $facultyid =   $conn->real_escape_string($data[3]);
                $facultyname =   $conn->real_escape_string($data[4]);
                $common = new Common();
                $SheetUpload = $common->uploadData($conn,$weeknum,$department,$daterange,$facultyid,$facultyname);
        }
        if ($SheetUpload){
            echo "<script>alert('Excel file has been uploaded successfully !');window.location.href='v.php';</script>";
        }
    }
}
?>