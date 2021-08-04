<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Mengajar Hari INi <?=  longdate_indo(date('Y-m-d')); ?></h2>
        </div>
        <div class="card">

       
            <table class="table table-bordered" border="1">
                <thead>
                <tr>
                        <th>WAKTU</th>
                        <th>NAMA PELAJARAN</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tbody>
                <?php
            //Coding pembelajaran
            
            $tanggal = hari(date('Y-m-d'));
            $hari_ini = $tanggal;
            // echo '<br>';
            $id_pengajar = $this->session->userdata('id_pengguna');
            // echo '<br>';
        
            $jadwal = $this->db->query("SELECT * FROM jadwal LEFT JOIN pelajaran ON jadwal.id_pelajaran = pelajaran.id_pelajaran WHERE pelajaran.id_pengguna = $id_pengajar AND jadwal.hari = '$hari_ini' AND jadwal.status = 1")->result();
            foreach ($jadwal as $jad) : ?> 
                <tr>
                    <td><a href="<?= base_url('ustads/mengajar/pembelajaran/' . $jad->id_jadwal. '/'. $jad->id_pelajaran) ?>" class="btn btn-primary m-t-15 waves-effect" type="submit"><?= $jad->waktu ?></a></td>
                    <td>
                    <?php
                            $car_pelajaran =  $this->db->query("SELECT * FROM pelajaran WHERE id_pelajaran = $jad->id_pelajaran ")->row();
                            echo $car_pelajaran->nama_pelajaran;
                    ?>
                    </td>
                    <td><?= $jad->id_kelas ?></td>
                </tr>
            <?php 
            endforeach;
            ?>

                </tbody>
            </table>
        </div>
 
    </div>
</section>