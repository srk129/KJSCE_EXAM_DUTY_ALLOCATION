<?php 

//$mysql_host = "localhost";
//$mysql_username = "root";
//$mysql_password = "";
//$mysql_database = "duty_alloc_db";
//$conn = mysqli_connect($mysql_host, $mysql_username, $mysql_password, "$mysql_database");
use PHPMailer\PHPMailer\PHPMailer;

include("Datasource.php");
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


// Load Composer's autoloader
require 'vendor/autoload.php';
//include ('config.php') ;
require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

// Instantiation and passing `true` enables exceptions
$sql = "SELECT * FROM mailer";
$res  = mysqli_query($conn, $sql);
$email = array();
$date = array();
$time = array();
$slot = array();
$room = array();
$report_time = array();
while($row = mysqli_fetch_assoc($res)){
    array_push($email,$row['Femail']);
    array_push($date,$row['Exam_date']);
    array_push($time,$row['Exam_time']);
    array_push($slot,$row['Exam_slot']);
    array_push($room,$row['room_num']);
    array_push($report_time,$row['report_time']);
    }
print($email[0]);
try{
    for($i=0;$i<count($email);$i++){
        $mail = new PHPMailer(true);
        //Server settings
        
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'srk30866@gmail.com';                 // SMTP username
        $mail->Password   = '';                          // SMTP password this is real pass so fill yours and try
        $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        $mail->addreplyto('srk30866@gmail.com');
        $mail->isHTML(true);          // Set email format to HTML
        $mail->setFrom('srk30866@gmail.com',"ADMIN");
        // Content
        $mail->addAddress($email[$i]) ; 
        $mail->Subject = ('No Reply Exam Duty Reminder');
        $mail->Body    = ("Respected Faculty,<br> This is to remind you that on ".$date[$i]." you have Exam Supervision Duty allotted in the room number ".$room[$i]." in the ".$slot[$i]." slot.<br>The exam timing is ".$time[$i]." .<br> Please be there on time.Thank you !!");
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
    }
    echo "<script>alert('Mail has been sent successfully');</script>";
}catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
