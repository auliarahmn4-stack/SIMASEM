<?php
session_start();
include "includes/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['nama'];
            $_SESSION['role'] = $user['role'];
            header("Location: dashboard.php");
            exit;
        }
    }
    
    $error = "Username atau password salah.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php include "includes/header.php"; ?>
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
</head>

<body>

<div class="login-container">

    <div class="logo">M</div>

    <h2>SIMASEM</h2>
    <p class="subtitle">Sistem Absensi Seminar</p>

    <?php
    if(isset($error)){
        echo "<div class='error'>$error</div>";
    }
    ?>

    <form method="POST">

        <div class="input-group">
            <input
                type="text"
                name="username"
                placeholder="Username"
                required
                autofocus>
            <span class="icon">👤</span>
        </div>

        <div class="input-group">
            <input
                type="password"
                name="password"
                placeholder="Password"
                required>
            <span class="icon">🔒</span>
        </div>

        <button type="submit">
            Login
        </button>

    </form>

    <p class="footer-text">SIMASEM v1.0</p>

</div>

</body>
</html>