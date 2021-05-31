    <section class="content">
        <div class="container-fluid">


            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            ABSENSI PEGAWAI BERTUGAS
                        </h2>

                    </div>
                    <div class="body">
                        <form action="<?= base_url('pegawai/absensi/tugas') ?>" method="POST" enctype="multipart/form-data">
                            <label for="username">NIP</label>

                            <div class="form-group">
                                <div class="form-line">
                                    <?php foreach ($surat as $sur) : ?>
                                        <input class="form-control" id="no_surat" type="hidden" name="no_surat" value="<?= $sur->no_surat ?>">
                                    <?php endforeach; ?>
                                    <?php foreach ($jadwal as $jad) : ?>
                                        <input class="form-control" id="id_jadwal" type="hidden" name="id_jadwal" value="<?= $jad->id_jadwal ?>">
                                    <?php endforeach; ?>
                                    <input class="form-control" id="username" type="text" name="nip" value="<?= $this->session->userdata('username'); ?>" disabled>
                                </div>
                            </div>

                            <label for="nama">Nama</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="nama" type="text" name="nama" value="<?= $this->session->userdata('nama'); ?>" disabled>
                                </div>
                            </div>
                            <label for="jabatan">Tanggal</label>

                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="tanggal" type="text" name="tanggal" value="<?= date('d-m-Y') ?>" disabled>
                                </div>
                            </div>
                            <label for="penempatan">Keterangan</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="keterangan" type="text" name="keterangan" value="">
                                </div>
                            </div>
                            <div class="demo-radio-button">
                                <input name="status_absensi" type="radio" id="radio_1" value="1" checked="">
                                <label for="radio_1">Bertugas</label>
                                <input name="status_absensi" type="radio" value="0" id="radio_2">
                                <label for="radio_2">Tidak</label>
                            </div>

                            <br>
                            <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>

                        </form>
                    </div>
                </div>
            </div>


        </div>
    </section>