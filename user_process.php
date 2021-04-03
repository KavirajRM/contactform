<?php
// use PHPMailer\PHPMailer\PHPMailer;
include("dbconnect.php");
$name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $mobile = $_REQUEST['mobile'];
    $msg = $_REQUEST['msg'];
    $city = $_REQUEST['city'];
    
    $query=mysqli_query($db_connect,"INSERT INTO `data`(`name`, `email`, `mobile`, `msg`, `city`) VALUES ('$name','$email','$mobile','$msg','$city')") or die(mysqli_error($db_connect));
    // require_once "PHPMailer/PHPMailer.php";
    // require_once "PHPMailer/Exception.php";
    // require_once "PHPMailer/SMTP.php";
    // $mail=new PHPMailer();
    // $mail ->isSMTP();
    // $mail->Host="smtp.gmail.com";
    // $mail->SMTPAuth="smtp.gmail.com";
    // $mail->Username="kavirage@gmail.com";
    // $mail->Password="";
    // $mail->Port=465;
    // $mail->SMTPSecure="ssl";
    // $mail->isHTML(true);
    // $mail->setFrom($email,$name);
    // $mail->addAddress("kavirage@gmail.com");
    // $mail->Body=$msg;

    //mail('$email','Contact us mail','$msg','From: kavirage@gmail.com');
    



    
    mysqli_close($db_connect);
    
    
?>
