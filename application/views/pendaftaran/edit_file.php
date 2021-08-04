    <section class="content">
        <div class="container-fluid">



            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EDIT FILE PENDAFTARAN
                        </h2>

                        

                    </div>
                    <div class="body">
                        
                        <form role="form" action="<?= base_url("admin/pendaftaran/edit_aksi") ?>" id="register-form" enctype="multipart/form-data" method="POST">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="tanggal_daftar">Foto</label>
                                    <div class="col-sm-10">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="<?= base_url('admin/pendaftaran/ubah/'. $daftar->id_daftar) ?>" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="<?= base_url('uploads/pendaftaran/foto/'. $daftar->foto) ?>">
                                        </a>
                                    </div>
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
					<label class="col-sm-2 col-form-label" for="nomor_wa">Nomor Wa</label>
					<div class="col-sm-10">

						<input type="text" class="form-control" id="nomor_wa"  required placeholder="contoh : 8234353544" value="<?= set_value('nomor_wa'); ?>">
						<?= form_error('nomor_wa', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label" for="foto">Upload foto santri</label>
					<div class="col-sm-5">
						<input type="file" class="form-control" id="foto" name="foto"  accept="image/png, image/jpeg, image/jpg, image/img" onchange="Validation_foto()"  required>
						<script>
                            Validation_foto = () => {
                                const fi = document.getElementById('foto');
                                // Check if any file is selected.
                                if (fi.files.length > 0) {
                                    for (const i = 0; i <= fi.files.length - 1; i++) {
                        
                                        const fsize = fi.files.item(i).size;
                                        const file = Math.round((fsize / 1024));
                                        // The size of the file.
                                        if (file >= 2048) {
                                            alert("FileYang anda pilih terlalu besar File max 2MB");
                                            $('#foto').val('');
                                        } 
                                    }
                                }
                            }
                        </script>

					</div>
					<div class="col-sm-5">
						File max upload 2MB, File yang diupload dalam bentuk .jpg, .jpeg, .png
						</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label" for="file_kk">Upload Kartu Keluarga</label>
					<div class="col-sm-5">
						<input type="file" class="form-control" id="file_kk" name="file_kk" onchange="Validation_file_kk()"  accept="application/pdf, application/vnd.ms-excel"  required>
						<script>
                        Validation_file_kk = () => {
                            const fi = document.getElementById('file_kk');
                            // Check if any file is selected.
                            if (fi.files.length > 0) {
                                for (const i = 0; i <= fi.files.length - 1; i++) {
                    
                                    const fsize = fi.files.item(i).size;
                                    const file = Math.round((fsize / 1024));
                                    // The size of the file.
                                    if (file >= 2048) {
                                        alert("File yang anda pilih terlalu besar File max 2MB");
                                        $('#file_kk').val('');
                                    } 
                                }
                            }
                        }
                    </script>
					
					</div>
					<div class="col-sm-5">
					File max upload 2MB, File yang diupload dalam bentuk .pdf
						</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label" for="file_ket_ijin">Upload Keterangan Ijin Mondok</label>
					<div class="col-sm-5">
						<input type="file" class="form-control" id="file_ket_ijin" name="file_ket_ijin" onchange="Validation_file_ket_ijin()"  accept="application/pdf, application/vnd.ms-excel" required>
						<script>
                        Validation_file_ket_ijin = () => {
                            const fi = document.getElementById('file_ket_ijin');
                            // Check if any file is selected.
                            if (fi.files.length > 0) {
                                for (const i = 0; i <= fi.files.length - 1; i++) {
                    
                                    const fsize = fi.files.item(i).size;
                                    const file = Math.round((fsize / 1024));
                                    // The size of the file.
                                    if (file >= 2048) {
                                        alert("File yang anda pilih terlalu besar File max 2MB");
                                        $('#file_ket_ijin').val('');
                                    } 
                                }
                            }
                        }
                    </script>
					</div>
					<div class="col-sm-5">
					File max upload 2MB, File yang diupload dalam bentuk .pdf
						</div>
				</div>

               Tekan Tombol Upload File Jika ingin mengubah File  &nbsp;<button type="submit" class="btn btn-warning">Upload File</button>&nbsp;
                        </form>         
                        <br>
                        <br>
                        <br>
                        <a href="<?= base_url('admin/pendaftaran/ubah/'. $daftar->id_daftar) ?>" class="btn btn-primary mt-3">KE EDIT DATA</a>
                                

                    </div>
                </div>
            </div>



 
    </section>