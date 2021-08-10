<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <form action="<?= base_url('admin/laporan/pembayaran') ?>" method="POST" enctype="multipart/form-data">
                                <div class="col-sm-3">
                                    <label for=""> Pilih Pertanggal</label>
                                    <input type="hidden" name="pilihan" value="tanggal">
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

                            <form action="<?= base_url('admin/laporan/pembayaran') ?>" method="POST" enctype="multipart/form-data">
                                <div class="col-sm-3">
                                    <label for="bulan">Pilih Bulan</label>
                                    <input type="hidden" name="pilihan" value="bulan">
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

                            <form action="<?= base_url('admin/laporan/pembayaran') ?>" method="POST" enctype="multipart/form-data">
                                <div class="col-sm-3">
                                    <label for="bulan">Pilih Tahun</label>
                                    <input type="hidden" name="pilihan" value="tahun">
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
                    <?php
                    if($cetak[0] == 'tanggal'){ ?>
                        
                        <a href="<?= base_url('admin/laporan/cetak_pembayaran_tanggal/'.$tanggal[0].'/'.$tanggal[1]) ?>" target="_blank" class="btn bg-teal waves-effect"> 
                        <i class="material-icons">print</i>  
                        <span>Cetak</span>
                    </a>
                    <?php
                    }elseif($cetak[0] == 'bulan'){
                        ?>
                        
                        <a href="<?= base_url('admin/laporan/cetak_pembayaran_bulan/'.$bulan[0].'/'.$bulan[1]) ?>" target="_blank" class="btn bg-teal waves-effect"> 
                        <i class="material-icons">print</i>  
                        <span>Cetak</span>
                    </a>
                    <?php
                        
                    }elseif($cetak[0] == 'tahun'){
                        ?>
                        
                        <a href="<?= base_url('admin/laporan/cetak_pembayaran_tahun/'.$tahun[0]) ?>" target="_blank" class="btn bg-teal waves-effect"> 
                        <i class="material-icons">print</i>  
                        <span>Cetak</span>
                    </a>
                    <?php
                        
                    }elseif($cetak[0] == 'normal'){
                        

                    }
                    ?>

                <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                            LAPORAN DATA PENDAFTARAN PONDOK PESANTREN BAITUL QUDUS
                        </h2>

                    </div>
                    <div class="body">
                        <div class="table-responsive">
                        <table border="1" class="table text-dark table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama lengkap</th>
                                <th>Status bayar</th>
                                <th>Tanggal bayar</th>
                                <th>Jumlah bayar</th>
                            </tr>
                        </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($pembayaran as $peng) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <!-- <td><a href="<?= base_url('admin/lihat_pengurus/') . $peng->id_pembayaran ?>"><?= $peng->nama ?></a></td> -->
                                        <td>
                                            <?php
                                            $nama_lengkap = $this->db->query(" SELECT * FROM daftar WHERE id_daftar = $peng->id_daftar")->row();
                                            ?>
                                            <?= $nama_lengkap->nama_lengkap ?>
                                        </td>
                                        <td><?= $peng->status ?></td>
                                        <td><?= $peng->tanggal ?></td>
                                        <td><?= $peng->jumlah ?></td>
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