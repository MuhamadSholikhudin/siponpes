    <section class="content">
        <div class="container-fluid">


        
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <a href="<?= base_url('admin/jadwal') ?>" class="btn bg-blue-grey waves-effect"> 
            <i class="material-icons">reply</i>  
            <span>Kemballi</span>
        </a>
                <div class="card">
                    <div class="header">
                        <h2>
                            EDIT JADWAL
                        </h2>

                    </div>
                    <div class="body">
                        <form action="<?= base_url('admin/jadwal/edit_aksi') ?>" method="POST" enctype="multipart/form-data">

                            <label for="kode_jadwal">Kode jadwal </label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="kode_jadwal" id="kode_jadwal" class="form-control no-resize" value="<?= $jadwal->kode_jadwal ?>" required>
                                    <input type="hidden" name="id_jadwal" id="id_jadwal" class="form-control no-resize" value="<?= $jadwal->id_jadwal ?>" required>
                                </div>
                            </div>
                            <label for="periode_ajaran">Periode Ajaran</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="periode_ajaran" id="periode_ajaran" class="form-control no-resize" value="<?= $jadwal->periode_ajaran ?>" required>
                                </div>
                            </div>
                            <label for="id_pelajaran">Pelajaran</label>
                            <div class="form-group">
                                <select class="selectpicker form-line" name="id_pelajaran" id="id_pelajaran">
                                    <?php foreach ($pelajaran as $ust) : ?>
                                        <?php if ($ust->id_pelajaran == $jadwal->id_pelajaran) :?>
                                            <option value="<?= $ust->id_pelajaran ?>" selected> <?= $ust->kode_pelajaran. '/'. $ust->nama_pelajaran ?></option>
                                        <?php  else : ?>
                                            <option value="<?= $ust->id_pelajaran ?>"> <?= $ust->kode_pelajaran . '/' . $ust->nama_pelajaran ?></option>
                                        <?php endif ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <label for="id_kelas">Kelas</label>
                            <div class="form-group">
                                <select class="selectpicker form-line" name="id_kelas" id="id_kelas">
                                    <?php foreach ($kelas as $ust) : ?>
                                        <?php if ($ust->id_kelas == $jadwal->id_kelas) { ?>

                                            <option value="<?= $ust->id_kelas ?>" selected><?= $ust->kelas ?></option>
                                        <?php } else { ?>

                                            <option value="<?= $ust->id_kelas ?>"><?= $ust->kelas ?></option>
                                        <?php } ?>

                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <label for="hari">hari</label>
                            <div class="form-group">
                                <select class="selectpicker form-line" name="hari" id="hari">
                                    <?php foreach ($hari as $ust) : ?>
                                        <?php if ($ust == $jadwal->hari) { ?>

                                            <option value="<?= $ust ?>" selected><?= $ust ?></option>
                                        <?php } else { ?>
                                            <option value="<?= $ust ?>"><?= $ust ?></option>

                                        <?php } ?>

                                    <?php endforeach; ?>
                                </select>
                            </div>


                            <label for="waktu">waktu</label>
                            <div class="form-group">
                                <select class="selectpicker form-line" name="waktu" id="waktu">
                                    <?php foreach ($waktu as $ust) : ?>
                                        <?php if ($ust === $jadwal->waktu) { ?>

                                            <option value="<?= $ust ?>" selected><?= $ust ?></option>
                                        <?php } else { ?>
                                            <option value="<?= $ust ?>"><?= $ust ?></option>

                                        <?php } ?>

                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <label for="status">status</label>
                            <div class="form-group">
                                <select class="selectpicker form-line" name="status" id="status">
                                    <?php foreach ($status as $sta) : ?>
                                        <?php if ($sta == $jadwal->status) { ?>
                                            <option value="<?= $sta  ?>" selected>          
                                            <?php 
                                                if($sta  == 1){
                                                echo "Aktif";
                                                }else{
                                                    echo "Tidak Aktif";
                                                }
                                            ?>
                                            </option>
                                        <?php } else { ?>
                                            <option value="<?= $sta  ?>">
                                            <?php 
                                                if($sta  == 1){
                                                echo "Aktif";
                                                }else{
                                                    echo "Tidak Aktif";
                                                }
                                            ?>
                                            </option>
                                        <?php } ?>
                                    <?php endforeach; ?>

                                </select>
                            </div>
                            <br>
                            <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>

                        </form>
                    </div>
                </div>
            </div>
    </section>