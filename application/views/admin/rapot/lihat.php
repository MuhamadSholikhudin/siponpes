<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Rapot</h2>
        </div>
        <?php
        $id_santri = $santri->id_santri;
        $kelas = $santri->kelas;
   

        $cari_rapot= $this->db->query("SELECT * FROM absensi JOIN jadwal ON absensi.id_jadwal = jadwal.id_jadwal WHERE absensi.id_santri = $id_santri AND jadwal.id_kelas = $kelas");
       ?>

<!-- cari santri -->

<!-- cari kelas -->


        <?php
        if ($cari_rapot->num_rows() > 0) {
            $ada_rapot = $cari_rapot->row();
        ?>
            <div class="card">
                <div class="col-lg-12">
                    <h2 class="text-center">LAPORAN HASIL BELAJAR</h2>
                </div>
                <div class="row ">
                    <div class="col-lg-6 pl-4">
                        <tr>
                            <td>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama
                            </td>
                            <td>
                                :
                            </td>
                            <td>

                                <?php
                                $nama_santri = $this->db->query("SELECT * FROM santri JOIN daftar ON santri.id_daftar = daftar.id_daftar WHERE santri.id_santri = $id_santri")->row();
                                echo $nama_santri->nama_lengkap;
                                ?>

                            </td>
                        </tr>
                    </div>
                    <div class="col-lg-6">
                        <tr>
                            <td>Kelas </td>
                            <td>:</td>
                            <td>
                                <?php
                                $tampil_kelas = $this->db->query("SELECT * FROM kelas  WHERE id_kelas = $kelas")->row();
                                echo  $tampil_kelas->kelas;
                                ?>

                            </td>
                        </tr>
                    </div>
                </div>


                <div class="header">
                    <h2>
                        1. Materi Pokok
                    </h2>

                </div>
                <div class="body table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Materi</th>
                                <th>Angka</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $tampil_pelajaran = $this->db->query("SELECT * FROM absensi LEFT JOIN jadwal ON absensi.id_jadwal = jadwal.id_jadwal JOIN pelajaran ON jadwal.id_pelajaran = pelajaran.id_pelajaran WHERE absensi.id_santri = $id_santri AND jadwal.id_kelas = $kelas AND pelajaran.jenis = 'Materi' GROUP BY pelajaran.id_pelajaran");
                            $no = 0;
                            $rata_rata = 0;
                            ?>
                            <?php
                            if ($tampil_pelajaran->num_rows() > 0) {
                            ?>

                                <?php foreach ($tampil_pelajaran->result() as $tp) : ?>
                                    <tr>
                                        <td><?= $no++ + 1 ?></td>
                                        <td>
                                            <?php
                                            $t_pelajaran = $this->db->query("SELECT * FROM pelajaran  WHERE id_pelajaran = $tp->id_pelajaran AND jenis = 'Materi' ")->row();

                                            ?>
                                            <?= $t_pelajaran->nama_pelajaran ?>

                                        </td>
                                        <td>
                                            <?php
                                            $cari_nilai = $this->db->query("SELECT COALESCE(SUM(nilai), 0) as jumlah, COUNT(nilai) as banyak FROM nilai JOIN jadwal ON nilai.id_jadwal = jadwal.id_jadwal WHERE nilai.id_santri = $id_santri AND jadwal.id_pelajaran = $tp->id_pelajaran");
                                            if ($cari_nilai->num_rows() > 0) {
                                                $t_nilai = $cari_nilai->row();
                                                $jumlah = $t_nilai->jumlah;
                                                $banyak = $t_nilai->banyak;
                                                if ($jumlah == 0) {
                                                    $rata = ceil($banyak);
                                                } else {
                                                    $rata = ceil($jumlah / $banyak);
                                                }
                                            } else {
                                                // $jumlah = 0;
                                                // $banyak = 0;
                                                $rata = 0;
                                            }
                                            $rata_rata += $rata;
                                            // $n = $cari_nilai->num_rows();
                                            // $t_nilai = $cari_nilai->row();
                                            ?>
                                            <?= $rata ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($rata >= 90 and $rata <= 100) {
                                                echo 'Sangat Baik';
                                            } elseif ($rata >= 65 and $rata <= 89) {
                                                echo 'Baik';
                                            } elseif ($rata >= 60 and $rata <= 64) {
                                                echo 'Cukup';
                                            } elseif ($rata >= 21 and $rata <= 59) {
                                                echo 'Kurang';
                                            } elseif ($rata >= 0 and $rata <= 20) {
                                                echo 'Sangat Kurang';
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td>JUMLAH</td>
                                    <td></td>
                                    <td><?= $rata_rata ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>RATA-RATA</td>
                                    <td></td>
                                    <td><?= $rata_rata / count($tampil_pelajaran->result()) ?></td>
                                    <td></td>
                                </tr>
                            <?php
                            } else { ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>


                <div class="header">
                    <h2>
                        2. Konsep dan Prantikum
                    </h2>
                </div>
                <div class="body table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Materi</th>
                                <th>Angka</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $tampil_pelajaran_p = $this->db->query("SELECT * FROM absensi LEFT JOIN jadwal ON absensi.id_jadwal = jadwal.id_jadwal JOIN pelajaran ON jadwal.id_pelajaran = pelajaran.id_pelajaran WHERE absensi.id_santri = $id_santri AND jadwal.id_kelas = $kelas AND pelajaran.jenis = 'Konsep dan Praktikum' GROUP BY pelajaran.id_pelajaran");
                            $no = 0;
                            $rata_rata = 0;
                            ?>
                            <?php
                            if ($tampil_pelajaran_p->num_rows() > 0) {
                            ?>

                                <?php foreach ($tampil_pelajaran_p->result() as $tp) : ?>
                                    <tr>
                                        <td><?= $no++ + 1 ?></td>
                                        <td>
                                            <?php
                                            $t_pelajaran = $this->db->query("SELECT * FROM pelajaran  WHERE id_pelajaran = $tp->id_pelajaran AND jenis = 'Konsep dan Praktikum' ")->row();

                                            ?>
                                            <?= $t_pelajaran->nama_pelajaran ?>

                                        </td>
                                        <td>
                                            <?php
                                            $cari_nilai = $this->db->query("SELECT COALESCE(SUM(nilai), 0) as jumlah, COUNT(nilai) as banyak FROM nilai JOIN jadwal ON nilai.id_jadwal = jadwal.id_jadwal WHERE nilai.id_santri = $id_santri AND jadwal.id_pelajaran = $tp->id_pelajaran");
                                            if ($cari_nilai->num_rows() > 0) {
                                                $t_nilai = $cari_nilai->row();
                                                $jumlah = $t_nilai->jumlah;
                                                $banyak = $t_nilai->banyak;
                                                if ($jumlah == 0) {
                                                    $rata = ceil($banyak);
                                                } else {
                                                    $rata = ceil($jumlah / $banyak);
                                                }
                                            } else {
                                                // $jumlah = 0;
                                                // $banyak = 0;
                                                $rata = 0;
                                            }
                                            $rata_rata += $rata;
                                            // $n = $cari_nilai->num_rows();
                                            // $t_nilai = $cari_nilai->row();
                                            ?>
                                            <?= $rata ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($rata >= 90 and $rata <= 100) {
                                                echo 'Sangat Baik';
                                            } elseif ($rata >= 65 and $rata <= 89) {
                                                echo 'Baik';
                                            } elseif ($rata >= 60 and $rata <= 64) {
                                                echo 'Cukup';
                                            } elseif ($rata >= 21 and $rata <= 59) {
                                                echo 'Kurang';
                                            } elseif ($rata >= 0 and $rata <= 20) {
                                                echo 'Sangat Kurang';
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td>JUMLAH</td>
                                    <td></td>
                                    <td><?= $rata_rata ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>RATA-RATA</td>
                                    <td></td>
                                    <td><?= $rata_rata / count($tampil_pelajaran_p->result()) ?></td>
                                    <td></td>
                                </tr>
                            <?php
                            } else { ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>

                <div class="header">
                    <h2 class="text-left">3.Sikap dan Prilaku</h2>
                </div>
                <div class="body table-responsive">
                    <?php
                    $cari_sikap = $this->db->query("SELECT COALESCE(AVG(ketaatan), 0) as ketaatan, COALESCE(AVG(ketakdiman), 0) as ketakdiman, COALESCE(AVG(kedisiplinan), 0) as kedisiplinan, COALESCE(AVG(kerapian), 0) as kerapian, COALESCE(AVG(kesemangatan), 0) as kesemangatan, COALESCE(AVG(partisipasi), 0) as partisipasi, COALESCE(AVG(etika), 0) as etika, COALESCE(AVG(kerjasama), 0) as kerjasama, COALESCE(AVG(kelengkapan_catatan), 0) as kelengkapan_catatan, COUNT(id_sikap_dan_prilaku) as banyak FROM sikap_dan_prilaku WHERE id_santri = $id_santri AND kelas = $kelas");
                    if ($cari_sikap->num_rows() > 0) {
                        $t_sikap = $cari_sikap->row();
                        $banyak = $t_sikap->banyak;
                        $ketaatan = ceil($t_sikap->ketaatan);
                        $ketakdiman = ceil($t_sikap->ketakdiman);
                        $kedisiplinan = ceil($t_sikap->kedisiplinan);
                        $kerapian = ceil($t_sikap->kerapian);
                        $kesemangatan = ceil($t_sikap->kesemangatan);
                        $partisipasi = ceil($t_sikap->partisipasi);
                        $etika = ceil($t_sikap->etika);
                        $kerjasama = ceil($t_sikap->kerjasama);
                        $kelengkapan_catatan = ceil($t_sikap->kelengkapan_catatan);
                        if ($banyak == 0) {
                            $rata = ceil($banyak);
                        } else {


                            $rata = ceil(($ketaatan + $ketakdiman + $kedisiplinan + $kerapian + $kesemangatan + $partisipasi + $etika + $kerjasama + $kelengkapan_catatan) / $banyak);
                        }
                    } else {
                        $ketaatan = 0;
                        $ketakdiman = 0;
                        $kedisiplinan = 0;
                        $kerapian = 0;
                        $kesemangatan = 0;
                        $partisipasi = 0;
                        $etika = 0;
                        $kerjasama = 0;
                        $kelengkapan_catatan = 0;
                    }
                    // $rata_rata += $rata;

                    ?>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis</th>
                                <th>Penilaian</th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr>
                                <td>1</td>
                                <td>Ketaatan</td>
                                <td>
                                    <?php
                                    if ($ketaatan >= 90 and $ketaatan <= 100) {
                                        echo 'Sangat Baik';
                                    } elseif ($ketaatan >= 65 and $ketaatan <= 89) {
                                        echo 'Baik';
                                    } elseif ($ketaatan >= 60 and $ketaatan <= 64) {
                                        echo 'Cukup';
                                    } elseif ($ketaatan >= 21 and $ketaatan <= 59) {
                                        echo 'Kurang';
                                    } elseif ($ketaatan >= 0 and $ketaatan <= 20) {
                                        echo 'Sangat Kurang';
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Keta’dhiman</td>
                                <td>
                                    <?php
                                    if ($ketakdiman >= 90 and $ketakdiman <= 100) {
                                        echo 'Sangat Baik';
                                    } elseif ($ketakdiman >= 65 and $ketakdiman <= 89) {
                                        echo 'Baik';
                                    } elseif ($ketakdiman >= 60 and $ketaatan <= 64) {
                                        echo 'Cukup';
                                    } elseif ($ketakdiman >= 21 and $ketakdiman <= 59) {
                                        echo 'Kurang';
                                    } elseif ($ketakdiman >= 0 and $ketakdiman <= 20) {
                                        echo 'Sangat Kurang';
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Kedisiplinan</td>
                                <td>
                                    <?php
                                    if ($kedisiplinan >= 90 and $kedisiplinan <= 100) {
                                        echo 'Sangat Baik';
                                    } elseif ($kedisiplinan >= 65 and $kedisiplinan <= 89) {
                                        echo 'Baik';
                                    } elseif ($kedisiplinan >= 60 and $kedisiplinan <= 64) {
                                        echo 'Cukup';
                                    } elseif ($kedisiplinan >= 21 and $ketakdiman <= 59) {
                                        echo 'Kurang';
                                    } elseif ($kedisiplinan >= 0 and $kedisiplinan <= 20) {
                                        echo 'Sangat Kurang';
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Kerapian</td>
                                <td>
                                    <?php
                                    if ($kerapian >= 90 and $kerapian <= 100) {
                                        echo 'Sangat Baik';
                                    } elseif ($kerapian >= 65 and $kerapian <= 89) {
                                        echo 'Baik';
                                    } elseif ($kerapian >= 60 and $kerapian <= 64) {
                                        echo 'Cukup';
                                    } elseif ($kerapian >= 21 and $kerapian <= 59) {
                                        echo 'Kurang';
                                    } elseif ($kerapian >= 0 and $kerapian <= 20) {
                                        echo 'Sangat Kurang';
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>Kesemangatan</td>
                                <td>
                                    <?php
                                    if ($kesemangatan >= 90 and $kesemangatan <= 100) {
                                        echo 'Sangat Baik';
                                    } elseif ($kesemangatan >= 65 and $kesemangatan <= 89) {
                                        echo 'Baik';
                                    } elseif ($kesemangatan >= 60 and $kesemangatan <= 64) {
                                        echo 'Cukup';
                                    } elseif ($kesemangatan >= 21 and $kesemangatan <= 59) {
                                        echo 'Kurang';
                                    } elseif ($kesemangatan >= 0 and $kesemangatan <= 20) {
                                        echo 'Sangat Kurang';
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>Partisipasi dalam kegiatan pembelajaran</td>
                                <td>
                                    <?php
                                    if ($partisipasi >= 90 and $partisipasi <= 100) {
                                        echo 'Sangat Baik';
                                    } elseif ($partisipasi >= 65 and $partisipasi <= 89) {
                                        echo 'Baik';
                                    } elseif ($partisipasi >= 60 and $partisipasi <= 64) {
                                        echo 'Cukup';
                                    } elseif ($partisipasi >= 21 and $partisipasi <= 59) {
                                        echo 'Kurang';
                                    } elseif ($partisipasi >= 0 and $partisipasi <= 20) {
                                        echo 'Sangat Kurang';
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>Etika terhadap teman sejawat</td>
                                <td>
                                    <?php
                                    if ($etika >= 90 and $etika <= 100) {
                                        echo 'Sangat Baik';
                                    } elseif ($etika >= 65 and $etika <= 89) {
                                        echo 'Baik';
                                    } elseif ($etika >= 60 and $etika <= 64) {
                                        echo 'Cukup';
                                    } elseif ($etika >= 21 and $etika <= 59) {
                                        echo 'Kurang';
                                    } elseif ($etika >= 0 and $etika <= 20) {
                                        echo 'Sangat Kurang';
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>Kerjasama dalam kelompok</td>
                                <td>
                                    <?php
                                    if ($kerjasama >= 90 and $kerjasama <= 100) {
                                        echo 'Sangat Baik';
                                    } elseif ($kerjasama >= 65 and $kerjasama <= 89) {
                                        echo 'Baik';
                                    } elseif ($kerjasama >= 60 and $kerjasama <= 64) {
                                        echo 'Cukup';
                                    } elseif ($kerjasama >= 21 and $kerjasama <= 59) {
                                        echo 'Kurang';
                                    } elseif ($kerjasama >= 0 and $kerjasama <= 20) {
                                        echo 'Sangat Kurang';
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>9</td>
                                <td>Kelengkapan dan kerapian buku dan catatan</td>
                                <td>
                                    <?php
                                    if ($kelengkapan_catatan >= 90 and $kelengkapan_catatan <= 100) {
                                        echo 'Sangat Baik';
                                    } elseif ($kelengkapan_catatan >= 65 and $kelengkapan_catatan <= 89) {
                                        echo 'Baik';
                                    } elseif ($kelengkapan_catatan >= 60 and $kelengkapan_catatan <= 64) {
                                        echo 'Cukup';
                                    } elseif ($kelengkapan_catatan >= 21 and $kelengkapan_catatan <= 59) {
                                        echo 'Kurang';
                                    } elseif ($kelengkapan_catatan >= 0 and $kelengkapan_catatan <= 20) {
                                        echo 'Sangat Kurang';
                                    }
                                    ?>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>


                <div class="header">
                    <h2 class="text-left">4. Keputusan Kelas</h2>
                </div>
                <div class="body table-responsive">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Materi</th>
                                <th>Angka</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php
        } else {
        ?>

        <?php
        }
        ?>
     </div>
 

</section>