<?php 
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$alert='';

$mail = new PHPMailer(true);

if(isset($_POST['submit'])){
    $FullName = $_POST['Name'];
    $Regnumber = $_POST['RegisterNumber'];
    $Email = $_POST['Email'];
    $reg='/(^[0-9]{9})@sastra.ac.in/';
    $res=preg_match($reg, $Email);
    $Mob = $_POST['MobileNumber'];
    $Gender = $_POST['Gender'];
    $DOB = $_POST['DOB'];
    $Yr = $_POST['GraduationYear'];
    $Role = $_POST['Role'];
    $Department = $_POST['Department'];
    $Confirmation=$_POST['Confirmations'];
    $UnivPlace = $_POST['PlaceofUniverity'];
    $Comment = $_POST['Comments'];
    $message ='
    <h3 align="centre">Applicant Details</h3>
        <tabe border="1" width="100%" cellpadding="5" cellspacing="5">
        <tr>
            <td width = "30%"> Full Name </td>
            <td width = "70%"> '.$_POST['Name'].' </td>
        </tr>
        <tr>
            <td width = "30%"> Register Number</td>
            <td width = "70%"> '.$_POST['RegisterNumber'].' </td>
        </tr>
        <tr>
            <td width = "30%"> Email </td>
            <td width = "70%"> '.$_POST['Email'].' </td>
        </tr>
        <tr>
        <td width = "30%"> Mobile Number </td>
        <td width = "70%"> '.$_POST['MobileNumber'].' </td>
    </tr>
        <tr>
            <td width = "30%">  Gender  </td>
            <td width = "70%"> '.$_POST['Gender'].' </td>
        </tr>
        <tr>
            <td width = "30%"> DOB  </td>
            <td width = "70%"> '.$_POST['DOB'].' </td>
        </tr>
        <tr>
            <td width = "30%"> Year of Graduation   </td>
            <td width = "70%"> '.$_POST['GraduationYear'].'</td>
        </tr>
        <tr>
            <td width = "30%"> Qualification  </td>
            <td width = "70%"> '.$_POST['Qualification'].'</td>
        </tr>
        <tr>
            <td width = "30%">Role</td>
            <td width = "70%"> '.$_POST['Role'].'</td>
        </tr>
        <tr>
        <td width = "30%">Department</td>
        <td width = "70%">  '.$_POST['Department'].' </td>
        </tr>
        <tr>
            <td width = "30%"> Confirmation </td>
            <td width = "70%"> '.$_POST['Confirmations'].' </td>
        </tr>
        <tr>
            <td width = "30%">University Place</td>
            <td width = "70%"> '.$_POST['PlaceofUniverity'].'</td>
        </tr>
        <tr>
            <td width = "30%">Comment</td>
            <td width = "70%"> '.$_POST['Comments'].' </td>
        </tr>
       
        </table>
    ';

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
    $mail->Subject='New Application Recieved';
    $mail->addAttachment($_FILES['CVFile']['tmp_name'],$_FILES['CVFile']['name']);
    $mail->  Body=$message;

    if($mail->send()){
    $message='<div class="alert-sucess">
            Application Successfully Submitted!
            </div>';
            
    }else{
        $message='<div class="alert-danger">
            There is an error
            </div>';
}
}

?>
