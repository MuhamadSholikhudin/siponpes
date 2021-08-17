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
                            LIHAT PEMBAYARAN
                        </h2>

                    </div>
                    <div class="body">

                        <?php
                        $c_santri = $this->db->query("SELECT * FROM santri WHERE id_daftar = $pembayaran->id_daftar");
                        if ($c_santri->num_rows() < 1) { ?>
                            <form action="<?= base_url('admin/pembayaran/cek_aksi') ?>" method="POST" enctype="multipart/form-data">
                            <?php
                        } else { ?>
                            <?php }
                            ?>

                            <label for="id_pendaftar">Nama Pendaftar</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="id" type="hidden" name="id_pembayaran" value="<?= $pembayaran->id_pembayaran ?>">

                                    <?php
                                    $nama_lengkap = $this->db->query(" SELECT * FROM pendaftaran WHERE id_daftar = $pembayaran->id_daftar")->row();
                                    ?>

                                    <input class="form-control" id="" type="text" name="nama" value="<?= $nama_lengkap->nama_lengkap ?>" placeholder="Id pendaftar" disabled>
                                    <input class="form-control" id="id_daftar" type="hidden" name="id_daftar" value="<?= $pembayaran->id_daftar ?>" placeholder="Id pendaftar">
                                </div>
                            </div>


                            <label for="jumlah">Jumlah</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="jumlah" type="text" value="<?= $pembayaran->jumlah ?>" placeholder="Jumlah yang di bayarkan" disabled>
                                    <input class="form-control" id="jumlah" type="hidden" name="jumlah" value="<?= $pembayaran->jumlah ?>" placeholder="Jumlah yang di bayarkan">
                                </div>
                            </div>
                            <label for="tanggal">Tanggal</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="tanggal" type="date" value="<?= $pembayaran->tanggal ?>" disabled>
                                    <input class="form-control " id="tanggal" type="hidden" name="tanggal" value="<?= $pembayaran->tanggal ?>">
                                </div>
                            </div>

                            <?php
                            $status = ['LUNAS',  'TIDAK SESUAI'];
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
                            <?php
                            if ($c_santri->num_rows() < 1) { ?>
                                <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>
                            </form>
                            <?php
                            } else { ?>

<a href="<?= base_url('admin/pembayaran') ?>" class="btn btn-primary m-t-15 waves-effect" >Kembali</a>
                                <?php }
                                ?>


                    </div>
                </div>




                <div class="card">
                    <div class="header">
                        <h2>
                            FILE BUKTI PEMBAYARAN
                        </h2>

                    </div>
                    <div class="body">

                        <img src="<?= base_url('uploads/pembayaran/') . $pembayaran->bukti_pembayaran ?>" alt="">

                    </div>
                </div>
            </div>
    </section>