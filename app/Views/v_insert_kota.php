<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tabel Kota</title>
</head>
<body>
<div class="container w-25 mx-3">
<form action="<?= base_url('c_kota/updateKota'); ?>" method="post" id="text-editor" enctype="multipart/form-data">
    <div class="form-group mb-3">
        <label for="title">Id Kota</label>
        <input type="text" name="id_kota" class="form-control" required>
    </div>
    <div class="form-group mb-3">
        <label for="title">Nama Kota</label>
        <input type="text" name="nama_kota" class="form-control"  required>
    </div>
    <div class="form-group mb-3">
        <label for="title">Jumlah Penduduk</label>
        <input type="text" name="jumlah_penduduk" class="form-control"  required>
    </div>
    <div class="form-group mb-3">
        <input type="file" class="form-control" id="gambar" name="gambar">
    </div>
    <div class="form-group mb-3">
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
</body>
</html>
<?= $this->endSection() ?>