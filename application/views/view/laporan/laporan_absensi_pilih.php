<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <form action="<?= base_url('sekre/laporan/absensi_pertanggal') ?>" method="POST" enctype="multipart/form-data">
                                <div class="col-sm-3">
                                    <label for=""> Pilih Pertanggal</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" name="tanggal_awal" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" name="tanggal_akhir" class="form-control">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Kirim</button>
                                </div>
                            </form>

                            <div class="col-sm-1"></div>

                            <form action="<?= base_url('sekre/laporan/absensi_perbulan') ?>" method="POST" enctype="multipart/form-data">
                                <div class="col-sm-3">
                                    <label for="bulan">Pilih Bulan</label>
                                    <div class="form-group">
                                        <select class="selectpicker form-line" name="bulan" id="bulan">
                                            <option value="01">Januari</option>
                                            <option value="02">Februari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>
                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select class="selectpicker form-line" name="tahun" id="tahun">

                                            <?php $mulai = date('Y') - 20;
                                            for ($i = $mulai; $i < $mulai + 21; $i++) {
                                                $sel = $i == date('Y') ? 'selected="selected"' : '';
                                                echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                            }
                                            ?>

                                        </select>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Kirim</button>
                                </div>
                            </form>

                            <div class="col-sm-1"></div>

                            <form action="<?= base_url('sekre/laporan/absensi_pertahun') ?>" method="POST" enctype="multipart/form-data">
                                <div class="col-sm-3">
                                    <label for="bulan">Pilih Tahun</label>


                                    <div class="form-group">
                                        <select class="selectpicker form-line" name="tahun" id="tahun">

                                            <?php $mulai = date('Y') - 20;
                                            for ($i = $mulai; $i < $mulai + 21; $i++) {
                                                $sel = $i == date('Y') ? 'selected="selected"' : '';
                                                echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                            }
                                            ?>

                                        </select>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Kirim</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>


                <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                            Laporan Absensi
                        </h2>

                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jadwal</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>penempatan</th>
                                        <th>Absensi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($jadwal as $jad) : ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $jad->jadwal ?></td>
                                            <td><?= $jad->nip ?></td>
                                            <td><?= $jad->nama ?></td>
                                            <td><?= $jad->jabatan ?></td>
                                            <td><?= $jad->penempatan ?></td>
                                            <td>
                                                <?php if ($jad->status_jadwal == 6) {
                                                    echo "Bertugas";
                                                } elseif ($jad->status_jadwal) {
                                                    echo "Tidak Bertugas";
                                                } ?>
                                            </td>
                                        </tr>
                                        <?php $no++; ?>
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