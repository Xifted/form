<?php
include "config.php";
include "navbar.php";
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" href="css/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="title">Pendaftaran Siswa Baru</div>
        <div class="content">
            <form name="formPendaftaran" action="tambah.php" method="post" onsubmit="return validateForm()">
                <div class="user-details">

                    <div class="input-box">
                        <span class="details">NIS</span>
                        <input name="nis" type="number" placeholder="Masukan NIS" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Nama Lengkap</span>
                        <input name="nama" type="text" placeholder="Masukan Nama Lengkap" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Alamat lengkap</span>
                        <input name="alamat" type="text" placeholder="Masukkan Alamat Lengkap" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Kota</span>
                        <input name="kota" type="text" placeholder="Masukan Kota" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Kode Pos</span>
                        <input name="kode_pos" type="number" placeholder="Kode Pos" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Umur</span>
                        <input name="umur" type="number" placeholder="Masukan Umur" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Agama</span>
                        <select id="agama" name="agama">
                            <option id="option-list" value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        </select>
                    </div>

                    <div class="input-box">
                        <span class="details">Golongan Darah</span>
                        <input name="golonganDarah" type="text" placeholder="Masukkan Golongan Darah" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Nama Ayah Kandung</span>
                        <input name="ayah" type="text" placeholder="Masukkan Nama Ayah Kandung" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Nama Ibu Kandung</span>
                        <input name="ibu" type="text" placeholder="Masukkan Nama Ibu Kandung" required>
                    </div>

                </div>

                <div class="gender-details">
                    <input type="radio" name="gender" value="Laki - Laki" id="dot-1">
                    <input type="radio" name="gender" value="Perempuan" id="dot-2">
                    <span class="gender-title">Jenis Kelamin</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Laki - Laki</span>
                        </label>
                    </div>
                    <div class="category">
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Perempuan</span>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="daftar" value="Daftar">
                </div>
            </form>
        </div>
    </div>
    <script>
        function validateForm() {
            if (document.forms["formPendaftaran"]["agama"].value == "") {
                alert("Pilih Agama");
                document.forms["formPendaftaran"]["agama"].focus();
                return false;
            }

            function validationForm() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var nama = document.getElementsByName("nama");
                if (nama.value.match(validasiHuruf)) {
                    alert("Nama Anda adalah " + nama.value);
                } else {
                    alert("Masukkan nama Anda!\nFormat wajib huruf!");
                    nama.value = "";
                    nama.focus();
                    return false;
                }
            }
            function validationForm() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var ayah = document.getElementsByName("ayah");
                if (ayah.value.match(validasiHuruf)) {
                    alert("Nama Anda adalah " + nama.ayah);
                } else {
                    alert("Masukkan nama Anda!\nFormat wajib huruf!");
                    ayah.value = "";
                    ayah.focus();
                    return false;
                }
            }
        }
    </script>
</body>

</html>