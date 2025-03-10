<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$ifname = $_REQUEST['ifname'];
$ilname = $_REQUEST['ilname'];
$iemail = $_REQUEST['iemail'];
$iphone = $_REQUEST['iphone'];
$coursename = $_REQUEST['coursename'];
$Yearname = $_REQUEST['Yearname'];
$Course_Major = $_REQUEST['Course_Major'];
$icollege = $_REQUEST['icollege'];
$like_to_intern = $_REQUEST['like_to_intern'];
$internship_with_parnav = $_REQUEST['internship_with_parnav']; 





$message = $message = "
<h2> Internship Registration :</h2>
<b>Name:</b>  $ifname $ilname <br/>
<b>Email ID:</b>  $iemail <br/>
<b>Phone Number:</b>  $iphone <br/>
<b>Course Name :</b>  $coursename <br/>
<b>Year :</b>  $Yearname <br/>
<b>Course Major :</b>  $Course_Major 
<b>College :</b>  $icollege 
<b>1. How many days would you like to intern? :</b>  $like_to_intern 
<b>2. What do you wish to learn in your internship with Parnav foundation? :</b>  $internship_with_parnav 
";

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

    $gmail->setFrom($_REQUEST['email'], 'Parnav Foundation');
    $gmail->addAddress($_REQUEST['email'], '');
    $gmail->addReplyTo($_REQUEST['email'], 'Parnav Foundation');



    //Content

    $gmail->isHTML(true);

    $gmail->Subject = 'Thank You for Your Interest in an Internship at Parnav Foundation!  ';
    $gmail->Body = "<div>
    <p>
        Dear  $ifname $ilname,
    </p>
</div>
<div>
    <p>
        Thank you for considering an internship opportunity with Parnav
        Foundation! Your interest in contributing your skills and enthusiasm to
        our mission in [Raktabhiyan, Health Care, Education, Livelihood,
        Disaster Response] is greatly appreciated.
    </p>
</div>
<div>
    <p>
        Your application for an internship has been received, and we are excited
        about the possibility of having someone as motivated and passionate as
        you join our team. At Parnav Foundation, our interns play a vital role
        in supporting our initiatives and bringing fresh perspectives to our
        work.
    </p>
</div>
<div>
    <p>
        Our team is currently reviewing your application and qualifications. We
        understand the importance of this opportunity for your professional
        growth, and we'll do our best to respond to you promptly.
    </p>
</div>
<div>
    <p>
        In the meantime, we encourage you to explore more about Parnav
        Foundation on our website to gain insights into the impactful projects
        and the work culture here.
    </p>
</div>
<div>
    <p>
        Should you have any further questions or want to share additional
        information, feel free to reach out. We're here to assist you throughout
        this process and are enthusiastic about the possibility of collaborating
        with someone as dedicated as you.
    </p>
</div>
<div>
    <p>
        Thank you once again for considering Parnav Foundation for your
        internship experience. We're looking forward to potentially working
        together to make a meaningful difference.
    </p>
</div>
<div>
</div>
<div>
    <p>
        Best Regards,
    </p>
</div>
<div>
</div>
<div>
    <p>
        Team Parnav Foundation 
    </p>
</div>
<div>
    <p>
     Raktabhiyan
    </p>
</div>
<div>
    <p>
        
    </p>
</div>
<div>
    <p>
        Connect with us!
    </p>
</div>";
    $gmail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $gmail->send();
} catch (Exception $e) {
    echo "Gmail Message could not be sent. Mailer Error: {$gmail->ErrorInfo}";
}
?>