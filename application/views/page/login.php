<!-- main content -->
<div class="main-content">
	<div class="container">
		<!-- login area -->
		<div class="login-area">
			<!-- heading -->
			<h3>Masuk, ke akun anda</h3>
			<!-- paragraph -->
			<p>Untuk mengakses website anda harus masuk terlebih dahulu</p>
			<small><?= $this->session->flashdata('pesan'); ?></small>
			<form action="<?= base_url('page/login') ?>" method="POST" role="form" id="login-form">
				<div class="form-group">
					<label for="exampleInputEmail1">Username</label>
					<input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<!-- <div class="checkbox form-group">
							<label>
								<input type="checkbox"> Remember me
							</label>
						</div> -->
				<button type="submit" class="btn btn-warning">Login</button>
			</form>
		</div>
	</div>
</div>