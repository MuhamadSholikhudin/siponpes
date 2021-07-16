    <section class="content">
        <div class="container-fluid">



            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EDIT PEMBAYARAN
                        </h2>

                    </div>
                    <div class="body">
                        <form action="<?= base_url('admin/pembayaran/edit_aksi') ?>" method="POST" enctype="multipart/form-data">

                            <label for="id_pendaftar">Id Pendafatar</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="id" type="hidden" name="id_pembayaran" value="<?= $pembayaran->id_pembayaran ?>">
                                    <input class="form-control" id="id_pendaftar" type="text" name="id_pendaftar" value="<?= $pembayaran->id_pendaftar ?>" placeholder="Id pendaftar">
                                </div>
                            </div>


                            <label for="jumlah">Jumlah</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="jumlah" type="text" name="jumlah" value="<?= $pembayaran->jumlah ?>" placeholder="Jumlah yang di bayarkan">
                                </div>
                            </div>
                            <label for="tanggal">Tanggal</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="tanggal" type="date" name="tanggal" value="<?= $pembayaran->tanggal ?>" placeholder="Enter your password">
                                </div>
                            </div>
                            <label for="status">Status</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="status" type="text" name="status" value="<?= $pembayaran->status ?>" placeholder="Jumlah yang di bayarkan">
                                </div>
                            </div>

                            <br>
                            <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>

                        </form>
                    </div>
                </div>
            </div>
    </section>