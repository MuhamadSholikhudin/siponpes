<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

        <label for="penilian">Penilian</label>
        <div class="form-group">
            <select class="selectpicker form-line" name="penilian" id="penilian">
                <option value="tidak">Tidak Penilaian</option>
                <option value="penilaian">penilaian</option>
            </select>
        </div>


        <?php
        //Coding pembelajaran
        echo $tanggal = hari(date('Y-m-d'));
        $hari_ini = $tanggal;

        echo $tanggal = date('Y-m-d');
        $tanggal_ini = date('Y-m-d');

$cari_nilai = $this->db->query(" SELECT * FROM nilai WHERE tanggal = '$tanggal_ini ' AND id_jadwal  = $jadwal->id_jadwal");
echo $cari_nilai->num_rows();
if ($cari_nilai->num_rows() > 0) {
    echo " <br><input type='number' name='pil' value='2' > <br>";
} elseif($cari_nilai->num_rows() < 1) {
    echo " <br><input type='number' name='pil' value='1' > <br>";
}








        ?>
        <?php
        // cari pembelajaran hari ini
        $cek_pembelajaran = $this->db->query(" SELECT * FROM pembelajaran WHERE tanggal = '$tanggal_ini ' AND  id_jadwal = $jadwal->id_jadwal");
        if ($cek_pembelajaran->num_rows() > 0) {
            echo 'Halaman edit'; ?>
            <form action="<?= base_url('ustads/coba/aksi_edit/') ?>" enctype="multipart/form-data" method="POST">
                <?php

                // Tampilkan santri berdasarka kelas
                $tampil_siswa = $this->db->query(" SELECT * FROM santri WHERE kelas = $jadwal->id_kelas")->result();
                $no = 1;
                ?>
                <input class="jadwal" type="text" width="100" name="jadwal" value="<?= $jadwal->id_jadwal ?>"> <br>
                <input class="id_pelajaran" type="text" width="100" name="id_pelajaran" value="<?= $jadwal->id_pelajaran ?>"> <br>

                Nama : <?= $this->session->userdata('nama') ?> <br>
                Pelajaran : <?= $pelajaran->nama_pelajaran ?> <br>
                Hari : <?= $jadwal->hari ?> <br>
                Waktu : <?= $jadwal->waktu ?> <br>
                Jenis Materi : <?= $pelajaran->jenis ?> <br>
                id Kelas : <?= $jadwal->id_kelas ?> <br>
                <?php
                $tampil_pembelajaran = $this->db->query(" SELECT * FROM pembelajaran WHERE tanggal = '$tanggal_ini ' AND id_jadwal = $jadwal->id_jadwal")->row();
                ?>

                Materi Pembelajaran : <input type="text" name="materi_belajar" value="<?= $tampil_pembelajaran->materi_belajar ?>" id="pembelajaran"> <br>
                <input type="text" name="id_pembelajaran" value="<?= $tampil_pembelajaran->id_pembelajaran ?>" id="id_pembelajaran"> <br>
                <p></p>

                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr class="tr_th">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Absen</th>
                            <th>Keterangan</th>
                            <?php
                                if ($cari_nilai->num_rows() > 0) {
                                    echo "<th>Nilai</th>";
                                } else {

                                }
                            ?>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($tampil_siswa as $ts) : ?>
                            <tr class="tr_td">
                                <td><?= $no++ ?></td>
                                <td>
                                    <?= $ts->username ?>
                                    <input type="text" width="100" name="id_santri[]" value="<?= $ts->id_santri ?>">
                                    <input class="id_jadwal" type="text" width="100" name="id_jadwal[]" value="<?= $jadwal->id_jadwal ?>">

                                </td>
                                <td>
                                    <?php
                                    $tampil_absensi = $this->db->query(" SELECT * FROM absensi WHERE id_santri = $ts->id_santri AND tanggal = '$tanggal' AND id_jadwal = $jadwal->id_jadwal")->row();
                                    ?>
                                    <input class="id_absensi" type="text" width="100" name="id_absensi[]" value="<?= $tampil_absensi->id_absensi ?>">
                                    <select class="selectpicker form-line" name="absen[]" id="absen[]">

                                        <?php
                                        foreach ($absen as $sta) : ?>
                                            <?php if ($sta == $tampil_absensi->status) : ?>
                                                <option value="<?= $sta; ?>" selected>
                                                    <?= $sta; ?>
                                                </option>
                                            <?php else : ?>
                                                <option value="<?= $sta; ?>">
                                                    <?= $sta; ?>
                                                </option>
                                            <?php endif ?>
                                        <?php endforeach;
                                        ?>

                                    </select>
                                </td>

                                <?php
                                $tampil_perkembangan = $this->db->query(" SELECT * FROM perkembangan_pembelajaran WHERE id_santri = $ts->id_santri AND tanggal = '$tanggal_ini ' AND id_jadwal = $jadwal->id_jadwal")->row();
                                ?>
                                <td>
                                    <input class="id_perkembangan" type="text" width="100" name="id_perkembangan[]" id="" value="<?= $tampil_perkembangan->id_perkembangan ?>">
                                    <input class="perkembangan" type="text" width="100" name="perkembangan[]" id="" value="<?= $tampil_perkembangan->keterangan ?>">

                                </td>

                                <?php
                                    if ($cari_nilai->num_rows() > 0) {
                                        $tampil_nilai = $this->db->query(" SELECT * FROM nilai WHERE id_santri = $ts->id_santri AND tanggal = '$tanggal_ini ' AND id_jadwal  = $jadwal->id_jadwal")->row();
                                        echo "<td><input type='number' name='id_nilai[]' value='" . $tampil_nilai->id_nilai . "' ><input type='number' name='nilai[]' value='" . $tampil_nilai->nilai . "' ></td>";
                                    } else {

                                    }
                                ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <button type="submit">Simpan</button>
            </form>



        <?php } else {
            echo 'Halaman tambah'; ?>


            <form action="<?= base_url('ustads/coba/aksi_tambah') ?>" enctype="multipart/form-data" method="POST">
                <?php

                // Tampilkan santri berdasarka kelas
                $tampil_siswa = $this->db->query(" SELECT * FROM santri WHERE kelas = $jadwal->id_kelas")->result();
                $no = 1;
                ?>
                <input class="jadwal" type="text" width="100" name="jadwal" value="<?= $jadwal->id_jadwal ?>"> <br>
                <input class="id_pelajaran" type="text" width="100" name="id_pelajaran" value="<?= $jadwal->id_pelajaran ?>"> <br>

                Nama : <?= $this->session->userdata('nama') ?> <br>
                Pelajaran : <?= $pelajaran->nama_pelajaran ?> <br>
                Hari : <?= $jadwal->hari ?> <br>
                Waktu : <?= $jadwal->waktu ?> <br>
                Jenis Materi : <?= $pelajaran->jenis ?> <br>
                id Kelas : <?= $jadwal->id_kelas ?> <br>
                Materi Pembelajaran : <input type="text" name="materi_belajar" id="pembelajaran"> <br>
                <p></p>

                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr class="tr_th">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Absen</th>
                            <!-- <th>Angka</th> -->
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($tampil_siswa as $ts) : ?>
                            <tr class="tr_td">
                                <td><?= $no++ ?></td>
                                <td>
                                    <?= $ts->username ?>
                                    <input type="text" width="100" name="id_santri[]" value="<?= $ts->id_santri ?>">
                                    <input class="id_jadwal" type="text" width="100" name="id_jadwal[]" value="<?= $jadwal->id_jadwal ?>">
                                </td>
                                <td>
                                    <select class="selectpicker form-line" name="absen[]" id="absen[]">

                                        <?php
                                        foreach ($absen as $ab) : ?>
                                            <option value="<?= $ab ?>"><?= $ab ?></option>
                                        <?php endforeach;
                                        ?>

                                    </select>
                                </td>
                                <!-- <td><input type="number" name="nilai[]" id="" max="100" min="0" value="80"> </td> -->
                                <td><input class="perkembangan" type="text" width="100" name="perkembangan[]" id="" value="Mampu memahami pelajaran dengan baik"></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <button type="submit">Simpan</button>
            </form>
        <?php } ?>
    </div>
</section>