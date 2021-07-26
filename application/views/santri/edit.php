    <section class="content">
        <div class="container-fluid">



            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EDIT SANTRI PONDOK
                        </h2>

                       
                               
                               
                               
                            </div>

                    </div>
                    <div class="body">

                        <form action="<?= base_url('admin/santri/edit_aksi') ?>" method="POST" enctype="multipart/form-data">
                            <?php
                            $nama_lengkap = $this->db->query(" SELECT * FROM daftar WHERE id_daftar = $santri->id_daftar")->row();
                            ?>
                            <label for="nama">Nama</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="nama" type="text" name="nama" value="<?= $nama_lengkap->nama_lengkap ?>" disabled>
                                </div>
                            </div>
                            <label for="username">Username</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="id" type="hidden" name="id_santri" value="<?= $santri->id_santri ?>">
                                    <input class="form-control" id="username" type="text" name="username" value="<?= $santri->username ?>">
                                </div>
                            </div>
                            <label for="password">Username</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="password" type="text" name="password" value="<?= $santri->password ?>">
                                </div>
                            </div>

                            <label for="hakakses">Hakakses </label>
                            <div class="form-group">
                                <select class="selectpicker form-line" name="hakakses" id="hakakses">
                                    <?php foreach ($hakakses as $hak) : ?>
                                        <?php if ($hak == $santri->hakakses) : ?>
                                            <option value="<?= $hak; ?>" selected>
                                                <?= $hak; ?>
                                            </option>
                                        <?php else : ?>
                                            <option value="<?= $hak; ?>">
                                                <?= $hak; ?>
                                            </option>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <label for="status">Status</label>
                            <div class="form-group">
                                <select class="selectpicker form-line" name="status" id="status">
                                    <?php foreach ($status as $sta) : ?>
                                        <?php if ($sta == $santri->status) : ?>
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
                            <label for="kelas">Kelas</label>
                            <div class="form-group">
                                <select class="selectpicker form-line" name="kelas" id="kelas">
                                    <?php foreach ($kelas as $kel) : ?>
                                        <?php if ($kel == $santri->kelas) : ?>
                                            <option value="<?= $kel; ?>" selected>
                                                <?= $kel; ?>
                                            </option>
                                        <?php else : ?>
                                            <option value="<?= $kel; ?>">
                                                <?= $kel; ?>
                                            </option>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <label for="periodetahun">Periode Tahun</label>
                            <div class="form-group">
                                <select class="selectpicker form-line" name="periodetahun" id="periodetahun">
                                    <?php foreach ($periodetahun as $sta) : ?>
                                        <?php if ($sta == $santri->periodetahun) : ?>
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