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
                        Form Tambah Data Mahasiswa
                        </div>
                    <div class="card-body">
                        <form action="" method="POST">
                        <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" value="<?= set_value('nama') ?>" class="form-control" id="nama" placeholder="Nama">
                                <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" name="nim" value="<?= set_value('nim') ?>" class="form-control" id="nim" placeholder="NIM">
                                <?= form_error('nim','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" value="<?= set_value('jemis_kelamin') ?>" id="jenis_kelamin"
                                    class="form-control">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan" >Perempuan</option>
                                    </select>
                                    <?= form_error('jenis_kelamin','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" value="<?= set_value('email') ?>" name="email" class="form-control" id="email"
                                    placeholder="email">
                                    <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="prodi">Prodi</label>
                                <select name="prodi" value="<?= set_value('prodi') ?>" id="prodi" class="form-control">
                                    <option value="">Pilih Prodi</option>
                                    <?php foreach ($prodi as $p) : ?>
                                        <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('prodi','<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="asal_sekolah">Asal Sekolah</label>
                                <input type="text" value="<?= set_value('asal_sekolah') ?>" name="asal_sekolah" class="form-control"
                                    id="asal_sekolah" placeholder="asal_sekolah">
                                    <?= form_error('asal_sekolah','<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">no_hp</label>
                                <input type="text" value="<?= set_value('no_hp') ?>" name="no_hp" class="form-control" id="no_hp"
                                    placeholder="no_hp">
                                    <?= form_error('no_hp','<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" value="<?= set_value('alamat') ?>" name="alamat" class="form-control"
                                    id="alamat" placeholder="alamat">
                                    <?= form_error('alamat','<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                            <a href="<?= base_url('index.php/Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right"> Tambah Mahasiswa
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