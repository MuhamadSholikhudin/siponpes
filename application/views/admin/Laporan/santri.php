<section class="content">
    <div class="container-fluid">
       <div class="card">
       

        <div class="body bg-white">
                            <div class="text-center mb-3">
                                <h4>LAPORAN DATA SANTRI</h4>
                                <h4>PONDOK PESAMTREN BAITUL QUDUS</h4>
                                <h4>PANJANG BAE KUDUS</h4>
                            </div>
                            <div class="table-responsive   text-dark">
                                <table border="1" class="table text-dark table-bordered">
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
                            <div class="text-right">
                                kudus, <?= mediumdate_indo(date('Y-m-d')) ?>
                                <br>
                                <br>
                                <br>
                                <br>
                                <?php
                            $nama_ustad = $this->db->query(" SELECT * FROM pengguna WHERE hakakses = 1")->row();
                            echo $nama_ustad->nama;
                            ?>
                            </div>

                        </div>
    
        </div>
    </div>
</section>