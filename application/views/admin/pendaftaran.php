<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Pendaftaran</h2>
        </div>


               <!-- Basic Examples -->
            <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <button class="btn btn-default waves-effect m-r-20" type="button" data-target="#defaultModal" data-toggle="modal"> TAMBAH PENDAFTAR</button>
                        <div tabindex="-1" class="modal fade" id="defaultModal" role="dialog" style="display: none;">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="header">
                                                <h2>
                                                    TAMBAH PENDAFTAR
                                                </h2>
                                            </div>
                                            <div class="body">
                                            <form action="<?= base_url('admin/aksi_tambah_pendaftar') ?>" method="POST" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" for="nama_lengkap">Nama Lengkap</label>
                                                <div class="form-line col-sm-10">
                                                    <input class="form-control" type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required placeholder="Nama Lengkap">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" for="tempat_lahir">Tempat Lahir</label>
                                                <div class="form-line col-sm-10">
                                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required placeholder="Tempat Lahir">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class=" col-sm-2 col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                                                <div class="form-line col-sm-10">
                                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required placeholder="DD-MM-YYY">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" for="umur">Umur</label>
                                                <div class="form-line col-sm-10">
                                                    <input type="number" class="form-control" id="umur" name="umur" required placeholder="Umur">
                                                </div>
                                            </div>
                            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label><br>
                                                <div class="form-line col-sm-10">
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-warning btn-sm">
                                                            <input type="radio" name="jekel" value="Laki-laki" id="option1">Laki-laki
                                                        </label>
                                                        <label class="btn btn-warning btn-sm">
                                                            <input type="radio" name="jekel" value="perempuan" id="option2"> Perempuan
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                            
                                            <div class="form-group row">
                                                <label class="col-sm-1 col-form-label" for="asal">Asal Sekolah</label>
                                                <br>
                                                <div class="col-sm-11 row">
                                                    <label class="col-sm-2 col-form-label" for="asal_sekolah">SD/M/SMP/MTS/SMA/MA</label>
                                                    <div class="form-line col-sm-10">
                                                        <input class="form-control" id="asal_sekolah" name="asal_sekolah" required>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <label class="col-sm-2 col-form-label" for="kecamatan">Kecamatan</label>
                                                    <div class="form-line col-sm-10 mb-3">
                                                        <input class="form-control" id="kecamatan" name="kecamatan" required>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <label class="col-sm-2 col-form-label" for="kabupaten">Kabupaten</label>
                                                    <div class="form-line col-sm-10 mb-3">
                                                        <input class="form-control" id="kabupaten" name="kabupaten" required>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <label class="col-sm-2 col-form-label" for="provinsi">Provinsi</label>
                                                    <div class=" form-line col-sm-10 mb-3">
                                                        <input class="form-control" id="provinsi" name="provinsi" required>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <label class="col-sm-2 col-form-label" for="nomor_sttb">Nomor STTB</label>
                                                    <div class="form-line col-sm-10 mb-3">
                                                        <input class="form-control" id="nomor_sttb" name="nomor_sttb" required>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <label class="col-sm-2 col-form-label" for="nomor_skhu">Nomor SKHU</label>
                                                    <div class="form-line col-sm-10 mb-3">
                                                        <input class="form-control" id="nomor_skhu" name="nomor_skhu" required>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <label class="col-sm-2 col-form-label" for="jumlah_skhu">Jumlah SKHU</label>
                                                    <div class="form-line col-sm-10 mb-3">
                                                        <input class="form-control" id="jumlah_skhu" name="jumlah_skhu" required>
                                                    </div>
                                                </div>
                            
                                            </div>
                            
                            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" for="agama">Agama</label>
                                                <div class="form-line col-sm-10">
                                                    <input class="form-control" id="agama" name="agama" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" for="alamat_tinggal">Alamat tinggal calon santri</label>
                                                <div class="form-line col-sm-10">
                                                    <textarea class="form-control" id="alamat_tinggal" name="alamat_tinggal" required> </textarea>
                                                </div>
                                            </div>
                            
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" for="nama_orang_tua">Nama Orang Tua</label>
                                                <div class="form-line col-sm-10">
                                                    <input type="text" class="form-control" id="nama_orang_tua" name="nama_orang_tua" required placeholder="Nomer Wa Yang bisa di hubungi">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" for="alamat_orang_tua">Alamat tinggal Orang Tua</label>
                                                <div class="form-line col-sm-10">
                                                    <textarea class="form-control" id="alamat_orang_tua" name="alamat_orang_tua" required> </textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" for="nama_wali">Nama Wali</label>
                                                <div class="form-line col-sm-10">
                                                    <input type="text" class="form-control" id="nama_wali" name="nama_wali" required placeholder="Nomer Wa Yang bisa di hubungi">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" for="alamat_wali">Alamat tinggal wali</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" id="alamat_wali" name="alamat_wali" required> </textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" for="email">Alamat Email</label>
                                                <div class="form-line col-sm-10">
                                                    <input type="email" class="form-control" id="email" name="email" required placeholder="Alamat email" value="<?= set_value('email'); ?>">
                                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" for="no_wa">Nomor Wa</label>
                                                <div class="form-line col-sm-10">
                                                    <input type="text" class="form-control" id="nomor_wa" name="nomor_wa" required placeholder="contoh : 8234353544" value="<?= set_value('nomor_wa'); ?>">
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
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label" for="file_ket_ijin">Upload Keterangan Ijin Mondok</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" id="file_ket_ijin" name="file_ket_ijin" accept="application/pdf, application/vnd.ms-excel" required>
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
                        <div class="body">
                            <div class="text-center">
                                <h3>DATA PENDAFTARAN</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>hakakses</th>
                                            <th>Status</th>
                                            <th>Ubah</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($pendaftaran as $peng) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><a href="<?= base_url('admin/lihat_pengurus/') . $peng->id_daftar ?>"><?= $peng->nama_lengkap ?></a></td>
                                                <td><?= $peng->email ?></td>
                                                <td><?= $peng->alamat_orang_tua ?></td>
                                                <td><?= $peng->alamat_tinggal ?></td>
                                                <td><a href="<?= base_url('admin/ubah_pengurus/' . $peng->id_daftar) ?>" class="btn btn-warning waves-effect" type="button">
                                                        <i class="material-icons">edit</i>
                                                        <span>Edit</span>
                                                    </a>
                                                </td>
                                                <td><a href="<?= base_url('admin/hapus_pengurus/' . $peng->id_daftar) ?>" class="btn btn-danger waves-effect" type="button">
                                                        <i class="material-icons">delete_forever</i>
                                                        <span>Hapus</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->

        </div>
    </div>
</section>