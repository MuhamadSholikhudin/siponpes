<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan Pegawai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">


        <div class="row">
            <div class="col-sm-12 mt-4 mb-4 text-center">
                <strong>
                    <h4>Rekap Data Pegawai Dinas Tenaga Kerja Perindustrian,</h4>
                    <h4>Koperasi dan Usaha Menengah Kabupaten Kudus</h4>
                </strong>
            </div>

            <div class="col-sm-2">Unit Kerja &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</div>
            <div class="col-sm-10 ">Satuan Kerja UPT BLK Kudus</div>
            
            <div class="col-sm-12 mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>penempatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($user as $us) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $us->username ?></td>
                                <td><?= $us->nama ?></td>
                                <td><?= $us->jabatan ?></td>
                                <td><?= $us->penempatan ?></td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>

                    </tbody>
                </table>


                <div class="row">
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4">a</div>

                    <div class="col-sm-4">
                        <?php foreach ($kadin as $kad) : ?>
                            <div>
                                <h5 class="text-center">Kudus, <?= date('d-m-Y') ?> </h5>
                                <h5 class="text-center">Kepala Dinas BLK Kudus</h5>
                            </div>
                            <div class="mb-3">
                                <br>
                                <br>
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
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
    window.print()
</script>

</html>