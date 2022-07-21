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

    <title>Tentang Kami</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/profile.css">
</head>

<body>
<div class="position-card">
<div class="profile-card">
    <div class="card-header">
      <div class="pic">
        <img src="profile.png" alt="">
      </div>
      <div class="name">M Rafi Irfan</div>
      <div class="desc">Siswa SMK Bina Informatika Bintaro</div>
      <div class="sm">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-github"></a>
        <a href="https://www.youtube.com/channel/UCQXJ-GCDf9o3RhlKAEUaewg"target="_blank" class="fab fa-youtube"></a>
      </div>
      <a href="#" class="contact-btn">Contact Me</a>
    </div>
    <div class="card-footer">
      <div class="numbers">
        <div class="item">
          <span>120</span>
          Posts
        </div>
        <div class="border"></div>
        <div class="item">
          <span>127</span>
          Following
        </div>
        <div class="border"></div>
        <div class="item">
          <span>120K</span>
          Followers
        </div>
      </div>
    </div>
  </div>
</div>

</body>

</html>
