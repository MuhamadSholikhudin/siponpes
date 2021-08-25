    <section class="content">
        <div class="container-fluid">



            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EDIT ABSENSI
                        </h2>

                    </div>
                    <div class="body">
                        <form action="<?= base_url('admin/absensi/edit_aksi') ?>" method="POST" enctype="multipart/form-data">
                            <label for="id_pelajaran">Id Pelajaran</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="id" type="hidden" name="id_absensi" value="<?= $absensi->id_absensi ?>">
                                    <input class="form-control" id="id_pelajaran" type="text" name="id_pelajaran" value="<?= $absensi->id_pelajaran ?>" placeholder="Isi nama Kelas">
                                </div>
                            </div>
                            <label for="id_santri">Id Santri</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="id_santri" type="text" name="id_santri" value="<?= $absensi->id_santri ?>" placeholder="Isi nama Kelas">
                                </div>
                            </div>
                            <label for="status">Status</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="status" type="text" name="status" value="<?= $absensi->status ?>" placeholder="Isi nama Kelas">
                                </div>
                            </div>
                            <label for="tanggal">Tangal</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="tanggal" type="date" name="tanggal" value="<?= $absensi->tanggal ?>" placeholder="Isi nama Kelas">
                                </div>
                            </div>


                            <br>
                            <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>

                        </form>
                    </div>
                </div>
            </div>
    </section>