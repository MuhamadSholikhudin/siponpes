<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>PERKEMBANGAN SANTRI</h2>
        </div>
        <?php
        $id_pengguna = $this->session->userdata('id_pengguna');
        ?>
        <div class="card">
            <div class="body">
                      <table class="table table-bordered table-striped" border="1">
            <thead>
                <tr>
                    <th> No </th>
                    <th>Nama Pelajaran</th>
                    <th>Kelas</th>
                    <th>Lihat</th>
                    <!-- <th>Edit</th> -->
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($perkembangan as $pem) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $pem->nama_pelajaran ?></td>
                       <td>
                       <?= $pem->id_kelas ?>
                       </td>
                        <td>
                            <a href="<?= base_url('ustads/perkembangan/lihat/'.$id_pengguna .'/'. $pem->id_pelajaran) ?>" class="btn btn-info waves-effect" type="button">

                                <i class="material-icons">remove_red_eye</i>
                                <span>Lihat</span>

                            </a>
                        </td>
                        <!-- <td>
                            <a href="<?= base_url('ustads/santri/ubah/'.$pem->id_pelajaran) ?>" class="btn btn-warning waves-effect" type="button">

                                <i class="material-icons">edit</i>
                                <span>Edit</span>

                            </a>
                        </td> -->
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

                
            </div>
        </div>
  
    </div>


</section>