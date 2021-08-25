<section class="content">

    <div class="container-fluid">

        <div class="block-header">

            <h2>Jadwal</h2>

        </div>

        <!-- Basic Examples -->
        <a href="<?= base_url('admin/jadwal') ?>" class="btn btn-primary waves-effect">
        <i class="material-icons">reply</i>       
            <span>Kemballi</span>
        </a>
        <div class="row clearfix">


            <!-- #END# Basic Examples -->

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class"text-center">
                                Jadwal Pelajaran Kelas 
                                <?php
$nama_kel =  $this->db->query("SELECT * FROM kelas WHERE id_kelas =  $kelas[0] ")->row();

?>
                                <?= $nama_kel->kelas ?>
                            </h2>
                           
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
                                $tampil_jadwal =  $this->db->query("SELECT * FROM jadwal LEFT JOIN pelajaran ON jadwal.id_pelajaran = pelajaran.id_pelajaran WHERE jadwal.id_kelas = $kelas[0] AND  jadwal.hari = '$hr' AND jadwal.waktu = '$wk' AND jadwal.status = 1 ");
                                if ($tampil_jadwal->num_rows() > 0) {
                                    $tjadwal = $tampil_jadwal->row();
                                    $tp = $tampil_jadwal->row();
                                    $tampil_pelajaran =  $this->db->query("SELECT * FROM pelajaran WHERE id_pelajaran = $tp->id_pelajaran ")->row();
                                    echo  $tampil_pelajaran->nama_pelajaran;
                                    echo  "<br>";
                                    $tampil_pengguna =  $this->db->query("SELECT * FROM pengguna WHERE id_pengguna =  $tampil_pelajaran->id_pengguna")->row();
                                    echo "(" .$tampil_pengguna->nama. ")";
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

        </div>

    </div>

</section>