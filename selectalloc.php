<?php  
include_once 'Datasource.php';

 if(isset($_POST["Fid"]))  
 {  
      $output = '';  
     
      $query = "SELECT * FROM fact_alloc WHERE Fid = '".$_POST["Fid"]."'";  
      $result = mysqli_query($conn, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= ' 
           
                 <tr>  
                     <td width="30%"><label>Faculty Id</label></td>  
                     <td width="70%">'.$_POST["Fid"].'</td>  
                </tr>

                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["Fact_name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Exam Id</label></td>  
                     <td width="70%">'.$row["Eid"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Exam date</label></td>  
                     <td width="70%">'.$row["Ex_date"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Exam time</label></td>  
                     <td width="70%">'.$row["Ex_time"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Status</label></td>  
                     <td width="70%">'.$row["Status"].'</td>  
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