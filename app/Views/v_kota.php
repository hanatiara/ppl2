<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
    <div class="container">
    <form class="row g-3 my-2" action="<?= base_url('c_kota/searchKota');?>">
        <div class="col-auto">
            <input type="text" class="form-control" name="search" placeholder="search by name">
        </div>
        <div class="col-auto">
            <button type="submit" value="submit" class="btn btn-primary mb-3">Search</button>
        </div>
    </form>
    <h1>Tabel Kota</h1>
    <table border="1" class="table table-striped">
        <tr>
            <th>Id Kota</th>
            <th>Gambar</th>
            <th>Nama Kota</th>
            <th>Jumlah Penduduk</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($kota as $row) : ?>    
        <tr>
            <td class="align-middle"><?= $row->id_kota; ?></td>
            <td class="align-middle">
                <img src="/img/<?= $row->gambar; ?>"  width="50" height="50">
            </td>
            <td class="align-middle"><?= $row->nama_kota; ?></td>
            <td class="align-middle"><?= $row->jumlah_penduduk; ?></td>
            <td class="align-middle">
                <a href="delete/<?= $row->id_kota ?>"><button class="btn btn-danger">Delete</button>
                <a href="detail/<?= $row->id_kota ?>"><button class="btn btn-success">View</button>
                <a href="edit/<?= $row->id_kota ?>"><button class="btn btn-primary">Edit</button>
            </a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>

<?= $this->endSection() ?>