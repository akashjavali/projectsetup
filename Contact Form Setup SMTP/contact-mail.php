<?php
if (isset($_POST['submit'])) {

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require 'mailer/PHPMailer/PHPMailerAutoload.php';

    $name = $_POST['name'];
    $phone = $_POST['number'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $message = $_POST['message'];

    $mail = new PHPMailer;
    //$mail->SMTPDebug = 3;
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();
    //Set SMTP host name
    $mail->Host = "smtp.gmail.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = false;
    // $mail->SMTPDebug = 2;
    /*-----------------------------------*/
    $mail->Username = "sendanmailpace@gmail.com";
    $mail->Password = "pace@123";
    /*--------------------------------------------*/
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;

    $mail->From = "sales@empiricalmedia.in";
    $mail->FromName = "Contact lead from Empirical Media Website";

    //  Admin email
    $mail->addAddress('sales@empiricalmedia.in');

    $mail->isHTML(true);

    $mail->Subject = 'Lead from Empirical Media Website';
    $mail->Body = "Hi Admin,<br><br>
The details of submitted form are as follows<br><br>
Name : " . $name . "<br>" .  "Phone : " . $phone . "<br>" . "Email : " . $email . "<br>"  . "Location : " . $location . "<br>" . "Message: " . $message . "<br>" ;
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        echo "<script>alert('Mailer Error: '.$mail->ErrorInfo);</script>";
    } else {
        // echo "";
        echo "<script type='text/javascript'>  
        alert('Thank you for contacting Empirical Media. One of our executive will get in touch with in 24 business hours');
        window.location='https://empiricalmedia.in/landing.php';
        </script>";
    }
}