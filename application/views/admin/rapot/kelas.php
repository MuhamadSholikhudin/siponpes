<section class="content">
    <div class="container-fluid">
    <a href="<?= base_url('admin/rapot/') ?>" class="btn bg-blue-grey waves-effect"> 
            <i class="material-icons">reply</i>  
            <span>Kemballi</span>
        </a>
        <?php
        $id_pengguna = $this->session->userdata('id_pengguna');
        ?>
<div class="card">
<div class="header">
<h4 class="text-center">Data Rapot Kelas <?= $kelas_ini[0] ?></h4>
</div>
<div class="body">
<table class="table table-bordered table-striped" border="1">
            <thead>
                <tr>
                    <th> No </th>
                    <th>Nama Santri</th>
                    <th>Kelas</th>
                    <th>Lihat</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($rapot as $pem) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <?php
                            $nama_lengkap = $this->db->query(" SELECT * FROM pendaftaran WHERE id_daftar = $pem->id_daftar")->row();
                            ?>
                        <td><?= $nama_lengkap->nama_lengkap ?></td>
                        <td><?= $pem->kelas ?></td>
                        <td>
                            <a href="<?= base_url('admin/rapot/lihat/'. $pem->id_santri) ?>" class="btn btn-info waves-effect" type="button">
                                <i class="material-icons">remove_red_eye</i>
                                <span>Lihat</span>
                            </a>
                        </td>
                     
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
</div>
</div>


    </div>


</section>