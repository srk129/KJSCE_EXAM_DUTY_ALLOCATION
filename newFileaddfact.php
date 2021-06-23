<?php
session_start();
// if($_SESSION["type"] != "admin"){ 
//   echo'<br><br><img src="access-denied.jpg" alt="" class="img-fluid" width="100%">';
//   die; 
// }
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

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

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
        <a href="login/home.php" class="nav-link"><i class="fa fa-fw fa-home mr-1" ></i>Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="login/home.php" class="nav-link"><i class="fas fa-phone-alt mr-1" ></i>Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search "></i>
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

      <li class="nav-item ">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-power-off mr-1"></i>Logout
       </a>
       <script>
            function signOut(){
        var auth2 = gapi.auth2.getAuthInstance();
      auth2.signOut().then(function () {
        console.log('User signed out.');
      });
      }

function onLoad() {
      gapi.load('auth2', function() {
        gapi.auth2.init();
      });
    }

</script>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar scrollbar scrollbar-secondary">
      
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        
          <a class="nav-link d-block "   data-widget="control-sidebar" data-slide="true" href="#" role="button">
            Alexander Pierce    <i class="fas fa-angle-right left ml-3" style="color: white;"></i></a>
        
        
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
          <a href="Fileaddfact.php" class="nav-link active">
              <i class="nav-icon fa fa-info-circle "></i> 
            <p>
              Faculty Information
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="Fileaddfact.php" class="nav-link active">
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
              <a href="f.php" class="nav-link">
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
              <a href="l.php" class="nav-link">
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
              <a href="v.php" class="nav-link">
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
    <br><br>
    <div class="row">
        <div class="col-md-12">
            
              <div class="card-header p-2">
                <ul class="nav nav-pills bg-white">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Upload file</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Add Faculty</a></li>
                </ul>
              </div><!-- /.card-header -->
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
                              <li class="breadcrumb-item"><a href="Fileadd.html">Add</a></li>
                              <li class="breadcrumb-item active">upload file </li>
                            </ol>
                          </div><!-- /.col -->
                        </div><!-- /.row -->
                      </div><!-- /.container-fluid -->
                    </div>
                      <!-- /.content-header -->
                    <section>
                      <form action="import.php"  method="POST" enctype="multipart/form-data" >
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
                            <div class="col-md-12 " >
                              <button type="submit" class="btn btn-primary pull-right toastsDefaultDefault" value="submit" name="submit">Upload</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </section>
                  </div><!-- /.tab-pane -->

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
                              <li class="breadcrumb-item "><a href="Fileadd.html">Add</a></li>
                              <li class="breadcrumb-item active">Add faculty</li>
                            </ol>
                          </div><!-- /.col -->
                        </div><!-- /.row -->
                      </div><!-- /.container-fluid -->
                    </div>
                    <!-- /.content-header -->
                    <!-- Main content -->
                    <section class="content">
                      <form method="POST" action="addfact.php">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">General info</h3>
                  
                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                                </div>
                              </div>
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="inputId">Facuty Id</label>
                                  <input type="text" id="inputId" name="Fid" class="form-control" autofocus required>
                                </div>
                                <div class="form-group">
                                  <label for="inputName">Faculty Name</label>
                                  <input type="text" id="inputName" name="Fname" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label for="inputGen">Gender</label>
                                  <select class="form-control custom-select" name="Fgender" id="inputGen" required>
                                    <option selected disabled value="">Select one</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="other">Other</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="inputPnum">Phone no.</label>
                                  <input type="text" id="inputPnum" name="Fphone" class="form-control" required>
                                </div>
                              </div>
                              <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                          </div>
                          <div class="col-md-6">
                            <div class="card card-secondary">
                              <div class="card-header">
                                <h3 class="card-title">Working info</h3>
                  
                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                                </div>
                              </div>
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="inputEmail">Faculty email</label>
                                  <input type="text" id="inputEmail" name="Femail" class="form-control" required >
                                </div>
                                <div class="form-group">
                                  <label for="inputDept">Department</label>
                                  <select class="form-control custom-select" name="Fdept" id="inputDept" required >
                                    <option selected disabled value="">Select one</option>
                                    <option value="COMPS">COMPS</option>
                                    <option value="ETRX">ETRX</option>
                                    <option value="EXTC">EXTC</option>
                                    <option value="IT">IT</option>
                                    <option value="MECH">MECH</option>
                                    <option value="SCIENCE & HUMANITIES">SCIENCE & HUMANITIES</option>

                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="inputDesign">Designation</label>
                                  <select class="form-control custom-select" name="Fdesig" id="inputDesign"  required>
                                    <option selected disabled value="">Select one</option>
                                    <option >Assistant Professor</option>
                                    <option >Associate Professor</option>
                                    <option >Professor</option>
                                    <option>Head of Department</option>
                                    <option >Lab Assistant</option>
                                    <option >Principal</option>
                                  </select>
                                </div>
                              </div>
                              <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <a href="Fileaddfact.html" class="btn btn-secondary">Cancel</a>
                            <input type="submit" name="save" value="Create new Record" class="btn btn-success float-right" onclick="subFunc()">
                          </div>
                        </div>
                      </form>
                    </section>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            <!-- /.nav-tabs-custom -->
          </div>
        </div>
        


   <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
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
       
      <?php

        include("Datasource.php");
        require_once 'vendor/autoload.php';
        include("Datasource.php");
            
        $query1 = "SELECT * FROM faculty_data  WHERE Femail='" . $_SESSION["email"] . "'";
        $result1 = mysqli_query($conn,$query1);

        $query2 = "SELECT * FROM user  WHERE email='" . $_SESSION["email"] . "'" ;
        $result2 = mysqli_query($conn,$query2);

        while($row1 = mysqli_fetch_assoc($result2)) {
        echo' <div style="padding-left: 60px; padding-top: 60px;">';
        $image = $row1['imgurl'];
        $imageData = base64_encode(file_get_contents($image));
        echo '<img src="data:image/jpeg;base64,'.$imageData.'" >';   
        echo '</div>'; 
        }    

        while($row = mysqli_fetch_assoc($result1)) {
        
        echo' <div class="mr-3 text-center">';
        echo'<p style="font-size:x-large;color: white;">';
        echo "<br>". $row["Fname"]. "<br>";
        echo '<p>' ;
        echo'<p class="user-panel">';
        echo'<br>'. $row["Fdesignation"]. '<br><br>';
        echo'<p>';
        echo'</div>';
        echo'<hr>';

        echo' <div  style="color:gainsboro;">';
        echo'<strong><i class="fas fa-id-badge mr-1"></i> Faculty Id</strong>';
        echo' <p style="color: 		rgba(184, 184, 184, 0.712);" >';
        echo'<br>'. $row["Fid"]. '<br>';
        echo'</p>';
        echo'<hr>';

        echo'<strong><i class="fas fa-id-badge mr-1"></i> Email-Id</strong>';
        echo' <p style="color: 		rgba(184, 184, 184, 0.712);" >';
        echo'<br>'. $row["Femail"]. '<br>';
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
          <!-- /.card-body -->
      


        
    </div>
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  <section>
  <div class="modal fade" id="myMod" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update Faculty</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <section class="content">
            <div id="imgContainer">
              <form enctype="multipart/form-data" action="image_upload_demo_submit.php" method="post" name="image_upload_form" id="image_upload_form">
              <div id="imgArea"><img src="dist/img/user2-160x160.jpg">
                  <div class="progressBar">
                    <div class="bar"></div>
                    <div class="percent">0%</div>
                  </div>
                  <div id="imgChange"><span>Change Photo</span>
                    <input type="file" accept="image/*" name="image_upload_file" id="image_upload_file">
                  </div>
                </div>
              </form>
            </div>
            <div class="row mt-3">
              <div class="col-md-6">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">General info</h3>
      
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="inputName">Facuty Id</label>
                      <input type="text" id="inputName" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="inputName">Faculty Name</label>
                      <input type="text" id="inputName" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="inputStatus">Gender</label>
                      <select class="form-control custom-select">
                        <option selected disabled>Select one</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="inputProjectLeader">Phone no.</label>
                      <input type="text" id="inputProjectLeader" class="form-control">
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <div class="col-md-6">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Working info</h3>
      
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="inputClientCompany">Faculty email</label>
                      <input type="text" id="inputClientCompany" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="inputStatus">Department</label>
                      <select class="form-control custom-select">
                        <option selected disabled>Select one</option>
                        <option>COMPS</option>
                        <option>ETRX</option>
                        <option>EXTC</option>
                        <option>IT</option>
                        <option>MECH</option>
                        <option>SCIENCE & HUMANITIES</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="inputStatus">Designation</label>
                      <select class="form-control custom-select">
                        <option selected disabled>Select one</option>
                        <option>Assistant Professor</option>
                        <option>Associate Professor</option>
                        <option>Head of Department</option>
                        <option>Lab Assistant</option>
                        <option>Principal</option>
                      </select>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Update Record" class="btn btn-success float-right">
              </div>
            </div>
          </section>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</section>




</div>
<!-- ./wrapper -->
<script src="./js/jquery.min.js"></script>
<script src="./js/jquery.form.js"></script>
<script>
$(document).on('change', '#image_upload_file', function () {
var progressBar = $('.progressBar'), bar = $('.progressBar .bar'), percent = $('.progressBar .percent');

$('#image_upload_form').ajaxForm({
    beforeSend: function() {
		progressBar.fadeIn();
        var percentVal = '0%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    success: function(html, statusText, xhr, $form) {		
		obj = $.parseJSON(html);	
		if(obj.status){		
			var percentVal = '100%';
			bar.width(percentVal)
			percent.html(percentVal);
			$("#imgArea>img").prop('src',obj.image_medium);			
		}else{
			alert(obj.error);
		}
    },
	complete: function(xhr) {
		progressBar.fadeOut();			
	}	
}).submit();		

});
</script>


<!-- jQuery -->

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
<!-- Form validation -->
<script>
function subFunc(){
  chkFunc();
  pNum();
  chkEmail();
  chkDrop();
};

function chkFunc(){
    var x = document.getElementById("inputName");
    
    var letters = /^[A-Za-z\s]+$/;
    var numbers = /^[0-9]+$/;
    var letterNumber = /^[0-9a-zA-Z\s]+$/;
      if (x.value.match(numbers)){
      alert("Invalid input for name.Please enter alphabets only.");
      return false;
      };
      var eid = document.getElementById("inputId");
      if(eid.value.length >= 11){
        alert("Invalid input for Faculty Id.Please enter an Id of valid  length .");
        return false;
      };
      if(x.value.match(letterNumber ))
      {
        return true;
      }
      else
      {
        alert('Invalid input for name.Please enter alphabets only.');
        return false;
      };
};
function pNum(){
  var y = document.getElementById("inputPnum");
  var letters = /^[A-Za-z\s]+$/;
  var numbers = /^[0-9]+$/;
  var letterNumber = /^[0-9a-zA-Z\s]+$/;
      if(y.value.length != 10){
        alert("Invalid input for Phone Number.Please enter a valid phone number of length 10.");
        return false;
      };
      if(y.value.match(numbers))
      {
        return true;
      }
      else
      {
        alert('Invalid input for Phone Number.Please enter numbers only.');
        return false;
      };
};
function chkEmail(){
  var em = document.getElementById("inputEmail");
  if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(em.value))
  		{
         return true;
  		}
      else
      {
            alert( "Please provide your correct Email address!Format-->(xyz@gmail.com)");
            return false;
      };

};
function chkDrop(){
  
  var gen =  document.getElementById("inputGen").value;
  if (gen == "") {
      alert('Please select a gender from the dropdown list.');
      return false;
  }
  var dep2 = document.getElementById("inputDept").value;
  if (dep2 == "") {
      alert('Please select a department from the dropdown list.');
      return false;
  }
  var design= document.getElementById("inputDesign").value;
  if (design == "") {
      alert('Please select a designation from the dropdown list.');
      return false;
  }
};

</script>
<script  src="function.js"></script>
</body>
</html>








