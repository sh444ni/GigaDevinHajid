<?php
session_start();
include './P_profile.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $newFullName = trim($_POST['fullName']);
    $newEmail = trim($_POST['email']);
    $newBio = trim($_POST['bio']);


    if (!empty($newFullName) && !empty($newEmail) && filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {

        $_SESSION['user_fullname'] = $newFullName;
        $_SESSION['user_email'] = $newEmail;
        $_SESSION['user_bio'] = $newBio;


        header("Location: profile.php");
        exit();
    } else {
        $error = "Please provide valid information.";
    }
}
?>