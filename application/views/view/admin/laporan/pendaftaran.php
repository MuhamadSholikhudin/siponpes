<section class="content">
    <div class="container-fluid">
       <div class="card">
       

        <div class="body bg-white">
                            <div class="text-center mb-3">
                                <h4>LAPORAN DATA PENDAFTARAN</h4>
                                <h4>PONDOK PESAMTREN BAITUL QUDUS</h4>
                                <h4>PANJANG BAE KUDUS</h4>
                            </div>
                            <div class="table-responsive   text-dark">
                                <table border="1" class="table text-dark table-bordered">
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