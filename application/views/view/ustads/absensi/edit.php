    <section class="content">
        <div class="container-fluid">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EDIT absensi
                        </h2>
                    </div>
                    <div class="body">
                        <form action="<?= base_url('ustads/absensi/edit_aksi') ?>" method="POST" enctype="multipart/form-data">
                            <label for="nama">Nama Santri</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <?php
                                    $cari_santri = $this->db->query("SELECT * FROM santri JOIN pendaftaran ON santri.id_daftar = pendaftaran.id_daftar WHERE santri.id_santri = $absensi->id_santri ")->row();
                                    ?>
                                    <input class="form-control" id="nama_lengkap" type="text" value="<?= $cari_santri->nama_lengkap ?>" disabled>
                                    <input class="form-control" id="id_absensi" name="id_absensi" type="hidden" value="<?= $absensi->id_absensi ?>">
                                    <?php
                                    $id_pengguna = $this->session->userdata('id_pengguna');
                                    $cari_pelajaran = $this->db->query("SELECT * FROM jadwal JOIN pelajaran ON jadwal.id_pelajaran = pelajaran.id_pelajaran WHERE  jadwal.id_jadwal = $absensi->id_jadwal ")->row();
                                    ?>
                                    <input class="form-control" id="id_pelajaran" name="id_pelajaran" type="hidden" value="<?= $cari_pelajaran->id_pelajaran ?>">
                                    <input class="form-control" id="id_pengguna" name="id_pengguna" type="hidden" value="<?= $id_pengguna ?>">
                                </div>
                            </div>
                            <label for="tanggal">Tanggal</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="id_nilai" type="date" value="<?= $absensi->tanggal ?>" disabled>
                                </div>
                            </div>
                            <label for="tanggal">Pembelajaran</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <?php
                                    $cari_pembelajaran = $this->db->query("SELECT * FROM pembelajaran WHERE tanggal = '$absensi->tanggal' AND id_jadwal = $absensi->id_jadwal ")->row();
                                    ?>
                                    <input class="form-control" type="text" value="<?= $cari_pembelajaran->materi_belajar ?>" disabled>
                                </div>
                            </div>

                            <label for="status">Absensi </label>
                            <div class="form-group">
                                <select class="selectpicker form-line" name="absensi" id="status">
                                    <?php foreach ($absen as $hak) : ?>
                                        <?php if ($hak == $absensi->status) : ?>
                                            <option value="<?= $hak; ?>" selected>
                                                <?= $hak; ?>
                                            </option>
                                        <?php else : ?>
                                            <option value="<?= $hak; ?>">
                                                <?= $hak; ?>
                                            </option>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </select>
                            </div>


                            <br>
                            <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>

                        </form>
                    </div>
                </div>
            </div>
    </section>