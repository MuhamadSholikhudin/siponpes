    <section class="content">
        <div class="container-fluid">



            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <a href="<?= base_url('admin/pendaftaran') ?>" class="btn bg-blue-grey waves-effect"> 
            <i class="material-icons">reply</i>  
            <span>Kemballi</span>
        </a>
                <div class="card">
                    <div class="header">
                        <h2>
                            EDIT PENDAFTARAN
                        </h2>                       
                    </div>
                    <div class="body">
                        
                        <form role="form" action="<?= base_url("admin/pendaftaran/edit_aksi") ?>" id="register-form" enctype="multipart/form-data" method="POST">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="tanggal_daftar">Foto</label>
                                    <div class="col-sm-10">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="<?= base_url('admin/pendaftaran/ubah/'. $daftar->id_daftar) ?>" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="<?= base_url('uploads/pendaftaran/'. $daftar->foto) ?>">
                                        </a>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="tanggal_daftar">Tanggal Daftar</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="tanggal_daftar" name="tanggal_daftar" value="<?= $daftar->tanggal_daftar ?>" required placeholder="Tempat Lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="nama_lengkap">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="hidden" class="form-control" id="id_daftar" name="id_daftar" value="<?= $daftar->id_daftar ?>" required placeholder="Nama Lengkap">
                                        <input class="form-control" type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $daftar->nama_lengkap ?>" required placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="tempat_lahir">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $daftar->tempat_lahir ?>" required placeholder="Tempat Lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $daftar->tanggal_lahir ?>" required placeholder="DD-MM-YYY">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="umur">Umur</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="umur" name="umur" value="<?= $daftar->umur ?>" required placeholder="Umur">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="jekel" id="" require>
                                        <?php  
                                            $kelamin = ['Laki-laki', 'Perempuan']; 
                                            foreach($kelamin as $kel):
                                                if($kel == $daftar->jekel){ ?>
                                                        <option value="<?=$kel ?>" selected><?=$kel ?></option>
                                                <?php
                                                }else{?>
                                                    <option value="<?=$kel ?>"><?=$kel ?></option>
                                            <?php

                                                }
                                            endforeach;
                                        ?>
                                        </select>
