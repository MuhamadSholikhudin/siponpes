    <section class="content">
        <div class="container-fluid">



            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EDIT PELAJARAN
                        </h2>

                    </div>
                    <div class="body">
                        <form action="<?= base_url('admin/pelajaran/edit_aksi') ?>" method="POST" enctype="multipart/form-data">

                            <!-- <label for="nama">Nama</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" id="nama" type="text" name="nama" value="<?= $pelajaran->nama ?>">
                                    </div>
                                </div> -->
                            <label for="kode_pelajaran">kode_pelajaran</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="id" type="hidden" name="id_pelajaran" value="<?= $pelajaran->id_pelajaran ?>">
                                    <input class="form-control" id="username" type="text" name="kode_pelajaran" value="<?= $pelajaran->nama_pelajaran ?>">
                                </div>
                            </div>
                            <label for="nama_pelajaran">nama_pelajaran</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="nama_pelajaran" type="text" name="nama_pelajaran" value="<?= $pelajaran->nama_pelajaran ?>">
                                </div>
                            </div>

                            

                            <br>
                            <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>

                        </form>
                    </div>
                </div>
            </div>
    </section>