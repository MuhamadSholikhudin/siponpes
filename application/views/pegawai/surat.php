<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Data Surat Tugas pegawai
                        </h2>

                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Isi Surat</th>
                                        <th>Keterangan</th>
                                        <th>Lihat</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1;
                                    foreach ($surat as $su) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $su->judul ?></td>
                                            <td><?= $su->isi_surat ?></td>
                                            <td><?= $su->keterangan ?></td>
                                            <td>
                                                <a href="<?= base_url("pegawai/absensi/pegawai/") . $su->no_surat ?>" class="btn btn-success waves-effect"><i class="material-icons">remove_red_eye</i>
                                                    <span>Lihat</span>
                                                </a>

                                            </td>
                                            <td>
                                                <?php if ($su->status_surat == 2) {
                                                ?>
                                                    <a href="<?= base_url('pegawai/absensi/baru/') . $su->no_surat ?>" class="btn bg-primary waves-effect" type="button">
                                                        <i class="material-icons">add_alert</i>
                                                        <span>baru</span>

                                                    </a>
                                                <?php } elseif ($su->status_surat == 3) { ?>
                                                    <a href="<?= base_url('pegawai/absensi/surat/') . $su->no_surat ?>" class="btn bg-deep-orange waves-effect" type="button">
                                                        <i class="material-icons">update</i>
                                                        <span>Dalam Proses</span>
                                                    <?php } elseif ($su->status_surat == 4) { ?>
                                                        <a href="<?= base_url('pegawai/absensi/surat/') . $su->no_surat ?>" class="btn bg-cyan waves-effect" type="button">
                                                            <i class="material-icons">done_all</i>
                                                            <span>Selesai</span>
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