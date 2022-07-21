<?php

$server = "localhost";
$usr    = "root";
$pswd   = "";
$db     = "db_uas_rafi";

$koneksi = mysqli_connect($server, $usr, $pswd, $db);

if (mysqli_connect_errno()){
    echo "Gagal melakukan koneksi ke MYSQL: " . mysqli_connect_error();
}
?>