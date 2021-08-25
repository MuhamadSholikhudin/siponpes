<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>PEMBELAJARAN</h2>
        </div>
        <?php
        $id_pengguna = $this->session->userdata('id_pengguna');
        ?>
<div class="card">
    <div class"header">
        <h4 class"text-center">
            
        DATA PEMBELAJARAN PER PELAJARAN
        </h4>
        
    </div>
    <div class="body">
        <table class="table table-bordered table-striped" border="1">
            <thead>
                <tr>
                    <th> No </th>
                    <th>Nama Pelajaran</th>
                    <th>Kelas</th>
                    <th>Lihat</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($pembelajaran as $pem) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $pem->nama_pelajaran ?></td>
                        <td><?= $pem->id_kelas ?></td>
                        <td>
                            <a href="<?= base_url('ustads/pembelajaran/lihat/'.$pem->id_jadwal .'/'. $pem->id_pelajaran) ?>" class="btn btn-info waves-effect" type="button">

                                <i class="material-icons">remove_red_eye</i>
                                <span>Lihat</span>

                            </a>
                        </td>
                   <!--     <td>
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