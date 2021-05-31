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

      <?php if ($this->session->userdata('level') == 1) { ?>
        <a class="navbar-brand" href="<?= base_url('sekre/dashboard/index'); ?>">SISTEM PENUGASAN DINAS TENAGA KERJA KABUPATEN KUDUS</a>
      <?php } elseif ($this->session->userdata('level') == 2) { ?>
        <a class="navbar-brand" href="<?= base_url('pegawai/dashboard/index'); ?>">SISTEM PENUGASAN DINAS TENAGA KERJA KABUPATEN KUDUS</a>
      <?php } elseif ($this->session->userdata('level') == 3) { ?>
        <a class="navbar-brand" href="<?= base_url('kadin/dashboard/index'); ?>">SISTEM PENUGASAN DINAS TENAGA KERJA KABUPATEN KUDUS</a>
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
          if ($this->session->userdata('level') == 1) {
            echo "Sekretariat Disnaker";
          } elseif ($this->session->userdata('level') == 2) {
            echo "Pegawai Disnaker";
          } elseif ($this->session->userdata('level') == 3) {
            echo "Kepala Disnaker";
          }
          ?>
        </div>
        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('nama'); ?></div>

      </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
      <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <?php if ($this->session->userdata('level') == 1) { ?>

          <li class="active">
            <a href="<?= base_url('sekre/dashboard'); ?>">
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
                <a href="<?= base_url('sekre/pegawai'); ?>">Pegawai</a>
              </li>
              <li>
                <a href="<?= base_url('sekre/surat'); ?>">Surat</a>
              </li>
              <li>
                <a href="<?= base_url('sekre/jadwal'); ?>">Jadwal </br> Penugasan</a>
              </li>

              <li>
                <a href="<?= base_url('sekre/absensi'); ?>">Absensi</a>
              </li>
              <li>
                <a href="<?= base_url('sekre/pengguna'); ?>">Pengguna</a>
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
                <a href="<?= base_url('sekre/laporan/pegawai'); ?>">Pegawai</a>
              </li>
              <li>
                <a href="<?= base_url('sekre/laporan/surat'); ?>">Surat</a>
              </li>
              <li>
                <a href="<?= base_url('sekre/laporan/absensi'); ?>">Absensi</a>
              </li>
            </ul>
          </li>

        <?php } elseif ($this->session->userdata('level') == 2) { ?>

          <li class="active">
            <a href="<?= base_url('pegawai/dashboard'); ?>">
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
                <a href="<?= base_url('pegawai/absensi'); ?>">Absensi</a>
              </li>
            </ul>
          </li><?php } elseif ($this->session->userdata('level') == 3) { ?>

          <li class="active">
            <a href="<?= base_url('kadin/dashboard'); ?>">
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
                <a href="<?= base_url('kadin/surat'); ?>">Surat</a>
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
                <a href="<?= base_url('kadin/laporan/pegawai'); ?>">Pegawai</a>
              </li>
              <li>
                <a href="<?= base_url('kadin/laporan/surat'); ?>">Surat</a>
              </li>
              <li>
                <a href="<?= base_url('kadin/laporan/absensi'); ?>">Absensi</a>
              </li>
            </ul>
          </li>
        <?php } ?>

      </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
      <div class="copyright">
        &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
      </div>
      <div class="version">
        <b>Version: </b> 1.0.5
      </div>
    </div>
    <!-- #Footer -->
  </aside>
  <!-- #END# Left Sidebar -->

  <!-- #END# Right Sidebar -->
</section>