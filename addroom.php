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
            <i class="fas fa-power-off">Logout</i>
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
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="Duty.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
         </li>


         
         <li class="nav-header">FACULTY</li>
<li class="nav-item has-treeview">
  <a href="Fileaddfact.php" class="nav-link ">
      <i class="nav-icon fa fa-info-circle "></i> 
    <p>
      Faculty Information
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="Fileaddfact.php" class="nav-link">
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
  <a href="#" class="nav-link">
      <i class="nav-icon 	fas fa-file-import	 "></i> 
    <p>
       Available Information
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="factpfile.php" class="nav-link">
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
      <a href="exam.php" class="nav-link">
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
      <a href="Leaveadd.html" class="nav-link">
           <i class="fas fa-plus nav-icon"></i>
           <p>Allocate</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="Leaveview.html" class="nav-link">
          <i class=" fas fa-eye nav-icon"></i>
          <p>View Report</p>
      </a>
    </li>
  </ul>
</li>
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
      <i class="fas fa-eye nav-icon"></i>
    <p>
      View  Allocation              
    </p>
  </a>
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
            <h1 class="m-0 text-dark">Add Room Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Room </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="col-md-12">
        <div class="card-header p-2">
          <ul class="nav nav-pills bg-white">
            <!--<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Upload file</a></li>-->
            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Add Room availability</a></li>
          </ul>
        </div>
    </div>
    <!-- /.content-header -->
    <div class="card-body">
      <div class="tab-content">
        
        <!-- /.tab-pane -->
        <div class="tab-pane" id="timeline">
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Room add</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="Duty.php">Home</a></li>
                    <li class="breadcrumb-item "><a href="addroom.php">Add</a></li>
                    <li class="breadcrumb-item active">Add Room availability </li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!--/.content-header-->
          <!-- Main content -->
          <section class="content">
            <form action ="addroom-script.php" method="post" enctype="multipart/form-data">
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
                            <label for="room_num">Room Number:</label>
                              <input type="text" class="form-control" name="room_num" id="room_num" ></input>
                          </div>
                            <div class="form-group">
                              <label for="room_stat">Room Status:</label>
                              <select class="form-control custom-select" name="room_stat"> 
                                <option selected disabled>Select</option>
                                <option id="avail">Available</option>
                                <option id="notavail">Not available</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="room_dt">Room Date:</label>
                              <input type="date"  class="form-control"name="room_dt" id="room_dt" ></input>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                            <label for="room_slot">Room slot:</label>
                              <select class="form-control custom-select" name="room_slot">
                                <option selected disabled>Select one</option>
                                <option id="eve">Evening</option>
                                <option id="morn">Morning</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="room_time">Room time slot:</label>
                              <select class="form-control custom-select" name="room_time">
                                <option selected disabled>Select one</option>
                                <option id="1">10:30-1:30</option>
                                <option id="2">2:30-5:30</option>
                              </select>
                            </div>
                            <!-- /.form-group -->
                        </div>
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

