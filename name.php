<?php

include("Datasource.php");
require_once 'vendor/autoload.php';


$query2 = "SELECT * FROM user  WHERE email='" . $_SESSION["email"] . "'" ;
$result2 = mysqli_query($conn,$query2);

while($row1 = mysqli_fetch_assoc($result2)) {
echo' <div class="image" style="padding-top:20px;">';
$image = $row1['imgurl'];
//$imageData = base64_encode(file_get_contents($image));
//echo '<img src="data:image/jpeg;base64,'.$image.'" />';
echo '<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" >';   
echo '</div>'; 
}    

echo'<a class="nav-link d-block "   data-widget="control-sidebar" data-slide="true" href="#" role="button">';

    
$query1 = "SELECT * FROM faculty_data  WHERE Femail='" . $_SESSION["email"] . "'";
$result1 = mysqli_query($conn,$query1);
while($row = mysqli_fetch_assoc($result1)) {

echo' <div class="mr-3 text-center">';
echo'<p style="font-size:small; padding-left:-45px;">';
echo "". $row["Fname"]. "";
echo'<i class="fas fa-angle-right left ml-3" ></i></a>';
echo '</p>' ;
echo'</div>';
}


?>