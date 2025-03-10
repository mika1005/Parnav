<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$donar_name = $_REQUEST['donar_name'];
$donar_dob = $_REQUEST['donar_dob'];
$donar_email = $_REQUEST['donar_email'];
$donar_mobileno = $_REQUEST['donar_mobileno'];
$donar_Address = $_REQUEST['donar_Address'];
$donar_city = $_REQUEST['donar_city'];
$donar_state = $_REQUEST['donar_state'];
$donar_pin = $_REQUEST['donar_pin'];
$donar_country = $_REQUEST['donar_country'];
$donar_type = $_REQUEST['donar_type'];
$donar_amount = $_REQUEST['donar_amount'];
$other_donar = $_REQUEST['other_donar'];
$donar_payment = $_REQUEST['donar_payment'];
$donar_purpose = $_REQUEST['donar_purpose'];
$donar_recognition = $_REQUEST['donar_recognition'];
$donar_additional = $_REQUEST['donar_additional'];
$donar_sign = $_REQUEST['donar_sign'];
$donar_date = $_REQUEST['donar_date'];





$message = $message = "
<h2> Donar Information :</h2>
<b>Name:</b>  $donar_name <br/>
<b>Date of Birth:</b>  $donar_dob <br/>
<b>Email ID:</b>  $donar_email <br/>
<b>Mobile No.:</b>  $donar_mobileno <br/>
<b>Address:</b>  $donar_Address <br/>
<b>City:</b>  $donar_city <br/>
<b>State:</b>  $donar_state <br/>
<b>Pin:</b>  $donar_pin <br/>
<b>Country:</b>  $donar_country <br/>
<b>Type:</b>  $donar_type <br/>
<b>Amount:</b>  $donar_amount <br/>
<b>Other Donation:</b>  $other_donar <br/>
<b>Payment Method:</b>  $donar_payment <br/>
<b>Purpose of Donation:</b>  $donar_purpose <br/>
<b>Recognition Preferences:</b>  $donar_recognition <br/>
<b>Additional Comments or Instructions:</b>  $donar_additional <br/>
<b>Date:</b>  $donar_date ";

$mail = new PHPMailer(true);

try {
    $file_name = $_FILES['donar_sign']['name'];
    $file_size = $_FILES['donar_sign']['size'];
    $file_tmp = $_FILES['donar_sign']['tmp_name'];
    $file_type = $_FILES['donar_sign']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['donar_sign']['name'])));
    move_uploaded_file($file_tmp, 'Donar-data/' . $file_name);
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'addbybinfo@gmail.com';
    $mail->Password = 'fnieiumaukocmfgh';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    //Recipients

    $mail->setFrom('shivammishra.evil@gmail.com', 'Parnav Foundation');
    $mail->addAddress('shivammishra.evil@gmail.com', '');
    $mail->addReplyTo('shivammishra.evil@gmail.com', 'Parnav Foundation');



    //Content

    $mail->isHTML(true);
    $mail->addAttachment('Donar-data/' . $file_name);
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
    $gmail->Username = 'addbybinfo@gmail.com';
    $gmail->Password = 'fnieiumaukocmfgh';
    $gmail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $gmail->Port = 465;

    //Recipients

    $gmail->setFrom($_REQUEST['donar_email'], 'Parnav Foundation');
    $gmail->addAddress($_REQUEST['donar_email'], '');
    $gmail->addReplyTo($_REQUEST['donar_email'], 'Parnav Foundation');



    //Content

    $gmail->isHTML(true);

    $gmail->Subject = 'Thank You for Your Generous Support to Parnav Foundation! ';
    $gmail->Body = "<div><p>    Dear <b>$donar_name</b>,</p></div><div><p>    Thank you for your incredible generosity and for considering Parnav    Foundation for your donation, whether it's a one-time contribution or a    monthly commitment. Your support means the world to us and directly    impacts our mission in [Raktabhiyan, Health Care, Education, Livelihood,    Disaster Response].</p></div><div><p>    Your commitment to making a difference in the lives of others is deeply    appreciated. Your donation will enable us to continue our vital work and    drive positive change in our communities.</p></div><div><p>    At Parnav Foundation, we believe in the power of collective efforts, and    your contribution embodies that belief. Every donation, regardless of    size, helps us move closer to our goals of:</p></div><div><p>    <b>Health Care:</b> Provide medical aid, healthcare services, and essential    supplies to underserved communities, ensuring access to quality    healthcare for all.</p></div><div><p>    <b>Education:</b> Support educational programs, scholarships, and    infrastructure development, empowering children, and young adults to    access quality education and build a better future.</p></div><div><p>    <b>Livelihood:</b> Create sustainable livelihood opportunities, vocational    training, and entrepreneurship programs, fostering economic independence    and growth in marginalized communities.</p></div><div><p>    <b>Disaster Response:</b> Enable swift and effective disaster relief efforts,    offering immediate aid, shelter, and rehabilitation to those affected by    natural disasters.</p></div><div><p>    We've received your intention to donate and will ensure that your    support goes towards our initiatives that create lasting impact and    positive change.</p></div><div><p>    If you have any questions about your donation or would like more    information about our projects, please feel free to reach out. We're    here to provide any assistance or clarification you might need.</p></div><div><p>    Once again, thank you for choosing Parnav Foundation as the beneficiary    of your generosity. Together, we're transforming lives and building a    better tomorrow.</p></div><div><p>    With Gratitude,</p></div><div><p>    Atul Singh</p></div><div><p>    [Your Position]</p></div><div><p>    Parnav Foundation</p></div><div><p>    Connect with us!</p></div><div><p>    Email: parnavfoundation@gmail.com</p></div><div><p>    Address: Sector 73, Noida, Uttar Pradesh</p></div><div><p>    Phone: +91-8860840179, +91-9870262669, +91-9953842558</p></div><div>";
    $gmail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $gmail->send();
} catch (Exception $e) {
    echo "Gmail Message could not be sent. Mailer Error: {$gmail->ErrorInfo}";
}
?>