<?php
if(isset($_POST['mail'])){

    $mailto = "dheraisastodeal@gmail.com";
    $mailSub = $_POST['mail_sub'];
    $mailMsg = $_POST['editor1'];
   require 'PHPMailer/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "sandesht801@gmail.com";
   $mail ->Password = "";
   $mail ->SetFrom("sandesht801@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }


}
?>

   

