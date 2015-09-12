

<?php
require 'class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
// or try these settings (worked on XAMPP and WAMP):
// $mail->Port = 587;
// $mail->SMTPSecure = 'tls';


$mail->Username = "classesinfo123@gmail.com";
$mail->Password = "msuclasses";


$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

$mail->From = "classesinfo123@gmail.com";
$mail->FromName = "from class";

$mail->addAddress("riddhisoni1324@gmail.com","riddhi");
//$mail->addAddress("shahharsh4695@gmail.com","soni");

//$mail->addCC("user.3@ymail.com","User 3");
//$mail->addBCC("user.4@in.com","User 4");
$mail->AddAttachment("C:\wamp\www\sendemail.php");
$mail->AddAttachment("C:\wamp\www\mail.php");
$mail->Subject = "Testing PHPMailer with localhost with attaching file...";
$mail->Body = "Hi,<br /><br />This system is working perfectly.";

if(!$mail->Send())
    echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
else
    echo "Message has been sent ";
?>