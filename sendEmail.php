<?php

error_reporting(0);

$ssName=$_REQUEST['ssName'];
$ssLastName=$_REQUEST['ssLastName'];
$ssEmail=$_REQUEST['ssEmail'];
$ssPhone=$_REQUEST['ssPhone'];
$ssMetroArea=$_REQUEST['ssMetroArea'];
$ssCommunity=$_REQUEST['ssCommunity'];
$ssModel=$_REQUEST['ssModel'];
$ssMessage=$_REQUEST['ssMessage'];

require_once "vendor/PHPMailerAutoload.php";
//PHPMailer Object
$mail = new PHPMailer;
//From email address and name
$mail->From = "hello@haptic.is";
$mail->FromName = "Woodside Homes";

//To address and name
$mail->addAddress("hello@haptic.is", "Woodside Homes");
//$mail->addAddress("recepient1@example.com"); //Recipient name is optional

//Address to which recipient will reply
$mail->addReplyTo($yourEmail, "Reply");

//CC and BCC
//$mail->addCC("cc@example.com");
//$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "You have received an email";
$mail->Body = "
Name: $ssName <br>
Last Name: $ssLastName <br>
Email: $ssEmail <br>
Phone: $ssPhone <br>
Area: $ssMetroArea <br>
Community: $ssCommunity <br>
Model: $ssModel <br>
Message: $ssMessage
";
//$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
	?>
    <div style="text-align:center;">Your message has been sent successfully. <br>
    <a href="find-a-home.html">Return to Homepage</a>
    </div>

    <?php
}
?>