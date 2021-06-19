<?php 
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$alert='';

$mail = new PHPMailer(true);

if(isset($_POST['submit'])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $msg = $_POST['message'];

try{
    $mail -> isSMTP();
    $mail-> Host = 'smtp.gmail.com';
    $mail-> SMTPAuth =  true;
    $mail-> Username = 'youemailid'; //enter your email id
    $mail-> Password = 'yourpassword'; //enter your password
    $mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail-> setFrom('youemailid');  //enter your email id of admin 1
    $mail->addAddress('youemailid'); //enter your email id of admin 2
    $mail->addAddress('youemailid'); //enter your email id of admin 3

    $mail->isHTML(true);
    $mail->Subject='Message Received (Contact Page)';
    $mail-> Body ="<h3>Name : $Name <br> Email : $Email <br> Message: $msg</h3>";

    $mail->send();
    $alert='<div class="alert-sucess>
            <span>Message Sent! Thankyou for contacting us.</span>
            </div>';
 
}catch(Exception $e){
    $alert='<div class="alert-error">
            <span>'.$e->getMessage().'</span>
            </div>';
}
}

?>
