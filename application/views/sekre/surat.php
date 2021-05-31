<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <button class="btn btn-default waves-effect m-r-20" type="button" data-target="#defaultModal" data-toggle="modal"> TAMBAH SURAT TUGAS</button>
                        <div tabindex="-1" class="modal fade" id="defaultModal" role="dialog" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="header">
                                                <h2>
                                                    TAMBAH SURAT TUGAS
                                                </h2>
                                            </div>
                                            <div class="body">
                                                <form action="<?= base_url('sekre/surat/tambah_aksi') ?>" method="POST" enctype="multipart/form-data">
                                                    <label for="judul">judul </label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="judul" type="text" name="judul" placeholder="Masukkan Judul Surat" required>
                                                        </div>
                                                    </div>
                                                    <label for="isi_surat">isi_surat </label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <!-- <input class="form-control" id="judul" type="text" name="judul" placeholder="Enter your email address"> -->
                                                            <textarea name="isi_surat" id="isi_surat" class="form-control no-resize" required></textarea>
                                                        </div>
                                                    </div>
                                                    <label for="keterangan">Keterangan</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <!-- <input class="form-control" id="keterangan" type="text" name="keterangan" placeholder="Enter your password"> -->
                                                            <textarea name="keterangan" id="keterangan" class="form-control no-resize" required></textarea>
                                                        </div>
                                                    </div>
                                                    <label for="penempatan">Penempatan</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="penempatan" type="text" name="penempatan" required>
                                                        </div>
                                                    </div>
                                                    <label for="tgl_buat">Tanggal Buat</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="tgl_buat" type="date" name="tgl_buat" required>
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
                                <h3>DATA SURAT PENUGASAN</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>isi surat</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th>Ubah</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($surat as $sus) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><a href="<?= base_url('sekre/surat/lihat/') . $sus->no_surat ?>"><?= $sus->judul ?></a></td>
                                                <td><?= $sus->isi_surat ?></td>
                                                <td><?= $sus->keterangan ?></td>
                                                <td>

                                                    <?php if ($sus->status_surat == 0) { ?>
                                                        <a href="<?= base_url('sekre/surat/ajukan_surat/') . $sus->no_surat ?>" class="btn btn-primary waves-effect" type="button">
                                                            <i class="material-icons">send</i>
                                                            <span>Ajukan</span>
                                                        </a>
                                                    <?php } elseif ($sus->status_surat == 1) { ?>
                                                        <button class="btn btn-warning waves-effect" type="button">
                                                            <i class="material-icons">call_missed_outgoing</i>
                                                            <span>Di Ajukan</span>
                                                        </button>
                                                    <?php } elseif ($sus->status_surat == 2) { ?>
                                                        <button class="btn btn-primary waves-effect" type="button">
                                                            <i class="material-icons">verified_user</i>
                                                            <span>Di Setujui</span>
                                                        </button>
                                                    <?php } elseif ($sus->status_surat == 3) { ?>
                                                        <button class="btn bg-deep-orange waves-effect" type="button">
                                                            <i class="material-icons">update</i>
                                                            <span>Dalam Process</span>
                                                        </button>
                                                    <?php } elseif ($sus->status_surat == 4) { ?>
                                                        <button class="btn bg-cyan waves-effect" type="button">
                                                            <i class="material-icons">done_all</i>
                                                            <span>Selesai</span>
                                                        </button>
                                                    <?php } ?>
                                                </td>
                                                <td><?php if ($sus->status_surat == 0) { ?>
                                                        <a href="<?= base_url('sekre/surat/edit/') . $sus->no_surat ?>" class="btn bg-light-green waves-effect" type="button">
                                                            <i class="material-icons">mode_edit</i>
                                                            <span>Edit</span>
                                                        </a>
                                                    <?php } elseif ($sus->status_surat == 1) { ?>
                                                        <a href="<?= base_url('sekre/surat/lihat/') . $sus->no_surat ?>" class="btn btn-success waves-effect" type="button">
                                                            <i class="material-icons">remove_red_eye</i>
                                                            <span>Lihat</span>
                                                        </a>
                                                    <?php } elseif ($sus->status_surat == 2) { ?>
                                                        <a href="<?= base_url('sekre/surat/lihat/') . $sus->no_surat ?>" class="btn btn-success waves-effect" type="button">
                                                            <i class="material-icons">remove_red_eye</i>
                                                            <span>Lihat</span>
                                                        </a>
                                                    <?php } elseif ($sus->status_surat == 3) { ?>
                                                        <a href="<?= base_url('sekre/surat/lihat/') . $sus->no_surat ?>" class="btn btn-success waves-effect" type="button">
                                                            <i class="material-icons">remove_red_eye</i>
                                                            <span>Lihat</span>
                                                        </a>
                                                    <?php } elseif ($sus->status_surat == 4) { ?>
                                                        <a href="<?= base_url('sekre/surat/lihat/') . $sus->no_surat ?>" class="btn btn-success waves-effect" type="button">
                                                            <i class="material-icons">remove_red_eye</i>
                                                            <span>Lihat</span>
                                                        </a>
                                                    <?php } ?>
                                                </td>
                                                <td><a href="<?= base_url('sekre/surat/hapus/' . $sus->no_surat) ?>" class="btn btn-danger waves-effect" type="button">
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