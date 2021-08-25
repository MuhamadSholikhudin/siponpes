<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <form action="<?= base_url('admin/laporan/pendaftaran') ?>" method="POST" enctype="multipart/form-data">
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

                            <form action="<?= base_url('admin/laporan/pendaftaran') ?>" method="POST" enctype="multipart/form-data">
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

                            <form action="<?= base_url('admin/laporan/pendaftaran') ?>" method="POST" enctype="multipart/form-data">
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
                        
                        <a href="<?= base_url('admin/laporan/cetak_pendaftaran_tanggal/'.$tanggal[0].'/'.$tanggal[1]) ?>" target="_blank" class="btn bg-teal waves-effect"> 
                        <i class="material-icons">print</i>  
                        <span>Cetak</span>
                    </a>
                    <?php
                    }elseif($cetak[0] == 'bulan'){
                        ?>
                        
                        <a href="<?= base_url('admin/laporan/cetak_pendaftaran_bulan/'.$bulan[0].'/'.$bulan[1]) ?>" target="_blank" class="btn bg-teal waves-effect"> 
                        <i class="material-icons">print</i>  
                        <span>Cetak</span>
                    </a>
                    <?php
                        
                    }elseif($cetak[0] == 'tahun'){
                        ?>
                        
                        <a href="<?= base_url('admin/laporan/cetak_pendaftaran_tahun/'.$tahun[0]) ?>" target="_blank" class="btn bg-teal waves-effect"> 
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
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Tanggal daftar</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal lahir</th>
                                <th>Email</th>
                                <th>Nomor Wa</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($pendaftaran as $peng) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $peng->nama_lengkap ?></td>
                                    <td><?= $peng->alamat_tinggal ?></td>
                                    <td><?= $peng->tanggal_daftar ?></td>
                                    <td><?= $peng->tempat_lahir ?></td>
                                    <td><?= $peng->tanggal_lahir ?></td>
                                    <td><?= $peng->email ?></td>    
                                    <td><?= $peng->nomor_wa?></td>    
                                    <td>
                                    <?php
                                        if($peng->status == 0){
echo 'dikembalikan';
                                        }elseif($peng->status == 1){
                                            echo 'mendaftar';

                                        }elseif($peng->status == 2 ){
                                            echo 'diterima';

                                        }elseif($peng->status == 3){
                                            echo 'jadi santri';

                                        }else{
                                            echo 'enak';

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