<section class="content">

    <div class="container-fluid">

        <div class="block-header">

            <h2>PEMBAYARAN</h2>

        </div>

        <!-- Basic Examples -->

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">

                    <div class="header">

                        <button class="btn btn-default waves-effect m-r-20" type="button" data-target="#defaultModal" data-toggle="modal"> Tambah pembayaran</button>

                        <div tabindex="-1" class="modal fade" id="defaultModal" role="dialog" style="display: none;">

                            <div class="modal-dialog modal-lg" role="document">

                                <div class="modal-content">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <div class="card">

                                            <div class="header">

                                                <h2>

                                                    TAMBAH PEMBAYARAN

                                                </h2>

                                            </div>

                                            <div class="body">

                                                <form action="<?= base_url('admin/pembayaran/aksi_tambah') ?>" method="POST" enctype="multipart/form-data">



                                                    <!-- <label for="id_pelajaran">Id Pelajaran </label> -->

                                                    <!-- <div class="form-group">

                                                        <div class="form-line">

                                                            <input type="text" name="id_pelajaran" id="id_pelajaran" class="form-control no-resize" required>

                                                        </div>

                                                    </div> -->

                                                    <label for="id_pendaftar">Id Pendafatar</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="id_pendaftar" type="text" name="id_pendaftar" placeholder="Id pendaftar">
                                                        </div>
                                                    </div>


                                                    <label for="jumlah">Jumlah</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="jumlah" type="text" name="jumlah" placeholder="Jumlah yang di bayarkan">
                                                        </div>
                                                    </div>
                                                    <label for="tanggal">Tanggal</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="tanggal" type="date" name="tanggal" placeholder="Enter your password">
                                                        </div>
                                                    </div>
                                                    <label for="status">Status</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="status" type="text" name="status" placeholder="Jumlah yang di bayarkan">
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

                                <h3>DATA PEMBAYARAN</h3>

                            </div>

                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">

                                    <thead>

                                        <tr>

                                            <th>No</th>

                                            <th>Id_pendaftaran</th>
                                            <th>Jumlah</th>
                                            <th>tanggal</th>
                                            <th>Status</th>
                                            <th>Ubah</th>
                                            <th>Hapus</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <?php $no = 1; ?>

                                        <?php foreach ($pembayaran as $peng) : ?>

                                            <tr>

                                                <td><?= $no++ ?></td>

                                                <!-- <td><a href="<?= base_url('admin/lihat_pengurus/') . $peng->id_pembayaran ?>"><?= $peng->nama ?></a></td> -->

                                                <td><?= $peng->id_pendaftar ?></td>
                                                <td><?= $peng->jumlah ?></td>
                                                <td><?= $peng->status ?></td>
                                                <td><?= $peng->tanggal ?></td>
                                                <td><a href="<?= base_url('admin/pembayaran/ubah/' . $peng->id_pembayaran) ?>" class="btn btn-warning waves-effect" type="button">

                                                        <i class="material-icons">edit</i>

                                                        <span>Edit</span>

                                                    </a>

                                                </td>

                                                <td><a href="<?= base_url('admin/pembayaran/hapus/' . $peng->id_pembayaran) ?>" class="btn btn-danger waves-effect" type="button">

                                                        <i class="material-icons">delete_forever</i>

                                                        <span>Hapus</span>

                                                    </a>

                                                </td>

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