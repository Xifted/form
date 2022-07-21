<?php
require "config.php";
include "navbar.php";
include "clock.php";

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    session_start();
}
?>
<!DOCTYPE html>

<html>

<head>

    <title>Home</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <div class="header-background">
        <div class="header-profile">
            <p>Selamat Datang <?php echo $_SESSION['username']; ?></p>
        </div>
    </div>
    <div class="container">
        <div class="slider">
            <div>
                <a href="#">
                    <img src="slideshow/1.png" alt="Image 1">
                </a>
            </div>
            <div>
                <a href="#">
                    <img src="slideshow/2.png" alt="Image 2">
                </a>
            </div>
            <div>
                <a href="#">
                    <img src="slideshow/3.png" alt="Image 3">
                </a>
            </div>
        </div>
    </div>

    <div class="text-background"></div>
    <div class="text-container">
        <div class="title">
            Selamat Datang di Penerimaan Siswa Baru
        </div>
        <div class="paragraf">
            Layanan PPDB Online adalah sebuah sistem layanan yang dirancang untuk melakukan otomatis seleksi Pendaftaran Peserta Siswa Baru (PPDB), mulai dari proses pendaftaran, proses seleksi hingga pengumuman hasil seleksi, yang dilakukan secara online dan berbasis nyata (Realtime).
        </div>
    </div>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Slick JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Our Script -->
    <script>
        $(document).ready(function() {
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 2500,
                dots: true
            });
        });
    </script>


</body>

</html>