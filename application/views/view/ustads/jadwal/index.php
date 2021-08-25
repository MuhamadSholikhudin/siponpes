<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>JADWAL</h2>
        </div>
        
    <div class="card">
        <?php
        $id_pengguna = $this->session->userdata('id_pengguna');
        ?>
           <div class="header text-center">
               JADWAL MENGAJAR USTADS <?= $this->session->userdata('nama');  ?>
            </div> 
         <div class="body">

        <table class="table table-bordered table-striped" border="1">
            <thead>
                <tr>
                    <th>

                    </th>
                    <?php foreach ($hari as $hr) : ?>
                        <th>
                            <?= $hr ?>
                        </th>
                    <?php endforeach; ?>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($waktu as $wk) : ?>
                    <tr>
                        <td>
                            <?= $wk ?>
                        </td>
                        <?php foreach ($hari as $hr) : ?>
                            <td>
                                <?php
                                $tampil_jadwal =  $this->db->query("SELECT * FROM jadwal LEFT JOIN pelajaran ON jadwal.id_pelajaran = pelajaran.id_pelajaran WHERE pelajaran.id_pengguna = $id_pengguna AND  jadwal.hari = '$hr' AND jadwal.waktu = '$wk' AND jadwal.status = 1 ");
                                if ($tampil_jadwal->num_rows() > 0) {
                                    $tp = $tampil_jadwal->row();
                                    $tampil_pelajaran =  $this->db->query("SELECT * FROM pelajaran WHERE id_pelajaran = $tp->id_pelajaran ")->row();
                                    echo  $tampil_pelajaran->nama_pelajaran.'</br> '. $tampil_pelajaran->jenis.'</br> kelas '. $tp->id_kelas;
                                } else {
                                }
                                ?>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
        </div>
        </div>
        </div>
    </div>


</section>