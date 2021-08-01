    <section class="content">
        <div class="container-fluid">



            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EDIT PENGGUNA PONDOK
                        </h2>

                    </div>
                    <div class="body">
                        <form action="<?= base_url('admin/pengguna/edit_aksi') ?>" method="POST" enctype="multipart/form-data">

                            <label for="nama">Nama</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="nama" type="text" name="nama" value="<?= $pengguna->nama ?>">
                                    <input class="form-control" id="id" type="hidden" name="id_pengguna" value="<?= $pengguna->id_pengguna ?>">
                                </div>
                            </div>
                            <label for="username">Username</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="username" type="text" name="username" value="<?= $pengguna->username ?>">
                                </div>
                            </div>
                            <label for="password">Username</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="password" type="text" name="password" value="<?= $pengguna->password ?>">
                                </div>
                            </div>

                            <label for="hakakses">Hakakses </label>
                            <div class="form-group">
                                <select class="selectpicker form-line" name="hakakses" id="hakakses">
                                    <?php foreach ($hakakses as $hak) : ?>
                                        <?php if ($hak == $pengguna->hakakses) : ?>
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
                                        <?php if ($sta == $pengguna->status) : ?>
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