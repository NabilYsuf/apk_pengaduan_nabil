<?php

    $ktp = $_GET['ktp'];

    include '../koneksi.php';
    $sql = "SELECT * from masyarakat where ktp = '$ktp'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);

?>

<h2>Halaman Edit Aduan</h2>
<a href="?url=aduan" class= "btn btn-primary">Kembali</a>
<hr>

<form action="?url=proses-edit-aduan&ktp= <?= $ktp; ?>" method="post">

    <div class="form-group mb-2">
            <label>tanggal kejadian</label>
            <input value="<?= $data['tgl_aduan'] ?>" type="date" name="tgl_aduan" class="form-control" required>
    </div>

    <div class="form-group mb-2">
            <label>isi aduan</label>
            <input value="<?= $data['isi_aduan'] ?>" type="text" name="isi_aduan" class="form-control" required>
    </div>

    <div class="form-group mb-2">
            <label>lokasi kejadian</label>
            <input value="<?= $data['lok_kejadian'] ?>" type="text" name="lok_kejadian" class="form-control" required>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>

</form>