<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan Pegawai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymojad">
</head>

<body>
    <div class="container">


        <div class="row">
            <div class="col-sm-12 mt-4 mb-4 text-center">
                <strong>
                    <h4>DATA LAPORAN PENDAFTARAN BAITUL QUDUS</h4>
                </strong>
            </div>



            <div class="table-responsive">
            <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Tanggal daftar</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal lahir</th>
                                <th>Email</th>
                                <th>Nomor Wa</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($pendaftaran as $peng) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $peng->nama_lengkap ?></td>
                                    <td><?= $peng->alamat_tinggal ?></td>
                                    <td><?= $peng->tanggal_daftar ?></td>
                                    <td><?= $peng->tempat_lahir ?></td>
                                    <td><?= $peng->tanggal_lahir ?></td>
                                    <td><?= $peng->email ?></td>    
                                    <td><?= $peng->nomor_wa?></td>    
                                    <td>
                                    <?php
                                        if($peng->status == 0){
echo 'dikembalikan';
                                        }elseif($peng->status == 1){
                                            echo 'mendaftar';

                                        }elseif($peng->status == 2 ){
                                            echo 'diterima';

                                        }elseif($peng->status == 3){
                                            echo 'jadi santri';

                                        }else{
                                            echo 'enak';

                                        }
                                    ?>
                                    </td>    
             

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                            </table>
                            </div>
            </div>


            <div class="col-sm-4">

            </div>
            <div class="col-sm-4"></div>

            <div class="col-sm-4">
            <?php
            $kadin = $this->db->query("SELECT * FROM pengguna WHERE id_pengguna = 1")->result();
            ?>
                <?php foreach ($kadin as $kad) : ?>
                    <div>
                        <h5 class="text-center">Kudus, <?= date('d-m-Y') ?> </h5>
                        <h5 class="text-center">Ketua Ponpes Baitul Qudus</h5>
                    </div>
                    <div class="mb-3">
                        <br>
                        <br>
                    </div>
                    <div>
                        <h5 class="text-center"><u><?= $kad->nama ?></u> </h5>
                       
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

</body>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymojad"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymojad"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymojad"></script>
<script>
    window.print()
</script>

</html>