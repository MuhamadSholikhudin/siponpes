    <section class="content">
        <div class="container-fluid">



            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <a href="<?= base_url('admin/pembayaran') ?>" class="btn bg-blue-grey waves-effect"> 
            <i class="material-icons">reply</i>  
            <span>Kemballi</span>
        </a>
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

                                    <?php
                                    $nama_lengkap = $this->db->query(" SELECT * FROM daftar WHERE id_daftar = $pembayaran->id_daftar")->row();
                                    ?>

                                    <input class="form-control" id="id_daftar" type="text" name="nama" value="<?= $nama_lengkap->nama_lengkap ?>" placeholder="Id pendaftar" disabled>
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

                            <?php
                            $status = ['Lunas', 'Belum Lunas'];
                            ?>
                            <label for="status">Status</label>
                            <div class="form-group">
                                <select class="selectpicker form-line" name="status" id="status">
                                    <?php foreach ($status as $sta) : ?>
                                        <?php if ($sta == $pembayaran->status) : ?>
                                            <option value="<?= $sta; ?>" selected>
                                                <?= $sta; ?>
                                            </option>
                                        <?php else : ?>
                                            <option value="<?= $sta; ?>">
                                                <?= $sta; ?>
                                            </option>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <br>
                            <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>

                        </form>
                    </div>
                </div>
            </div>
    </section>