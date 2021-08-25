<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>PENILIAN SANTRI</h2>
        </div>
        <?php
        $id_pengguna = $this->session->userdata('id_pengguna');
        ?>

        <table class="table table-bordered table-striped" border="1">
            <thead>
                <tr>
                    <th> No </th>
                    <th>Nama Pelajaran</th>
                    <th>Lihat</th>
                    <!-- <th>Edit</th> -->
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($penilaian as $pem) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $pem->nama_pelajaran ?></td>
                        <td>
                            <a href="<?= base_url('ustads/penilaian/lihat/'.$id_pengguna .'/'. $pem->id_pelajaran) ?>" class="btn btn-info waves-effect" type="button">

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


</section>