<?php

$ktp = $_GET['ktp'];
$tgl_aduan = $_POST['tgl_aduan'];
$isi_aduan = $_POST['isi_aduan'];
$lok_kejadian = $_POST['lok_kejadian'];

include '../koneksi.php';
$sql = "UPDATE masyarakat SET tgl_aduan='$tgl_aduan', isi_aduan='$isi_aduan', lok_kejadian='$lok_kejadian' WHERE ktp='$ktp '";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=aduan");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=aduan');</script>";
}