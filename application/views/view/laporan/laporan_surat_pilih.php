<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <form action="<?= base_url('sekre/laporan/surat') ?>" method="POST" enctype="multipart/form-data">
                                <div class="col-sm-3">
                                    <label for=""> Pilih Pertanggal</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" name="tanggal_awal" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" name="tanggal_akhir" class="form-control" required>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Kirim</button>
                                </div>
                            </form>

                            <div class="col-sm-1"></div>

                            <form action="<?= base_url('sekre/laporan/surat_perbulan') ?>" method="POST" enctype="multipart/form-data">
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


                            <form action="<?= base_url('sekre/laporan/surat_pertahun') ?>" method="POST" enctype="multipart/form-data">
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
                            Laporan Surat Penugasan
                        </h2>
                        <h2 class="text-center">
                            Dinas Tenaga Inkop dan UMKM
                        </h2>


                    </div>
                    <div class="body">


                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Surat</th>
                                        <th>Judul Surat</th>
                                        <th>Isi Surat</th>
                                        <th>Keterangan</th>
                                        <th>Penempatan</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($surat as $sur) : ?>

                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $sur->no_surat ?></td>
                                            <td><?= $sur->judul ?></td>
                                            <td><?= $sur->isi_surat ?></td>
                                            <td><?= $sur->keterangan ?></td>
                                            <td><?= $sur->penempatan ?></td>
                                            <td><?= $sur->tgl_buat ?></td>
                                            <td>


                                                <?php if ($sur->status_surat == 0) { ?>
                                                    Ajukan
                                                <?php } elseif ($sur->status_surat == 1) { ?>
                                                    Di Ajukan
                                                <?php } elseif ($sur->status_surat == 2) { ?>

                                                    Di ACC
                                                    </button>
                                                <?php } elseif ($sur->status_surat == 3) { ?>

                                                    Dalam Process
                                                    </button>
                                                <?php } elseif ($sur->status_surat == 4) { ?>

                                                    <span>Selesai

                                                    <?php } ?>


                                                    <!-- <a target="blank" href="<?= base_url('sekre/laporan/cetak_surat/' . $sur->no_surat) ?>" target="blank" class="btn btn-warning"><i class="material-icons">print</i> Cetak</a> -->

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