<section class="content">

    <div class="container-fluid">

        <div class="block-header">

            <h2>KELAS</h2>

        </div>

        <!-- Basic Examples -->

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">

                    <div class="header">

                        <button class="btn btn-default waves-effect m-r-20" type="button" data-target="#defaultModal" data-toggle="modal"> Tambah Kelas</button>

                        <div tabindex="-1" class="modal fade" id="defaultModal" role="dialog" style="display: none;">

                            <div class="modal-dialog modal-lg" role="document">

                                <div class="modal-content">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <div class="card">

                                            <div class="header">

                                                <h2>

                                                    TAMBAH KELAS

                                                </h2>

                                            </div>

                                            <div class="body">

                                                <form action="<?= base_url('admin/kelas/aksi_tambah') ?>" method="POST" enctype="multipart/form-data">

                                                    <label for="kelas">Kelas</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="kelas" type="text" name="kelas" placeholder="Isi nama Kelas">
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

                                <h3>DATA kelas</h3>

                            </div>

                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">

                                    <thead>

                                        <tr>

                                            <th>No</th>

                                            <th>Id Kelas</th>
                                            <th>Nama Kelas</th>
                                           
                                            <th>Ubah</th>
                                            <th>Hapus</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <?php $no = 1; ?>

                                        <?php foreach ($kelas as $peng) : ?>

                                            <tr>

                                                <td><?= $no++ ?></td>


                                                <td><?= $peng->id_kelas ?></td>
                                                <td><?= $peng->kelas ?></td>
                                              
                                                <td><a href="<?= base_url('admin/kelas/ubah/' . $peng->id_kelas) ?>" class="btn btn-warning waves-effect" type="button">

                                                        <i class="material-icons">edit</i>

                                                        <span>Edit</span>

                                                    </a>

                                                </td>

                                                <td><a href="<?= base_url('admin/kelas/hapus/' . $peng->id_kelas) ?>" class="btn btn-danger waves-effect" type="button">

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