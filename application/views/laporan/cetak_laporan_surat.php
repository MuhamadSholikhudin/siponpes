<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan Surat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>


    <div class="body">
        <div class="row">


            <div class="col-sm-12 mt-4 mb-4 text-center">
                <strong>
                    <h4>Laporan Data Surat Penugasan Dinas Tenaga Kerja Perindustrian,</h4>
                    <h4>Koperasi dan Usaha Menengah Kabupaten Kudus</h4>
                </strong>
            </div>

            <div class="col-sm-2">Unit Kerja &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</div>
            <div class="col-sm-10">Satuan Kerja UPT BLK Kudus</div>

            <div class="table-responsive mt-3 p-3">
                <table class="table table-bordered  ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Surat</th>
                            <th>Judul Surat</th>
                            <th>Isi Surat</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($surat as $sur) : ?>

                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $sur->no_surat ?></td>
                                <td><?= $sur->judul ?></td>
                                <td><?= $sur->isi_surat ?></td>
                                <td><?= $sur->keterangan ?></td>
                                <td><?= $sur->tgl_buat ?></td>
                                <td>
                                    <!-- <a target="blank" href="<?= base_url('sekre/laporan/cetak_surat/' . $sur->no_surat) ?>" target="blank" class="btn btn-warning"><i class="material-icons">print</i> Cetak</a> -->


                                    <?php if ($sur->status_surat == 0) { ?>
                                        Ajukan
                                    <?php } elseif ($sur->status_surat == 1) { ?>
                                        Di Ajukan
                                    <?php } elseif ($sur->status_surat == 2) { ?>

                                        Di ACC
                                        </button>
                                    <?php } elseif ($sur->status_surat == 3) { ?>

                                        Dalam Process
                                        </button>
                                    <?php } elseif ($sur->status_surat == 4) { ?>

                                        <span>Selesai

                                        <?php } ?>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>

            <div class="col-sm-4">

            </div>
            <div class="col-sm-4"></div>

            <div class="col-sm-4">
                <?php foreach ($kadin as $kad) : ?>
                    <div>
                        <h5 class="text-center">Kudus, <?= date('d-m-Y') ?> </h5>
                        <h5 class="text-center">Kepala Dinas BLK Kudus</h5>
                    </div>
                    <div class="mb-3">
                        <br>
                        <br>

                    </div>
                    <div>
                        <h5 class="text-center"><u><?= $kad->nama ?></u> </h5>
                        <h5 class="text-center">NIP :<?= $kad->username ?></h5>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<?php if ($this->session->userdata('level') == 1) { ?>
    <script>
        window.open('<?= base_url('sekre/laporan/surat') ?>', '_blank');
    </script>
<?php } elseif ($this->session->userdata('level') == 3) { ?>
    <script>
        window.open('<?= base_url('kadin/laporan/surat') ?>', '_blank');
    </script>
<?php } ?>
<script>
    window.print()
</script>

</html>