<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tabel Kota</title>
</head>
<body>
<?php foreach ($kota as $row) : ?>
<div class="container w-25 mx-3">
<form action="<?= base_url('c_kota/editKota/'.$row->id_kota); ?>" method="post" id="text-editor">
    <div class="form-group mb-3">
        <label for="title">Id Kota</label>
        <input type="text" value="<?= $row->id_kota; ?>" name="id_kota" class="form-control" disabled required>
    </div>
    <div class="form-group mb-3">
        <label for="title">Nama Kota</label>
        <input type="text" name="nama_kota" value="<?= $row->nama_kota; ?>" class="form-control"  required>
    </div>
    <div class="form-group mb-3">
        <label for="title">Jumlah Penduduk</label>
        <input type="text" name="jumlah_penduduk" value="<?= $row->jumlah_penduduk; ?>" class="form-control"  required>
    </div>
    <div class="form-group mb-3">
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
<?php endforeach; ?>
</body>
</html>
<?= $this->endSection() ?>