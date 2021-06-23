<?php
require_once 'Datasource.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>

</head>
<body>
<div class="form">
<br>
<br>
<div class="container bg-rounded shadow lg">
        <h2>FACULTY DETAILS:</h2>    
        <div class="table-responsive">
            <table class="table table-striped">
              <thead class="thead-light">
                <tr>
                    <th><strong>Faculty id</strong></th>
                    <th><strong>First name</strong></th>
                    <th><strong>Second name</strong></th>
                    <th><strong>Last name</strong></th>
                    <th><strong>Email id</strong></th>
                    <th><strong>Designation</strong></th>
                    <th><strong>Gender</strong></th>
                    <th><strong>Phone no.</strong></th>
                    <th><strong>Department</strong></th>
                </tr>
             </thead>
         <tbody>
				<?php
				if(isset($_POST['save2']))
				{
				$f_dept = $_POST["Fdept"];
				$sel_query="SELECT * FROM Faculty_data WHERE Fdept = '$f_dept' ";
				$result = mysqli_query($conn,$sel_query);
				while($row = mysqli_fetch_assoc($result)) { ?>
				<tr><td align="center"><?php  echo $row['Fid']; ?></td>
				<td align="center"><?php  echo $row['Ffname']; ?></td>
				<td align="center"><?php  echo $row['Fsname']; ?></td>
				<td align="center"><?php  echo $row['Flname']; ?></td>
				<td align="center"><?php  echo $row['Femail']; ?></td>
				<td align="center"><?php  echo $row['Fdesignation']; ?></td>
				<td align="center"><?php  echo $row['Fgender']; ?></td>
				<td align="center"><?php  echo $row['Fphone']; ?></td>
				<td align="center"><?php  echo $row['Fdept']; ?></td>
				</tr>
				<?php  } 
					mysqli_close($conn);
					}?>
        </tbody>
   </table>
 </div>
</div> 
</div> 
<br><br><br>


</body>
</html>





