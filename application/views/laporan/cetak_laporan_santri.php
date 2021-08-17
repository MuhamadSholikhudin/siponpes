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
            <div class="text-center mb-3">
            <h4>LAPORAN DATA SANTRI 
                                    <?php
                                        if($hal[0] == 'kelas'){
                                            echo 'KELAS '. $kelas[0];
                                        }elseif($hal[0] == 'periode'){
                                            echo 'PERIODE '. $periode[0];
                                        }elseif($hal[0] == 'kelas_periode'){
                                            echo 'KELAS '. $kelas_periode[0]. 
                                            ' PERIODE '. $kelas_periode[1];
                                        }

                                    ?>          
            
            </h4>
            <h4>PONDOK PESANTREN BAITUL QUDUS</h4>
            <h4>PANJANG BAE KUDUS</h4>
        </div>
            </div>



            <div class="table-responsive">
            <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>

                            <tr>

                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>hakakses</th>
                                <th>Status</th>
                                <th>Kelas</th>
                                <th>Periode</th>
                            

                            </tr>

                        </thead>

                        <tbody>

                            <?php $no = 1; ?>
                            <?php foreach ($santri as $peng) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <!-- <td><a href="<?= base_url('admin/lihat_pengurus/') . $peng->id_santri ?>"><?= $peng->nama ?></a></td> -->
                                    <td>
                                        <?php
                                        $nama_lengkap = $this->db->query(" SELECT * FROM pendaftaran WHERE id_daftar = $peng->id_daftar")->row();
                                        ?>
                                        <?= $nama_lengkap->nama_lengkap ?>
                                    </td>
                                    <td><?= $peng->username ?></td>
                                    <td>
                                        <?php
                                        if ($peng->hakakses == 3) {
                                            echo 'Santri';
                                        }
                                        ?>
                                    </td>

                                    <td><?php
                                        if ($peng->status  == 1) {
                                            echo 'Aktif';
                                        } else {
                                            echo 'Tidak Aktif';
                                        }
                                        ?>

                                    </td>

                                    <td><?= $peng->kelas ?></td>
                                    <td><?= $peng->periodetahun ?></td>

                         
                          
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