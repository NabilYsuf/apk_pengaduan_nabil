<h5>Halaman Aduan.</h5>

<hr>
<form method="post" action="?url=proses-tambah-pengaduan">

    <div class="form-group mb-2">
        <label>tanggal kejadian</label>
        <input type="date" name="tgl_aduan" class="form-control" required>
    </div>

    <div class="form-group mb-2">
        <label>isi aduan</label>
        <input type="text" name="isi_aduan" class="form-control" required>
    </div>

    <div class="form-group mb-2">
        <label>lokasi kejadian</label>
        <input type="text" name="lok_kejadian" class="form-control" required>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>


</form>