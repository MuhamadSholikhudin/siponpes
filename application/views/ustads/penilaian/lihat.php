<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>PENILAIAN SANTRI</h2>
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
                    <th>Penilaian</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Edit</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($penilaian as $pem) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td>
                            <?php
                            $cari_santri = $this->db->query("SELECT * FROM santri JOIN pendaftaran ON santri.id_daftar = pendaftaran.id_daftar WHERE santri.id_santri = $pem->id_santri ")->row();
                            ?>
                            <?= $cari_santri->nama_lengkap ?>
                        </td>
                        <td>
                            <?php
                            $cari_perkembangan = $this->db->query("SELECT * FROM perkembangan_pembelajaran WHERE id_santri = $pem->id_santri AND id_jadwal = $pem->id_jadwal ")->row();
                            ?>
                            <?= $cari_perkembangan->keterangan ?>
                        </td>
                        <td><?= $pem->nilai ?></td>
                        <td>
                            <?= longdate_indo($pem->tanggal) ?>
                        </td>
                        <td>
                            <?= $pem->waktu ?>
                        </td>
                        <td>
                            <a href="<?= base_url('ustads/penilaian/ubah/' . $pem->id_nilai) ?>" class="btn btn-warning waves-effect" type="button">

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