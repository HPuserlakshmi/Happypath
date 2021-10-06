<?php

header("refresh: 3");
$fullname = "Test";


require('phpmailer/PHPMailerAutoload.php');

//EMAIL RECEIVED TO THE CLIENT

$mail2 = new PHPMailer(true);
$mail2->IsMail();
$mail2->IsSMTP(); //use this code if you are using SMTP mail service
$mail2->Host = 'mail.dreamhost.com';		//add your host name for eg here it shows gmail 
$mail2->SMTPAuth = true; 
$mail2->SMTPDebug = false; //to remove the mail errors
$mail2->do_debug = 0;
$mail2->Username = 'reminder@stayintouchplease.com'; // Enter your SMTP username (if not using SMTP then enter gmail email id for gmail host)
$mail2->Password = 'D2Mh-UT?'; // Enter your SMTP password (if not using SMTP then enter gmail passwork for gmail host)
$mail2->FromName = "Happy Path";	//name from which the mail is sent
$mail2->From = "reminder@stayintouchplease.com";	//email from which the mail is sent
$mail2->SMTPSecure = 'tls'; //if not tls use 'ssl'
$mail2->Port = 587; //SMTP port -- use '465' or '587'
$mail2->addAddress('binit@gurutu.in');
$mail2->AddReplyTo('reminder@stayintouchplease.com', 'Happy Path');
$mail2->IsHTML(true);	//if the email template is in html format
$mail2->Subject = "Reminder Email - Happy Path";	//subject for the mail
$mail2->Body = "
<!doctype html>
<html lang='en-US'>

<head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type' />
    <title>Registration Successful</title>
    <meta name='description' content='Reminder Email - Happy Path'>
    <style type='text/css'>
        a:hover {text-decoration: underline !important;}
    </style>
</head>

<body marginheight='0' topmargin='0' marginwidth='0' style='margin: 0px; background-color: #f2f3f8;' leftmargin='0'>
    <!--100% body table-->
    <table cellspacing='0' border='0' cellpadding='0' width='100%' bgcolor='#f2f3f8'
        style='@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;'>
        <tr>
            <td>
                <table style='background-color: #f2f3f8; max-width:670px;  margin:0 auto;' width='100%' border='0'
                    align='center' cellpadding='0' cellspacing='0'>
                    <tr>
                        <td style='height:80px;'>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table width='95%' border='0' cellpadding='0' cellspacing='0'
                                style='max-width:670px;background:#fff; border-radius:3px; text-align:left;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);'>
                                <tr>
                                    <td style='height:40px;'>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style='padding:0 35px;'>
                                        <p style='color:#455056; font-size:15px;line-height:24px; margin:0;'>
										Hello - This is a reminder to reach out to $fullname.<br>
										The occasion is [OCCASION] which occurs on [REMINDER DATE]<br>
										Thank you.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style='height:40px;'>&nbsp;</td>
                                </tr>
				<tr>
                                    <td style='height:40px;'>&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    <tr>
                        <td style='height:20px;'>&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--/100% body table-->
</body>

</html>";
// $mail2->Send();

if(!$mail2->Send()) {
    echo "Message could not be sent.  ";
    echo "Mailer Error: " . $mail2->ErrorInfo;
    echo ("<script LANGUAGE='JavaScript'>window.location.href='https://stayintouchplease.com/public/email/test.php';</script>");
    exit; 
 };

//REDIRECT TO PAGE AFTER SUBMIT
echo ("<script LANGUAGE='JavaScript'>window.location.href='https://stayintouchplease.com/public/email/mail.php';</script>");

?>