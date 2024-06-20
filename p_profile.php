<?php
session_start();
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

$fullName = $userInfo[0];
$email = $userInfo[2];
?>