<!-- 
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-warning btn-sm">
                                                <input type="radio" name="jekel" <?php if ($daftar->jekel == 'Laki-laki') {
                                                                                        echo "checked='checked'";
                                                                                    } else {
                                                                                    } ?> value="Laki-laki" id="option1">Laki-laki
                                            </label>


                                            <label class="btn btn-warning btn-sm">
                                                <input type="radio" name="jekel" <?php if ($daftar->jekel == 'Perempuan') {
                                                                                        echo "checked='checked'";
                                                                                    } else {
                                                                                    } ?> value="perempuan" id="option2"> Perempuan
                                            </label>
                                        </div> -->
                                    </div>
                                </div>

                                <!-- <div class="form-group row">
                                    <label class="col-sm-1 col-form-label" for="asal">Asal Sekolah</label>
                                    <br>
                                    <div class="col-sm-11 row">
                                        <label class="col-sm-2 col-form-label" for="asal_sekolah">SD/M/SMP/MTS/SMA/MA</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="asal_sekolah" name="asal_sekolah" value="<?= $daftar->asal_sekolah ?>" required>
                                        </div>
                                        <br>
                                        <br>
                                        <label class="col-sm-2 col-form-label" for="kecamatan">Kecamatan</label>
                                        <div class="col-sm-10 mb-3">
                                            <input class="form-control" id="kecamatan" name="kecamatan" value="<?= $daftar->kecamatan ?>" required>
                                        </div>
                                        <br>
                                        <br>
                                        <label class="col-sm-2 col-form-label" for="kabupaten">Kabupaten</label>
                                        <div class="col-sm-10 mb-3">
                                            <input class="form-control" id="kabupaten" name="kabupaten" value="<?= $daftar->kabupaten ?>" required>
                                        </div>
                                        <br>
                                        <br>
                                        <label class="col-sm-2 col-form-label" for="provinsi">Provinsi</label>
                                        <div class="col-sm-10 mb-3">
                                            <input class="form-control" id="provinsi" name="provinsi" value="<?= $daftar->provinsi ?>" required>
                                        </div>
                                        <br>
                                        <br>
                                        <label class="col-sm-2 col-form-label" for="nomor_sttb">Nomor STTB</label>
                                        <div class="col-sm-10 mb-3">
                                            <input class="form-control" id="nomor_sttb" name="nomor_sttb" value="<?= $daftar->nomor_sttb ?>" required>
                                        </div>
                                        <br>
                                        <br>
                                        <label class="col-sm-2 col-form-label" for="nomor_skhu">Nomor SKHU</label>
                                        <div class="col-sm-10 mb-3">
                                            <input class="form-control" id="nomor_skhu" name="nomor_skhu" value="<?= $daftar->nomor_skhu ?>" required>
                                        </div>
                                        <br>
                                        <br>
                                        <label class="col-sm-2 col-form-label" for="jumlah_skhu">Jumlah SKHU</label>
                                        <div class="col-sm-10 mb-3">
                                            <input class="form-control" id="jumlah_skhu" name="jumlah_skhu" value="<?= $daftar->jumlah_skhu ?>" required>
                                        </div>
                                    </div>

                                </div> -->


                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="agama">Agama</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="agama" name="agama" value="<?= $daftar->agama ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="alamat_tinggal">Alamat tinggal calon santri</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="alamat_tinggal" name="alamat_tinggal" required><?= $daftar->alamat_tinggal ?> </textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="nama_orang_tua">Nama Orang Tua</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_orang_tua" name="nama_orang_tua" value="<?= $daftar->nama_orang_tua ?>" required placeholder="Nomer Wa Yang bisa di hubungi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="alamat_orang_tua">Alamat tinggal Orang Tua</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="alamat_orang_tua" name="alamat_orang_tua" required><?= $daftar->alamat_orang_tua ?> </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="nama_wali">Nama Wali</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_wali" name="nama_wali" value="<?= $daftar->nama_wali ?>" required placeholder="Nomer Wa Yang bisa di hubungi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="alamat_wali">Alamat tinggal wali</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="alamat_wali" name="alamat_wali" required> <?= $daftar->alamat_wali ?> </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="email">Alamat Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" value="<?= $daftar->email ?>" required placeholder="Alamat email">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="no_wa">Nomor Wa</label>
                                    <div class="col-sm-10">

                                        <input type="text" class="form-control" id="nomor_wa" name="nomor_wa" value="<?= $daftar->nomor_wa ?>" required placeholder="contoh : 8234353544">
                                        <?= form_error('nomor_wa', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="foto">Upload foto calon santri</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="foto" name="foto" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="file_kk">Upload Kartu Keluarga</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="file_kk" name="file_kk" value="<?= $daftar->file_kk ?>" accept="application/pdf, application/vnd.ms-excel" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="file_ket_ijin">Upload Keterangan Ijin Mondok</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="file_ket_ijin" name="file_ket_ijin" value="<?= $daftar->file_ket_ijin ?>" accept="application/pdf, application/vnd.ms-excel" required>
                                    </div>
                                </div> -->

                            Jika Ingin Ubah Data Tekan Tombol Ubah--> &nbsp;<button type="submit" class="btn btn-warning">Ubah</button>&nbsp;
                        </form>         
                        <br>
                        <br>
                        <br>
                        <a href="<?= base_url('admin/pendaftaran/edit_file/'. $daftar->id_daftar) ?>" class="btn btn-primary mt-3">EDIT FILE PENDAFTARAN</a>
                                

                    </div>
                </div>
            

                <div class="card">
                    <div class="header">Data Dokumen File Kartu Keluarga</div>
                    <div class="body">
                        <div class="container">
                            <object  type="application/pdf" data="<?= base_url('uploads/pendaftaran/'. $daftar->file_kk) ?> "  width="800" height="1200" ></object >
                        </div>
                    </div>
                </div>

                <!-- <div class="card">
                    <div class="header">Data Dokumen File Surat Keterangan Ijin</div>
                    <div class="body">
                        <div class="container">
                            <object  type="application/pdf" data="<?= base_url('uploads/pendaftaran/'. $daftar->file_ket_ijin) ?>"   width="800" height="1200" ></object >
                        </div>
                    </div>
                </div> -->
            </div>
            
    </section>