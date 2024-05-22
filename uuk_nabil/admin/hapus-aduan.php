<?php

    $ktp = $_GET['ktp'];

    include '../koneksi.php';
    $sql = "DELETE from masyarakat where ktp = '$ktp'";
    $query = mysqli_query ($koneksi, $sql);

    if($query){
        header("Location:?url=aduan");
        
    }else{
        echo"<script>alert('Maaf Data Tidak Terhapus'); window.location.assign('?url=aduan');</script>";
    }