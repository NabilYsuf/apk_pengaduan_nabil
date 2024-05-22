<?php

    $tgl_aduan = $_POST['tgl_aduan'];
    $isi_aduan = $_POST['isi_aduan'];
    $lok_kejadian = $_POST['lok_kejadian'];

    include '../koneksi.php';
    $sql = "INSERT into masyarakat (tgl_aduan,isi_aduan,lok_kejadian) Values ('$tgl_aduan', '$isi_aduan', '$lok_kejadian')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header("Location:?url=aduan");

    }else{  
        echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=masyarakat');</script>";
    }

?>