<?php

    $koneksi = mysqli_connect('localhost', 'root' , '', 'db_nabil');

    if(!$koneksi) {
        echo "Koneksi Gagal";
    }

?>