<?php
    include('config/db_connect.php');
    $id=$_REQUEST['facultyid'];
    $query = "SELECT * from leaveview where facultyid='".$id."'"; 
    $result = mysqli_query($conn, $query) or die ( mysqli_error());
    $row = mysqli_fetch_assoc($result);
?>

<?php
    $status = "";
    if(isset($_POST['new']) && $_POST['new']==1)
    {
    $id=$_REQUEST['facultyid'];
    $name =$_REQUEST['facultyname'];
    $dept =$_REQUEST['department'];
    $wno =$_REQUEST['weeknum'];
    $dtrg =$_REQUEST['daterange'];
    //$submittedby = $_SESSION["username"];
    $update="update leaveview set facultyname='".$name.",
    department='".$dept."', weeknum='".$wno."' , daterange='".$dtrg."' where id='".$id."'";
    mysqli_query($conn, $update) or die(mysqli_error());
    $status = "Record Updated Successfully. </br></br>
    <a href='leaveview.php'>View Updated Record</a>";
    echo '<p style="color:#FF0000;">'.$status.'</p>';
    }else {
?>
<div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
<form name="form" method="post" action="">
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
                                  <div class="col-md-4">
                                  <input type="hidden" name="new" value="1" />
                                  <input name="facultyid" type="hidden" value="<?php echo $row['facultyid'];?>" />
                                    <!--<div class="form-group">
                                      <label for="facultyid">Faculty ID:</label>
                                      <input type="text" name="facultyid" id="facultyid" ></input>
                                    </div>-->
                                    <div class="form-group">
                                      <label for="facultyname">Faculty Name:</label>
                                      <input type="text" class="form-control"name="facultyname" id="facultyname"  required value="<?php echo $row['facultyname'];?>"></input>
                                    </div>
                                    <div class="form-group">
                                    <label for="weekNum">Week No.</label>
                                    <select class="form-control custom-select" name="weeknum" required value="<?php echo $row['weeknum'];?>"> 
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
                                    <select class="form-control custom-select" name="department" required value="<?php echo $row['department'];?>">
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
                                        <input type="text" class="form-control float-right" id="daterange"name="daterange" required value="<?php echo $row['daterange'];?>">
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
              
            </div>
          </div>
          </form>
          <?php } ?>


