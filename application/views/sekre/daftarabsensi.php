<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form action="<?= base_url('sekre/absensi/acc_absen/') ?>" enctype="multipart/form-data" method="POST">

                    <div class="card">
                        <div class="header">
                            <h2 class="text-center">
                                Data Absensi
                            </h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nip</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>



                                    

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <?php foreach ($no_sur as $nos) : ?>
                                            <input type="text" name="no_surat" value="<?= $nos->no_surat ?>">
                                        <?php endforeach; ?>
                                    </div>




                                    <tbody>

                                        <?php $no = 1; ?>
                                        <?php foreach ($jadwal as $jad) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?php
                                                    $idj = $jad->id;
                                                    $nam = $this->db->query("SELECT * FROM data_pegawai WHERE id = '$idj' ");

                                                    $okl = $nam->row();
                                                    echo $okl->nip;

                                                    ?>
                                                </td>

                                                <td><?php
                                                    echo $okl->nama;

                                                    ?>


                                                    <input type="hidden" name="id_jadwal[]" value="<?= $jad->id_jadwal ?>">


                                                </td>
                                                <td>
                                                    <?php
                                                    echo $okl->jabatan;

                                                    ?>
                                                </td>
                                                <td><?= $jad->jadwal ?></td>
                                                <td>
                                                    <?php $idj = $jad->id_jadwal;
                                                    $ket = $this->db->query("SELECT * FROM absensi WHERE id_jadwal = '$idj' ");

                                                    $kil = $ket->row();
                                                    echo $kil->keterangan;
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php if ($kil->status_absensi == 5 or $kil->status_absensi == 0) {
                                                        echo "Tidak Bertugas";
                                                    } elseif ($kil->status_absensi == 6 or $kil->status_absensi == 1) {
                                                        echo " Bertugas";
                                                    }
                                                    ?>

                                                    <input type="hidden" name="status_jadwal[]" value="<?= $jad->status_jadwal ?>">
                                                    <input type="hidden" name="status_absensi[]" value="<?= $kil->status_absensi ?>">

                                                </td>


                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2">
                                <?php foreach ($no_sur as $nos) : ?>
                                    <?php if ($nos->status_surat == 3) {

                                        echo    '<button type="submit" class="btn btn-primary float-right">ACC Absensi</button>';
                                    } ?>
                                <?php endforeach; ?>

                            </div>

                            <div class="col-sm-12">&nbsp;</div>
                        </div>

                    </div>



                </form>
            </div>
        </div>
        <!-- #END# Basic Examples -->

    </div>
</section>