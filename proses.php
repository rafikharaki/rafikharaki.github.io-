<?php
session_start();

$email_benar = "admin@gmail.com";
$pass_benar  = "12345";

if (isset($_POST['email_user'])) {
    $email_input = $_POST['email_user'];
    $pass_input  = $_POST['pass_user'];

    if ($email_input == $email_benar && $pass_input == $pass_benar) {
        $_SESSION['status_login'] = true;
        $_SESSION['user_email'] = $email_input;
        header("Location: dashboard.php");
    } else {
        header("Location: login.php?pesan=gagal");
    }
}
?>