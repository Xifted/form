<?php
include "config.php";

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

$commands = mysqli_query($koneksi, "INSERT INTO siswa(nis,nama,alamat,kota,kodepos,jenisKelamin,umur,agama,ibu,bapak,golonganDarah) VALUES('$nis', '$nama', '$alamat', '$kota','$kodepos','$gender', '$umur', '$agama', '$ibu','$bapak','$darah') ");

if($commands){
    echo "<script> alert('Data Siswa Berhasil Disimpan');
    document.location='list.php';</script>";
}else {
    echo "<script> alert('Data Siswa Gagal Disimpan');
    document.location='form.php';</script>";
}
?>