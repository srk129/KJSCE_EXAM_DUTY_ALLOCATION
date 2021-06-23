<?php  
include_once 'Datasource.php';

 if(isset($_POST["Fid"]))  
 {  
      $output = '';  
     
      $query = "SELECT * FROM Faculty_data WHERE Fid = '".$_POST["Fid"]."'";  
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
                     <td width="70%">'.$row["Fname"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>E-mail</label></td>  
                     <td width="70%">'.$row["Femail"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Designation</label></td>  
                     <td width="70%">'.$row["Fdept"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Gender</label></td>  
                     <td width="70%">'.$row["Fgender"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Designation</label></td>  
                     <td width="70%">'.$row["Fdesignation"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Phone No.</label></td>  
                     <td width="70%">'.$row["Fphone"].' </td>  
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