<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>EDIT SIKAP DAH PRILAKU</h2>
        </div>


        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <?php
                        $cari_santri = $this->db->query("SELECT * FROM santri WHERE id_santri = $sikap->id_santri ")->row();
                        $cari_daftar = $this->db->query("SELECT * FROM pendaftaran WHERE id_daftar = $cari_santri->id_daftar ")->row();
                        $cari_pelajaran = $this->db->query("SELECT * FROM pelajaran WHERE id_pelajaran = $sikap->id_pelajaran ")->row();

                        ?>

                        <h2>
                            Edit Sikap Dan Prilaku <?= $cari_daftar->nama_lengkap ?> Pada Pelajaran <?= $cari_pelajaran->nama_pelajaran ?>
                        </h2>

                    </div>
                    <div class="body">
                        <form action="<?= base_url('ustads/sikap/aksi_edit') ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="ketaatan">Ketaatan</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" id="ketaatan" name="ketaatan" value="<?= $sikap->ketaatan ?>" class="form-control" required>
                                            <input type="hidden" id="id_sikap_dan_prilaku" name="id_sikap_dan_prilaku" value="<?= $sikap->id_sikap_dan_prilaku ?>" class="form-control" required>
                                            <input type="hidden" id="id_pelajaran" name="id_pelajaran" value="<?= $sikap->id_pelajaran ?>" class="form-control" required>
                                            <input type="hidden" id="kelas" name="kelas" value="<?= $sikap->id_kelas ?>" class="form-control" required>
                                            <input type="hidden" id="id_santri" name="id_santri" value="<?= $sikap->id_santri ?>" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="ketakdiman">ketakdiman</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" id="ketakdiman" name="ketakdiman" value="<?= $sikap->ketakdiman ?>" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="kedisiplinan">kedisiplinan</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" id="kedisiplinan" name="kedisiplinan" value="<?= $sikap->kedisiplinan ?>" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="kerapian">kerapian</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" id="kerapian" name="kerapian" value="<?= $sikap->kerapian ?>" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="kesemangatan">kesemangatan</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" id="kesemangatan" name="kesemangatan" value="<?= $sikap->kesemangatan ?>" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="partisipasi">partisipasi</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" id="partisipasi" name="partisipasi" value="<?= $sikap->partisipasi ?>" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="etika">etika</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" id="etika" name="etika" value="<?= $sikap->etika ?>" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="kerjasama">kerjasama</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" id="kerjasama" name="kerjasama" value="<?= $sikap->kerjasama ?>" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="kelengkapan_catatan">kelengkapan_catatan</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" id="kelengkapan_catatan" name="kelengkapan_catatan" value="<?= $sikap->kelengkapan_catatan ?>" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">SIMPAN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>