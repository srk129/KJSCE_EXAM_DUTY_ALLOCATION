<?php
require 'PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';
require 'PHPExcel-1.8/Classes/PHPExcel.php';
include_once 'Datasource.php';


$inputfilename = $_FILES['facultyFile']['tmp_name'];

$exceldata = array();


if (isset($_POST['submit']))
{
 
 if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
 }
}

try
{
 $inputfiletype = PHPExcel_IOFactory::identify($inputfilename);
 $objReader = PHPExcel_IOFactory::createReader($inputfiletype);
 $objPHPExcel = $objReader->load($inputfilename);
}
catch(Exception $e)
{
 die('Error loading file "'.pathinfo($inputfilename,PATHINFO_BASENAME).'": '.$e->getMessage());
}

$sheet = $objPHPExcel->getSheet(0);
$highestRow = $sheet->getHighestRow();
$highestColumn = $sheet->getHighestColumn();

for ($row = 2; $row <= $highestRow; $row++)
{
 $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

 $sql = "INSERT INTO  Faculty_data (Fid, Fname, Femail, Fdept,Fdesignation, Fgender, Fphone,  join_date)
 VALUES ('".$rowData[0][0]."', '".$rowData[0][1]."', '".$rowData[0][2]."', '".$rowData[0][3]."','".$rowData[0][4]."', '".$rowData[0][5]."', '".$rowData[0][6]."', CURRENT_TIMESTAMP())";

  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Excel file has been uploaded successfully !');window.location.href='f.php';</script>";
  }else{
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
}
?>
<?php
 include_once 'Datasource.php';?>

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
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel = "icon" type = "image/png" href = "kjsce.png" style="border-radius: 50%;">
  <link href="./css/sty.css" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  



<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home.html" class="nav-link"><i class="fa fa-fw fa-home mr-1" ></i>Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"><i class="fas fa-phone-alt mr-1" ></i>Contact</a>
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
            <a href="facultydash.html" class="nav-link ">
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
      <a href="Leaveadd.html" class="nav-link">
           <i class="fas fa-plus nav-icon"></i>
           <p>Add leave report</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="Leaveview.html" class="nav-link">
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
      <a href="Factpfile.html" class="nav-link">
          <i class="fa fa-upload nav-icon"></i>
          <p>Upload availability file</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="Factpvfile.html" class="nav-link">
           <i class="fas fa-eye nav-icon"></i>
           <p>View availability file</p>
      </a>
    </li>
  </ul>
</li>
<li class="nav-item has-treeview">
  <a href="Factview.html" class="nav-link">
      <i class=" fas fa-eye nav-icon"></i> 
    <p>
      View availability status               
    </p>
  </a>
</li>

<li class="nav-header">ALLOCATION</li>
<li class="nav-item has-treeview">
  <a href="exam.html" class="nav-link">
      <i class="nav-icon fas fa-book"></i> 
    <p>
       Exam details and Allocation               
    </p>
  </a>
</li>
<li class="nav-header">ATTENDENCE</li>
<li class="nav-item has-treeview">
  <a href="matten.html" class="nav-link">
      <i class="fas fa-user-check  nav-icon"></i>
    <p>
      Mark Attendence               
    </p>
  </a>
</li>
<li class="nav-item has-treeview">
  <a href="vatten.html" class="nav-link">
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
            <h1 class="m-0 text-dark"></h1>
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

    <div class="part-five part-four" id="Get-Started" style="display: flex; align-items: center; justify-content: center; background-size: auto !important;">
        <h3 class="text-info"> File Uploaded Successfully!!</h3>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <h3 class="card-title">Faculty-details</h3>
                
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>


              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  
                  <tr>
                    <th>Faculty Id</th>
                    <th>Faculty name</th>
                    <th>Email-Id</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Gender</th>
                    <th>Phone No.</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  foreach ($exceldata as $index => $excelraw) 
                  {
                   echo "<tr>";
                   foreach ($excelraw as $excelcolumn) {
                    echo "<td >".$excelcolumn."</td>";
                   }
                   echo "</tr>";
                  }?>
               
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Faculty Id</th>
                    <th>Faculty name</th>
                    <th>Email-Id</th>
                    <th>Designation</th>
                    <th>Department</th>
                    <th>Gender</th>
                    <th>Phone No.</th>
                    
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
       
            <div class="mr-3 text-center">
              <img class="ml-5 mt-5 mb-3 profile-user-img img-fluid img-circle  elevation-2"
                   src="dist/img/user2-160x160.jpg"
                   alt="User profile picture">
                  <p style="font-size:x-large;color: white;">  Alexander Pierce   </p>
                   <p class="user-panel">Professor<br/><br/></p>
            </div>
      
        
        
          <!-- /.card-header -->
          <div  style="color:gainsboro;">
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
            

           </div>
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
                     url:"insert1.php",  
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












