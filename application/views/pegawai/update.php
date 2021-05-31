    <section class="content">
        <div class="container-fluid">


            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            UPDATE ABSENSI PEGAWAI BERTUGAS
                        </h2>

                    </div>
                    <div class="body">
                        <form action="<?= base_url('pegawai/absensi/edit_absensi_aksi') ?>" method="POST" enctype="multipart/form-data">
                            <?php foreach ($absensi as $ab) : ?>
                                <label for="username">NIP</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" id="username" type="text" name="nip" value="<?= $ab->nip ?>" disabled>
                                        <input class="form-control" id="id_jadwal" type="hidden" name="id_jadwal" value="<?= $ab->id_jadwal ?>" >
                                    </div>
                                </div>

                                <label for="tanggal">Tanggal</label>
                                <div class="form-group">
                                    <div class="form-line">

                                        <input class="form-control" id="tanggal" type="date" name="tanggal" value="<?= $ab->tanggal ?>" disabled>

                                    </div>
                                </div>
                                <label for="keterangan">Keterangan</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" id="keterangan" type="text" name="keterangan" value="<?= $ab->keterangan ?>">
                                    </div>
                                </div>
                                <div class="demo-radio-button">
                                    <?php
                                    if ($ab->status_absensi == 1) {
                                    ?>
                                        <input name="status_absensi" type="radio" id="radio_1" value="1" checked="">
                                        <label for="radio_1">Bertugas</label>
                                        <input name="status_absensi" type="radio" value="0" id="radio_2">
                                        <label for="radio_2">TidaK</label>
                                    <?php
                                    } elseif ($ab->status_absensi == 0) {
                                    ?>
                                        <input name="status_absensi" type="radio" id="radio_1" value="1">
                                        <label for="radio_1">Bertugas</label>
                                        <input name="status_absensi" type="radio" value="0" id="radio_2" checked="">
                                        <label for="radio_2">TidaK</label>
                                    <?php
                                    } elseif ($ab->status_absensi == 2) {
                                    ?>
                                        <input name="status_absensi" type="radio" id="radio_1" value="1">
                                        <label for="radio_1">Bertugas</label>
                                        <input name="status_absensi" type="radio" value="0" id="radio_2">
                                        <label for="radio_2">TidaK</label>
                                    <?php
                                    }
                                    ?>

                                </div>
                            <?php endforeach; ?>
                            <br>
                            <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>

                        </form>
                    </div>
                </div>
            </div>


        </div>
    </section>