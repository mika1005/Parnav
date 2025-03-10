<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
// print_r($_REQUEST);
$voluntary_name = $_REQUEST['voluntary_name'];
$voluntary_dob = $_REQUEST['voluntary_dob'];
$voluntary_email = $_REQUEST['voluntary_email'];
$voluntary_number = $_REQUEST['voluntary_number'];
$voluntary_address = $_REQUEST['voluntary_address'];
$voluntary_city = $_REQUEST['voluntary_city'];
$voluntary_state = $_REQUEST['voluntary_state'];
$voluntary_pin = $_REQUEST['voluntary_pin'];
$voluntary_country = $_REQUEST['voluntary_country'];
$bloodgroupv = $_REQUEST['bloodgroupv'];
$about_raktsankalp = $_REQUEST['about_raktsankalp'];
$voluntary_blood_birthday = $_REQUEST['voluntary_blood_birthday'];
$pledge_person = $_REQUEST['pledge_person'];
$recommend_person_name = $_REQUEST['recommend_person_name'];
$recommend_person_mobile = $_REQUEST['recommend_person_mobile'];
$would_you_like = $_REQUEST['would_you_like'];
$additional_comments_or_instructions = $_REQUEST['additional_comments_or_instructions'];






$message = $message = "
<h2> Volunteer Information :</h2>
<b>Name:</b>  $voluntary_name <br/>
<b>Date of Birth:</b>  $voluntary_dob <br/>
<b>Email ID:</b>  $voluntary_email <br/>
<b>Mobile No.:</b>  $voluntary_number <br/>
<b>Address:</b>  $voluntary_address <br/>
<b>City:</b>  $voluntary_city <br/>
<b>State:</b>  $voluntary_state <br/>
<b>Pin:</b>  $voluntary_pin <br/>
<b>Country:</b>  $voluntary_country <br/>
<b>Blood Group:</b>  $bloodgroupv <br/>
<b>about_raktsankalp:</b>  $about_raktsankalp <br/>
<b>voluntary_blood_birthday:</b>  $voluntary_blood_birthday <br/>
<b>pledge_person:</b>  $pledge_person <br/>
<b>recommend_person_name:</b>  $recommend_person_name <br/>
<b>recommend_person_mobile:</b>  $recommend_person_mobile <br/>
<b>person_take_pledge:</b>  $person_take_pledge <br/>
<b>additional_comments_or_instructions:</b>  $additional_comments_or_instructions <br/>
<b>volunter_date:</b>  $volunter_date";

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
    // $mail->addCC('atulksingh.15@gmail.com', 'Parnav Foundation');



    //Content

    $mail->isHTML(true);
    // $mail->addAttachment('volunter-data/' . $file_name);
    $mail->Subject = 'You have an email from a website visitor!';
    $mail->Body = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'success';

    include("db.php");
    //$conn = mysqli_connect('localhost', 'u708763948_data', 'Arjun@2024', 'u708763948_parnav')  or die('database connection not established');

    $qry = "INSERT INTO `Pledge`(`voluntary_name`, `voluntary_dob`, `voluntary_email`, `voluntary_number`, `voluntary_address`, `voluntary_city`, `voluntary_state`, `voluntary_pin`, `voluntary_country`, `bloodgroupv`, `about_raktsankalp`, `voluntary_blood_birthday`, `pledge_person`, `recommend_person_name`, `recommend_person_mobile`, `would_you_like`, `additional_comments_or_instructions`) VALUES ('" . $voluntary_name . "','" . $voluntary_dob . "','" . $voluntary_email . "','" . $voluntary_number . "','" . $voluntary_address . "','" . $voluntary_city . "','" . $voluntary_state . "','" . $voluntary_pin . "','" . $voluntary_country . "','" . $bloodgroupv . "','" . $about_raktsankalp . "','" . $voluntary_blood_birthday . "','" . $pledge_person . "','" . $recommend_person_name . "','" . $recommend_person_mobile . "','" . $would_you_like . "','" . $additional_comments_or_instructions . "')";
// print_r($qry);die();
    $exquted = mysqli_query($conn, $qry);
    // if ($exquted) {
    //     echo " qry successfully";
    // } else {
    //     echo " qry failed";
    // }

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

    $gmail->setFrom($_REQUEST['voluntary_email'], 'Parnav Foundation');
    $gmail->addAddress($_REQUEST['voluntary_email'], '');
    $gmail->addReplyTo($_REQUEST['voluntary_email'], 'Parnav Foundation');



    //Content

    $gmail->isHTML(true);

    $gmail->Subject = 'Thank You for taking pledge on Raktabhiyan movement ';
    $gmail->Body = "<div>
    Dear $voluntary_name,
</div>
<div>
    <br/>
</div>
<div>
    Thank you for joining the raktabhiyan initiative! Your willingness to
    contribute to this noble cause is truly appreciated. Together, we can make a
    significant impact and save lives. Your support means the world to us.
</div>
<div>
    <br/>
</div>
<div>
    With regards,
</div>
<div>
    <br/>
</div>
<div>
    Team Raktabhiyan ( A Parnav Foundation Initiative )
</div>
<div>
    Email -raktabhiyan@gmail.com
</div>
<div>
    Website - parnav.org
</div>
<div>
    Phone: +91-8860840179 , 88262 71085 , 95403 09243
</div>";
    $gmail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $gmail->send();
} catch (Exception $e) {
    echo "Gmail Message could not be sent. Mailer Error: {$gmail->ErrorInfo}";
}
?>