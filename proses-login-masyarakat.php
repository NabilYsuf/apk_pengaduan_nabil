<?php

$ktp = $_POST['ktp'];

include 'koneksi.php';
$sql = "SELECT * FROM masyarakat WHERE ktp='$ktp'";
$query = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($query)>0){
    session_start();
    $data = mysqli_fetch_array($query);
    $_SESSION['ktp'] = $data['ktp'];

    header('Location:masyarakat/masyarakat.php');
}else {
    echo "<script>
    alert('Maaf Login gagal, silakan ulang lagi');
    window.location.assign('index.php');
    </script>";
}

?>