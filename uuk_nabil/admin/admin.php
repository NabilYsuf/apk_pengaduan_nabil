<?php
session_start();

if(empty($_SESSION['id_petugas'])){
    echo"<script>
    alert('Maaf Anda Belum Login');
    window.location.assign('../index2.php');
    </script>";
}
if($_SESSION['level']!='admin'){
    echo"<script>
    alert('Maaf Anda Bukan Sesi Admin');
    window.location.assign('../index2.php');
    </script>";
}

?>
<!DOCTYPE html>
<head>
    <title>Admin - Petugas - Aplikasi Pengaduan.</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    
    <h3>Aplikasi Pengaduan</h3>
    <div class="alert alert-info">
        Anda Login Sebagai <b>ADMINISTRATOR</b> Aplikasi Pengaduan.
    </div>
    <a href="admin.php?url=aduan" class="btn btn-primary"> Aduan</a>
    <a href="admin.php?url=logout" class="btn btn-primary"> Logout</a>

    <div class="card mt-2">
        <div class="card-body">
            <!-- ini isi web kita -->
            <?php
            $file = @$_GET['url'];
            if(empty($file)){
                echo "<h4>Selamat Datang Di Halaman Administrator.</h4>";
                echo "Aplikasi Pengaduan digunakan untuk melaporkan masalah pada daerah sekitar samarinda kepada pemerintah";
            } else{
                include $file.'.php';
            }

            ?>
        </div>
    </div>

    
</div>
    

<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>