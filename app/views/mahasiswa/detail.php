<h1>Data Mahasiswa</h1>
<div class="card mt-4" style="width: 15rem;">
    <img src="<?= BASEURL ?>/asset/img/php.png" height="200" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?= $data['mhs']['nama'] ?></h5>
        <p class="card-text"><?= $data['mhs']['jurusan'] ?></p>
        <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-primary">Kembali</a>
    </div>
</div>
