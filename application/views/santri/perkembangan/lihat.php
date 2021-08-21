<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>PERKEMBANGAN SANTRI</h2>
        </div>
        <?php
        $id_pengguna = $this->session->userdata('id_pengguna');
        ?>

        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" border="1">
            <thead>
                <tr>
                    <th> No </th>
                    <th>Nama Santri</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Absensi</th>
                    <th>Materi Belajar</th>
                    <th>Perkembangan</th>
                    <th>Nilai</th>
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
                        <td>
                            <?= longdate_indo($pem->tanggal) ?>
                        </td>
                        <td>
                            <?= $pem->waktu ?>
                        </td>
                        <td>
                            <?php
                            $cari_absensi = $this->db->query("SELECT * FROM absensi WHERE id_santri = $pem->id_santri AND id_jadwal = $pem->id_jadwal AND tanggal = '$pem->tanggal'")->row();
                            ?>
                            <?= $cari_absensi->status ?>
                        </td>
                        <td>
                            <?php
                            $cari_pembelajaran = $this->db->query("SELECT * FROM pembelajaran WHERE id_jadwal = $pem->id_jadwal AND tanggal = '$pem->tanggal' ")->row();
                            ?>
                            <?= $cari_pembelajaran->materi_belajar ?>
                        </td>
                        <td>
                            <?= $pem->keterangan ?>
                        </td>
                        <td>
                            <?php
                            $cari_nilai = $this->db->query("SELECT * FROM nilai WHERE id_santri = $pem->id_santri AND id_jadwal = $pem->id_jadwal AND tanggal = '$pem->tanggal' ");

                            if ($cari_nilai->num_rows() > 0) {
                                $ada_nilai = $cari_nilai->row();
                                echo $ada_nilai->nilai;
                            } else {
                                echo 'Tidak Ada Penilaian';
                            }
                            ?>
                        </td>

                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

    </div>


</section>