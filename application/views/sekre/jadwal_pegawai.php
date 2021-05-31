<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="col-sm-4">
                            <?php foreach ($surat as $srt) :
                                if ($srt->status_surat > 2) { ?>

                                <?php    } elseif ($srt->status_surat == 2) { ?>

                                    <button class="btn btn-default waves-effect m-r-20" type="button" data-target="#defaultModal" data-toggle="modal"> TAMBAH JADWAL PEGAWAI</button>
                            <?php    }

                            endforeach; ?>
                        </div>
                        <div class="col-sm-8">
                            <?php foreach ($pegawai as $peg) : ?>
                                Jadwal Penugasan <?= $peg->nama ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6"></div>

                    <p>
                    </p>
                    <br>
                    <div tabindex="-1" class="modal fade" id="defaultModal" role="dialog" style="display: none;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                TAMBAH JADWAL PEGAWAI
                                            </h2>
                                        </div>

                                        <div class="body">
                                            <form action="<?= base_url('sekre/jadwal/tambah_aksi') ?>" method="POST" enctype="multipart/form-data">
                                                <?php foreach ($pegawai as $peg) : ?>
                                                    <label for="nip">NIP</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="nip" type="text" value="<?= $peg->nip ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <label for="nama">Nama</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="nama" type="text" value="<?= $peg->nama ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <label for="tgl_berlaku">Tanggal tugas</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="tgl_berlaku" type="date" name="jadwal">
                                                        </div>
                                                    </div>


                                                    <input class="form-control" id="no_surat" type="hidden" name="no_surat" value="<?= $peg->no_surat ?>">
                                                    <input class="form-control" id="id" type="hidden" name="id" value="<?= $peg->id ?>">
                                                    <input class="form-control" id="nip" type="hidden" name="nip" value="<?= $peg->nip ?>">
                                                <?php endforeach; ?>

                                                <?php $endjad = $this->db->query(" SELECT id_jadwal FROM jadwal_penugasan ORDER BY id_jadwal DESC");
                                                $idja = $endjad->row();

                                                ?>
                                                <input class="form-control" id="id_jadwalabsensi" type="hidden" name="id_jadwalabsensi" value="<?= $idja->id_jadwal + 1 ?>">

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
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Tanggal </th>
                                        <th>Status</th>
                                        <th>Ubah</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($jadwal as $jad) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $jad->nip ?></td>
                                            <td><?= $jad->jadwal ?></td>
                                            <td>
                                                <?= $jad->status_jadwal ?>
                                        </td>
                                            <td>

                                                <?php foreach ($surat as $srt) :
                                                    if ($srt->status_surat > 2) { ?>
                                                        <button class="btn bg-light-green waves-effect">
                                                            <i class="material-icons">edit</i>
                                                            <span>Edit</span>
                                                        </button>
                                                    <?php    } elseif ($srt->status_surat == 2) { ?>
                                                        <a href="<?= base_url('sekre/jadwal/pegawai_edit/') . $jad->id_jadwal ?>" class="btn bg-light-green waves-effect">
                                                            <i class="material-icons">edit</i>
                                                            <span>Edit</span>
                                                        </a>
                                                <?php    }

                                                endforeach; ?>

                                            </td>
                                            <td>
                                                <?php foreach ($surat as $srt) :
                                                    if ($srt->status_surat > 2) { ?>
                                                        <button class="btn btn-danger waves-effect">
                                                            <i class="material-icons">delete_forever</i>
                                                            <span>Hapus</span>
                                                        </button>
                                                    <?php    } elseif ($srt->status_surat == 2) { ?>
                                                        <a href="<?= base_url('sekre/jadwal/pegawai_hapus/') . $jad->id . '/' . $jad->id_jadwal  ?>" class="btn btn-danger waves-effect" type="button">
                                                            <i class="material-icons">delete_forever</i>
                                                            <span>Hapus</span>
                                                        </a>
                                                <?php    }

                                                endforeach; ?>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <br>
                        <?php foreach ($pegawai as $peg) : ?>
                            <a href="<?= base_url('sekre/jadwal/data/' . $peg->no_surat) ?>">
                                <button class="btn btn-success waves-effect m-r-20" type="button">Kembali</button>
                            </a>
                        <?php endforeach; ?>

                    </div>

                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->

    </div>
</section>