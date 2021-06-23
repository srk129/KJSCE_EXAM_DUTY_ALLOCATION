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
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
         </li>
         

         <li class="nav-header">FACULTY</li>
<li class="nav-item has-treeview">
  <a href="#" class="nav-link active">
      <i class="nav-icon fa fa-info-circle "></i> 
    <p>
      Faculty Information
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="decf.php" class="nav-link active">
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
  <a href="#" class="nav-link">
      <i class="nav-icon fas fa-book"></i> 
    <p>
       Exam details   
       <i class="fas fa-angle-left right"></i>
            
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="decex.php" class="nav-link">
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
   

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Faculty</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Duty.html">Home</a></li>
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
                <h3 class="card-title">Faculty-details</h3>
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
                    <th>Faculty Id</th>
                    <th>Faculty name</th>
                    <th>Email-Id</th>
                    <th>Designation</th>
                    <th>Department</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
  <?php
				$sel_query="SELECT * FROM Faculty_data ";
				$result = mysqli_query($conn,$sel_query);
				while($row = mysqli_fetch_assoc($result)) { ?>
				<tr><td align="center"><?php  echo $row['Fid']; ?></td>
				<td align="center"><?php  echo $row['Fname']; ?></td>
        <td align="center"><?php  echo $row['Femail']; ?></td>
				<td align="center"><?php  echo $row['Fdesignation']; ?></td>
				<td align="center"><?php  echo $row['Fdept']; ?></td>
				<td class="project-actions input-container">
              <button class="btn btn-secondary btn-xs">
              <i class="fas fa-folder">
                              </i>
              <input type="button" name="view" value="View" id="<?php echo $row["Fid"]; ?>" class="btn btn-secondary btn-xs view_data" />
               
              </button>
              </td> 
        <td class="project-actions input-container">
                <button class="btn btn-info btn-xs">
                     <i class="fas fa-pencil-alt">
                                   </i>
                <input type="button" name="edit" value="Edit" id="<?php echo $row["Fid"]; ?>" class="btn btn-info btn-xs edit_data" />
                  </button>          
              </td>
              <td class="project-actions input-container">
                <a href="delete1.php?Fid=<?php echo $row["Fid"]; ?>" class="btn btn-danger btn-sm mr-1"  >
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
                  <th>Faculty Id</th>
                    <th>Faculty name</th>
                    <th>Email-Id</th>
                    <th>Designation</th>
                    <th>Department</th>
                    <th>View</th>
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



  
  <section>
  <div class="modal fade" id="add_data_Modal"  role="dialog" >
    <div class="modal-dialog modal-lg">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update Faculty</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
      
          <section class="content">
          <form method="post" id="insert_form">  
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
                      <label for="inputName">Facuty Id</label>
                      <input type="text" id="Fid" class="form-control" name="Fid" required >
                    </div>
                    <div class="form-group">
                      <label for="inputName">Faculty Name</label>
                      <input type="text" id="Fname" class="form-control" name="Fname" required >
                    </div>
                    <div class="form-group">
                      <label for="inputStatus" >Gender</label>
                      <select class="form-control custom-select" id="Fgender" name="Fgender" required  >
                      <option selected disabled>Select one</option>
          <option >Male</option>
					<option >Female</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="inputProjectLeader">Phone no.</label>
                      <input type="text" id="Fphone" name="Fphone" class="form-control" required >
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
                      <input type="text" id="Femail" class="form-control" name="Femail" required >
                    </div>
                    <div class="form-group">
                      <label for="inputStatus">Department</label>
               <select class="form-control custom-select" id="Fdept" name="Fdept" required  >
                    <option selected disabled>Select one</option>
                    <option >COMPS</option>
                    <option >IT</option>
                    <option >EXTC</option>
                    <option >ETRX</option>
                    <option >MECH</option>
                    <option >SCIENCE & HUMANITIES</option>
               </select>
                    </div>
                    <div class="form-group">
                      <label for="inputStatus">Designation</label>
            <select class="form-control custom-select" id="Fdesignation" name="Fdesignation" required >
            <option selected disabled>Select one</option>
                    <option >Associate Professor</option>
                    <option >Assistant Professor</option>
                    <option >Head of Department</option>
                    <option >Lab Assistant</option>
                    <option >Professor</option>
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
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success float-right mb-3" />  

              </div>
            </div>
            </form>
            </section>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                     url:"select.php",  
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
</body>
</html>
