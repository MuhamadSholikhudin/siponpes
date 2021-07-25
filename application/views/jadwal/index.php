<section class="content">

    <div class="container-fluid">

        <div class="block-header">

            <h2>Jadwal</h2>

        </div>

        <!-- Basic Examples -->

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">

                    <div class="header">

                        <button class="btn btn-default waves-effect m-r-20" type="button" data-target="#defaultModal" data-toggle="modal"> TAMBAH Jadwal</button>

                        <div tabindex="-1" class="modal fade" id="defaultModal" role="dialog" style="display: none;">

                            <div class="modal-dialog modal-lg" role="document">

                                <div class="modal-content">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <div class="card">

                                            <div class="header">

                                                <h2>

                                                    TAMBAH Jadwal

                                                </h2>

                                            </div>

                                            <div class="body">

                                                <form action="<?= base_url('admin/jadwal/aksi_tambah') ?>" method="POST" enctype="multipart/form-data">
                                                    <!-- <label for="kode_jadwal">Kode jadwal </label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="kode_jadwal" id="kode_jadwal" class="form-control no-resize" required>
                                                        </div>
                                                    </div> -->
                                                    <label for="id_pelajaran">Pelajaran</label>
                                                    <div class="form-group">
                                                        <select class="selectpicker form-line" name="id_pelajaran" id="id_pelajaran">
                                                            <?php foreach ($pelajaran as $ust) : ?>
                                                                <option value="<?= $ust->id_pelajaran ?>"><?= $ust->nama_pelajaran ?>/<?= $ust->nama ?></option>

                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>

                                                    <label for="id_kelas">Kelas</label>
                                                    <div class="form-group">
                                                        <select class="selectpicker form-line" name="id_kelas" id="id_kelas">
                                                            <?php foreach ($kelas as $ust) : ?>
                                                                <option value="<?= $ust->id_kelas ?>"><?= $ust->kelas ?></option>

                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>

                                                    <label for="hari">hari</label>
                                                    <div class="form-group">
                                                        <select class="selectpicker form-line" name="hari" id="hari">
                                                            <?php foreach ($hari as $ust) : ?>
                                                                <option value="<?= $ust ?>"><?= $ust ?></option>

                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <label for="waktu">waktu</label>
                                                    <div class="form-group">
                                                        <select class="selectpicker form-line" name="waktu" id="waktu">
                                                            <?php foreach ($waktu as $ust) : ?>
                                                                <option value="<?= $ust ?>"><?= $ust ?></option>

                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <label for="status">status</label>
                                                    <div class="form-group">
                                                        <select class="selectpicker form-line" name="status" id="status">
                                                            <option value="1">Aktif</option>
                                                            <option value="0">Tidak Aktif</option>

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

                                <h3>DATA JADWAL</h3>

                            </div>

                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">

                                    <thead>

                                        <tr>

                                            <th>No</th>
                                            <th>Pelajaran</th>
                                            <th>Pengajar</th>
                                            <th>Kelas</th>
                                            <th>Hari</th>
                                            <th>Waktu</th>
                                            <th>Ubah</th>
                                            <th>Hapus</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <?php $no = 1; ?>

                                        <?php foreach ($jadwal as $peng) : ?>

                                            <tr>

                                                <td><?= $no++ ?></td>

                                                <!-- <td><a href="<?= base_url('admin/lihat_pengurus/') . $peng->id_jadwal ?>"><?= $peng->nama ?></a></td> -->

                                                <td> <?php
                                                        $pelajran = $this->db->query(" SELECT * FROM pelajaran  WHERE id_pelajaran = $peng->id_pelajaran")->row_array();

                                                        ?>
                                                    <?= $pelajran['kode_pelajaran'] ?>/<?= $pelajran['nama_pelajaran'] ?></td>
                                                <td>
                                                    <?php
                                                    $nama_pengajar = $this->db->query(" SELECT pengguna.nama FROM pelajaran JOIN pengguna ON pelajaran.id_pengguna = pengguna.id_pengguna WHERE id_pelajaran = $peng->id_pelajaran")->row_array();
                                                    echo $nama_pengajar['nama'];
                                                    ?>
                                                </td>
                                                <td><?= $peng->id_kelas ?></td>
                                                <td><?= $peng->hari ?></td>
                                                <td><?= $peng->waktu ?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/jadwal/ubah/' . $peng->id_jadwal) ?>" class="btn btn-warning waves-effect" type="button">

                                                        <i class="material-icons">edit</i>

                                                        <span>Edit</span>

                                                    </a>

                                                </td>

                                                <td><a href="<?= base_url('admin/jadwal/hapus/' . $peng->id_jadwal) ?>" class="btn btn-danger waves-effect" type="button">

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