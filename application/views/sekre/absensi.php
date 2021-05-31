<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                            DATA ABSENSI PEGAWAI
                        </h2>

                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Surat</th>
                                        <th>alamat</th>
                                        <th>Keterangan</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1;
                                    foreach ($surat as $sur) : ?>

                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td> <a href="<?= base_url('sekre/absensi/surat/' . $sur->no_surat) ?>"><?= $sur->judul ?></a></td>
                                            <td><?= $sur->isi_surat ?></td>
                                            <td><?= $sur->keterangan ?></td>
                                            <td><?= $sur->tgl_buat ?></td>
                                            <td>
                                                <?php if ($sur->status_surat == 0) { ?>
                                                    <a href="<?= base_url('sekre/surat/ajukan_surat/') . $sus->no_surat ?>" class="btn btn-primary waves-effect" type="button">
                                                        <i class="material-icons">send</i>
                                                        <span>Ajukan</span>
                                                    </a>
                                                <?php } elseif ($sur->status_surat == 1) { ?>
                                                    <button class="btn btn-warning waves-effect" type="button">
                                                        <i class="material-icons">call_missed_outgoing</i>
                                                        <span>Di Ajukan</span>
                                                    </button>
                                                <?php } elseif ($sur->status_surat == 2) { ?>
                                                    <button class="btn btn-warning waves-effect" type="button">
                                                        <i class="material-icons">verified_user</i>
                                                        <span>Di Setujui</span>
                                                    </button>
                                                <?php } elseif ($sur->status_surat == 3) { ?>
                                                    <button class="btn bg-deep-orange waves-effect" type="button">
                                                        <i class="material-icons">update</i>
                                                        <span>Dalam Process</span>
                                                    </button>
                                                <?php } elseif ($sur->status_surat == 4) { ?>
                                                    <button class="btn bg-cyan waves-effect" type="button">
                                                        <i class="material-icons">done_all</i>
                                                        <span>Selesai</span>
                                                    </button>
                                                <?php } ?>
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