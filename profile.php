<?php

include("Datasource.php");
require_once 'vendor/autoload.php';
include("Datasource.php");


$query1 = "SELECT * FROM faculty_data  WHERE Femail='" . $_SESSION["email"] . "'";
$result1 = mysqli_query($conn,$query1);

$query2 = "SELECT * FROM user  WHERE email='" . $_SESSION["email"] . "'" ;
$result2 = mysqli_query($conn,$query2);

while($row1 = mysqli_fetch_assoc($result2)) {
echo' <div style="padding-left: 60px; padding-top: 60px;">';
$image = $row1['imgurl'];
//echo '<img src="data:image/jpeg;base64,'.$image.'" >';  
//$imageData = file_get_contents($image);
//echo '<img src="C:/xampp/htdocs/examduty/new/user.png">';
$imageData = base64_encode(file_get_contents($image));
echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
/*header('content-type: image/png'); 
$theImage = $image;//the real image url. 
echo file_get_contents($theImage);*/
 
echo '</div>'; 
}    

while($row = mysqli_fetch_assoc($result1)) {

echo' <div class="mr-3 text-center">';
echo'<p style="font-size:x-large;color: white;">';
echo "<br>". $row["Fname"]. "<br>";
echo '<p>' ;
echo'<p class="user-panel">';
echo'<br>'. $row["Fdesignation"]. '<br><br>';
echo'<p>';
echo'</div>';
echo'<hr>';

echo' <div  style="color:gainsboro;">';
echo'<strong><i class="fas fa-id-badge mr-1"></i> Faculty Id</strong>';
echo' <p style="color: 		rgba(184, 184, 184, 0.712);" >';
echo'<br>'. $row["Fid"]. '<br>';
echo'</p>';
echo'<hr>';

echo'<strong><i class="fas fa-id-badge mr-1"></i> Email-Id</strong>';
echo' <p style="color: 		rgba(184, 184, 184, 0.712);" >';
echo'<br>'. $row["Femail"]. '<br>';
echo'</p>';
echo'<hr>';

echo'<strong><i class="fas fa-id-badge mr-1"></i> Department</strong>';
echo' <p style="color: 		rgba(184, 184, 184, 0.712);" >';
echo'<br>'. $row["Fdept"]. '<br><br>';
echo'</p>';
echo'<hr>';

echo'<strong><i class="fas fa-id-badge mr-1"></i> Gender</strong>';
echo' <p style="color: 		rgba(184, 184, 184, 0.712);" >';
echo'<br>'. $row["Fgender"]. '<br><br>';
echo'</p>';
echo'<hr>';

echo'<strong><i class="fas fa-id-badge mr-1"></i> Phone No.</strong>';
echo' <p style="color: 		rgba(184, 184, 184, 0.712);" >';
echo'<br>'. $row["Fphone"]. '<br><br>';
echo'</p>';
echo'<hr>';

echo'</div>';

//echo "<br>"."ID : " . $row["Fid"]. "<br>". "Name : " . $row["Fname"]. "<br>"."Email ID : " . $row["Femail"]. "<br>"."Department: " . $row["Fdept"]. "<br>"."Designation : " . $row["Fdesignation"]. "<br>"."Gender : " . $row["Fgender"]. "<br>"."Comntact No. : " . $row["Fphone"]. "<br><br>------------------------------------------<br>";

}

mysqli_close($conn);

?>