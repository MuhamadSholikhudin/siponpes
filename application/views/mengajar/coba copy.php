<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>


        <?php
        //Coding pembelajaran
        echo $tanggal = hari(date('Y-m-d'));
        $hari_ini = $tanggal;

        // $jadwal_cari = $this->db->query("SELECT id_pelajaran FROM jadwal WHERE hari = '$hari_ini' ");
        // // echo $jadwal_cari->num_rows();
        // if ($jadwal_cari->num_rows() > 0) {
        //     $jadwal_perulangan = $jadwal_cari->result_array();
        //     foreach ($jadwal_perulangan as $jp) :
        //         $id_pel = $jp['id_pelajaran'];
        //         $pelajaran_cari = $this->db->query("SELECT * FROM pelajaran WHERE id_pelajaran = $id_pel ");
        //         if ($pelajaran_cari->num_rows() > 0) {
        //             $pelajaran_ada = $pelajaran_cari->row();
        //             if($this->session->userdata('id_pengguna') == $pelajaran_cari['id_pengguna']) {
        //                 $jadwal_tampil = $this->db->query("SELECT * FROM jadwal WHERE  id_pelajaran = 3 AND hari = 'Selasa'");
        //             }
        //         } else {
        //             echo 'Tidak ada jadwal mengajar';
        //         }
        //     endforeach;

        //     $jadwal_ada = $jadwal_cari->row();


        // } else {
        //     echo 'Tidak ada jadwal mengajar';
        // }
        echo '<br>';
        echo $id_pengajar = $this->session->userdata('id_pengguna');
        echo '<br>';
        // foreach ($jadwal as $jad) :
        //     // echo $jad->id_pelajaran . '<br>';
        //     $pelajaran_tampil = $this->db->query("SELECT * FROM pelajaran WHERE  id_pelajaran = $jad->id_pelajaran AND id_pengguna =  $id_pengajar");

        //     if ($pelajaran_tampil->num_rows() > 0) {
        //         $jadwal_tampil = $this->db->query("SELECT * FROM jadwal WHERE  id_pelajaran = $jad->id_pelajaran AND hari = '$hari_ini' ")->result();
        //         foreach ($jadwal_tampil as $jad_t) : ?>

        <!-- <a href="<?= base_url('ustads/mengajar/') ?>"><?= $jad_t->id_pelajaran ?>/<?= $jad_t->hari ?> /<?= $jad_t->waktu ?></a> <br> -->
                 <?php
                    //         endforeach;
                    //         // echo 'ada 1';
                    //     } else {
                    //         // echo 'Kosong 2' . '<br>';
                    //     }
                    // endforeach;


                    $jadwal = $this->db->query("SELECT * FROM jadwal LEFT JOIN pelajaran ON jadwal.id_pelajaran = pelajaran.id_pelajaran WHERE pelajaran.id_pengguna = $id_pengajar AND jadwal.hari = '$hari_ini'")->result();
        foreach ($jadwal as $jad) : ?> 
                                                    <a href="<?= base_url('ustads/coba/pembelajaran/' . $jad->id_jadwal. '/'. $jad->id_pelajaran) ?>" class="btn btn-primary m-t-15 waves-effect" type="submit"><?= $jad->waktu ?></a> <br>

        <?php 
            // echo $jad->id_pelajaran . '/' .$jad->id_pengguna . '/' . $jad->waktu. '<br>' ;
        //     $pelajaran_tampil = $this->db->query("SELECT * FROM pelajaran WHERE  id_pelajaran = $jad->id_pelajaran AND id_pengguna =  $id_pengajar");

        //     if ($pelajaran_tampil->num_rows() > 0) {
        //         $jadwal_tampil = $this->db->query("SELECT * FROM jadwal WHERE  id_pelajaran = $jad->id_pelajaran AND hari = '$hari_ini' ")->result();
        //         foreach ($jadwal_tampil as $jad_t) : 

       
        // endforeach;
        //         // echo 'ada 1';
        //     } else {
        //         // echo 'Kosong 2' . '<br>';
        //     }
        endforeach;

        ?>
    </div>
</section>