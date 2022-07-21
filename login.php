<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: home.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: home.php");
    } else {
        echo "<script>alert('Email Atau Password Salah!')</script>";
    }
}

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="anm">

        <p>SMK</p>
        <b>
            <div class="titleanm">
                Bina Informatika <br />
                Yang paling Keren <br />
                Yang Paling Nyaman <br />
                Yang Paling Pintar <br />
                Yang Paling Canggih
            </div>
        </b>
    </div>
    <div class="img">
        <img src="school.png" alt="">
    </div>
    <div class="wrapper">
        <div class="title">
            Login
        </div>
        <form method="post" action="">
            <div class="field">
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="field">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="signup-link">
                Belum Punya Akun? <a href="registrasi.php">Register</a>
            </div>
            <!-- <div class="content">
                <div class="checkbox">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <div class="pass-link">
                    <a href="#">Forgot password?</a>
                </div>
            </div> -->
            <div class="field">
                <input type="submit" name="submit" value="Login">
            </div>

        </form>
    </div>
</body>

</html>