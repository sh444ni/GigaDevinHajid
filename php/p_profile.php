<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["username"])) {
    header("Location: ./login.php");
    exit();
}

$username = $_SESSION["username"];
$userData = file("./users.txt");
$userInfo = null;

foreach ($userData as $user) {
    $data = explode("|", $user);
    if ($data[1] == $username) {
        $userInfo = $data;
        break;
    }
}

if ($userInfo === null) {
    echo "User not found";
    exit();
}

$userId = $_SESSION["username"];
$fullName = $userInfo[0];
$email = $userInfo[2];
$bio = isset($_SESSION['user_bio']) ? $_SESSION['user_bio'] : "No bio available.";

?>