<section class="content">

    <div class="container-fluid">

        <div class="block-header">

            <h2>Pembelajaran</h2>

        </div>

        <!-- Basic Examples -->

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">

                    <div class="header">

                        <!-- <button class="btn btn-default waves-effect m-r-20" type="button" data-target="#defaultModal" data-toggle="modal"> Tambah Pembelajaran</button> -->

                        <div tabindex="-1" class="modal fade" id="defaultModal" role="dialog" style="display: none;">

                            <div class="modal-dialog modal-lg" role="document">

                                <div class="modal-content">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <div class="card">

                                            <div class="header">

                                                <h2>

                                                    TAMBAH PEMBELAJARAN

                                                </h2>

                                            </div>

                                            <div class="body">

                                                <form action="<?= base_url('admin/pembelajaran/aksi_tambah') ?>" method="POST" enctype="multipart/form-data">



                                                    <label for="id_pelajaran">Id Pelajaran </label>

                                                    <div class="form-group">

                                                        <div class="form-line">

                                                            <input type="text" name="id_pelajaran" id="id_pelajaran" class="form-control no-resize" required>

                                                        </div>

                                                    </div>

                                                    <label for="id_santri">Id Santri</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="id_santri" type="text" name="id_santri" placeholder="Enter your password">
                                                        </div>
                                                    </div>


                                                    <label for="materi_belajar">Materi Belajar</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="materi_belajar" type="text" name="materi_belajar" placeholder="Enter your password">
                                                        </div>
                                                    </div>
                                                    <label for="tanggal">Tanggal</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="tanggal" type="date" name="tanggal" placeholder="Enter your password">
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

                                <h3>DATA PEMBELAJARAN</h3>

                            </div>

                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">

                                    <thead>

                                        <tr>

                                            <th>No</th>

                                            <th>id_pembelajaran</th>
                                            <th>Pelajaran</th>
                                            <th>materi_belajar</th>
                                            <th>tanggal</th>
                                            

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <?php $no = 1; ?>

                                        <?php foreach ($pembelajaran as $peng) : ?>

                                            <tr>

                                                <td><?= $no++ ?></td>

                                                <!-- <td><a href="<?= base_url('admin/lihat_pengurus/') . $peng->id_pembelajaran ?>"><?= $peng->nama ?></a></td> -->

                                                <td><?= $peng->id_pembelajaran ?></td>
                                                <?php
$cari_pelajaran = $this->db->query("SELECT * FROM jadwal JOIN pelajaran ON jadwal.id_pelajaran = pelajaran.id_pelajaran WHERE jadwal.id_jadwal = $peng->id_jadwal")->row();

                                                ?>
                                                <td><?= $cari_pelajaran->nama_pelajaran ?></td>
                                                <td><?= $peng->materi_belajar ?></td>
                                                <td><?= longdateum_indo($peng->tanggal) ?></td>
                                               

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