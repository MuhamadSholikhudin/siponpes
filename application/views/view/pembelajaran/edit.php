    <section class="content">
        <div class="container-fluid">



            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EDIT PEMBELAJARAN
                        </h2>

                    </div>
                    <div class="body">
                        <form action="<?= base_url('admin/pembelajaran/edit_aksi') ?>" method="POST" enctype="multipart/form-data">

                            <!-- <label for="nama">Nama</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" id="nama" type="text" name="nama" value="">
                                    </div>
                                </div> -->
                            <label for="id_pelajaran">id_pelajaran</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="id" type="hidden" name="id_pembelajaran" value="<?= $pembelajaran->id_pembelajaran ?>">
                                    <input class="form-control" id="username" type="text" name="id_pelajaran" value="<?= $pembelajaran->id_pelajaran ?>">
                                </div>
                            </div>
                            <label for="id_Santri">id_Santri</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="id_Santri" type="text" name="id_Santri" value="<?= $pembelajaran->id_santri ?>">
                                </div>
                            </div>
                            <label for="materi_belajar">materi_belajar</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="id" type="hidden" name="materi_belajar" value="<?= $pembelajaran->materi_belajar ?>">
                                    <input class="form-control" id="username" type="text" name="materi_belajar" value="<?= $pembelajaran->materi_belajar ?>">
                                </div>
                            </div>
                            <label for="tanggal">tanggal</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="tanggal" type="text" name="tanggal" value="<?= $pembelajaran->tanggal ?>">
                                </div>
                            </div>



                            <br>
                            <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>

                        </form>
                    </div>
                </div>
            </div>
    </section>