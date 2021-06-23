<?php
session_start();
echo $_SESSION["email"];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Faculty | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel = "icon" type = "image/png" href = "kjsce.png" style="border-radius: 50%;">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home.html" class="nav-link"><i class="fa fa-fw fa-home" ></i>Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"><i class="fas fa-phone-alt" ></i>Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">

      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-power-off"></i>
       </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
        <?php

          include("Datasource.php");
          require_once 'vendor/autoload.php';
          include("Datasource.php");
              
          $query1 = "SELECT * FROM faculty_data  WHERE Femail='" . $_SESSION["email"] . "'";
          $result1 = mysqli_query($conn,$query1);

          $query2 = "SELECT * FROM user  WHERE email='" . $_SESSION["email"] . "'" ;
          $result2 = mysqli_query($conn,$query2);

          while($row1 = mysqli_fetch_assoc($result2)) {
          echo' <div>';
          $image = $row1['imgurl'];
          $imageData = base64_encode(file_get_contents($image));
          echo '<img src="data:image/jpeg;base64,'.$imageData.'" >';   
          echo '</div>'; 
          }    

        while($row = mysqli_fetch_assoc($result1)) {
          // $id = $row["Fid"];
          // $name = $row["Fname"];
          // $email = $row["Femail"];
          // $dept = $row["Fdept"];
          // $designation = $row["Fdesignation"];
          // $gender = $row["Fgender"];
          // $phone = $row["Fphone"];
          echo' <div class="mr-3 text-center">';
          echo'<p style="font-size:x-large;color: white;">';
          echo "<br><br>". $row["Fname"]. "<br><br>";
          echo '<p>' ;
          echo'<p class="user-panel">';
          echo'<br><br>'. $row["Fdesignation"]. '<br><br>';
          echo'<p>';
          echo'</div>';
          echo'<hr>';

          echo' <div  style="color:gainsboro;">';
          echo'<strong><i class="fas fa-id-badge mr-1"></i> Faculty Id</strong>';
          echo' <p style="color: 		rgba(184, 184, 184, 0.712);" >';
          echo'<br>'. $row["Fid"]. '<br><br>';
          echo'</p>';
          echo'<hr>';

          echo'<strong><i class="fas fa-id-badge mr-1"></i> Email-Id</strong>';
          echo' <p style="color: 		rgba(184, 184, 184, 0.712);" >';
          echo'<br>'. $row["Femail"]. '<br><br>';
          echo'</p>';
          echo'<hr>';

          echo'<strong><i class="fas fa-id-badge mr-1"></i> Department</strong>';
          echo' <p style="color: 		rgba(184, 184, 184, 0.712);" >';
          echo'<br>'. $row["Fdept"]. '<br><br>';
          echo'</p>';
          echo'<hr>';

          echo'<strong><i class="fas fa-id-badge mr-1"></i> Gender</strong>';
          echo' <p style="color: 		rgba(184, 184, 184, 0.712);" >';
          echo'<br>'. $row["Fgender"]. '<br><br>';
          echo'</p>';
          echo'<hr>';

          echo'<strong><i class="fas fa-id-badge mr-1"></i> Phone No.</strong>';
          echo' <p style="color: 		rgba(184, 184, 184, 0.712);" >';
          echo'<br>'. $row["Fphone"]. '<br><br>';
          echo'</p>';
          echo'<hr>';

          echo'</div>';
          
          //echo "<br>"."ID : " . $row["Fid"]. "<br>". "Name : " . $row["Fname"]. "<br>"."Email ID : " . $row["Femail"]. "<br>"."Department: " . $row["Fdept"]. "<br>"."Designation : " . $row["Fdesignation"]. "<br>"."Gender : " . $row["Fgender"]. "<br>"."Comntact No. : " . $row["Fphone"]. "<br><br>------------------------------------------<br>";
       
        }
          
          mysqli_close($conn);
          
      ?>

        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="facultydash.html" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
         </li>


       

          <li class="nav-header"> AVAILABILITY STATUS</li>
      
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
                <i class=" fas fa-eye nav-icon"></i> 
              <p>
                View availability status               
              </p>
            </a>
          </li>

          <li class="nav-header">ALLOCATION</li>
          <li class="nav-item has-treeview">
            <a href="viewall.html" class="nav-link">
                <i class="nav-icon fas fa-book"></i> 
              <p>
                View Allocation report             
              </p>
            </a>
          </li>
          <li class="nav-header">ATTENDENCE</li>
          <li class="nav-item has-treeview">
            <a href="attendance.html" class="nav-link">
                <i class="fas fa-eye nav-icon"></i>
              <p>
                View Attendence               
              </p>
            </a>
          </li>

                
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->


   <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
    <div class="sidebar">
    
    </div>
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>