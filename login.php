<?php
session_start();

// Cek apakah pengguna sudah login
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    // Tampilkan pesan selamat datang atau lakukan tindakan lain yang diperlukan
    echo "Welcome, " . $username . "!";
    // Atau, Anda dapat mengalihkan pengguna ke halaman lain setelah login
    // header("Location: dashboard.php");
    // exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSW Store Login</title>
    <link rel="stylesheet" href="css/s_login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <div class="wrapper">
        <form action="./P_login.php" method="post">
            <h1>Welcome Home Warriors!</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox" name="remember">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </form>
    </div>  
</body>

</html>