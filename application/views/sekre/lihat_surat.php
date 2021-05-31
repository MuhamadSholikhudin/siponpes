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

                <div class="col-sm-2 lead">Dasar &nbsp;&nbsp;&nbsp;&nbsp; : 1.</div>
                <div class="col-sm-10 lead"> Dokumen Pelaksanaan Perubahan Anggaran No. 2.01.2.01.01.18.06 tanggal 28 Januari 2019.</div>
                <div class="col-sm-2 lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.</div>
                <div class="col-sm-10 lead"> Surat Perintah Kerja Kepala Dinas Tenaga Kerja, Perindustrian, Koperasi, Usaha Kecil dan Menengah Kabupaten Kudus, tanggal 1 Februari 2019.</div>

                <br>
                <br>
                <br>
                <h3 class="text-center">MEMERINTAHKAN </h3>
                <div class="col-sm-1 lead">Kepada :</div>
                <div class="col-sm-11 lead">
                    <?php $no = 1; ?>
                    <?php foreach ($datatugas as $dsur) : ?>
                        <div class="col-sm-4 lead"> <?= $no++; ?>. &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; NAMA</div>
                        <div class="col-sm-8 lead">: <?= $dsur->nama ?> </div>
                        <div class="col-sm-4 lead"> &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Jabatan</div>
                        <div class="col-sm-8 lead">: <?= $dsur->jabatan ?></div>
                        <div class="col-sm-4 lead">&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Unit Kerja</div>
                        <div class="col-sm-8 lead">: Dinas Naker Perinkop UKM Kab Kudus</div>
                    <?php endforeach; ?>
                </div>

                <div class="col-sm-2 lead">Untuk &nbsp;&nbsp;&nbsp;&nbsp; : </div>
                <div class="col-sm-10 lead"> Melaksanakan tugas sebagai pendamping Alumni UPTD BLK dan Kelompok Wirausaha baru di wilayah Kecamatan <strong><?= $sur->penempatan ?></strong>.</div>

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

                        </div>
                    </div>

                    <div class="col-sm-4">
                        <?php foreach ($kadin as $kad) : ?>
                            <div>
                                <h4 class="text-center">Kudus, <?= date('d-m-Y') ?> </h4>
                                <h4 class="text-center">Kepala Dinas BLK Kudus</h4>
                            </div>
                            <div class="mb-3">
                                <br>
                                <h4 class="text-center">Telah Disetujui</h4><br>
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