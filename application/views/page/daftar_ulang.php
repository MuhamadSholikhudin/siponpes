<!-- main content -->
<div class="main-register">
	<div class="container bg-light ">
		<!-- register area -->
		<div class="">

			<!-- heading -->
			<h3 class="text-center">Pendaftaran Santri Baru</h3>
			<!-- paragraph -->
			<p class="text-center">Isilaha data-data dibawah ini dengan benar.</p>
			<?= $this->session->flashdata('pesan'); ?>
			<p class="text-center" id="validasi_umur"></p>
			<form role="form " action="<?= base_url("page/melengkapi_pendaftaran") ?>" id="register-form" enctype="multipart/form-data" method="POST">

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
					<label class="col-sm-2 col-form-label" for="tanggal_lahir">Tanggal Lahir
						<?php
						$tahun_max = date('Y') - 15;
						$tahun_min = date('Y') - 26;
						$bulan = date('m');
						$hari = date('d');
						$tahun_minimal = $tahun_min.'-'.$bulan.'-'.$hari;
						$tahun_maximal = $tahun_max.'-'.$bulan.'-'.$hari;

						?>

					</label>
					<div class="col-sm-10">
						<input type="date" value="<?= $daftar->tanggal_lahir ?>" class="form-control" id="tanggal_lahir" name="tanggal_lahir" min="<?= $tahun_minimal ?>" max="<?= $tahun_maximal ?>" required placeholder="DD-MM-YYY">
					</div>
				</div>
				<script>
			$("#tanggal_lahir").on("change",function(){
				var selected = $(this).val();
				// alert(selected);

				var date = selected;
 
				if(date === ""){
					alert("data tanggal tidak boleh Kosong");
				}else{
					var today = new Date();
					var birthday = new Date(date);
					var year = 0;
					if (today.getMonth() < birthday.getMonth()) {
						year = 1;
					} else if ((today.getMonth() == birthday.getMonth()) && today.getDate() < birthday.getDate()) {
						year = 1;
					}
					var umur = today.getFullYear() - birthday.getFullYear() - year;
					var bulan = today.getMonth() - birthday.getMonth() ;
					var hari = today.getDate() - birthday.getDate() ;
			
					if(umur >= 15 && umur <= 26){

						alert("Umur anda memenuhi syarat");
						$("#asal_sekolah").prop('disabled', false);
						$("#kecamatan").prop('disabled', false);
						$("#kabupaten").prop('disabled', false);
						$("#provinsi").prop('disabled', false);
						$("#nomor_sttb").prop('disabled', false);
						$("#nomor_skhu").prop('disabled', false);
						$("#jumlah_skhu").prop('disabled', false);
						$("#agama").prop('disabled', false);
						$("#alamat_tinggal").prop('disabled', false);
						$("#nama_orang_tua").prop('disabled', false);
						$("#alamat_orang_tua").prop('disabled', false);
						$("#nama_wali").prop('disabled', false);
						$("#alamat_wali").prop('disabled', false);
						$("#email").prop('disabled', false);
						$("#nomor_wa").prop('disabled', false);
						$("#foto").prop('disabled', false);
						$("#file_kk").prop('disabled', false);
						$("#file_ket_ijin").prop('disabled', false);
						$("#kirim").removeAttr('disabled');
						
					}else{
						// umur = 0;
						alert("Umur anda tidak memenuhi syarat");

						$("#asal_sekolah").prop('disabled', true);
						$("#kecamatan").prop('disabled', true);
						$("#kabupaten").prop('disabled', true);
						$("#provinsi").prop('disabled', true);
						$("#nomor_sttb").prop('disabled', true);
						$("#nomor_skhu").prop('disabled', true);
						$("#jumlah_skhu").prop('disabled', true);
						$("#agama").prop('disabled', true);
						$("#alamat_tinggal").prop('disabled', true);
						$("#nama_orang_tua").prop('disabled', true);
						$("#alamat_orang_tua").prop('disabled', true);
						$("#nama_wali").prop('disabled', true);
						$("#alamat_wali").prop('disabled', true);
						$("#email").prop('disabled', true);
						$("#nomor_wa").prop('disabled', true);
						$("#foto").prop('disabled', true);
						$("#file_kk").prop('disabled', true);
						$("#file_ket_ijin").prop('disabled', true);
						$("#kirim").attr('disabled','disabled');
					document.getElementById('validasi_umur').innerHTML = "Umur anda tidak memenuhi syarat";

					}

					

					document.getElementById('umur1').value =' usia '+ umur  ;
				document.getElementById('umur').value = umur  ;
				

}
    });
    
    </script>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label" for="umur">Umur</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="umur1"required placeholder="Umur" disabled>
