<?php
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer/Exception.php";
require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";

if($_POST) {

  $admin_email = "ruhnazpathan32@gmail.com";  //Replace with your domain email (the one you own)

  if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) OR strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    $output = json_encode(['type'=>'error', 'text' => 'Request must come from Ajax']);
    die($output);
  }

  if(!isset($_POST["userName"]) || !isset($_POST["userEmail"]) || !isset($_POST["userMessage"])) {
    $output = json_encode(['type'=>'error', 'text' => 'Input fields are empty!']);
    die($output);
  }

  $user_Name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
  $user_Email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
  $user_Phone = $_POST["userPhone"];
  $user_Message = filter_var($_POST["userMessage"], FILTER_SANITIZE_STRING);

  if(strlen($user_Name)<3) {
    $output = json_encode(['type'=>'error', 'text' => 'Name is too short or empty!']);
    die($output);
  }
  if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) {
    $output = json_encode(['type'=>'error', 'text' => 'Please enter a valid email!']);
    die($output);
  }
  if(strlen($user_Message)<5) {
    $output = json_encode(['type'=>'error', 'text' => 'Too short message! Please enter something.']);
    die($output);
  }

  $mail = new PHPMailer();

  // Use your domain's SMTP details:
  $mail->isSMTP();
  $mail->Host = 'smtp.hostinger.com';  //  e.g. mail.dryveggie.com or smtp.hostinger.com
  $mail->SMTPAuth = true;
  $mail->Username = 'contact@core.webcrate.in'; // your domain mailbox
  $mail->Password = 'contact@Host786';  //  mailbox password
  $mail->SMTPSecure = 'tls';
  $mail->Port = 465;

  $mail->setFrom('contact@core.webcrate.in', 'Website Contact');
  $mail->addAddress('ruhnazpathan32@gmail.com'); // receive 
  
  $mail->addReplyTo($user_Email, $user_Name); //  you can click reply directly

  $mail->isHTML(true);
  $mail->Subject = 'New Contact Inquiry from Website';
  $mail->Body  = "
    <h4 style='text-align: center;padding: 25px 15px;background-color: #0c6c9e;color: #FFFFFF;font-size:16px;width:90%;border-radius: 10px;'>Hi! You have a new inquiry:</h4><br><br>
    <strong>Name: </strong> {$user_Name} <br>
    <strong>Email: </strong> {$user_Email} <br>
    <strong>Phone: </strong> {$user_Phone} <br>
    <strong>Message: </strong> {$user_Message} <br>";

  $mail->AltBody = 'This is the plain text version for mail clients';
   $mail->SMTPDebug = 2;  // or 3 for even more detail
  $mail->Debugoutput = 'html'; 

  if(!$mail->send()) {
    $output = json_encode(['type'=>'error', 'text' => 'Could not send mail! Mailer Error: '.$mail->ErrorInfo]);
  } else {
    $output = json_encode(['type'=>'message', 'text' => 'Thank you '.$user_Name.'! Your message has been sent.']);
  }

  echo $output;
}
?>
