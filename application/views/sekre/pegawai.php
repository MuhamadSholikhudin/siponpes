<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4 class="text-center">
                            DATA PEGAWAI BERTUGAS
                        </h4>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>penempatan</th>
                                        <th>Ubah</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_pegawai as $us) : ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $us->nip ?></td>
                                            <td><?= $us->nama ?></td>
                                            <td><?= $us->jabatan ?></td>
                                            <td><?= $us->penempatan ?></td>
                                            <td>
                                                <a class="btn btn-warning waves-effect" href="<?= base_url('sekre/pegawai/edit/' . $us->id) ?>"><i class="material-icons">mode_edit</i></a>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger waves-effect" href="<?= base_url('sekre/pegawai/hapus/' . $us->id) ?>"><i class="material-icons">delete_forever</i></a>
                                            </td>

                                        </tr>
                                        <?php $no++; ?>
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
</section>