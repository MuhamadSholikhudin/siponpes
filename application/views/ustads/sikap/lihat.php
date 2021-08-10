<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Sikap Santri Pada Pelajaran <?= $nama_pelajaran[0] ?></h2>
        </div>
        <?php
        $id_pengguna = $this->session->userdata('id_pengguna');
        ?>

        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" border="1">
            <thead>
                <tr>
                    <th> No </th>
                    <th>Nama Santri</th>
                    <th>Ketaatan</th>
                    <th>Ketakdiman</th>
                    <th>kedisiplinan</th>
                    <th>Kerapian</th>
                    <th>kesemangatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>


                <?php
                $cari_santri = $this->db->query("SELECT * FROM santri WHERE kelas = $id_kelas[0] ");
                $santri = $cari_santri->result();
                ?>
                <?php $no = 1; ?>
                <?php foreach ($santri as $pem) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td>
                            <?php
                            $cari_daftar = $this->db->query("SELECT * FROM daftar  WHERE id_daftar = $pem->id_daftar ")->row();
                            ?>
                            <?= $cari_daftar->nama_lengkap ?>
                        </td>
                        <?php
                        $cari_sikap = $this->db->query("SELECT * FROM sikap_dan_prilaku WHERE id_santri = $pem->id_santri AND id_kelas = $id_kelas[0] AND id_pelajaran = $id_pelajaran[0] ");
                        if ($cari_sikap->num_rows() > 0) {
                            $ada_sikap = $cari_sikap->row();
                            $id_sikap_dan_prilaku = $ada_sikap->id_sikap_dan_prilaku;
                            $ketaatan = $ada_sikap->ketaatan;
                            $ketakdiman = $ada_sikap->ketakdiman;
                            $kedisiplinan = $ada_sikap->kedisiplinan;
                            $kerapian = $ada_sikap->kerapian;
                            $kesemangatan = $ada_sikap->kesemangatan;
                            $partisipasi = $ada_sikap->partisipasi;
                            $etika = $ada_sikap->etika;
                            $kerjasama = $ada_sikap->kerjasama;
                        } else {
                            $ketaatan = 0;
                            $ketakdiman = 0;
                            $kedisiplinan = 0;
                            $kerapian = 0;
                            $kesemangatan = 0;
                            $partisipasi = 0;
                            $etika = 0;
                            $kerjasama = 0;
                        }
                        ?>
                        <td><?= $ketaatan ?></td>
                        <td>

                            <?= $ketakdiman ?>

                        </td>
                        <td>
                            <?= $kedisiplinan  ?>
                        </td>
                        <td>
                            <?= $kerapian  ?>
                        </td>
                        <td>
                            <?= $kesemangatan  ?>
                        </td>
                        <td>
                            <?php
                            if ($cari_sikap->num_rows() > 0) {
                            ?>
                                <a href="<?= base_url('ustads/sikap/ubah/'. $id_sikap_dan_prilaku.'/'. $id_kelas[0]) ?>" class="btn btn-warning waves-effect" type="button">
                                    <i class="material-icons">edit</i>
                                    <span>Edit</span>
                                </a>
                            <?php
                            } else {
                            ?>
                                <a href="<?= base_url('ustads/sikap/tambah/' . $id_pelajaran[0] . '/' . $id_kelas[0] . '/' . $pem->id_santri) ?>" class="btn btn-primary waves-effect" type="button">
                                    <i class="material-icons">add</i>
                                    <span>Isi</span>
                                </a>
                            <?php
                            }
                            ?>

                        </td>

                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

    </div>


</section>