<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Tambah Calon Santri</h2>
        </div>



        <!-- main content -->
        
                <!-- register area -->
                <div class="card">

                    <div class="header">
                                        <!-- heading -->
                    <h3 class="text-center">Pendaftaran Santri Baru</h3>
                                        <p class="text-center">isilaha data-data dibawah ini dengan benar.</p>
                    </div>
                    <div class="body">



                 
                        <!-- paragraph -->
                        <form role="form" action="<?= base_url("admin/pendaftaran/aksi_tambah") ?>" id="register-form" enctype="multipart/form-data" method="POST">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="nama_lengkap">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="tempat_lahir">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required placeholder="Tempat Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required placeholder="DD-MM-YYY">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="umur">Umur</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="umur" name="umur" required placeholder="Umur">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label><br>
                                <div class="col-sm-10">
                                     <select class="form-control" name="jekel" id="" require>
                                        <?php  
                                            $kelamin = ['Laki-laki', 'Perempuan']; 
                                            foreach($kelamin as $kel): ?>
                                              <option value="<?=$kel ?>"><?=$kel ?></option>
                                           <?php
                                                endforeach;
                                        ?>
                                        </select>
                                </div>
                            </div>

                            <!--<div class="form-group row">-->
                            <!--    <label class="col-sm-1 col-form-label" for="asal">Asal Sekolah</label>-->
                            <!--    <br>-->
                            <!--    <div class="col-sm-11 row">-->
                            <!--        <label class="col-sm-2 col-form-label" for="asal_sekolah">SD/M/SMP/MTS/SMA/MA</label>-->
                            <!--        <div class="col-sm-10">-->
                            <!--            <input class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Asal sekolah santri" required>-->
                            <!--        </div>-->
                            <!--        <br>-->
                            <!--        <br>-->
                            <!--        <label class="col-sm-2 col-form-label" for="kecamatan">Kecamatan</label>-->
                            <!--        <div class="col-sm-10 mb-3">-->
                            <!--            <input class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" required>-->
                            <!--        </div>-->
                            <!--        <br>-->
                            <!--        <br>-->
                            <!--        <label class="col-sm-2 col-form-label" for="kabupaten">Kabupaten</label>-->
                            <!--        <div class="col-sm-10 mb-3">-->
                            <!--            <input class="form-control" id="kabupaten" name="kabupaten" placeholder="Kabupaten" required>-->
                            <!--        </div>-->
                            <!--        <br>-->
                            <!--        <br>-->
                            <!--        <label class="col-sm-2 col-form-label" for="provinsi">Provinsi</label>-->
                            <!--        <div class="col-sm-10 mb-3">-->
                            <!--            <input class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" required>-->
                            <!--        </div>-->
                            <!--        <br>-->
                            <!--        <br>-->
                            <!--        <label class="col-sm-2 col-form-label" for="nomor_sttb">Nomor STTB</label>-->
                            <!--        <div class="col-sm-10 mb-3">-->
                            <!--            <input class="form-control" id="nomor_sttb" name="nomor_sttb" placeholder="Nomor STTB" required>-->
                            <!--        </div>-->
                            <!--        <br>-->
                            <!--        <br>-->
                            <!--        <label class="col-sm-2 col-form-label" for="nomor_skhu">Nomor SKHU</label>-->
                            <!--        <div class="col-sm-10 mb-3">-->
                            <!--            <input class="form-control" id="nomor_skhu" name="nomor_skhu" placeholder="Nomor SKHU" required>-->
                            <!--        </div>-->
                            <!--        <br>-->
                            <!--        <br>-->
                            <!--        <label class="col-sm-2 col-form-label" for="jumlah_skhu">Jumlah SKHU</label>-->
                            <!--        <div class="col-sm-10 mb-3">-->
                            <!--            <input class="form-control" id="jumlah_skhu" name="jumlah_skhu" placeholder="Jumlah SKHU" required>-->
                            <!--        </div>-->
                            <!--    </div>-->

                            <!--</div>-->


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="agama">Agama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="agama" name="agama" placeholder="Agama" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="alamat_tinggal">Alamat tinggal calon santri</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="alamat_tinggal" name="alamat_tinggal" placeholder="Alamat Tinggal" required> </textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="nama_orang_tua">Nama Orang Tua</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_orang_tua" name="nama_orang_tua" required placeholder="Nama Orang tua">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="alamat_orang_tua">Alamat tinggal Orang Tua</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="alamat_orang_tua" name="alamat_orang_tua" placeholder="Alamat tinggal Orang tua" required> </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="nama_wali">Nama Wali</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_wali" name="nama_wali" required placeholder="Nama Wali">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="alamat_wali">Alamat tinggal wali</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="alamat_wali" name="alamat_wali" placeholder="Alamat Wali" required> </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="email">Alamat Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" required placeholder="Alamat email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="no_wa">Nomor Wa</label>
                                <div class="col-sm-10">

                                    <input type="text" class="form-control" id="nomor_wa" name="nomor_wa" required placeholder="contoh : 628234353544" value="<?= set_value('nomor_wa'); ?>">
                                    <?= form_error('nomor_wa', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="foto">Upload foto calon santri</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="foto" name="foto" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="file_kk">Upload Kartu Keluarga</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="file_kk" name="file_kk" accept="application/pdf, application/vnd.ms-excel" required>
                                </div>
                            </div>
                            <!--<div class="form-group row">-->
                            <!--    <label class="col-sm-2 col-form-label" for="file_ket_ijin">Upload Keterangan Ijin Mondok</label>-->
                            <!--    <div class="col-sm-10">-->
                            <!--        <input type="file" class="form-control" id="file_ket_ijin" name="file_ket_ijin" accept="application/pdf, application/vnd.ms-excel" required>-->
                            <!--    </div>-->
                            <!--</div>-->

                            <button type="submit" class="btn btn-warning">Kirim</button>&nbsp;
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>

                    </div>
                </div>
           
        


    </div>
</section>