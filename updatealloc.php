<?php
    include('config/db_connect.php');
    if(isset($_POST['submit'])){
        $fid= $_POST['facultyid'];
        $name = $_POST['facultyname'];
        $eid = $_POST['examid'];
        $exdt=  $_POST['examdate'];
        $extime = $_POST['examtime'];
        $stat = $_POST['status'];
        $query ="UPDATE fact_alloc SET Fact_name='$name', Ex_date='$exdt' ,Ex_time='$extime', Status ='$stat' WHERE fid='$fid' AND Eid ='$eid' ";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
            echo"<script>alert('Record updated successfully!');window.location.href='factallocate.php';</script>";
            //echo"<script>alert('Record updated successfully!');</script>";
        }
        else{
            die ( mysqli_error());
        }
    }
?>