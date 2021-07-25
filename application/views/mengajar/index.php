<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Mengajar Hari INi <?=  longdate_indo(date('Y-m-d')); ?></h2>
        </div>
        <?php
        //Coding pembelajaran
        
         $tanggal = hari(date('Y-m-d'));
        $hari_ini = $tanggal;
        echo '<br>';
        $id_pengajar = $this->session->userdata('id_pengguna');
        echo '<br>';
     

        $jadwal = $this->db->query("SELECT * FROM jadwal LEFT JOIN pelajaran ON jadwal.id_pelajaran = pelajaran.id_pelajaran WHERE pelajaran.id_pengguna = $id_pengajar AND jadwal.hari = '$hari_ini' AND jadwal.status = 1")->result();
        foreach ($jadwal as $jad) : ?> 
            <a href="<?= base_url('ustads/mengajar/pembelajaran/' . $jad->id_jadwal. '/'. $jad->id_pelajaran) ?>" class="btn btn-primary m-t-15 waves-effect" type="submit"><?= $jad->waktu ?></a> <br>
        <?php 
           
        endforeach;

        ?>
    </div>
</section>