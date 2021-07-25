<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Pelajaran</h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <button class="btn btn-default waves-effect m-r-20" type="button" data-target="#defaultModal" data-toggle="modal"> TAMBAH pelajaran</button>
                        <div tabindex="-1" class="modal fade" id="defaultModal" role="dialog" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="header">
                                                <h2>
                                                    TAMBAH pelajaran
                                                </h2>
                                            </div>
                                            <div class="body">
                                                <form action="<?= base_url('admin/pelajaran/aksi_tambah') ?>" method="POST" enctype="multipart/form-data">
                                                    <label for="kode_pelajaran">Kode Pelajaran </label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="kode_pelajaran" id="kode_pelajaran" class="form-control no-resize" placeholder="Kode Pelajaran" required>
                                                        </div>
                                                    </div>
                                                    <label for="nama_pelajaran">Nama Pelajaran</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="nama_pelajaran" type="text" name="nama_pelajaran" placeholder="Isi Nama pelajaran" required>
                                                        </div>
                                                    </div>
                                                    <label for="id_pengguna">Pengajar</label>
                                                    <div class="form-group">
                                                        <select class="selectpicker form-line" name="id_pengguna" id="id_pengguna">
                                                            <?php foreach ($pengguna as $ust) : ?>
                                                                <option value="<?= $ust->id_pengguna ?>"><?= $ust->nama ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <label for="jenis">Jenis Pelajaran</label>
                                                    <div class="form-group">
                                                        <select class="selectpicker form-line" name="jenis" id="jenis">
                                                            <?php foreach ($jenis as $ust) : ?>
                                                                <option value="<?= $ust ?>"><?= $ust ?></option>
                                                            <?php endforeach; ?>
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
                                <h3>DATA pelajaran</h3>

                            </div>

                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>kode_pelajaran</th>
                                            <th>Nama pelajaran</th>
                                            <th>Jenis pelajaran</th>
                                            <th>Pengajar</th>
                                            <th>Ubah</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($pelajaran as $peng) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <!-- <td><a href="<?= base_url('admin/lihat_pengurus/') . $peng->id_pelajaran ?>"><?= $peng->nama ?></a></td> -->
                                                <td><?= $peng->kode_pelajaran ?></td>
                                                <td><?= $peng->nama_pelajaran ?></td>
                                                <td><?= $peng->jenis ?></td>
                                                <td>
                                                    <?php
                                                        $pengajar = $this->db->query("SELECT * FROM pengguna WHERE id_pengguna = $peng->id_pengguna")->row();
                                                        ?>
                                                        <?= $pengajar->nama ?>
                                            </td>
                                                <td><a href="<?= base_url('admin/pelajaran/ubah/' . $peng->id_pelajaran) ?>" class="btn btn-warning waves-effect" type="button">
                                                        <i class="material-icons">edit</i>
                                                        <span>Edit</span>
                                                    </a>
                                                </td>
                                                <td><a href="<?= base_url('admin/pelajaran/hapus/' . $peng->id_pelajaran) ?>" class="btn btn-danger waves-effect" type="button">
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