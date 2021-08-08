    <section class="content">
        <div class="container-fluid">



            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <a href="<?= base_url('admin/kelas') ?>" class="btn bg-blue-grey waves-effect"> 
            <i class="material-icons">reply</i>  
            <span>Kemballi</span>
        </a>
                <div class="card">
                    <div class="header">
                        <h2>
                            EDIT KELAS
                        </h2>

                    </div>
                    <div class="body">
                        <form action="<?= base_url('admin/kelas/edit_aksi') ?>" method="POST" enctype="multipart/form-data">

                            <label for="id_pendaftar">Kelas</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="id" type="hidden" name="id_kelas" value="<?= $kelas->id_kelas ?>">
                                    <input class="form-control" id="id_pendaftar" type="text" name="kelas" value="<?= $kelas->kelas ?>" placeholder="Isi Kelas">
                                </div>
                            </div>


                            <br>
                            <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>

                        </form>
                    </div>
                </div>
            </div>
    </section>