<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $age = $_POST["age"];
    $birthday = $_POST["birthday"];
    $address = $_POST["address"];
    $password = $_POST["password"];

    $userData = "$fullName|$username|$email|$phoneNumber|$age|$birthday|$address|$password\n";

    $file = fopen("users.txt", "a") or die("Unable to open file!");
    fwrite($file, $userData);
    fclose($file);

    echo "Registration successful!";

    session_start();
    $_SESSION["username"] = $username;
    header("Location: login.php");
    exit();
}
?>