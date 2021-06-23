<?php
    include('config/db_connect.php');
    if(isset($_POST['submit'])){
        $id= $_POST['facultyid'];
        $name = $_POST['facultyname'];
        $dept = $_POST['department'];
        $wno =  $_POST['weeknum'];
        $dtrg = $_POST['daterange'];
        $query ="UPDATE availfaculty SET facultyname='$name', department='$dept',weeknum='$wno',daterange='$dtrg' WHERE facultyid='$id' ";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
            echo"<script>alert('Record updated successfully!');window.location.href='leavefact.php';</script>";
            //echo"<script>alert('Record updated successfully!');</script>";
        }
        else{
            die ( mysqli_error());
        }
    }
?>