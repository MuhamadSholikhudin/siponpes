    <section class="content">
        <div class="container-fluid">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EDIT penilaian
                        </h2>
                    </div>
                    <div class="body">
                        <form action="<?= base_url('ustads/penilaian/edit_aksi') ?>" method="POST" enctype="multipart/form-data">
                            <label for="nama">Nama Santri</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <?php
                                    $cari_santri = $this->db->query("SELECT * FROM santri JOIN pendaftaran ON santri.id_daftar = pendaftaran.id_daftar WHERE santri.id_santri = $penilaian->id_santri ")->row();
                                    ?>
                                    <input class="form-control" id="nama_lengkap" type="text" value="<?= $cari_santri->nama_lengkap ?>" disabled>
                                    <input class="form-control" id="id_nilai" name="id_nilai" type="hidden" value="<?= $penilaian->id_nilai ?>">
                                    <?php
                                    $id_pengguna = $this->session->userdata('id_pengguna');
                                    $cari_pelajaran = $this->db->query("SELECT * FROM jadwal JOIN pelajaran ON jadwal.id_pelajaran = pelajaran.id_pelajaran WHERE  jadwal.id_jadwal = $penilaian->id_jadwal ")->row();
                                    ?>
                                    <input class="form-control" id="id_pelajaran" name="id_pelajaran" type="hidden" value="<?= $cari_pelajaran->id_pelajaran ?>">
                                    <input class="form-control" id="id_pengguna" name="id_pengguna" type="hidden" value="<?= $id_pengguna ?>">
                                </div>
                            </div>
                            <label for="tanggal">Tanggal</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="id_nilai" type="date" value="<?= $penilaian->tanggal ?>" disabled>
                                </div>
                            </div>
                            <label for="tanggal">Pembelajaran</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <?php
                                    $cari_pembelajaran = $this->db->query("SELECT * FROM pembelajaran WHERE tanggal = '$penilaian->tanggal' AND id_jadwal = $penilaian->id_jadwal ")->row();
                                    ?>
                                    <input class="form-control" type="text" value="<?= $cari_pembelajaran->materi_belajar ?>" disabled>
                                </div>
                            </div>
                            <label for="nama_penilaian">Nilai</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="nilai" type="text" name="nilai" value="<?= $penilaian->nilai ?>">
                                </div>
                            </div>



                            <br>
                            <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>

                        </form>
                    </div>
                </div>
            </div>
    </section>