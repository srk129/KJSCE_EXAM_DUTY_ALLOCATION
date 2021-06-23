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
    <div class="sidebar scrollbar scrollbar-secondary">
      
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <?php include_once('name.php');?>
        <!--<div class="image">
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
          <a href="matten.php" class="nav-link active">
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
            <h1 class="m-0 text-dark">Mark attendance</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Duty.php">Home</a></li>
              <li class="breadcrumb-item active">Mark attendance </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Mark Attendance</h3>
                
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive" id="matten_table">
              <table id="example1" class="table table-hover table-bordered table-striped">
              <thead>
                  <tr>
                    <th><strong>Faculty Id</strong></th>
                    <th><strong>Faculty name</strong></th>
                    <th><strong>Exam Id</strong></th>
                    <th><strong>Exam Date</strong></th>
                    <th><strong>Exam time</strong></th>
                    <th><strong>Exam slot</strong></th>
                    <th><strong>Mark attendance</strong></th>

                  </tr>
              </thead>
              <tbody>
              <?php
                $sel_query="SELECT Fid, Fact_name, Eid, Ex_date, Ex_time, Ex_slot FROM fact_alloc where status='Not allocated'";
                $result = mysqli_query($conn,$sel_query);
                while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                        <td align="center"><?php echo $row['Fid'];?></td>
                        <td align="center"><?php echo $row['Fact_name'];?></td>
                        <td align="center"><?php echo $row['Eid'];?></td>
                        <td align="center"><?php echo $row['Ex_date'];?></td>
                        <td align="center"><?php echo $row['Ex_time'];?></td>
                        <td align="center"><?php echo $row['Ex_slot'];?></td>
                <td align="center"><input name="edit" type="button" value="Present" id="<?php echo $row['Eid'];?>" class="btn btn-primary present" /></td>
                </tr>
                
                    <?php }
                mysqli_close($conn);
                ?>   
              </tbody>
              <tfoot>
                  <tr>
                    <th><strong>Faculty Id</strong></th>
                    <th><strong>Faculty name</strong></th>
                    <th><strong>Exam Id</strong></th>
                    <th><strong>Exam Date</strong></th>
                    <th><strong>Exam time</strong></th>
                    <th><strong>Exam slot</strong></th>
                    <th><strong>Mark attendance</strong></th>

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
    <section>
      <div class="modal fade" id="room_modal" role="dialog">
        <div class="modal-dialog modal-lg">
        
          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Allocation</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
            <div class="modal-body">
              <section class="content">
                <form method="post" id="insert_form" action='finalalloc.php'>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="Exam_date">Exam date:</label>
                        <input type="date" name="Exam_date" id="Exam_date" class="input form-control " />
                        <input type="hidden" name="E_id" id="E_id" class="input form-control " />

                      </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label for="Exam_time">Exam time:</label>
                        <input type="text" name="Exam_time" id="Exam_time" class="input form-control "/>

                      </div>
                      <div class="form-group">
                        <label for="Exam_slot">Exam slot:</label>
                        <input type="text" name="Exam_slot" id="Exam_slot" class="input form-control "/>

                      </div>
                      <div class="form-group">
                        <label for="Fid">Faculty Id:</label>
                        <input type="text" name="Fid" id="Fid" class="input form-control " />

                      </div>
                      <div class="form-group">
                        <label for="room_num">Room Number :</label>
                        <input type="text" name="room_num" id="room_num" class="input form-control " />

                      </div>
                      <div class="row">
                        <div class="col-12">
                          <a href="#" class="btn btn-secondary">Cancel</a>
                          <input type="submit" id="submit" name="submit" class="btn btn-info float-right" value="Insert" />
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </section>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>  
          </div>
        </div>
      </div>
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


<script src="function.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
<script>
$(document).ready(function(){
 
  $(document).on('click', '.present', function(){
    $('#room_modal').modal('show');
    var E_id = $(this).attr("id"); 
    console.log(E_id); 
    //alert("click");
    //document.getElementById("Exam_date").value ="Ex id";
    $.ajax({  
        url:"roomallfetch.php",  
        method:"POST",  
        data:{E_id:E_id},  
        dataType:"json",  
        success : function(data){  
          console.log(data);
              $('#room_num').val(data.room_num);
              $('#E_id').val(data.Eid);
              $('#Fid').val(data.Fid);  
              $('#Exam_date').val(data.Ex_date);  
              $('#Exam_time').val(data.Ex_time);
              $('#Exam_slot').val(data.Ex_slot);
              //$('#Exam_date').val(data[1]);  
               
              //$('#Exam_slot').val(data.Exam_slot);   
              //$('#Exam_time').val(data[2]);  
              //$('#submit').val("Insert");  
      }
    });
  });
});
</script>

<!-- jQuery -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>

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
     //Bootstrap Duallistbox
   
</script>

<script  src="function.js"></script>

</body>
</html>