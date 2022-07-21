<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper" id="navbar">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="home.php">SMK BINA INFORMATIKA</a></div>
        <ul class="links">
          <li><a href="home.php">Home</a></li>
          <li>
            <a href="#" class="desktop-link">PSB</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">PSB</label>
            <ul>
              <li><a href="form.php">Form Pendaftaran</a></li>
              <li><a href="list.php">Daftar Siswa</a></li>
            </ul>
          </li>
          <li><a href="profile.php">Tentang Kami</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>

      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Cari Apa..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
  </div>
  <script>
            var prevScrollpos = window.pageYOffset;
            window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
              if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar").style.top = "0";
              } else {
                document.getElementById("navbar").style.top = "-70px";
              }
              prevScrollpos = currentScrollPos;
            }
</script>
</body>
</html>