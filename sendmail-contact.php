<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$fullname = $_REQUEST['fullname'];

$emailid = $_REQUEST['emailid'];

$mobileno = $_REQUEST['mobileno'];

$meassge_contact = $_REQUEST['meassge_contact'];



$message = $message = "
<h2> Contact Form Mail :</h2>
<p style='text-align:left;''>
Name : <b>$fullname </b></p>
<p style='text-align:left;''>Email ID : <b>$emailid</b></p> 
<p style='text-align:left;''>Mobile No. : <b>$mobileno</b></p> 
<p style='text-align:left;''>Message : <b>$meassge_contact</b></p> 
";

$mail = new PHPMailer(true);

try {

    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'raktabhiyan@gmail.com';
    $mail->Password = 'achaqmwgfvadgzvg';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    //Recipients

    $mail->setFrom('atulksingh.15@gmail.com', 'Parnav Foundation');
    $mail->addAddress('atulksingh.15@gmail.com', '');
    $mail->addReplyTo('atulksingh.15@gmail.com', 'Parnav Foundation');



    //Content

    $mail->isHTML(true);

    $mail->Subject = 'You have an email from a website visitor!';
    $mail->Body = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'success';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
$gmail = new PHPMailer(true);
try {

    $gmail->SMTPDebug = SMTP::DEBUG_OFF;
    $gmail->isSMTP();
    $gmail->Host = 'smtp.gmail.com';
    $gmail->SMTPAuth = true;
    $gmail->Username = 'raktabhiyan@gmail.com';
    $gmail->Password = 'achaqmwgfvadgzvg';
    $gmail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $gmail->Port = 465;

    //Recipients

    $gmail->setFrom($emailid, 'Parnav Foundation');
    $gmail->addAddress($emailid, '');
    $gmail->addReplyTo($emailid, 'Parnav Foundation');



    //Content

    $gmail->isHTML(true);

    $gmail->Subject = 'Thank You for Reaching Out to Parnav Foundation!';
    $gmail->Body = "<div><p>    Dear <b>$fullname</b>,</p></div><div><p>    Thank you for reaching out to us! We're thrilled that
     you've taken the    time to connect. Our team is already reviewing your message, and we'll   
     
     
     get back to you as soon as possible.</p></div><div><p>    Here at Parnav Foundation, we prioritize
      excellent customer service, and    your inquiry is important to us. If your message requires urgent    
      attention, rest assured we'll make it a priority.</p></div><div><p>    In the meantime, feel free to explore our 
      website for more information    about our services, Raktabhiyan, Health Care, Education, Livelihood,   
      
      Disaster Response. If you have any additional questions or need further    assistance, don't hesitate to ask.
       We're here to help!</p></div><div><p>    Once again, thank you for choosing Parnav Foundation. We appreciate your   
        interest and look forward to assisting you shortly.</p></div><div></div><div><p>  
          Best Regards,</p></div><div></div><div><p>  Team ParNav</p></div><div><p> Mission Raktabhiyan </p></div><div><p>    Parnav Foundation</p></div><div><p>    Connect with us!</p></div><div><p>   
           Mail: care@parnav.org</p></div><div><p>    Phone: +91-8860840179, +91-9870262669, +91-9953842558</p></div><div><p>    (11am to 7pm, Mon-Sat)</p></div>";
    $gmail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $gmail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$gmail->ErrorInfo}";
}
?>