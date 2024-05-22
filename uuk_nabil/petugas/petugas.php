<?php
// session_start();


?>
<!DOCTYPE html>
<head>
    <title>Petugas - Aplikasi Pengaduan.</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    
    <h3>Aplikasi Pengaduan</h3>
    <div class="alert alert-info">
        Anda Login Sebagai <b>Petugas</b> Aplikasi Pengaduan.
    </div>
    <a href="petugas.php?url=aduan" class="btn btn-primary"> Aduan</a>
    <a href="petugas.php?url=logout" class="btn btn-primary"> Logout</a>

    <div class="card mt-2">
        <div class="card-body">
            <?php
            $file = @$_GET['url'];
            if(empty($file)){
                echo "<h4>Selamat Datang Di Halaman Petugas.</h4>";
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