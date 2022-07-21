<?php
    include "config.php";
    if(isset($_GET['deleteid'])){
        $no=$_GET['deleteid'];

        $sql="DELETE from `siswa` WHERE no=$no";
        $result=mysqli_query($koneksi, $sql);
        if($result){
            header('location: list.php');
        }else{
            die(mysqli_error($koneksi));
        }
    }
?>