<?php


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "exam";
$send_email = false;
 
// creating a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// checking if the connection was successful or not
if(!$conn){
    die("Sorry could not connect to the database. ". mysqli_connect_error());
}

// Selecting all the data from 'data' table in the  database
$sql = "SELECT * FROM  data";
// Firing the sql query
$result = mysqli_query($conn, $sql);
// echo "Emails in the database are:"."<br>"; ! this was just a check if it is getting successful retrieval
// creating an empty array
$emails = array();
// setting count to zero
$count = 0;
while($row = mysqli_fetch_assoc($result)){
    // echo $row['Femail'] . '<br>';
    $emails[$count] = $row['Femail'];
    $count++;
}
// echo count($emails);
// checking the value of count it will be greater than zero even if db has one entry as after the loop value of 
// count will be 1
if(count($emails) > 0){
    $send_email = true; //This was added as just a check for dummy database 
                        //as we dont want to unnecessary run mail code and result in an error
}


// check for sending an email
if($send_email){

    // iterating over the emails array to send email to each particular email (recipient) in the list
    for($email_no = 0; $email_no < count($emails); $email_no++)
        {
    // Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);
            // basic try catch block to ensure normal flow of the code
            try {
                //Server settings
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'harsh.sachala@somaiya.edu';                     // SMTP username
                $mail->Password   = 'dkluzuckyitnbsdc';                               // SMTP password 
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                 // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                

                //Recipients
                $mail->setFrom('harsh.sachala@somaiya.edu', 'Harsh Sachala');
                
                
                $mail->addAddress($emails[$email_no]);               // Name is optional
                
                

                // // Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                $body = '<p><strong>Hello</strong> this is a test mail.</p>';
                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Test';
                $mail->Body    = $body;
                $mail->AltBody = strip_tags($body);

                $mail->send();
                echo 'Message has been sent to '. $emails[$email_no] . "<br>";
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
}
// basic else condtion to the if
else{
    echo "No emails in the database.";
}