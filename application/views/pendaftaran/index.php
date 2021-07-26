<section class="content">

    <div class="container-fluid">

        <div class="block-header">

            <h2>pendaftaran</h2>

        </div>

        <!-- Basic Examples -->

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">

                    <div class="header">

                        <a href="<?= base_url('admin/pendaftaran/tambah') ?>" class="btn btn-default waves-effect m-r-20" type="button"> Tambah pendaftaran</a>
                        <div class="body">
                            <div class="text-center">
                                <h3>DATA pendaftaran</h3>
                                <?= $this->session->flashdata('pesan'); ?>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>id_daftar</th>
                                            <th>id_santri</th>
                                            <th>materi_belajar</th>
                                            <th>Status</th>
                                            <th>tanggal</th>
                                            <th>Ubah</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($pendaftaran as $peng) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <!-- <td><a href="<?= base_url('admin/lihat_pengurus/') . $peng->id_daftar ?>"><?= $peng->nama ?></a></td> -->
                                                <td><?= $peng->id_daftar ?></td>
                                                <td><?= $peng->nama_lengkap ?></td>
                                                <td><?= $peng->nomor_wa ?></td>
                                                <td><?= $peng->tanggal_daftar ?></td>
                                                <td>
                                                    <?php
                                                    if ($peng->status == 0) { ?>
                                                        <a href="<?= base_url('admin/pendaftaran/ubah/') ?>" class="btn btn-black bg-black waves-effect" type="button">
                                                            <i class="material-icons">explicit</i>
                                                            <span>Persyaratan Kurang</span>
                                                        </a>
                                                    <?php    } elseif ($peng->status == 1) { ?>
                                                        <a href="<?= base_url('admin/pendaftaran/terima/' . $peng->id_daftar) ?>" class="btn btn-info bg-info waves-effect" type="button">
                                                            <i class="material-icons">check_box</i>
                                                            <span>Terima</span>
                                                        </a>
                                                        <a href="<?= base_url('admin/pendaftaran/kembalikan/' . $peng->id_daftar) ?>" class="btn btn-cyan bg-cyan waves-effect" type="button">
                                                            <i class="material-icons">close</i>
                                                            <span>Kembalikan</span>
                                                        </a>
                                                    <?php    } elseif ($peng->status == 2) { ?>
                                                        <a href="<?= base_url('admin/pendaftaran/') ?>" class="btn btn-light-green bg-light-green waves-effect" type="button">
                                                            <i class="material-icons">done</i>
                                                            <span>Diterima</span>
                                                        </a>
                                                    <?php    } elseif ($peng->status == 3) { ?>
                                                        <a href="<?= base_url('admin/pendaftaran/') ?>" class="btn btn-green bg-green waves-effect" type="button">
                                                            <i class="material-icons">done_all</i>
                                                            <span>Sudah Terdaftar</span>
                                                        </a>
                                                    <?php }   ?>
                                                </td>
                                                <td><a href="<?= base_url('admin/pendaftaran/ubah/' . $peng->id_daftar) ?>" class="btn btn-warning waves-effect" type="button">
                                                        <i class="material-icons">edit</i>
                                                        <span>Edit</span>
                                                    </a>
                                                </td>
                                                <td><a href="<?= base_url('admin/pendaftaran/hapus/' . $peng->id_daftar) ?>" class="btn btn-danger waves-effect" type="button">
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