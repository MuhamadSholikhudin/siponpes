<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Data Absensi Pegawai
                        </h2>

                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nip</th>
                                        <th>tanggal</th>
                                        <th>Lihat</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1;
                                    foreach ($jadwal as $jad) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $this->session->userdata('nama') ?></td>
                                            <td><?= $jad->nip ?></td>
                                            <td><?= $jad->jadwal ?></td>
                                            <td>
                                                <?php if ($jad->status_jadwal == 1) {
                                                ?>
                                                    <a href="<?= base_url("pegawai/absensi/edit/") . $jad->id_jadwal ?>"><i class="material-icons">edit</i>
                                                        <span>edit</span>
                                                    </a>
                                            </td>

                                        <?php
                                                } elseif ($jad->jadwal != date('Y-m-d')) {
                                        ?> Tidak bisa di akses

                                        <?php
                                                } elseif ($jad->jadwal == date('Y-m-d')) {
                                        ?>
                                            <a href="<?= base_url("pegawai/absensi/input/") . $jad->id_jadwal . "/" . $jad->no_surat ?>"><i class="material-icons">edit</i>input</a>
                                        <?php                                                }
                                        ?>

                                        <td>
                                            <?php if ($jad->status_jadwal == 5 OR $jad->status_jadwal == 6) {
                                                echo "Sudah Di Acc";
                                            } elseif ($jad->status_jadwal == 1) {
                                                echo "Sudah Bertugas";
                                            } elseif ($jad->status_jadwal == 0) {
                                                echo "Belum Bertugas";
                                            }
                                            ?>
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