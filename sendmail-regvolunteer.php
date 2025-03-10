<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$vfname = $_REQUEST['vfname'];
$vlname = $_REQUEST['vlname'];
$vemail = $_REQUEST['vemail'];
$vphone = $_REQUEST['vphone'];
$would_you_like_volunter = $_REQUEST['would_you_like_volunter'];
$volunteer_minimum = $_REQUEST['volunteer_minimum'];
$office_work_or_Field_work = $_REQUEST['office_work_or_Field_work'];

include("db.php");

    
        $query="INSERT INTO `volunteer`(`first`, `last`, `email`, `phone`, `msg1`, `msg2`, `msg3`)
         VALUES ('$vfname','$vlname','$vemail','$vphone','$would_you_like_volunter','$volunteer_minimum','$office_work_or_Field_work')";
        $run = mysqli_query($conn,$query);


$message = $message = "
<h2> Volunteer Information :</h2>
<b>Name:</b>  $vfname $vlname <br/>
<b>Email ID:</b>  $vemail <br/>
<b>Phone Number:</b>  $vphone <br/>
<b>Which days would you like to volunteer? Weekdays/Weekends:</b>  $would_you_like_volunter <br/>
<b>Would you be ready to volunteer minimum 6 hours on a day? If not the how much hours you can give?:</b>  $volunteer_minimum <br/>
<b>Would you like to help with office work or Field work?:</b>  $office_work_or_Field_work ";

$mail = new PHPMailer(true);

try {
    // $file_name = $_FILES['volunter_donar_sign']['name'];
    // $file_size = $_FILES['volunter_donar_sign']['size'];
    // $file_tmp = $_FILES['volunter_donar_sign']['tmp_name'];
    // $file_type = $_FILES['volunter_donar_sign']['type'];
    // $file_ext = strtolower(end(explode('.', $_FILES['volunter_donar_sign']['name'])));
    // move_uploaded_file($file_tmp, 'volunter-data/' . $file_name);
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
    // $mail->addAttachment('volunter-data/' . $file_name);
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

    $gmail->setFrom($_REQUEST['vemail'], 'Parnav Foundation');
    $gmail->addAddress($_REQUEST['vemail'], '');
    $gmail->addReplyTo($_REQUEST['vemail'], 'Parnav Foundation');



    //Content

    $gmail->isHTML(true);

    $gmail->Subject = 'Thank You for Your Interest in Volunteering with Parnav Foundation! ';
    $gmail->Body = "<div><p>    Dear <b>$vfname $lname</b>,</p></div><div><p>    Thank you for expressing your interest in joining Parnav Foundation as a    volunteer! Your willingness to contribute your time and skills to our    cause is truly appreciated.</p></div><div><p>    At Parnav Foundation, our volunteers are the heartbeat of our    initiatives in [Raktabhiyan, Health Care, Education, Livelihood,    Disaster Response], and your eagerness to be a part of this effort means    a lot to us.</p></div><div><p>    We've received your interest in volunteering, and our team is thrilled    at the prospect of having someone as passionate as you on board. Your    dedication to making a difference in our communities aligns perfectly    with our mission.</p></div><div><p>    We're currently reviewing your information and will be in touch shortly    to discuss the next steps in the volunteer onboarding process.    Meanwhile, we encourage you to explore more about Parnav Foundation on    our website to get a deeper understanding of our work.</p></div><div><p>    Your commitment to lending a helping hand is invaluable to us. If you    have any immediate questions or ideas you'd like to share, please feel    free to reach out. We're excited about the potential collaboration and    the positive impact we can create together.</p></div><div><p>    Once again, thank you for choosing Parnav Foundation. We look forward to    embarking on this meaningful journey with you.</p></div><div></div><div><p>    Warm Regards,</p></div><div><p>    Team ParNav Foundation</p></div><div><p>Raktabhiyan</p></div><div><p>    </p></div><div><p>    Connect with us!</p></div><div><p>    Mail: care@parnav.org</p><br> 8860840179</div>";
    $gmail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $gmail->send();
} catch (Exception $e) {
    echo "Gmail Message could not be sent. Mailer Error: {$gmail->ErrorInfo}";
}
?>