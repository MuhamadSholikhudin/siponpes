<section class="content">

    <div class="container-fluid">

        <div class="block-header">

            <h2>ABSENSI</h2>

        </div>

        <!-- Basic Examples -->

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">

                    <div class="header">

                        <!-- <button class="btn btn-default waves-effect m-r-20" type="button" data-target="#defaultModal" data-toggle="modal"> Tambah Absensi</button> -->

                        <div tabindex="-1" class="modal fade" id="defaultModal" role="dialog" style="display: none;">

                            <div class="modal-dialog modal-lg" role="document">

                                <div class="modal-content">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <div class="card">

                                            <div class="header">

                                                <h2>

                                                    TAMBAH ABSENSI

                                                </h2>

                                            </div>

                                            <div class="body">

                                                <form action="<?= base_url('admin/absensi/aksi_tambah') ?>" method="POST" enctype="multipart/form-data">

                                                    <label for="id_pelajaran">Id Pelajaran</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="id_pelajaran" type="text" name="id_pelajaran" placeholder="Isi nama absensi">
                                                        </div>
                                                    </div>
                                                    <label for="id_santri">Id Santri</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="id_santri" type="text" name="id_santri" placeholder="Isi nama absensi">
                                                        </div>
                                                    </div>
                                                    <label for="status">Status</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="status" type="text" name="status" placeholder="Isi nama absensi">
                                                        </div>
                                                    </div>
                                                    <label for="tanggal">Tangal</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="tanggal" type="date" name="tanggal" placeholder="Isi nama absensi">
                                                        </div>
                                                    </div>



                                                    <br>

                                                    <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>

                                                </form>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="modal-footer">

                                        <!-- <button class="btn btn-link waves-effect" type="button">SAVE CHANGES</button> -->

                                        <button class="btn btn-link waves-effect" type="button" data-dismiss="modal">CLOSE</button>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="body">

                            <div class="text-center">

                                <h3>DATA absensi</h3>

                            </div>

                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">

                                    <thead>

                                        <tr>

                                            <th>No</th>

                                            <!-- <th>Id absensi</th> -->
                                            <th>Pelajaran</th>
                                            <th>Waktu</th>
                                            <th>Hari</th>
                                            <th>Nama Santri</th>
                                            <th>Absensi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($absensi as $peng) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <?php
$cari_jadwal= $this->db->query("SELECT * FROM jadwal JOIN pelajaran ON jadwal.id_pelajaran = pelajaran.id_pelajaran WHERE jadwal.id_jadwal = $peng->id_jadwal")->row();
                                                ?>
                                                <td><?= $cari_jadwal->nama_pelajaran ?></td>
                                                <td><?= $cari_jadwal->hari ?></td>
                                                <td><?= $cari_jadwal->waktu ?></td>
                                                <?php
$cari_nama= $this->db->query("SELECT * FROM santri JOIN pendaftaran ON pendaftaran.id_daftar = santri.id_daftar WHERE santri.id_santri = $peng->id_santri")->row();

                                                ?>
                                                <td><?= $cari_nama->nama_lengkap ?></td>
                                                <td><?= $peng->absensi ?></td>
                                                

                                               

                                            </tr>

                                        <?php endforeach; ?>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- #END# Basic Examples -->

        </div>

    </div>

</section>