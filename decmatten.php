<?php
 session_start();
 include_once 'Datasource.php';
  if($_SESSION["type"] != "manager"){ 
    header('location:newhome.php');
 }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DEC | Dashboard</title>
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
  <link href="./css/sty.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php include_once('navbar.php');?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <?php include_once('name.php');?>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
         </li>
         <li class="nav-header">FACULTY</li>
<li class="nav-item has-treeview">
  <a href="Fileaddfact.php" class="nav-link">
      <i class="nav-icon fa fa-info-circle "></i> 
    <p>
      Faculty Information
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="decf.php" class="nav-link">
          <i class="fas fa-search nav-icon"></i>
          <p>View</p>
      </a>
    </li>
  </ul>
</li>
<li class="nav-header">FACULTY AVAILABILITY STATUS</li>
<li class="nav-item has-treeview">
  <a href="decallavail.php" class="nav-link">
      <i class=" fas fa-eye nav-icon"></i> 
    <p>
      View availability status               
    </p>
  </a>
</li>

<li class="nav-header">ALLOCATION</li>
<li class="nav-item has-treeview">
  <a href="#" class="nav-link active">
      <i class="nav-icon fas fa-book"></i> 
    <p>
       Exam details   
       <i class="fas fa-angle-left right"></i>
            
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="decex.php" class="nav-link active">
           <i class="fas fa-plus nav-icon"></i>
           <p>Add exam schedule</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="decexamschedule.php" class="nav-link">
          <i class=" fas fa-eye nav-icon"></i>
          <p>View exam schedule</p>
      </a>
    </li>
  </ul>
</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<style> img {  
              filter: grayscale(100%);  
              filter: brightness(0) invert(1);
              
          } </style>
    <img src="alloc.png" class="ml-1 mr-2" style=" width: 10%; height: 10%;"></img>
  <p>
      Allocation   
      <i class="fas fa-angle-left right"></i>
        
  </p>
</a>
<ul class="nav nav-treeview">
  <li class="nav-item">
    <a href="decallocateex.php" class="nav-link">
        <i class="fas fa-plus nav-icon"></i>
        <p>Allocate Exam</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="decfactallocate.php" class="nav-link">
        <i class=" fas fa-eye nav-icon"></i>
        <p>View Exam Allocation Report</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="decroomalloc.php" class="nav-link">
        <i class="fas fa-plus nav-icon"></i>
        <p>Allocate Room</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="decroomview.php" class="nav-link">
        <i class=" fas fa-eye nav-icon"></i>
        <p>View Room Allocation Report</p>
    </a>
  </li>
</ul>
</li>
<li class="nav-header">ATTENDENCE</li>
<li class="nav-item has-treeview">
<a href="decmatten.php" class="nav-link">
    <i class="fas fa-user-check  nav-icon"></i>
  <p>
    Mark Attendence               
  </p>
</a>
</li>
<li class="nav-item has-treeview">
<a href="decvatten.php" class="nav-link">
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
            <h1 class="m-0 text-dark">Mark attendance</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Duty.html">Home</a></li>
              <li class="breadcrumb-item active">Mark attendance </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Search info</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
            <div class="row">
              <div class="col-3 form-group">
                <label for="inputName">Facuty Id</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="col-4 form-group">
                <label for="inputName">Faculty Name</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class=" col-3  form-group">
                <label for="inputStatus">Department</label>
                <select class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>COMPS</option>
                  <option>ETRX</option>
                  <option>EXTC</option>
                  <option>IT</option>
                  <option>MECH</option>
                </select>
              </div>
              <div class=" col-2 form-group">
                <a class="btn btn-secondary btn-sm" href="#">
                  <i class="fas fa-search">
                  </i>
                  Search
              </a>
              </div>
            </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </section>


    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Mark attendance</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0 table-responsive">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                    <th><strong>Faculty id</strong></th>
                    <th><strong>Faculty name</strong></th>
                    <th><strong>Department</strong></th>
                    <th><strong>Exam date</strong></th>
                    <th><strong>Exam slot</strong></th>
                    <th><strong>Exam time</strong></th>
                    <th><strong></strong></th>
                    <th><strong>Block allotted</strong></th>
                    <th><strong>Entry time</strong></th>
                    <th><strong>Mark attendance</strong></th>

                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Com123</td>
                      <td>Rahul Yash Sharma</td>
                      <td>COMPS</td>
                      <td>20-05-2020</td>
                      <td>Morning</td>
                      <td>10:30 am - 1:30 pm</td>
                      <td><a class="btn btn-primary btn-sm" href="#">
                        Generate
                    </a></td>
                    <td></td>
                    <td></td>
                    <td>
                         <div class="form-check">&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox">
                         </div>
                        </td>

                  </tr>


                            
                
              </tbody>
          </table>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>

 







  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="sidebar flex-column">
        
      <ul class="nav float-right">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-ellipsis-v mr-1"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right col-1">

            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#myMod"style="color: black;max-width: 75%;">
              <i class="fas fa-user-edit mr-1"></i> Edit profile
            </a>
            <div class="dropdown-divider"></div>
            </div>
        </li>
      </ul>
      <?php include_once('profile.php');?> 
       
            <!--<div class="mr-3 text-center">
              <img class="ml-5 mt-5 mb-3 profile-user-img img-fluid img-circle  elevation-2"
                   src="dist/img/user2-160x160.jpg"
                   alt="User profile picture">
                  <p style="font-size:x-large;color: white;">  Alexander Pierce   </p>
                   <p class="user-panel">Professor<br/><br/></p>
            </div>-->
      
        
        
          <!-- /.card-header -->
          <!--<div  style="color:gainsboro;">
            <strong><i class="fas fa-id-badge mr-1"></i> Faculty Id</strong>

            <p style="color: 		rgba(184, 184, 184, 0.712);" >
             CMP123
            </p>

            <hr style="color: white">
            <strong><i class="fas fa-envelope mr-1"></i> Email-Id</strong>

            <p style="color: 		rgba(184, 184, 184, 0.712);" >
             alaxander.p@somaiya.edu
            </p>

            <hr>
            <strong><i class="fas fa-building mr-1"></i> Department</strong>

            <p style="color: 		rgba(184, 184, 184, 0.712);" >
             COMPS
            </p>

            <hr>
            <strong><i class="fas fa-phone-alt mr-1"></i> Phone No.</strong>

            <p style="color: 		rgba(184, 184, 184, 0.712);" >
             9878589856
            </p>

            <hr>
            <strong><i class="fas fa-user mr-1"></i> Gender</strong>

            <p style="color: 		rgba(184, 184, 184, 0.712);" >
             Male
            </p>

            <hr>

            <strong><i class="fas fa-book mr-1"></i> Education</strong>

            <p style="color: 		rgba(184, 184, 184, 0.712);" >
              B.S. in Computer Science from the University of Tennessee at Knoxville
            </p>

            <hr>
            

           </div>-->
          <!-- /.card-body -->
   
    </div>
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