<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('class/class.phpmailer.php');


if($_POST['email']=="" ||$name=$_POST['name']==""
    || $subject=$_POST['subject']=="" || $message=$_POST['message']=="" ) {
     header("Location:contact.php");
     exit;
   }
$email=$_POST["email"];
$name=$_POST["name"];
$subject=$_POST["subject"];
$tel=$_POST["contactNo"];
$message=$_POST["message"];

$msg="Sender's name: $name\n";
$msg.="Sender's email: $email\n";

if(!$_POST['contactNo']=="")
    $msg.="Sender's Tel/Mobile $tel\n\n";

$msg.="$message\n";


try
{
    $mail=new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug=0;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure="ssl";
    $mail->Host="smtp.comdataconsulting.co.za";
    $mail->Port=465;
    $mail->Username="lazarus@comdataconsulting.co.za";
    $mail->Password="lazarus123*";
    $mail->SetFrom("lazarus@comdataconsulting.co.za","ComData Consulting website");

    $mail->Subject="$subject";
    $mail->Body="$msg";
    $mail->AddAddress("lazarus@comdataconsulting.co.za");

    if($mail->Send()) {
        $title='send';
        $page_content= "content/text_send.php";
     
    }
    else {
         $title='send error';
          $page_content= "content/text_send_error.php";
    }
    include_once('master.php');
}
catch(phpmailerException $e)
{
    echo  "Error 1".$e->errorMessage();
}
catch(Exception $e)
{
    echo "Error 2".$e->getMessage();
}




?>
