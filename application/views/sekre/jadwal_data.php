<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Jadwal Penugasan 
                        </h2>
                        
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
                                        <th>Jadwal</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($pegawai as $peg) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><a href="<?= base_url('sekre/jadwal/pegawai/') . $peg->id ?>"><?= $peg->nip ?></a></td>
                                            <td><?= $peg->nama ?></td>
                                            <td><?= $peg->jabatan ?></td>
                                            <td><?= $peg->penempatan ?></td>

                                            <td>
                                                <a href="<?= base_url('sekre/jadwal/pegawai/') .  $peg->id?>" class="btn btn-success waves-effect" >
                                                    <i class="material-icons">remove_red_eye</i>
                                                    <span>Lihat</span>
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
</section>