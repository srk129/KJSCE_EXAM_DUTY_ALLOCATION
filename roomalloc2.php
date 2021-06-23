<?php
include ('Datasource.php');

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
      <a href="f.php" class="nav-link">
          <i class="fas fa-search nav-icon"></i>
          <p>View</p>
      </a>
    </li>
  </ul>
</li>
<li class="nav-header">FACULTY AVAILABILITY STATUS</li>
<li class="nav-item has-treeview">
  <a href="#" class="nav-link ">
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
  <a href="#" class="nav-link ">
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
  <a href="exam.php" class="nav-link active">
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
      <a href="examschedule.php" class="nav-link active">
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
  <a href="vatten.php" class="nav-link ">
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
            <h1 class="m-0 text-dark">View Exam Schedule to </h1>
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
                <h3 class="card-title">Exam-details</h3>
                
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive  " id="exam_table">
                <table id="example1" class="table table-hover table-bordered table-striped">
                <thead>
                  <tr>
                            <th>Academic year</th>
                            <th>Year slot</th>
                            <th>Degree</th>
                            <th>Year</th>
                            <th>Sem  Number</th>
                            <th>Dept</th>
                            <th>Course code  Name</th>
                            <th>Exam date</th>
                            <th>Exam time</th>
                            <th>Allocate</th>
                  </tr>
                  </thead>
                  <tbody>
  <?php

				$sel_query="SELECT * FROM exam_schedule";
				$result = mysqli_query($conn,$sel_query);
				while($row = mysqli_fetch_assoc($result)) { ?>
                    <td align="center"><?php echo $row['Academic_year'];?></td>
                    <td align="center"><?php echo $row['Year_slot'];?></td>
                    <td align="center"><?php echo $row['Degree'];?></td>
                    <td align="center"><?php echo $row['Year'];?></td>
                    <td align="center"><?php echo $row['Sem'];?>&nbsp<?php echo $row['Sem_No'];?></td>
                    <td align="center"><?php echo $row['Dept_name'];?></td>
                    <td align="center"><?php echo $row['Course_Code'];?>&nbsp<?php echo $row['Course_Name'];?></td>
                    <td align="center"><?php echo $row['Exam_date'];?></td>
                    <td align="center"><?php echo $row['Exam_time'];?></td>
                    <!--<td align="center"><button class="btn btn-sm btn-primary generate style=color: white;"  data-toggle="modal" data-target="#room_modal" type="submit">Allocate</button></td>-->
                    <td align="center"><input name="edit" type="button" value="Allocate" id="<?php echo $row['E_id'];?>" class="btn btn-primary add" /></td>
                
        </tr>
                
        <?php }
					mysqli_close($conn);
					?>    
                  </tbody>
                  <tfoot>
                  <tr>
                            <th>Academic year</th>
                            <th>Year slot</th>
                            <th>Degree</th>
                            <th>Year</th>
                            <th>Sem  Number</th>
                            <th>Dept</th>
                            <th>Course code   Name</th>
                            <th>Exam date</th>
                            <th>Exam time</th>
                            <th>Allocate</th>
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
                <form method="post" id="insert_form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Exam_date">Exam date:</label>
                      <input type="date" name="Exam_date" id="Exam_date" class="input form-control " />

                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label for="Exam_time">Exam time:</label>
                      <input type="text" name="Exam_time" id="Exam_time" class="input form-control "/>

                    </div>
                    <div class="form-group">
                      <label for="Exam_slot">Exam Slot:</label>
                      <input type="text" name="Exam_slot" id="Exam_slot" class="input form-control " />

                    </div>
                  </div>
                  <div class="table-repsonsive">
                    <span id="error"></span>
                    <table class="table table-bordered" id="item_table">
                    <tr>
                      <th>Room Number:</th>
                      <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="fas fa-plus"></span></button></th>
                    </tr>
                    </table>
                      <div class="row">
                        <div class="col-12">
                          <a href="#" class="btn btn-secondary">Cancel</a>
                          <input type="submit" name="submit" class="btn btn-info float-right" value="Insert" />
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
</div>
<?php

include ('Datasource.php');

  $sql ="SELECT room_num from room_data where room_stat='Available'";
  $res1 = $conn->query($sql) or die("Error in main Query".$conn->error);
  $opt= '';
  $opt = '<select name="room_num[]" class="form-control room_num custom-select">';
  while($row = mysqli_fetch_assoc($res1)){
    $opt .='<option value='.$row['room_num'].'>'.$row['room_num'].'</option>\n';
  }
  $opt .='</select>';
  //console.log($opt);
?>
<!-- Page script -->

<script src="function.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
<script>
$(document).ready(function(){
 
 $(document).on('click', '.add', function(){
  $('#room_modal').modal('show');
  var E_id = $(this).attr("id"); 
  console.log(E_id); 
  //alert("click");
  //document.getElementById("Exam_date").value ="Ex id";
  $.ajax({  
      url:"roomfetch.php",  
      method:"POST",  
      data:{E_id:E_id},  
      dataType:"json",  
      success : function(data){  
        //console.log(data.E_id);
        //alert("click");
            
            //$('#E_id').val(data[0]);  
            
            $('#Exam_date').val(data.Exam_date);  
            
            //$('#Exam_date').val(data[1]);  
            $('#Exam_time').val(data.Exam_time); 
            $('#Exam_slot').val(data.Exam_slot);   
            //$('#Exam_time').val(data[2]);  
            $('#insert').val("Insert");  
     }
  });
  var html = '';
  html += '<tr>';
  //html += '<td><select name="room_num[]" class="form-control room_num custom-select" ><option value="one">ONE</option></select></td>';
  html += '<td><?php echo $opt?></td>';
  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fas fa-minus"></span></button></td></tr>';
  $('#item_table').append(html);
 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';

  $('.room_num').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Room number at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"addexroom.php",
    method:"POST",
    data:$('#insert_form').serialize(),  
    beforeSend:function(){  
      $('#insert').val("Inserting");  
    },  
    success:function(data){
      console.log(data.Exam_date);
     if(data == 'ok')
     {
      $('#item_table').find("tr:gt(0)").remove();
      $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
     }
    }
   });
  }
  else
  {
   $('#error').html('<div class="alert alert-danger">'+error+'</div>');
  }
 });
 
});
</script>

<?php 
					mysqli_close($conn);
					?>  

 
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
