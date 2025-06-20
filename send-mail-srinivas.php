<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if( isset($_POST['name']) && isset($_POST['email']) ){
    $name = $_POST['name'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];
    $organization= $_POST['organization'];  
    $message= $_POST['message'];
   
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
       //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'absolutelawfirm.in';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'noreplay@absolutelawfirm.in';                 // SMTP username
        $mail->Password = 'hQWDVEx*jDH&';                           // SMTP password
        $mail->SMTPSecure = 'TLS';                           
        $mail->Port = 587;                                    // TCP port to connect to
    
        //Recipients
        $mail->setFrom('noreplay@absolutelawfirm.in');
        
        $mail->addAddress('contact@absolutelawfirm.in');     // Add a recipient
    
    
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Absolute Law Firm Lead Form';
        
          // Set email body using the template
        ob_start(); // Start output buffering
        include 'email-template.php'; // Include the template
        $body = ob_get_clean(); // Get the contents of the buffer and clean it
        
        $mail->msgHTML($body);
    
        $mail->send();
        //echo "Sent!";
        $data_resp= ['alert'=>'success'];
        header('Content-type: application/json');
        echo json_encode( $data_resp );
        exit();
    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }

}
?>