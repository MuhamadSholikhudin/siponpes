    <section class="content">
        <div class="container-fluid">
            


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EDIT PENGGUNA
                        </h2>

                    </div>
                    <div class="body">
                        <form action="<?= base_url('sekre/pengguna/update') ?>" method="POST" enctype="multipart/form-data">
                            <?php foreach ($user as $us) :
                            ?>
                                <label for="nama">Nama</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" id="nama" type="text" name="nama" value="<?= $us->nama ?>">
                                        <input class="form-control" id="id_user" type="hidden" name="id_user" value="<?= $us->id_user ?>">
                                    </div>
                                </div>
                                <label for="username">Username</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" id="username" type="hidden" name="usernamelama" value="<?= $us->username ?>">
                                        <input class="form-control" id="username" type="text" name="username" value="<?= $us->username ?>">
                                    </div>
                                </div>
                                <label for="password">Pasword</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" id="password" type="password" name="password" value="<?= $us->password ?>">
                                    </div>
                                </div>
                                <label for="level">Hak Akses</label>
                                <div class="form-group">
                                    <select class="selectpicker form-line" name="level" id="level">
                                        <?php foreach ($level as $lev) : ?>
                                            <?php if ($lev == $us->jabatan) : ?>
                                                <option value="<?= $lev; ?>" selected>
                                                    <?php if ($lev == 1) {
                                                        echo 'Sekretariat Pegawai Disnaker';
                                                    } elseif ($lev == 2) {
                                                        echo 'Pegawai Disnaker';
                                                    } elseif ($lev == 3) {
                                                        echo 'Kepala Disnaker';
                                                    } ?>
                                                </option>
                                            <?php else : ?>
                                                <option value="<?= $lev; ?>">
                                                    <?php if ($lev == 1) {
                                                        echo 'Sekretariat Pegawai Disnaker';
                                                    } elseif ($lev == 2) {
                                                        echo 'Pegawai Disnaker';
                                                    } elseif ($lev == 3) {
                                                        echo 'Kepala Disnaker';
                                                    } ?> </option>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <label for="jabatan">Jabatan</label>
                                <div class="form-group">
                                    <select class="selectpicker form-line" name="jabatan" id="jabatan">
                                        <?php foreach ($jabatan as $jab) : ?>
                                            <?php if ($jab == $us->jabatan) : ?>
                                                <option value="<?= $jab; ?>" selected>
                                                    <?= $jab; ?>
                                                </option>
                                            <?php else : ?>
                                                <option value="<?= $jab; ?>">
                                                    <?= $jab; ?>
                                                </option>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <label for="penempatan">penempatan</label>
                                <div class="form-group">
                                    <select class="selectpicker form-line" name="penempatan" id="penempatan">
                                        <?php foreach ($penempatan as $pan) : ?>
                                            <?php if ($pan == $us->penempatan) : ?>
                                                <option value="<?= $pan; ?>" selected>
                                                    <?= $pan; ?>
                                                </option>
                                            <?php else : ?>
                                                <option value="<?= $pan; ?>">
                                                    <?= $pan; ?>
                                                </option>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <br>
                                <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>
                            <?php endforeach;
                            ?>
                        </form>
                    </div>
                </div>
            </div>
    </section>