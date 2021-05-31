    <section class="content">
        <div class="container-fluid">



            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EDIT PEGAWAI BERTUGAS
                        </h2>

                    </div>
                    <div class="body">
                        <form action="<?= base_url('sekre/pegawai/update') ?>" method="POST" enctype="multipart/form-data">
                            <?php foreach ($user as $us) :
                            ?>
                                <label for="nama">Nama</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" id="nama" type="text" name="nama" value="<?= $us->nama ?>">
                                        <input class="form-control" id="id" type="hidden" name="id" value="<?= $us->id ?>">
                                    </div>
                                </div>
                                <label for="nip">NIP</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" id="nip" type="hidden" name="niplama" value="<?= $us->nip ?>">
                                        <input class="form-control" id="nip" type="text" name="nip" value="<?= $us->nip ?>">
                                    </div>
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