<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
<div class="container">
    <?php foreach ($kota as $row) : ?>   
    <h3>Detail Kota<h3>
    <table>
        <tr><td>Id : <?= $row->id_kota; ?> </td></tr>
        <tr><td>Nama : <?= $row->nama_kota; ?> </td></tr>
        <tr><td>Jumlah Penduduk : <?= $row->jumlah_penduduk; ?></td></tr>
    </table>
    <?php endforeach; ?>
</div>
<?= $this->endSection() ?>