<input type="hidden" class="form-control" id="umur" name="umur" value="<?= $daftar->umur ?>" required placeholder="Umur" >
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-10">
						<!-- <div class="btn-group" data-toggle="buttons">
							<label class="btn btn-warning btn-sm">
								<input type="radio" name="jekel" value="Laki-laki" id="option1">Laki-laki
							</label>
							<label class="btn btn-warning btn-sm">
								<input type="radio" name="jekel" value="perempuan" id="option2"> Perempuan
							</label>
						</div> -->

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
					</div>
				</div>

				<!-- <div class="form-group row">
					<label class="col-sm-1 col-form-label" for="asal">Asal Sekolah</label>
					<br>
					<div class="col-sm-11 row">
						<label class="col-sm-2 col-form-label" for="asal_sekolah">SD/M/SMP/MTS/SMA/MA</label>
						<div class="col-sm-10">
							<input class="form-control" id="asal_sekolah" name="asal_sekolah" value="<?= set_value('asal_sekolah'); ?>" required>
						</div>
						<br>
						<br>
						<label class="col-sm-2 col-form-label" for="kecamatan">Kecamatan</label>
						<div class="col-sm-10 mb-3"> 
							<input class="form-control" id="kecamatan" name="kecamatan" value="<?= set_value('kecamatan'); ?>" required>
						</div>
						<br>
						<br>
						<label class="col-sm-2 col-form-label" for="kabupaten">Kabupaten</label>
						<div class="col-sm-10 mb-3">
							<input class="form-control" id="kabupaten" name="kabupaten" value="<?= set_value('kabupaten'); ?>" required>
						</div>
						<br>
						<br>
						<label class="col-sm-2 col-form-label" for="provinsi">Provinsi</label>
						<div class="col-sm-10 mb-3">
							<input class="form-control" id="provinsi" name="provinsi" value="<?= set_value('provinsi'); ?>"  required>
						</div>
						<br>
						<br>
						<label class="col-sm-2 col-form-label" for="nomor_sttb">Nomor STTB</label>
						<div class="col-sm-10 mb-3">
							<input class="form-control" id="nomor_sttb" name="nomor_sttb" value="<?= set_value('nomor_sttb'); ?>" required>
						</div>
						<br>
						<br>
						<label class="col-sm-2 col-form-label" for="nomor_skhu">Nomor SKHU</label>
						<div class="col-sm-10 mb-3">
							<input class="form-control" id="nomor_skhu" name="nomor_skhu" value="<?= set_value('nomor_skhu'); ?>" required>
						</div>
						<br>
						<br>
						<label class="col-sm-2 col-form-label" for="jumlah_skhu">Jumlah SKHU</label>
						<div class="col-sm-10 mb-3">
							<input class="form-control" id="jumlah_skhu" name="jumlah_skhu" value="<?= set_value('jumlah_skhu'); ?>" required>
						</div>
					</div>

				</div>
 -->

				<div class="form-group row">
					<label class="col-sm-2 col-form-label" for="agama">Agama</label>
					<div class="col-sm-10">
						<input class="form-control" id="agama" name="agama" value="<?= $daftar->agama ?>" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label" for="alamat_tinggal">Alamat tinggal calon santri</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="alamat_tinggal" name="alamat_tinggal"  required><?= $daftar->alamat_tinggal ?></textarea>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label" for="nama_orang_tua">Nama Orang Tua</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nama_orang_tua" name="nama_orang_tua" value="<?= $daftar->nama_orang_tua ?>" required >
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
						<input type="text" class="form-control" id="nama_wali" name="nama_wali" value="<?= $daftar->nama_wali ?>" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label" for="alamat_wali">Alamat tinggal wali</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="alamat_wali" name="alamat_wali"  required><?= $daftar->alamat_wali ?> </textarea>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label" for="email">Alamat Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" required placeholder="Alamat email" value="<?= $daftar->email ?>">
						
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label" for="nomor_wa">Nomor Wa</label>
					<div class="col-sm-10">

						<input type="text" class="form-control" id="nomor_wa" name="nomor_wa" required placeholder="contoh : 628234353544" value="<?= $daftar->nomor_wa ?>">
						
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label" for="foto">Upload Ulang foto calon santri</label>
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
					<label class="col-sm-2 col-form-label" for="file_kk">Upload Ulang Kartu Keluarga</label>
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
					<label class="col-sm-2 col-form-label" for="file_ket_ijin">Upload Ulang Keterangan Ijin Mondok</label>
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

				<button type="submit" id="kirim" class="btn btn-warning">Kirim</button>&nbsp;
				<button type="reset" class="btn btn-default">Reset</button>
			</form>
			<br>
			<br>
		</div>
	</div>
</div>
