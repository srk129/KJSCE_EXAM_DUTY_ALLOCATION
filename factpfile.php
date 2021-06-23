<?php
  session_start();
  include_once 'Datasource.php';
  if($_SESSION["type"] != "admin"){
    header('location:newhome.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
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
        <!--<div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>-->
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="Duty.php" class="nav-link ">
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
              <a href="Fileaddfact.php" class="nav-link ">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="editfaculty.php" class="nav-link">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>Edit</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="del.php" class="nav-link">
                  <i class="fas fa-trash nav-icon"></i>
                  <p> Delete</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="facultyview.php" class="nav-link">
                  <i class="fas fa-search nav-icon"></i>
                  <p>View</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">FACULTY AVAILABILITY STATUS</li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-export "></i> 
            <p>
              Leave Information
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="leaveadd.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add leave report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="leavefact.php" class="nav-link">
                  <i class=" fas fa-eye nav-icon"></i>
                  <p>View leave Report</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link active">
              <i class="nav-icon 	fas fa-file-import	 "></i> 
            <p>
              Available Information
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="factpfile.php" class="nav-link active">
                  <i class="fa fa-upload nav-icon"></i>
                  <p>Upload availability file</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="viewavail.php" class="nav-link">
                  <i class="fas fa-eye nav-icon"></i>
                  <p>View availability file</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="allavail.php" class="nav-link">
              <i class=" fas fa-eye nav-icon"></i> 
            <p>
              View availability status               
            </p>
          </a>
        </li>

        <li class="nav-header">ALLOCATION</li>
        <li class="nav-item has-treeview">
          <a href="ex.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i> 
            <p>
              Exam details   
              <i class="fas fa-angle-left right"></i>
                    
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="ex.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add exam schedule</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="examschedule.php" class="nav-link">
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
              <a href="allocateex.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Allocate Exam</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="factallocate.php" class="nav-link">
                  <i class=" fas fa-eye nav-icon"></i>
                  <p>View Exam Allocation Report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="roomalloc.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Allocate Room</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="roomview.php" class="nav-link">
                  <i class=" fas fa-eye nav-icon"></i>
                  <p>View Room Allocation Report</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">ATTENDENCE</li>
        <li class="nav-item has-treeview">
          <a href="matten.php" class="nav-link">
              <i class="fas fa-user-check  nav-icon"></i>
            <p>
              Mark Attendence               
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="vatten.php" class="nav-link">
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
            <h1 class="m-0 text-dark">Add availability report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add leave </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="col-md-12">
        <div class="card-header p-2">
          <ul class="nav nav-pills bg-white">
            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Upload file</a></li>
            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Add Faculty Availability  </a></li>
          </ul>
        </div>
    </div>
    <!-- /.content-header -->
    <div class="card-body">
      <div class="tab-content">
        <div class="active tab-pane" id="activity">
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Upload file</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="Duty.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="leaveadd.php">Add</a></li>
                    <li class="breadcrumb-item active">upload file </li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
          <section>
            <form action="importavail.php" method="post" enctype="multipart/form-data">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="preview-zone hidden">
                        <div class="box box-solid">
                          <div class="box-header with-border">
                            <div><b>Preview</b></div>
                            <div class="box-tools pull-right">
                              <button type="button" class="btn btn-danger btn-xs remove-preview">
                                <i class="fa fa-times"></i> Reset The Field
                              </button>
                            </div>
                          </div>
                          <div class="box-body"></div>
                        </div>
                      </div>
                      <div class="dropzone-wrapper " >
                        <div class="dropzone-desc" >
                        <i class="fa fa-download" aria-hidden="true"></i>
                        <div>Select a file or drag here</div>
                        </div>
                        <input type="file"  name="facultyFile" class="dropzone" accept=".xls,.xlsx,.csv">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 ">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-primary" id="uploadBtn" value="Upload Excel">Upload</button>
                        <!--<span class="input-group-text" id="">Upload</span>-->
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </section>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="timeline">
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Faculty add</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="Duty.php">Home</a></li>
                    <li class="breadcrumb-item "><a href="leaveadd.php">Add</a></li>
                    <li class="breadcrumb-item active">Add faculty Availability </li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!--/.content-header-->
          <!-- Main content -->
          <section class="content">
            <form action ="addavail-script.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-12">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Add report</h3>
        
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fas fa-minus"></i></button>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-4">
                        <div class="form-group">
                          <label for="facultyid">Faculty ID:</label>
                            <input type="text" class="form-control" name="facultyid" id="facultyid" ></input>
                          </div>
                        <div class="form-group">
                          <label for="facultyname">Faculty Name:</label>
                            <input type="text"  class="form-control"name="facultyname" id="facultyname" ></input>
                          </div>
                          
                          <div class="form-group">
                          <label for="weekNum">Week No.</label>
                            <select class="form-control custom-select" name="weeknum"> 
                              <option selected disabled>Select</option>
                              <option id="one">1</option>
                              <option id="two">2</option>
                              <option id="three">3</option>
                              <option id="four">4</option>
                              <option id="five">5</option>
                            </select>
                          </div>
                          <!-- /.form-group -->
                          <div class="form-group">
                          <label for="department">Department</label>
                            <select class="form-control custom-select" name="department">
                              <option selected disabled>Select one</option>
                              <option id="1">COMPS</option>
                              <option id="2">ETRX</option>
                              <option id="3">EXTC</option>
                              <option id="4">IT</option>
                              <option id="5">MECH</option>
                            </select>
                          </div>
                          <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-8">
                          <div class="form-group">
                            <label for="daterange">Date range:</label>
                
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="far fa-calendar-alt"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control float-right" id="daterange"name="daterange">
                            </div>
                            <!-- /.input group -->
                          </div>
                          <!-- /.form-group -->
                          
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                  <!-- /.card -->
                </div>
              </div>   
              <!-- Upload  -->
            </div><!-- /.card-header -->
            </form>
        </section>
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.card-body -->

        <!-- SELECT2 EXAMPLE -->
       
    
  



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
<?php include_once('profile.php')?>
       
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



<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>



<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

   

  })
</script>
</body>
</html>
