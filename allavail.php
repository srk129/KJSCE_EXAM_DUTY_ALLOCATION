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
  <!-- Datatables --> 
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
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

</head>
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
       <!-- <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        
          <a class="nav-link d-block "   data-widget="control-sidebar" data-slide="true" href="#" role="button">
            Alexander Pierce    <i class="fas fa-angle-right left ml-3" style="color: white;"></i></a>-->
        
        
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
              <a href="leaveavail.php" class="nav-link">
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
          <a href="allavail.php" class="nav-link active">
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
   

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Faculty</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Duty.php">Home</a></li>
              <li class="breadcrumb-item active">View </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Faculty Availability details</h3>
                
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive  " id="faculty_table">
                <table id="example1" class="table table-hover table-bordered table-striped">
                <thead>
                  <tr>
                            <th>Faculty ID</th>
                            <th>Faculty Name</strong></th>
                            <th>Week No.</th>
                            <th>Duration</th>
                            <th>Department</th>
                            <th>Status</th>
                            <th>Record Entered</th>
                            <th>Edit</th>
                            <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
  <?php

				$sel_query="SELECT * FROM availfaculty";
				$result = mysqli_query($conn,$sel_query);
				while($row = mysqli_fetch_assoc($result)) { ?>
                    <td align="center"><?php echo $row['facultyid'];?></td>
                    <td align="center"><?php echo $row['facultyname'];?></td>
                    <td align="center"><?php echo $row['weeknum'];?></td>
                    <td align="center"><?php echo $row['daterange'];?></td>
                    <td align="center"><?php echo $row['department'];?></td>
                    <td align="center"><?php echo $row['factstat'];?></td>
                    <td align="center"><?php echo $row['join_avail'];?></td>
				
        <td class="project-actions input-container">
        <a type="button"class="btn btn-info btn-sm editbtn"  data-toggle="modal" data-target="#myModal">
                                    <i class="fas fa-pencil-alt" >
                                    </i>
                                    Edit
                                </a>         
              </td>
              <td class="project-actions input-container">
                <a class="btn btn-danger btn-sm" href="deleteleave.php?facultyid=<?php echo $row['facultyid']; ?>" >
                   <i class="fas fa-trash"></i>
                    Delete
                 </a>
                </td>

				</tr>
                <?php }
					mysqli_close($conn);
					?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                            <th>Faculty ID</th>
                            <th>Faculty Name</strong></th>
                            <th>Week No.</th>
                            <th>Duration</th>
                            <th>Department</th>
                            <th>Status</th>
                            <th>Record Entered</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <section>
<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <h4 class="modal-title">Faculty  Details</h4>  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  

                </div>  
                <div class="modal-body" id="faculty_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
</section>



  <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        <form name="form" method="post" action="updatecode.php">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Update Report</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <section class="content">
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
                                <input type="hidden" name="facultyid" id="facultyid" ></input>
                                  <div class="col-md-4">
                                    <!--<div class="form-group">
                                      <label for="facultyid" >Faculty ID:</label>
                                      <input type="hidden" class="form-control" name="facultyid" id="facultyid" ></input>
                                    </div>-->
                                    <div class="form-group">
                                      <label for="facultyname">Faculty Name:</label>
                                      <input type="text" class="form-control" name="facultyname" id="facultyname"></input>
                                    </div>
                                    <div class="form-group">
                                    <label for="weeknum">Week No.</label>
                                    <select type="text" class="form-control custom-select" id="weeknum" name="weeknum"> 
                            
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
                                    <select type="text"  class="form-control custom-select" id="department"name="department" >
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
                                        <input type="text" class="form-control float-right" id="daterange" name="daterange">
                                      </div>
                                      <!-- /.input group -->
                                    </div>
                                  </div>
                                  <!-- /.col -->
                                </div>
                                <!-- /.row -->
                              </div>
                              <!-- /.card-body -->
                              <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="submit">Update</button>
                              </div>
                            <!-- /.card -->
                          </div>
                        </div>   
                    <!-- Upload  -->
                   
                  </div>
                  
                      </section>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
              </form>    
            </div>
          </div>
 

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
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="inputStatus">Designation</label>
                      <select class="form-control custom-select">
                        <option selected disabled>Select one</option>
                        <option>Assistant Professor</option>
                        <option>Associate Professor</option>
                        <option>HOD</option>
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

<script src="js/jquery.min.js"></script>
<script src=".js/jquery.form.js"></script>
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


<!-- ./wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var Fid = $(this).attr("id");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{Fid:Fid},  
                dataType:"json",  
                success:function(data){  
                     $('#Fid').val(data.Fid);  
                     $('#Fname').val(data.Fname);  
                     $('#Fgender').val(data.Fgender);  
                     $('#Fphone').val(data.Fphone);  
                     $('#Femail').val(data.Femail);
                     $('#Fdept').val(data.Fdept);    
                     $('#Fdesignation').val(data.Fdesignation);  
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault(); 
           if($('#Fid').val() == "")  
           {  
                alert("Faculty id is required");  
           }
           else if($('#Fname').val() == "")  
           {  
                alert("Name is required");  
           } 
          
           else if($('#Fphone').val() == "")  
           {  
                alert("Phone no. is required");  
           }
           else if($('#Fgender').val() == "")  
           {  
                alert("Gender is required");  
           } 
           else if($('#Femail').val() == '')  
           {  
                alert(" Email-address is required");  
           }  
           else if($('#Fdesig').val() == '')  
           {  
                alert("Designation is required");  
           }  
           else if($('#Fdept').val() == '')  
           {  
                alert("Department is required");  
           }  
           else  
           {  
                $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#faculty_table').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', '.view_data', function(){  
           var Fid = $(this).attr("id");  
           if(Fid != '')  
           {  
                $.ajax({  
                     url:"selectleave.php",  
                     method:"POST",  
                     data:{Fid:Fid},  
                     success:function(data){  
                          $('#faculty_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  
 </script>

<script>
$(document).ready(function (){
  $('.editbtn').on('click', function(){
    $('#myModal').modal('show');
    $tr = $(this).closest('tr');
    var data = $tr.children("td").map(function(){
      return $(this).text();
    }).get();

    console.log(data);

    $('#facultyid').val(data[0]);
    $('#facultyname').val(data[1]);
    $('#weeknum').val(data[2]);
    $('#daterange').val(data[3]);
    $('#department').val(data[4]);
  });
});

</script>


 
<!-- jQuery -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>

<script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script  src="function.js"></script>


</body>
</html>
