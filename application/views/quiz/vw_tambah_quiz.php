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
                        Melengkapi Data Diri
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('Quiz/tambah'); ?>" method="POST">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">

                            </div>
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                                <input type="text" name="nisn" class="form-control" id="nisn" placeholder="nisn">
                            </div>
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" name="nik" class="form-control" id="nik" placeholder="nik">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="email">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No Hp</label>
                                <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="no hp">
                            </div>
                            <div class="form-group">
                                <label for="no_wa">no wa</label>
                                <input type="text" name="no_wa" class="form-control" id="no_wa" placeholder="no wa">
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">tempat lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir"
                                    placeholder="tempat lahir">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">tanggal lahir</label>
                                <input type="text" name="tanggal_lahir" class="form-control" id="tanggal_lahir"
                                    placeholder="tanggal lahir">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kabupaten_tinggal">kabupaten tinggal</label>
                                <input type="text" name="kabupaten_tinggal" class="form-control" id="kabupaten_tinggal"
                                    placeholder="kabupaten tinggal">
                            </div>
                            <div class="form-group">
                                <label for="kecamatan_tinggal">kecamatan tinggal</label>
                                <input type="text" name="kecamatan_tinggal" class="form-control" id="kecamatan_tinggal"
                                    placeholder="kecamatan tinggal">
                            </div>
                            <div class="form-group">
                                <label for="kabupaten_sekolah">kabupaten sekolah</label>
                                <input type="text" name="kabupaten_sekolah" class="form-control" id="kabupaten_sekolah"
                                    placeholder="kabupaten sekolah">
                            </div>
                            <div class="form-group">
                                <label for="sekolah_asal">sekolah asal</label>
                                <input type="text" name="sekolah_asal" class="form-control" id="sekolah_asal"
                                    placeholder="sekolah asal">
                            </div>
                            <div class="form-group">
                                <label for="jurusan">jurusan</label>
                                <input type="text" name="jurusan" class="form-control" id="jurusan"
                                    placeholder="jurusan">
                            </div>
                            <div class="form-group">
                                <label for="tahun_lulus">tahun_lulus</label>
                                <input type="text" name="tahun_lulus" class="form-control" id="tahun_lulus"
                                    placeholder="tahun_lulus">
                            </div>
                            <!-- <div class="form-group">
                                <label for="prodi">Prodi</label>
                                <select name="prodi" value="<?= set_value('prodi') ?>" id="prodi" class="form-control">
                                    <option value="">Pilih Prodi</option>
                                    <?php foreach ($prodi as $p): ?>
                                        <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('prodi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="asal_sekolah">Asal Sekolah</label>
                                <input type="text" value="<?= set_value('asal_sekolah') ?>" name="asal_sekolah" class="form-control"
                                    id="asal_sekolah" placeholder="asal_sekolah">
                                    <?= form_error('asal_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">no_hp</label>
                                <input type="text" value="<?= set_value('no_hp') ?>" name="no_hp" class="form-control" id="no_hp"
                                    placeholder="no_hp">
                                    <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" value="<?= set_value('alamat') ?>" name="alamat" class="form-control"
                                    id="alamat" placeholder="alamat">
                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div> -->
                        <p>Nama:<?php echo $nama; ?></p>
                        <p>nik:<?php echo $nik; ?></p>
                        <p>nisn:<?php echo $nama; ?></p>
                        <p>email:<?php echo $email; ?></p>
                        <p>no_hp:<?php echo $no_hp; ?></p>
                        <p>no_wa:<?php echo $no_wa; ?></p>
                        <p>tempat_lahir:<?php echo $tempat_lahir; ?></p>
                        <p>tanggal_lahir:<?php echo $tanggal_lahir; ?></p>
                        <p>jenis_kelamin:<?php echo $jenis_kelamin; ?></p>
                        <p>kabupaten_tinggal:<?php echo $kabupaten_tinggal; ?></p>
                        <p>kecamatan_tinggal:<?php echo $kecamatan_tinggal; ?></p>
                        <p>kabupaten_sekolah:<?php echo $kabupaten_sekolah; ?></p>
                        <p>sekolah_asal:<?php echo $sekolah_asal; ?></p>
                        <p>jurusan:<?php echo $jurusan; ?></p>
                        <p>tahun_lulus:<?php echo $tahun_lulus; ?></p>
                            <a href="<?= base_url('index.php/Quiz/') ?>" class="btn btn-danger">Tutup</a>
                            <input type="submit" href="<?= base_url('Quiz/login') ?>" value="Submit" class="btn btn-primary float-right">
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