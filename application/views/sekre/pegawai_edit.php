<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

        <div class="card">
            <div class="header">
                <h2>
                    UBAH JADWAL PEGAWAI
                </h2>

            </div>
            <div class="body">
                <form action="<?= base_url('sekre/jadwal/tambah_aksi') ?>" method="POST" enctype="multipart/form-data">

                    <label for="tgl_berlaku">Berlaku sampai tanggal</label>
                    <?php foreach ($jadwal as $peg) : ?>
                        <div class="form-group">
                            <div class="form-line">
                                <input class="form-control" id="ujadwal" type="date" name="jadwal" value="<?= $peg->jadwal ?>">
                            </div>
                        </div>

                        <input class="form-control" id="uid_jadwal" type="text" name="id" value="<?= $peg->id_jadwal ?>">
                    <?php endforeach; ?>

                    <br>
                    <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
</section>