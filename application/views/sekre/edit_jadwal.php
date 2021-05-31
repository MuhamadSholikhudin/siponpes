<section class="content">
    <div class="container-fluid">
        

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 id="iki">
                            UBAH JADWAL PEGAWAI
                        </h2>

                    </div>
                    <div class="body">
                        <form action="<?= base_url('sekre/jadwal/edit_jadwal_aksi') ?>" method="POST" enctype="multipart/form-data">

                            <label for="tgl_berlaku">Berlaku sampai tanggal</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <?php foreach ($jadwal as $ja) : ?>
                                        <input class="form-control" id="ujadwal" type="date" name="jadwal" value="<?= $ja->jadwal ?>">
                                        <input class="form-control" id="uid_jadwal" type="hidden" name="id_jadwal" value="<?= $ja->id_jadwal ?>">
                                        <input class="form-control" id="id" type="hidden" name="id" value="<?= $ja->id ?>">
                                    <?php endforeach; ?>
                                </div>
                            </div>


                            <br>
                            <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>