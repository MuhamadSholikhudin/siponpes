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
			<form role="form " action="<?= base_url("page/pembayaran_upload") ?>" id="register-form" enctype="multipart/form-data" method="POST">

				<?php
				// $daftar = $this->db->query(" SELECT * FROM pendaftaran WHERE id_daftar = ")

				?>

				<label class="col-lg-3" for="nama_pendaftar">Nama Pendafatar</label>
				<div class="form-group col-lg-9">
					<div class="form-line">
						<input class="form-control" id="nama_pendaftar" type="text" value="<?= $daftar->nama_lengkap ?>" placeholder="Id pendaftar">
						<input class="form-control" id="id_daftar" type="hidden" name="id_daftar" value="<?= $daftar->id_daftar ?>" placeholder="Id pendaftar">
					</div>
				</div>


				<label class="col-lg-3" for="jumlah">Jumlah</label>
				<div class="form-group  col-lg-9">
					<div class="form-line">
						<input class="form-control" id="jumlah" type="number" name="jumlah" placeholder="Jumlah yang di bayarkan" required>
					</div>
				</div>


				<label class=" col-lg-3 col-form-label" for="bukti_pembayaran">Upload bukti pembayaran</label>
				<div class=" col-lg-5">
					<input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran" onchange="Validation_bukti_pembayaran()" accept="image/png, image/jpeg, image/jpg, image/img" required>
					<script>
						Validation_bukti_pembayaran = () => {
							const fi = document.getElementById('bukti_pembayaran');
							// Check if any file is selected.
							if (fi.files.length > 0) {
								for (const i = 0; i <= fi.files.length - 1; i++) {

									const fsize = fi.files.item(i).size;
									const file = Math.round((fsize / 1024));
									// The size of the file.
									if (file >= 2048) {
										alert("File yang anda pilih terlalu besar File max 2MB");
										$('#bukti_pembayaran').val('');
									}
								}
							}
						}
					</script>
				</div>
				<div class="col-sm-4">
					File max upload 2MB, File yang diupload dalam bentuk
				</div>



				<div class="form-group row">
				</div>
				<br>
				<button type="submit" id="kirim" class="btn btn-warning">Kirim</button>&nbsp;
				<button type="reset" class="btn btn-default">Reset</button>
			</form>
			<br>
			<br>
		</div>
	</div>
</div>