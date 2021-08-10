<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>ABSENSI SANTRI</h2>
        </div>
        <?php
        $id_pengguna = $this->session->userdata('id_pengguna');
        ?>

        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" border="1">
            <thead>
                <tr>
                    <th> No </th>
                    <th>Nama Santri</th>
                    <th>Materi Belajar</th>
                    <th>Absensi</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Edit</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($absensi as $pem) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td>
                            <?php
                            $cari_santri = $this->db->query("SELECT * FROM santri JOIN daftar ON santri.id_daftar = daftar.id_daftar WHERE santri.id_santri = $pem->id_santri ")->row();
                            ?>
                            <?= $cari_santri->nama_lengkap ?>
                        </td>
                        <td><?= $pem->hari ?></td>
                        <td>
                            <?php
                            $cari_absensi = $this->db->query("SELECT * FROM absensi WHERE id_santri = $pem->id_santri AND id_jadwal = $pem->id_jadwal ")->row();
                            ?>
                            <?= $cari_absensi->absensi ?>
                        </td>
                        <td>
                            <?= longdate_indo($pem->tanggal) ?>
                        </td>
                        <td>
                            <?= $pem->waktu ?>
                        </td>
                        <td>
                            <a href="<?= base_url('ustads/absensi/ubah/' . $pem->id_absensi) ?>" class="btn btn-warning waves-effect" type="button">
                                <i class="material-icons">edit</i>
                                <span>Edit</span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

    </div>


</section>