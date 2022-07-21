<?php
include "config.php";

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpass = md5($_POST['confirmpass']);

    if ($password == $cpass) {
        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($koneksi, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user (username, email, password)
					VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($koneksi, $sql);
            if ($result) {
                echo "<script>alert('Berhasil Registrasi!')
                document.location='login.php';</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['confirmpass'] = "";
            } else {
                echo "<script>alert('Error!')</script>";
            }
        } else {
            echo "<script>alert('Email Sudah Digunakan')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Cocok')</script>";
    }
}
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Registrasi</title>
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
            Register
        </div>
        <form method="post" action="">
            <div class="field">
                <input type="text" name="username" value="<?php echo $username; ?>" required>
                <label>Username</label>
            </div>
            <div class="field">
                <input type="email" name="email" value="<?php echo $email; ?>" required>
                <label>Email</label>
            </div>
            <div class="field">
                <input type="password" name="password" value="<?php echo $_POST['password']; ?>" required>
                <label>Password</label>
            </div>
            <div class="field">
                <input type="password" name="confirmpass" value="<?php echo $_POST['confirmpass']; ?>" required>
                <label>Confirm Password</label>
            </div>
            <div class="signup-link">
                Sudah Punya Akun? <a href="login.php">Login</a>
            </div>
            <div class="field">
                <input type="submit" name="submit" value="Registrasi">
            </div>

        </form>
    </div>
</body>

</html>