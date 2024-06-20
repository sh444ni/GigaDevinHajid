<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai dari form
    $fullName = $_POST["fullName"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $age = $_POST["age"];
    $birthday = $_POST["birthday"];
    $address = $_POST["address"];
    $password = $_POST["password"];

    // Membentuk string untuk disimpan ke file
    $userData = "$fullName|$username|$email|$phoneNumber|$age|$birthday|$address|$password\n";

    // Menyimpan data ke file users.txt
    $file = fopen("users.txt", "a") or die("Unable to open file!");
    fwrite($file, $userData);
    fclose($file);

    echo "Registration successful!";

    // Setelah data berhasil disimpan
    session_start();
    $_SESSION["username"] = $username;
    header("Location: login.php");
    exit();
}
?>