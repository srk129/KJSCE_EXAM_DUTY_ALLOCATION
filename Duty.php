<?php
session_start();
//echo $_SESSION["email"];
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
<script>
  if (auth2.isSignedIn.get()) {
  var profile = auth2.currentUser.get().getBasicProfile();
  console.log('ID: ' + profile.getId());
  document.getElementById("profilename").innerHTML = profile.getName();
  console.log('Full Name: ' + profile.getName());
  console.log('Given Name: ' + profile.getGivenName());
  console.log('Family Name: ' + profile.getFamilyName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail());
  document.getElementById("profileemail").innerHTML = profile.getEmail();
}
</script>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php include_once('navbar.php');?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar scrollbar scrollbar-secondary">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <?php include_once('name.php');?>
      <!--<div class="info">-->
        <?php

          /*include("Datasource.php");
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
          
          mysqli_close($conn);*/
          
      ?>

        <!--</div>-->
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="Duty.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
         </li>
         <li class="nav-header">FACULTY</li>
         <li class="nav-item has-treeview">
         <a href="newFileaddfact.php" class="nav-link ">
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
         <a href="exam.php" class="nav-link">
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
     
         <!-- <div class="mr-3 text-center">
            <img class="ml-5 mt-5 mb-3 profile-user-img img-fluid img-circle  elevation-2" src="dist/img/user2-160x160.jpg" alt="User profile picture">
                <p style="font-size:x-large;color: white;" id="profilename">  Alexander Pierce   </p>
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

          <p style="color: 		rgba(184, 184, 184, 0.712);" id="profileemail" >
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
<meta name="google-signin-client_id" content="745236768405-2r5hn4emf30s1bgoemd8922nm60iljs1.apps.googleusercontent.com"> 


<script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
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
