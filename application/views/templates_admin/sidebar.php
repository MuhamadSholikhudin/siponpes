<!-- Page Loader -->
<div class="page-loader-wrapper">
  <div class="loader">
    <div class="preloader">
      <div class="spinner-layer pl-red">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div>
        <div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
    <p>Please wait...</p>
  </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->

<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
      <a href="javascript:void(0);" class="bars"></a>

      <?php if ($this->session->userdata('hakakses') == 1) { ?>
        <a class="navbar-brand" href="<?= base_url('admin/'); ?>">SISTEM INFORMASI PONPES BAITUL QUDUS </a>
      <?php } elseif ($this->session->userdata('hakakses') == 2) { ?>
        <a class="navbar-brand" href="<?= base_url('ustads/'); ?>">SISTEM INFORMASI PONPES BAITUL QUDUS</a>
      <?php } elseif ($this->session->userdata('hakakses') == 3) { ?>
        <a class="navbar-brand" href="<?= base_url('santri/'); ?>">SISTEM INFORMASI PONPES BAITUL QUDUS</a>
      <?php }
      ?>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <!-- Call Search -->

        <!-- #END# Notifications -->
        <!-- Tasks -->
        <li class="dropdown">
          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
            <i class="material-icons">person</i>
            <!-- <span class="label-count">9</span> -->
          </a>
          <ul class="dropdown-menu">

            <li class="body">
              <a href="<?= base_url('auth/logout'); ?>"> <i class="material-icons">input</i> Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- #Top Bar -->
