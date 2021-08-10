<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <form action="<?= base_url('admin/laporan/santri') ?>" method="POST" enctype="multipart/form-data">
                                <div class="col-sm-3">
                                    <label for=""> Pilih Perkelas</label>
                                    <input type="hidden" name="pilihan" value="kelas">
                                    <div class="form-group">
                                        <select class="selectpicker form-line" name="kelas" id="bulan">
                                          <?php
                                            $kelas = $this->db->query("SELECT * FROM kelas ")->result();
                                            foreach($kelas as $ke): ?>
                                            <option value="<?= $ke->id_kelas ?>"><?= $ke->kelas ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Kirim</button>
                                </div>
                            </form>



                            <div class="col-sm-1"></div>

                            <form action="<?= base_url('admin/laporan/santri') ?>" method="POST" enctype="multipart/form-data">
                                <div class="col-sm-3">
                                    <label for="bulan">Pilih Perperiode</label>
                                    <input type="hidden" name="pilihan" value="periode">
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

                            <form action="<?= base_url('admin/laporan/santri') ?>" method="POST" enctype="multipart/form-data">
                                <div class="col-sm-3">
                                    <label for="bulan">Pilih Kelas dan Periode</label>
                                    <input type="hidden" name="pilihan" value="kelas_periode">
                                    <div class="form-group">
                                        <select class="selectpicker form-line" name="kelas" id="kelas">
                                            <?php
                                                $kelas = $this->db->query("SELECT * FROM kelas ")->result();
                                                foreach($kelas as $ke): ?>
                                                    <option value="<?= $ke->id_kelas ?>"><?= $ke->kelas ?></option>
                                            <?php endforeach; ?>
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
                        </div>
                    </div>

                </div>
                    <?php
                    if($cetak[0] == 'kelas'){ ?>
                        
                        <a href="<?= base_url('admin/laporan/cetak_santri_kelas/'.$kelasi[0]) ?>" target="_blank" class="btn bg-teal waves-effect"> 
                        <i class="material-icons">print</i>  
                        <span>Cetak</span>
                    </a>
                    <?php
                    }elseif($cetak[0] == 'periode'){
                        ?>
                        
                        <a href="<?= base_url('admin/laporan/cetak_santri_periode/'.$tahun[0]) ?>" target="_blank" class="btn bg-teal waves-effect"> 
                        <i class="material-icons">print</i>  
                        <span>Cetak</span>
                    </a>
                    <?php
                        
                    }elseif($cetak[0] == 'kelas_periode'){
                        ?>
                        
                        <a href="<?= base_url('admin/laporan/cetak_santri_periode_kelas/'.$kelas_periode[0].'/'.$kelas_periode[1]) ?>" target="_blank" class="btn bg-teal waves-effect"> 
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
                            LAPORAN DATA SANTRI PONDOK PESANTREN BAITUL QUDUS
                        </h2>

                    </div>
                    <div class="body">
                        <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>hakakses</th>
                                    <th>Status</th>
                                    <th>Kelas</th>
                                    <th>Periode</th>
                                </tr>
                            </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($santri as $peng) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <!-- <td><a href="<?= base_url('admin/lihat_pengurus/') . $peng->id_santri ?>"><?= $peng->nama ?></a></td> -->
                                    <td>
                                        <?php
                                        $nama_lengkap = $this->db->query(" SELECT * FROM daftar WHERE id_daftar = $peng->id_daftar")->row();
                                        ?>
                                        <?= $nama_lengkap->nama_lengkap ?>
                                    </td>
                                    <td><?= $peng->username ?></td>
                                    <td>
                                        <?php
                                        if ($peng->hakakses == 3) {
                                            echo 'Santri';
                                        }
                                        ?>
                                    </td>

                                    <td><?php
                                        if ($peng->status  == 1) {
                                            echo 'Aktif';
                                        } else {
                                            echo 'Tidak Aktif';
                                        }
                                        ?>
                                    </td>
                                    <td><?= $peng->kelas ?></td>
                                    <td><?= $peng->periodetahun ?></td>
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