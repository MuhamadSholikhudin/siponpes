<section class="content">
    <div class="container-fluid">

        <div class="card p-4">
            <div class="header">
                <div class="row">
                    <div class="col-md-2">
                        <img src="<?= base_url('assets/img/logo_kudus.png') ?>" alt="" width="100%" height="180px">
                    </div>
                    <div class="col-md-10">
                        <h3 class="text-center">PEMERINTAH KABUPATEN KUDUS</h3>
                        <h3 class="text-center">DINAS TENAGA KERJA, PERINDUSTRIAN,KOPERASI,</h3>
                        <h3 class="text-center">USAHA KECIL DAN MENENGAH</h3>
                        <h5 class="text-center">Jln. Conge Ngembalrejo No.99 Telp. .(0291) 438691, 431470, Fax (0291) 438691</h5>
                        <h3 class="text-center">KUDUS 59322</h3>
                    </div>
                </div>

            </div>
            <div class="body">

                <h3 class="text-center"><u>SURAT PERINTAH TUGAS</u> </h3>
                <?php foreach ($surat as $sur) : ?>
                    <h4 class="text-center">NOMOR : 090 / 300.<?= $sur->no_surat ?> / 16.06 / <?= date('Y') ?></h4>
                <?php endforeach; ?>
                <br>
                <br>
                <br>
                <br>
                <form action="<?= base_url('sekre/surat/edit_surat_aksi') ?>" method="post" enctype="multipart/form-data">
                    <?php foreach ($surat as $sur) : ?>
                        <div class="col-sm-2 lead">Dasar &nbsp;&nbsp;&nbsp;&nbsp; : 1.</div>
                        <div class="col-sm-10 ">
                            <p class=" lead">
                                <textarea name="isi_surat" id="isi_surat" cols="65"><?= $sur->isi_surat ?></textarea>
                            </p>
                        </div>
                        <div class="col-sm-2 lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.</div>
                        <div class="col-sm-10 lead"> <textarea name="keterangan" id="keterangan" cols="65"><?= $sur->keterangan ?></textarea></div>
                        <br>
                        <br>
                        <br>
                        <h3 class="text-center">MEMERINTAHKAN </h3>
                        <div class="col-sm-1 lead">Kepada :</div>
                        <div class="col-sm-11 lead">
                            <?php $no = 1; ?>
                            <?php foreach ($datatugas as $dsur) : ?>
                                <div class="col-sm-4 lead"> <?= $no++; ?>. &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; NAMA</div>
                                <div class="col-sm-8 lead">: <?= $dsur->nama ?> <a href="<?= base_url('sekre/surat/hapus_pegawai_aksi/' . $dsur->no_surat . '/' . $dsur->nip) ?>"><i class="material-icons">delete</i></a></div>
                                <div class="col-sm-4 lead"> &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Jabatan</div>
                                <div class="col-sm-8 lead">: <?= $dsur->jabatan ?></div>
                                <div class="col-sm-4 lead">&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Unit Kerja</div>
                                <div class="col-sm-8 lead">: Dinas Naker Perinkop UKM Kab Kudus</div>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-sm-2 lead">Untuk &nbsp;&nbsp;&nbsp;&nbsp; : </div>
                        <div class="col-sm-10 lead"> <input type="hidden" name="no_surat" value="<?= $sur->no_surat ?>">
                            Melaksanakan tugas sebagai pendamping Alumni UPTD BLK dan Kelompok Wirausaha baru di wilayah Kecamatan <strong><input type="text" name="penempatan" value="<?= $sur->penempatan ?>"></strong>.
                        </div>


                    <?php endforeach; ?>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="content-bottom">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <a href="<?= base_url('sekre/surat') ?>" class="btn btn-success">Kembali </a>
                                <button type="submit" class="btn btn-primary">Edit Surat </button>
                                <button class="btn btn-default waves-effect m-r-20" type="button" data-target="#defaultModal" data-toggle="modal"> TAMBAH PEGAWAI BERTUGAS</button>


                            </div>
                        </div>
                </form>
                <div class="col-sm-4">
                    <?php foreach ($kadin as $kad) : ?>
                        <div>
                            <h4 class="text-center">Kudus, <?= date('d-m-Y') ?> </h4>
                            <h4 class="text-center">Kepala Dinas BLK Kudus</h4>
                        </div>
                        <div class="mb-3">
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div>
                            <h4 class="text-center"><u><?= $kad->nama ?></u> </h4>
                            <h4 class="text-center">NIP :<?= $kad->username ?></h4>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<div tabindex="-1" class="modal fade" id="defaultModal" role="dialog" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TAMBAH PEGAWAI BERTUGAS
                        </h2>

                    </div>
                    <div class="body">
                        <form action="<?= base_url('sekre/surat/tambah_pegawai_aksi/') ?>" method="POST" enctype="multipart/form-data">
                            <label for="nip">nip</label>
                            <div class="form-group">
                                <select class="selectpicker form-line" name="nip" id="nipku">
                                    <?php
                                    foreach ($user as $sur) : ?>
                                        <option class="d-none" value="<?= $sur->username ?>"> <?= $sur->username ?> / <?= $sur->nama ?> / <?= $sur->penempatan ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <label for="nama">Nama</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="namapeg" type="text" name="nama">
                                </div>
                            </div>
                            <?php foreach ($surat as $sur) : ?>
                                <input class="form-control" id="no_surat" type="hidden" name="no_surat" value="<?= $sur->no_surat ?>">
                            <?php endforeach; ?>
                            <!-- <input type="text" id="jb">
                            <input type="text" id="pk"> -->
                            <label for="jb">Jabtan</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="jb" type="text" name="jabatan">
                                </div>
                            </div>
                            <label for="pk">penempatan</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="pk" type="text" name="penempatan">
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button class="btn btn-link waves-effect" type="button">SAVE CHANGES</button> -->
                <button class="btn btn-link waves-effect" type="button" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>


</div>