<section>
  <!-- Left Sidebar -->
  <aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
      <div class="image">
        <img src="<?= base_url('assets/'); ?>img/user.png" width="48" height="48" alt="User" />
      </div>
      <div class="info-container">
        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php
          if ($this->session->userdata('hakakses') == 1) {
            echo "Admin Pondok";
          } elseif ($this->session->userdata('hakakses') == 2) {
            echo "Ustads Pondok";
          } elseif ($this->session->userdata('hakakses') == 3) {
            echo "Santri Pondok";
          }
          ?>
        </div>
        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php
          if ($this->session->userdata('hakakses') < 3) {
            echo $this->session->userdata('nama');
          } else{
            $id_santri = $this->session->userdata('id_santri');

            $cari_santri = $this->db->query("SELECT * FROM santri WHERE id_santri = $id_santri")->row();
            $cari_daftar = $this->db->query("SELECT * FROM daftar WHERE id_daftar = $cari_santri->id_daftar")->row();
         echo $cari_daftar->nama_lengkap;
          }
          ?>

   
        </div>

      </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
      <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <?php if ($this->session->userdata('hakakses') == 1) { ?>

          <li class="active">
            <a href="<?= base_url('admin/dashboard'); ?>">
              <i class="material-icons">home</i>
              <span>Home</span>
            </a>
          </li>

          <li>
            <a href="javascript:void(0);" class="menu-toggle">
              <i class="material-icons">data_usage</i>
              <span>Kelola Data</span>
            </a>
            <ul class="ml-menu">
              <li>
                <a href="<?= base_url('admin/pendaftaran'); ?>">Pendaftaran</a>
              </li>

              <li>
                <a href="<?= base_url('admin/pembayaran'); ?>">Pembayaran</a>
              </li>
              <li>
                <a href="<?= base_url('admin/pelajaran'); ?>">Pelajaran</a>
              </li>
              <li>
                <a href="<?= base_url('admin/kelas'); ?>"> kelas</a>
              </li>
              <li>
                <a href="<?= base_url('admin/jadwal'); ?>">Jadwal Santri</a>
              </li>
              <li>
                <a href="<?= base_url('admin/pembelajaran'); ?>">Pembelajaran</a>
              </li>
              <li>
                <a href="<?= base_url('admin/absensi'); ?>">Absensi</a>
              </li>
              <li>
                <a href="<?= base_url('admin/pengguna'); ?>">Pengguna</a>
              </li>
              <li>
                <a href="<?= base_url('admin/ustads'); ?>">Ustads</a>
              </li>
              <li>
                <a href="<?= base_url('admin/santri'); ?>">Santri</a>
              </li>
              <li>
                <a href="<?= base_url('admin/rapot'); ?>">Rapot</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0);" class="menu-toggle">
              <i class="material-icons">assignment</i>
              <span>Laporan Data</span>
            </a>
            <ul class="ml-menu">
              <li>
                <a href="<?= base_url('admin/laporan/pendaftaran'); ?>">Pendaftaran</a>
              </li>
              <li>
                <a href="<?= base_url('admin/laporan/pembayaran'); ?>">Pembayaran</a>
              </li>
              <li>
                <a href="<?= base_url('admin/laporan/santri'); ?>">Santri</a>
              </li>
              <li>
                <a href="<?= base_url('admin/laporan/ustads'); ?>">Ustads</a>
              </li>

            </ul>
          </li>

        <?php } elseif ($this->session->userdata('hakakses') == 2) { ?>

          <li class="active">
            <a href="<?= base_url('santri/dashboard'); ?>">
              <i class="material-icons">home</i>
              <span>Home</span>
            </a>
          </li>

          <li>
            <a href="javascript:void(0);" class="menu-toggle">
              <i class="material-icons">data_usage</i>
              <span>Kelola Data</span>
            </a>
            <ul class="ml-menu">
              <li>
                <a href="<?= base_url('ustads/mengajar'); ?>">Mengajar</a>
              </li>
              <li>
                <a href="<?= base_url('ustads/jadwal'); ?>">Jadwal</a>
              </li>
              <li>
                <a href="<?= base_url('ustads/pembelajaran/index/' . $this->session->userdata('id_pengguna')); ?>">Pembelajaran</a>
              </li>
              <li>
                <a href="<?= base_url('ustads/perkembangan/index/' . $this->session->userdata('id_pengguna')); ?>">Perkembangan Santri</a>
              </li>
              <li>
                <a href="<?= base_url('ustads/penilaian/index/' . $this->session->userdata('id_pengguna')); ?>">Penilaian</a>
              </li>
              <li>
                <a href="<?= base_url('ustads/absensi/index/' . $this->session->userdata('id_pengguna')); ?>">Absensi</a>
              </li>
              <li>
                <a href="<?= base_url('ustads/sikap/index/'); ?>">Sikap dan Prilaku[</a>
              </li>
            </ul>
          </li><?php } elseif ($this->session->userdata('hakakses') == 3) { ?>

          <li class="active">
            <a href="<?= base_url('pengurus/dashboard'); ?>">
              <i class="material-icons">home</i>
              <span>Home</span>
            </a>
          </li>

          <li>
            <a href="javascript:void(0);" class="menu-toggle">
              <i class="material-icons">data_usage</i>
              <span>Kelola Data</span>
            </a>
            <ul class="ml-menu">
              <li>
                <a href="<?= base_url('santri/perkembangan/index/' . $this->session->userdata('id_santri')); ?>">Perkembangan</a>
              </li>
              <li>
                <a href="<?= base_url('santri/rapot'); ?>">Rapot</a>
              </li>
            </ul>
          </li>

          <!-- <li>
            <a href="javascript:void(0);" class="menu-toggle">
              <i class="material-icons">assignment</i>
              <span>Laporan Data</span>
            </a>
            <ul class="ml-menu">
              <li>
                <a href="<?= base_url('pengurus/laporan/santri'); ?>">santri</a>
              </li>
              <li>
                <a href="<?= base_url('pengurus/laporan/surat'); ?>">Surat</a>
              </li>
              <li>
                <a href="<?= base_url('pengurus/laporan/absensi'); ?>">Absensi</a>
              </li>
            </ul>
          </li> -->

        <?php } ?>

      </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
      <div class="copyright">
        &copy; <?= date('Y') ?> <a href="javascript:void(0);">Dessy Adelia</a>.
      </div>
      <div class="version">
        <b>Version: </b> 1.0
      </div>
    </div>
    <!-- #Footer -->
  </aside>
  <!-- #END# Left Sidebar -->

  <!-- #END# Right Sidebar -->
</section>