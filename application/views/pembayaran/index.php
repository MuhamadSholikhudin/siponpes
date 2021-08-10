<section class="content">

    <div class="container-fluid">

        <div class="block-header">

            <h2>PEMBAYARAN</h2>

        </div>

        <!-- Basic Examples -->

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">

                    <div class="header">

                        <button class="btn btn-default waves-effect m-r-20" type="button" data-target="#defaultModal" data-toggle="modal"> Tambah pembayaran</button>

                        <div tabindex="-1" class="modal fade" id="defaultModal" role="dialog" style="display: none;">

                            <div class="modal-dialog modal-lg" role="document">

                                <div class="modal-content">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <div class="card">

                                            <div class="header">

                                                <h2>

                                                    TAMBAH PEMBAYARAN

                                                </h2>

                                            </div>

                                            <div class="body">

                                                <form action="<?= base_url('admin/pembayaran/aksi_tambah') ?>" method="POST" enctype="multipart/form-data">



                                                    <!-- <label for="id_pelajaran">Id Pelajaran </label> -->

                                                    <!-- <div class="form-group">

                                                        <div class="form-line">

                                                            <input type="text" name="id_pelajaran" id="id_pelajaran" class="form-control no-resize" required>

                                                        </div>

                                                    </div> -->
                                                    <label for="id_daftar">Pendaftaran</label>
                                                    <div class="form-group">
                                                        <select class="selectpicker form-line" name="id_daftar" id="id_daftar">
                                                            <?php foreach ($pendaftaran as $df) : ?>
                                                                <option value="<?= $df->id_daftar ?>"><?= $df->nama_lengkap . ' / ' . $df->kabupaten  ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <label for="nama_pendaftar">Nama Pendafatar</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="nama_pendaftar" type="text" name="nama_pendaftar" placeholder="Id pendaftar">
                                                        </div>
                                                    </div>
                                             

                                                    <label for="jumlah">Jumlah</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="jumlah" type="text" name="jumlah" placeholder="Jumlah yang di bayarkan">
                                                        </div>
                                                    </div>
                                                    <label for="tanggal">Tanggal</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="tanggal" type="date" name="tanggal" placeholder="Enter your password">
                                                        </div>
                                                    </div>
                                                    <!-- <label for="status">Status</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="status" type="text" name="status" placeholder="Jumlah yang di bayarkan">
                                                        </div>
                                                    </div> -->

                                                    <label for="status">Status</label>
                                                    <div class="form-group">
                                                        <select class="selectpicker form-line" name="status" id="status">
                                                            <option value="Lunas">Lunas</option>
                                                            <option value="Belum Lunas">Belum Lunas</option>
                                                        </select>
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

                                <h3>DATA PEMBAYARAN</h3>
                                <?php
                                $teks = "Nama saya Deny. saya seorang pelajar di SMA 1. Hobi saya adalah musik";
                                $pecah = explode(" ", $teks);
                                echo  date('Y');


                                ?>
                            </div>

                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jumlah</th>
                                            <th>Status</th>
                                            <th>tanggal</th>
                                            <th>Ubah</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($pembayaran as $peng) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <!-- <td><a href="<?= base_url('admin/lihat_pengurus/') . $peng->id_pembayaran ?>"><?= $peng->nama ?></a></td> -->
                                                <td>

                                                    <?php
                                                    $nama_lengkap = $this->db->query(" SELECT * FROM daftar WHERE id_daftar = $peng->id_daftar")->row();
                                                    ?>
                                                    <?= $nama_lengkap->nama_lengkap ?>

                                                </td>
                                                <td><?= $peng->jumlah ?></td>
                                                <td><?= $peng->status ?></td>
                                                <td><?= $peng->tanggal ?></td>
                                                <td><a href="<?= base_url('admin/pembayaran/ubah/' . $peng->id_pembayaran) ?>" class="btn btn-warning waves-effect" type="button">
                                                        <i class="material-icons">edit</i>
                                                        <span>Edit</span>
                                                    </a>
                                                </td>
                                                <td><a href="<?= base_url('admin/pembayaran/hapus/' . $peng->id_pembayaran) ?>" class="btn btn-danger waves-effect" type="button">
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