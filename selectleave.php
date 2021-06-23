<?php  
include_once 'Datasource.php';

 if(isset($_POST["Fid"]))  
 {  
      $output = '';  
     
      $query = "SELECT * FROM availfaculty WHERE facultyid = '".$_POST["Fid"]."'";  
      $result = mysqli_query($conn, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result) or die( mysqli_error($conn)))  
      {  
           $output .= ' 
           
                 <tr>  
                     <td width="30%"><label>Faculty Id</label></td>  
                     <td width="70%">'.$_POST["Fid"].'</td>  
                </tr>

                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["facultyname"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Week Number</label></td>  
                     <td width="70%">'.$row["weeknum"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Department</label></td>  
                     <td width="70%">'.$row["department"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Date Range</label></td>  
                     <td width="70%">'.$row["daterange"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Time record inserted</label></td>  
                     <td width="70%">'.$row["join_avail"].'</td>  
                </tr>  
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>