<body>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">
            <?php echo $judul; ?>
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form Edit Data Prodi
                        </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" value="<?= $prodi['nama'];?>" class="form-control" id="nama"
                                    placeholder="Nama">
                                    <?= form_error('nama','<small class="text-danger p1-3">', '</small?');?>
                                </div>
                            <div class="form-group">
                                <label for="ruangan">Ruangan</label>
                                <input type="text" name="ruangan" value="<?= $prodi['ruangan'];?>" class="form-control" id="ruangan"
                                    placeholder="RUANGAN">
                                    <?= form_error('ruangan','<small class="text-danger p1-3">', '</small?');?>
                                </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select name="jurusan" value="<?= $prodi['jurusan'];?>" id="jurusan"
                                    class="form-control">
                                    <option value="">Jurusan</option>
                                    <option value="JTI">JTI</option>
                                    <option value="JTIN">JTIN</option>
                                    </select>
                                    <?= form_error('jurusan','<small class="text-danger p1-3">', '</small?');?>
                                </div>
                            <div class="form-group">
                                <label for="akreditasi">Akreditasi</label>
                                <input type="text" name="akreditasi" value="<?= $prodi['akreditasi'];?>" class="form-control" id="akreditasi"
                                    placeholder="akreditasi">
                                    <?= form_error('akreditasi','<small class="text-danger p1-3">', '</small?');?>
                                </div>
                            <div class="form-group">
                                <label for="nama_kaprodi">Nama Kaprodi</label>
                                <input type="text" name="nama_kaprodi" value="<?= $prodi['nama_kaprodi'];?>" class="form-control" id="nama_kaprodi"
                                    placeholder="nama_kaprodi">
                                    <?= form_error('nama_kaprodi','<small class="text-danger p1-3">', '</small?');?>
                                </div>
                            <div class="form-group">
                                <label for="tahun_berdiri">Tahun Berdiri</label>
                                <input type="text" name="tahun_berdiri" value="<?= $prodi['tahun_berdiri'];?>" class="form-control"
                                    id="tahun_berdiri" placeholder="tahun_berdiri">
                                    <?= form_error('tahun_berdiri','<small class="text-danger p1-3">', '</small?');?>
                                </div>
                            <div class="form-group">
                                <label for="output_lulusan">Output Lulusan</label>
                                <input type="text" name="output_lulusan" value="<?= $prodi['output_lulusan'];?>" class="form-control" id="output_lulusan"
                                    placeholder="output_lulusan">
                                    <?= form_error('output_lulusan','<small class="text-danger p1-3">', '</small?');?>
                                </div>
                            <div class="form-group">
                                <img src="<?= base_url('assets/assets/img/prodi/') . $prodi['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                                <div class="custom-file"></div>
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                    <label for="gambar" class="custom-file-label">Choose File</label>
                                    <?= form_error('output_lulusan','<small class="text-danger p1-3">', '</small?');?>
                                </div>
                            <a href="<?= base_url('index.php/Prodi') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right"> Edit Data Prodi
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/') ?>libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/sidebarmenu.js"></script>
    <script src="<?= base_url('assets/') ?>js/app.min.js"></script>
    <script src="<?= base_url('assets/') ?>libs/simplebar/dist/simplebar.js"></script>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/') ?>images/logos/favicon.png" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/styles.min.css" />

</body>