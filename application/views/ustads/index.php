<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <button class="btn btn-default waves-effect m-r-20" type="button" data-target="#defaultModal" data-toggle="modal"> TAMBAH PENGURUS</button>
                        <div tabindex="-1" class="modal fade" id="defaultModal" role="dialog" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="header">
                                                <h2>
                                                    TAMBAH USTADS
                                                </h2>
                                            </div>
                                            <div class="body">
                                                <form action="<?= base_url('admin/ustads/aksi_tambah') ?>" method="POST" enctype="multipart/form-data">
                                                    <label for="nama">Nama </label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="nama" type="text" name="nama" placeholder="Masukkan Pengurus" required>
                                                        </div>
                                                    </div>
                                                    <label for="username">Username </label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <!-- <input class="form-control" id="judul" type="text" name="judul" placeholder="Enter your email address"> -->
                                                            <input type="text" name="username" id="username" class="form-control no-resize" required>
                                                        </div>
                                                    </div>
                                                    <label for="password">Password</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="password" type="text" name="password" placeholder="Enter your password">
                                                            <!-- <textarea name="keterangan" id="keterangan" class="form-control no-resize" required></textarea> -->
                                                        </div>
                                                    </div>
                                                    <label for="hakakses">Hak Akses</label>
                                                    <div class="form-group">
                                                        <select class="selectpicker form-line" name="hakakses" id="hakakses">
                                                            <option value="2">Ustads</option>
                                                            <option value="1">Admin</option>
                                                           
                                                        </select>
                                                    </div>
                                                    <label for="hakakses">Status</label>
                                                    <div class="form-group">
                                                        <select class="selectpicker form-line" name="status" id="status">
                                                            <option value="0">Tidak Aktif</option>
                                                            <option value="1">Aktif</option>
                                                           
                                                        </select>
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
                                <h3>DATA USTADS</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>hakakses</th>
                                            <th>Status</th>
                                            <th>Ubah</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($ustads as $peng) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><a href="<?= base_url('admin/ustads/lihat/') . $peng->id_pengguna ?>"><?= $peng->nama ?></a></td>
                                                <td><?= $peng->username ?></td>
                                                <td><?= $peng->hakakses ?></td>
                                                <td><?= $peng->status ?></td>
                                                <td><a href="<?= base_url('admin/ustads/ubah/' . $peng->id_pengguna) ?>" class="btn btn-warning waves-effect" type="button">
                                                        <i class="material-icons">edit</i>
                                                        <span>Edit</span>
                                                    </a>
                                                </td>
                                                <td><a href="<?= base_url('admin/ustads/hapus/' . $peng->id_pengguna) ?>" class="btn btn-danger waves-effect" type="button">
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
</section>