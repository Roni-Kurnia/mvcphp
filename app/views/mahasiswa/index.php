
<!-- flasher -->
<div class="row">
    <div style="position: absolute; z-index: 20;" class="col-lg-6">
        <?php Flasher::flash() ?>
    </div>
</div>

<!-- tombol -->
<div class="row mb-3">
    <div class="col-lg-6">
        <button type="button" class="btn btn-primary tambahData" data-toggle="modal" data-target="#fromModal"  >
            Tambah Data Maahasiswa
        </button>
    </div>
</div>

<!-- Search -->
<div class="row mb-3">
    <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari mahasiswa..." name="keyword" id="keyword" autocomplete="off ">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="Submit" id="tombolCari">Cari</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- controler model -->
<div class="row">
    <div class="col-lg-6">
        <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
            <?php foreach($data['mhs'] as $mhs) :  ?>
                <li class="list-group-item ">
                    <?= $mhs['nama']; ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?')">hapus</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge badge-success float-right ml-1 modalUbah" data-toggle="modal" data-target="#fromModal" data-id="<?= $mhs['id']; ?>">ubah</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-primary float-right ml-1 modalDetail">detail</a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="fromModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content" style="position: absolute; z-index: 40;">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">HTML</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="teks" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="form-group">
                        <label for="nim">nim</label>
                        <input type="number" class="form-control" id="nim" name="nim">
                    </div>

                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Kimia">Teknik Kimia</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="Submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>