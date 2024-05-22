<?php
session_start();
?>


<!DOCTYPE html>
<head>
    <title>Masyarakat - Aplikasi Pengaduan</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    
    <div class="container mt-5">
        
        <h3>Aplikasi Pengaduan.</h3>
        <div class="alert alert-info">
            Anda Login Sebagai <b>Masyarakat</b> Aplikasi Pengaduan.
        </div>

        <a href="masyarakat.php?url=tambah-pengaduan" class="btn btn-primary"> Kirim Aduan </a>
        <a href="masyarakat.php?url=logout" class="btn btn-primary"> Logout</a>

        
        <div class="card mt-2">
            <div class="card-body">
                
            <!-- isi web  -->
            <?php 
            
                $file = @$_GET['url'];
                if(empty($file)){
                    echo"<h4>Selamat Datang di halaman Masyarakat. </h4>";
                    echo"Aplikasi Pengaduan digunakan untuk melaporkan masalah pada daerah sekitar samarinda kepada pemerintah";
                } else {
                    include $file.'.php';
                }
            
            ?>

        </div>
    </div>

    </div>

<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>