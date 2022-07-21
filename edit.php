<?php
include "config.php";
include "navbar.php";
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}    
$no = $_GET['editid'];
$sql = "select * from `siswa` where no=$no";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
$nis = $row['nis'];
$nama = $row['nama'];
$alamat = $row['alamat'];
$kota = $row['kota'];
$kodepos = $row['kodepos'];
$gender = $row['jenisKelamin'];
$umur = $row['umur'];
$agama = $row['agama'];
$ibu = $row['ibu'];
$bapak = $row['bapak'];
$golongandarah = $row['golonganDarah'];

if (isset($_POST['edit'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $kodepos = $_POST['kode_pos'];
    $gender = $_POST['gender'];
    $umur = $_POST['umur'];
    $agama = $_POST['agama'];
    $ibu = $_POST['ibu'];
    $bapak = $_POST['ayah'];
    $darah = $_POST['golonganDarah'];

    $sql = "update `siswa` set no=$no,nis='$nis',nama='$nama',alamat='$alamat',
    kota='$kota',kodepos='$kodepos',jenisKelamin='$gender',umur='$umur',agama='$agama',
    ibu='$ibu',bapak='$bapak',golonganDarah='$darah' where no=$no";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        echo "<script> alert('Data Siswa Berhasil Disimpan');
        document.location='list.php';</script>";
    } else {
        die(mysqli_error($koneksi));
    }
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
        <div class="title">Edit Data Siswa</div>
        <div class="content">
            <form name="formPendaftaran" action="" method="post" onsubmit="return validateForm()">
                <div class="user-details">

                    <div class="input-box">
                        <span class="details">NIS</span>
                        <input name="nis" type="number" placeholder="Masukan NIS" value="<?php echo $nis; ?>">
                    </div>

                    <div class="input-box">
                        <span class="details">Nama Lengkap</span>
                        <input name="nama" type="text" placeholder="Masukan Nama Lengkap" value="<?php echo $nama; ?>">
                    </div>

                    <div class="input-box">
                        <span class="details">Alamat lengkap</span>
                        <input name="alamat" type="text" placeholder="Masukkan Alamat Lengkap" value="<?php echo $alamat; ?>">
                    </div>

                    <div class="input-box">
                        <span class="details">Kota</span>
                        <input name="kota" type="text" placeholder="Masukan Kota" value="<?php echo $kota; ?>">
                    </div>

                    <div class="input-box">
                        <span class="details">Kode Pos</span>
                        <input name="kode_pos" type="number" placeholder="Kode Pos" value="<?php echo $kodepos; ?>">
                    </div>

                    <div class="input-box">
                        <span class="details">Umur</span>
                        <input name="umur" type="number" placeholder="Masukan Umur" value="<?php echo $umur; ?>">
                    </div>

                    <div class="input-box">
                        <span class="details">Agama</span>
                        <select id="agama" name="agama" required>
                            <option id="option-list" value="">Pilih Agama</option>
                            <option <?php echo ($agama == 'Islam') ? "selected" : ""; ?>>Islam</option>
                            <option <?php echo ($agama == 'Kristen') ? "selected" : ""; ?>>Kristen</option>
                            <option <?php echo ($agama == 'Hindu') ? "selected" : ""; ?>>Hindu</option>
                            <option <?php echo ($agama == 'Budha') ? "selected" : ""; ?>>Budha</option>
                        </select>
                    </div>

                    <div class="input-box">
                        <span class="details">Golongan Darah</span>
                        <input name="golonganDarah" type="text" placeholder="Masukkan Golongan Darah" value="<?php echo $golongandarah; ?>">
                    </div>

                    <div class="input-box">
                        <span class="details">Nama Ayah Kandung</span>
                        <input name="ayah" type="text" placeholder="Masukkan Nama Ayah Kandung" value="<?php echo $bapak; ?>">
                    </div>

                    <div class="input-box">
                        <span class="details">Nama Ibu Kandung</span>
                        <input name="ibu" type="text" placeholder="Masukkan Nama Ibu Kandung" value="<?php echo $ibu ?>">
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
                    <input type="submit" name="edit" value="UPDATE">
                </div>
            </form>
        </div>
    </div>
</body>

</html>