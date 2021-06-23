<!--<div class="active tab-pane" id="activity">
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
            <form action="importroom.php" method="post" enctype="multipart/form-data">
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
        </div>-->
        


        
<!-- ./wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script>  
 $(document).ready(function(){  
    
      $(document).on('click', '.edit_data', function(){  
        $('#room_modal').modal('show'); 
           var E_id = $(this).attr("id"); 
           console.log(E_id); 
           //alert("click");
           //document.getElementById("Exam_date").value ="Ex id";
           $.ajax({  
                url:"exfetch.php",  
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
                     $('#E_slot').val(data.E_slot);   
                     //$('#Exam_time').val(data[2]);  
                     $('#insert').val("Insert");  
                      
                }
           });  
      });  
      $('#insert_form').on('click','#insert', function(event){  
           event.preventDefault(); 
           if($('#E_id').val() == "")  
           {  
                alert("Id is required");  
           }
           else if($('#Exam_date').val() == "")  
           {  
                alert("Exam date is required");  
           } 
           else if($('#Exam_time').val() == "")  
           {  
                alert("Exam time is required");  
           }
           else if($('#reqfact').val() == "")  
           {  
                alert("No. is required");  
           } 
           else  
           {  
                $.ajax({  
                     url:"exrand.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#room_modal').modal('hide');  
                          $('#exam_table').html(data);  
                     }  
                });  
           }  
      });  
 
 });  
 </script>