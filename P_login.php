<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Membaca data dari file users.txt
    $file = fopen("users.txt", "r") or die("Unable to open file!");
    $users = fread($file, filesize("users.txt"));
    fclose($file);

    // Memisahkan setiap baris data pengguna
    $userData = explode("\n", $users);

    // Memeriksa apakah username dan password cocok
    $userFound = false;
    foreach ($userData as $user) {
        $userDetails = explode("|", $user);
        if ($userDetails[1] == $username && $userDetails[7] == $password) {
            $userFound = true;
            break;
        }
    }

    if ($userFound) {
        session_start();
        $_SESSION["username"] = $username;
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>