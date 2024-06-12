<h5>Halaman Petugas.</h5>

<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">

        <td>No</td>    
        <td>Tanggal Kejadian</td>
        <td>Isi Aduan</td>
        <td>Lokasi Kejadian</td>
        <td>Laksanakan</td>

    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM masyarakat ORDER BY ktp DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ ?>    
         <tr>

            <td><?= $no++; ?></td>
            <td><?= $data['tgl_aduan'] ?></td>
            <td><?= $data['isi_aduan'] ?></td>
            <td><?= $data['lok_kejadian'] ?></td>
 
            <td>
                <a onclick="return confirm('Apakah Anda sudah mengerjakan aduan?')" href="?url=hapus-aduan&ktp=<?= $data['ktp'] ?>" class='btn btn-dark'>Laksanakan</a>
            </td>      

         </tr>
    <?php } ?>

    
</table>