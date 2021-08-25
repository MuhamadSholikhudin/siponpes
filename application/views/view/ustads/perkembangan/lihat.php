<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>PERKEMBANGAN SANTRI</h2>
        </div>
        <?php
        $id_pengguna = $this->session->userdata('id_pengguna');
        ?>

        <table class="table table-bordered table-striped" border="1">
            <thead>
                <tr>
                    <th> No </th>
                    <th>Nama Santri</th>
                    <th>Materi Belajar</th>
                    <th>Absensi</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($perkembangan as $pem) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td>
                            <?php
                            $cari_santri = $this->db->query("SELECT * FROM santri JOIN pendaftaran ON santri.id_daftar = pendaftaran.id_daftar WHERE santri.id_santri = $pem->id_santri ")->row();
                            ?>
                            <?= $cari_santri->nama_lengkap ?>
                        </td>
                        <td><?= $pem->keterangan ?></td>
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

                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

    </div>


</section>