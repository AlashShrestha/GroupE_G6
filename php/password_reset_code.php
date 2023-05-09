<?php
session_start();
include('connect.php');
include('db_conn.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\GroupE_G6\php\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\GroupE_G6\php\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\GroupE_G6\php\PHPMailer\src\SMTP.php';

function send_password_reset($get_name, $get_email, $token)
{
    include('smtp.php');
    $mail = new PHPMailer();
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Host       = "smtp.gmail.com";                     //Set the SMTP server to send through
    $mail->Username   = $user_mail;           //Gmail username
    $mail->Password   = $pass;                               //Gmail password
    $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom("dikeshkhatree@gmail.com", $get_name);
    $mail->addAddress($get_email);     //Add a recipient

    $mail->isHTML(true);
    $mail->Subject = "Reset Password Nofitication";

    $email_templet = "
        <h2> Hello </h2>
        <h3> You are receiving this email because we revieved a password reset request for your account </h3>
        <br></br>
        <a href = 'http://localhost/GroupE_G6/php/password-change.php?token=$token&email=$get_email'>Click Me</a>
    ";

    $mail->Body = $email_templet;
    $mail->send();
}

if (isset($_POST['password_reset_link'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT email, name FROM user WHERE email = '$email' LIMIT 1";
    $check_email_run = mysqli_query($conn, $check_email);

    if (mysqli_num_rows($check_email_run) > 0) {
        $row = mysqli_fetch_array($check_email_run);
        $get_name = $row['name'];
        $get_email = $row['email'];

        $update_token = "UPDATE user SET verify_token = '$token' WHERE email = '$get_email' LIMIT 1";
        $update_token_run = mysqli_query($conn, $update_token);

        if ($update_token_run) {
            send_password_reset($get_name, $get_email, $token);
            $_SESSION['status'] = "We e-mailed you a password reset link";
            header("Location: password-reset.php");
            exit(0);
        } else {
            $_SESSION['status'] = "Something went wrong. #1";
            header("Location: password-reset.php");
            exit(0);
        }
    } else {
        $_SESSION['status'] = "No Email Found";
        header("Location: password-reset.php");
        exit(0);
    }
}

if (isset($_POST['password_update'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    $token = mysqli_real_escape_string($conn, $_POST['password_token']);

    if (!empty($token)) {
        if (!empty($email) && !empty($new_password) && !empty($confirm_password)) {
            $check_token = "SELECT verify_token FROM user WHERE verify_token='$token' LIMIT 1";
            $check_token_run = mysqli_query($conn, $check_token);

            if (mysqli_num_rows($check_token_run) > 0) {
                if ($new_password == $confirm_password) {
                    $update_password = "UPDATE user SET password = '$new_password' WHERE  verify_token='$token' LIMIT 1";
                    $update_password_run = mysqli_query($conn, $update_password);

                    if ($update_password_run) {
                        $new_token = md5(rand()) . "funda";
                        $update_to_new_token = "UPDATE user SET verify_token = '$new_token' WHERE  verify_token='$token' LIMIT 1";
                        $$update_to_new_token = mysqli_query($conn, $update_to_new_token);

                        $_SESSION['status'] = "New password successfully updated.";
                        header("Location: login.php");
                        exit(0);
                    } else {
                        $_SESSION['status'] = "Did not update passowrd. Something went wrong";
                        header("Location: password-change.php?token=$token&email=$email");
                        exit(0);
                    }
                } else {
                    $_SESSION['status'] = "Password and Confirm Password doesnot match";
                    header("Location: password-change.php?token=$token&email=$email");
                    exit(0);
                }
            } else {
                $_SESSION['status'] = "Invalid Token";
                header("Location: password-change.php?token=$token&email=$email");
                exit(0);
            }
        } else {
            $_SESSION['status'] = "All Field are Mandatory";
            header("Location: password-change.php?token=$token&email=$email");
            exit(0);
        }
    } else {
        $_SESSION['status'] = "No Token Available";
        header("Location: password-change.php");
        exit(0);
    }
}
