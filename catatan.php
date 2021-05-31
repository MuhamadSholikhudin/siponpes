  <?php
    // LOGIKA
    if ($pendaftaran->tahun == $tahun) {
        $today = strtotime('now');
        $tglsls = strtotime($pendaftaran->tgl_sls_pendf);

        if ($today < $tglsls) {
            echo 'tr  link';
            if ('jika pengajuan kecamatan num_rows() == 1') {
                if ($pengajuan->status_pengajuan == 1) {
                    echo 'tr dengan status 1 un-acc';
                } elseif ($pengajuan->status_pengajuan == 0) {
                    echo 'tr dengan status 0 ada buttton edit acc batalkan';
                }
            } else {
                echo 'tr dengan link input pengajuan';
            }
        } else {
            echo 'tr tanppa link';
        }
    } else {
        echo '<tr>
                <td colspan="5" class="text-center"> Maaf Pengajuan pendaftaran lomba desa belum tersedia</td>
            </tr>';
    }
    ?>

  <tr>

      <td><?= $pendaftaran->id_pendf ?></td>
      <td><a href="<?= base_url('admin_kecamatan/pengajuan/tambah') ?>"><?= $pendaftaran->judul ?></a></td>
      <td><?= $pendaftaran->status_pendf ?></td>
      <td><?= $pendaftaran->tgl_sls_pendf ?></td>

      <td><?= 'Contoh Desa' ?></td>
      <td><?= $pendaftaran->tahun ?></td>
      <td>
          <div class="btn btn-primary btn-btn-sm">
              <i class="fas fa-check"></i>
          </div>
      </td>
      <td>
          <?= anchor('admin/data_barang/edit/' . $pendaftaran->id_pendf, '<div class="btn btn-success btn-btn-sm">
                        <i class="fa fa-edit"></i> </div>') ?>
      </td>
      <td><?= anchor('admin/data_barang/hapus/' . $pendaftaran->id_pendf, '<div class="btn btn-success btn-btn-sm">
                        <i class="fa fa-trash"></i> </div>') ?>
      </td>

  </tr>





  <?php
    // LOGIKA
    if ($pendaftaran->tahun == $tahun) {
        $today = strtotime('now');
        $tglsls = strtotime($pendaftaran->tgl_sls_pendf);

        if ($today > $tglsls) {
            echo 'tr  link';
            if ($penga_cek > 0) {
                if ($pengajuan->status_pengajuan == 1) {
                    echo 'tr dengan status 1 un-acc';
    ?>
                  <tr>
                      <td><?= $pendaftaran->id_pendf ?></td>
                      <td><a href="<?= base_url('admin_kecamatan/pengajuan/tambah') ?>"><?= $pendaftaran->judul ?></a></td>
                      <td><?= $pendaftaran->status_pendf ?></td>
                      <td><?= $pendaftaran->tgl_sls_pendf ?></td>

                      <td>tr dengan status 1 un-acc</td>
                      <td><?= $pendaftaran->tahun ?></td>
                      <td>

                      </td>
                      <td>
                          <?= anchor('admin/data_barang/edit/' . $pendaftaran->id_pendf, '<div class="btn btn-success btn-btn-sm">
                                        <i class="fa fa-edit"></i> </div>') ?>
                      </td>
                      <td><?= anchor('admin/data_barang/hapus/' . $pendaftaran->id_pendf, '<div class="btn btn-success btn-btn-sm">
                                        <i class="fas fa-exclamation-triangle"></i></div>') ?>
                      </td>
                  </tr>

              <?php   } elseif ($pengajuan->status_pengajuan == 0) {
                    echo 'tr dengan status 0 ada buttton edit acc batalkan';
                ?>
                  <tr>
                      <td><?= $pendaftaran->id_pendf ?></td>
                      <td><a href="<?= base_url('admin_kecamatan/pengajuan/tambah') ?>"><?= $pendaftaran->judul ?></a></td>
                      <td><?= $pendaftaran->status_pendf ?></td>
                      <td><?= $pendaftaran->tgl_sls_pendf ?></td>

                      <td>tr dengan status 0 ada buttton edit acc batalkan</td>
                      <td><?= $pendaftaran->tahun ?></td>
                      <td>
                          <?= anchor('admin/data_barang/edit/' . $pendaftaran->id_pendf, '<div class="btn btn-success btn-btn-sm">
                                        <i class="fa fa-edit"></i> </div>') ?>
                      </td>
                      <td>
                          <div class="btn btn-primary btn-btn-sm">
                              <i class="fas fa-check"></i>
                          </div>
                      </td>
                      <td><?= anchor('admin/data_barang/hapus/' . $pendaftaran->id_pendf, '<div class="btn btn-success btn-btn-sm">
                                        <i class="fa fa-trash"></i></div>') ?>
                      </td>
                  </tr>

              <?php   }
            } else {
                echo 'tr dengan link input pengajuan'; ?>
              <tr>
                  <td><?= $pendaftaran->id_pendf ?></td>
                  <td><a href="<?= base_url('admin_kecamatan/pengajuan/tambah') ?>"><?= $pendaftaran->judul ?></a></td>
                  <td><?= $pendaftaran->status_pendf ?></td>
                  <td><?= $pendaftaran->tgl_sls_pendf ?></td>

                  <td>tr dengan link input pengajuan</td>
                  <td><?= $pendaftaran->tahun ?></td>

                  <td><?= anchor('admin/data_barang/hapus/' . $pendaftaran->id_pendf, '<div class="btn btn-success btn-btn-sm">
                                        <i class="fa fa-trash"></i> </div>') ?>
                  </td>
              </tr>

  <?php }
        } else {
            echo 'tr tanppa link';
        }
    } else {
        echo '<tr>
                <td colspan="5" class="text-center"> Maaf Pengajuan pendaftaran lomba desa belum tersedia</td>
            </tr>';
    }

    ?>

  INSERT INTO `wilayah` (`kecamatan`, `desa`) VALUES
  ('KALIWUNGU', 'BAKALANKRAPYAK'),
  ('KALIWUNGU', 'PRAMBATAN KIDUL'),
  ('KALIWUNGU', 'PRAMBATAN LOR'),
  ('KALIWUNGU', 'GARUNG KIDUL'),
  ('KALIWUNGU', 'SETROKALANGAN'),
  ('KALIWUNGU', 'BANGET'),
  ('KALIWUNGU', 'BLIMBING KIDUL'),
  ('KALIWUNGU', 'SIDOREKSO'),
  ('KALIWUNGU', 'GAMONG'),
  ('KALIWUNGU', 'KEDUNGDOWO'),
  ('KALIWUNGU', 'GARUNG LOR'),
  ('KALIWUNGU', 'KARANGAMPEL'),
  ('KALIWUNGU', 'MIJEN'),
  ('KALIWUNGU', 'KALIWUNGU'),
  ('KALIWUNGU', 'PAPRINGAN'),
  ('KOTA KUDUS', 'JANGGALAN'),
  ('KOTA KUDUS', 'DEMANGAN'),
  ('KOTA KUDUS', 'MLATI LOR'),
  ('KOTA KUDUS', 'NGANGUK'),
  ('KOTA KUDUS', 'KRAMAT'),
  ('KOTA KUDUS', 'DEMAAN'),
  ('KOTA KUDUS', 'LANGGARDALEM'),
  ('KOTA KUDUS', 'KAUMAN' ),
  ('KOTA KUDUS', 'DAMARAN' ),
  ('KOTA KUDUS', 'KRANDON' ),
  ('KOTA KUDUS', 'SINGOCANDI' ),
  ('KOTA KUDUS', 'GLANTENGAN' ),
  ('KOTA KUDUS', 'KALIPUTU' ),
  ('KOTA KUDUS', 'BARONGAN' ),
  ('KOTA KUDUS', 'BURIKAN' ),
  ('KOTA KUDUS', 'RENDENG' ),
  ('JATI', 'JETIS KAPUAN' ),
  ('JATI', 'TANJUNG KARANG' ),
  ('JATI', 'JATI WETAN' ),
  ('JATI', 'PASURUAN KIDUL' ),
  ('JATI', 'PASURUAN LOR' ),
  ('JATI', 'PLOSO' ),
  ('JATI', 'JATI KULON' ),
  ('JATI', 'GETAS PEJATEN' ),
  ('JATI', 'LORAM KULON' ),
  ('JATI', 'LORAM WETAN' ),
  ('JATI', 'JEPANG PAKIS' ),
  ('JATI', 'MEGAWON' ),
  ('JATI', 'NGEMBAL KULON' ),
  ('JATI', 'TUMPANG KRASAK' ),
  ('UNDAAN', 'WONOSOCO' ),
  ('UNDAAN', 'LAMBANGAN' ),
  ('UNDAAN', 'KALIREJO' ),
  ('UNDAAN', 'MEDINI' ),
  ('UNDAAN', 'SAMBUNG' ),
  ('UNDAAN', 'GLAGAHWARU' ),
  ('UNDAAN', 'KUTUK' ),
  ('UNDAAN', 'UNDAAN KIDUL' ),
  ('UNDAAN', 'UNDAAN TENGAH' ),
  ('UNDAAN', 'KARANG ROWO' ),
  ('UNDAAN', 'LARIKREJO' ),
  ('UNDAAN', 'UNDAAN LOR' ),
  ('UNDAAN', 'WATES' ),
  ('UNDAAN', 'NGEMPLAK' ),
  ('UNDAAN', 'TERANGMAS' ),
  ('UNDAAN', 'BERUGENJANG' ),
  ('MEJOBO', 'GULANG' ),
  ('MEJOBO', 'JEPANG' ),
  ('MEJOBO', 'PAYAMAN' ),
  ('MEJOBO', 'KIRIG' ),
  ('MEJOBO', 'TEMULUS' ),
  ('MEJOBO', 'KESAMBI' ),
  ('MEJOBO', 'JOJO' ),
  ('MEJOBO', 'HADIWARNO' ),
  ('MEJOBO', 'MEJOBO' ),
  ('MEJOBO', 'GOLANTEPUS' ),
  ('MEJOBO', 'TENGGELES' ),
  ('JEKULO', 'SADANG' ),
  ('JEKULO', 'BULUNG CANGKRING' ),
  ('JEKULO', 'BULUNG KULO' ),
  ('JEKULO', 'SIDOMULYO' ),
  ('JEKULO', 'GONDOHARUM' ),
  ('JEKULO', 'TERBAN' ),
  ('JEKULO', 'PLADEN' ),
  ('JEKULO', 'KLALING' ),
  ('JEKULO', 'JEKULO' ),
  ('JEKULO', 'HADIPOLO' ),
  ('JEKULO', 'HONGGOSOCO' ),
  ('JEKULO', 'TANJUNG REJO' ),
  ('BAE', 'DERSALAM' ),
  ('BAE', 'NGEMBAL REJO' ),
  ('BAE', 'KARANG BENER' ),
  ('BAE', 'GONDANG MANIS' ),
  ('BAE', 'PEDAWANG' ),
  ('BAE', 'BACIN' ),
  ('BAE', 'PANJANG' ),
  ('BAE', 'PEGANJARAN' ),
  ('BAE', 'PURWOREJO' ),
  ('BAE', 'BAE' ),
  ('GEBOG', 'GRIBIG' ),
  ('GEBOG', 'KLUMPIT' ),
  ('GEBOG', 'GETASRABI' ),
  ('GEBOG', 'PADURENAN' ),
  ('GEBOG', 'KARANG MALANG' ),
  ('GEBOG', 'BESITO' ),
  ('GEBOG', 'JURANG' ),
  ('GEBOG', 'GONDOSARI' ),
  ('GEBOG', 'KEDUNG SARI' ),
  ('GEBOG', 'MENAWAN' ),
  ('GEBOG', 'RAHTAWU' ),
  ('DAWE', 'SAMIREJO' ),
  ('DAWE', 'CENDONO' ),
  ('DAWE', 'MARGOREJO' ),
  ('DAWE', 'REJOSARI' ),
  ('DAWE', 'KANDANG MAS' ),
  ('DAWE', 'GLAGAH KULON' ),
  ('DAWE', 'TERGO' ),
  ('DAWE', 'CRANGGANG' ),
  ('DAWE', 'LAU' ),
  ('DAWE', 'PIJI' ),
  ('DAWE', 'PUYOH' ),
  ('DAWE', 'SOCO' ),
  ('DAWE', 'TERNADI' ),
  ('DAWE', 'KAJAR' ),
  ('DAWE', 'KUWUKAN' ),
  ('DAWE', 'DUKUH WARINGIN' ),
  ('DAWE', 'JAPAN' ),
  ('DAWE', 'COLO' );