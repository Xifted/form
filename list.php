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

    <title>List Pendaftaran Siswa</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/list.css">

</head>

<body>
<div class="header-background">
<div class="header-profile">
    <p>Selamat Datang <?php echo $_SESSION['username'];?></p>
</div>
</div>
<div class="table-list">
    <table>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Kode Pos</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Agama</th>
            <th>Nama Ibu</th>
            <th>Nama Bapak</th>
            <th>Golongan Darah</th>
            <th>Action</th>
        </tr>

<?php
$q = "select * from `siswa`";

$commands = mysqli_query($koneksi, $q);
if($commands){
    while ($row = mysqli_fetch_array($commands)) {
        $no=$row['no'];
        $nis=$row['nis'];
        $nama=$row['nama'];
        $alamat=$row['alamat'];
        $kota=$row['kota'];
        $kodepos=$row['kodepos'];
        $gender=$row['jenisKelamin'];
        $umur=$row['umur'];
        $agama=$row['agama'];
        $ibu=$row['ibu'];
        $bapak=$row['bapak'];
        $golongandarah=$row['golonganDarah']; 
        echo '<tr>
        <td scope="row">'.$no.'</td>
        <td>'.$nis.'</td>
        <td>'.$nama.'</td>
        <td>'.$alamat.'</td>
        <td>'.$kota.'</td>
        <td>'.$kodepos.'</td>
        <td>'.$gender.'</td>
        <td>'.$umur.'</td>
        <td>'.$agama.'</td>
        <td>'.$ibu.'</td>
        <td>'.$bapak.'</td>
        <td>'.$golongandarah.'</td>
        <td class="edit-delete">
        <a href="edit.php?editid='.$no.'"><button id="edit">EDIT</button></a>
        <a href="delete.php?deleteid='.$no.'"><button id="delete">DELETE</button></a>
        </td>
    </tr>';
    }
}
?>
</table>

</div>
</table>
</body>

</html>
