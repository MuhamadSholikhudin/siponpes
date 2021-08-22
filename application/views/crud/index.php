<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">

        <!-- Alamat menuju Halaman tambah -->
        <a href="<?= base_url('crud/tambah') ?>" class="btn btn-primary mt-3">Tambah</a>

        <h4>Data Crud Nama_tabel</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>

                <!-- foreach digunakan menampilkan data dari controller yang di tampung -->
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <tr>
                        <td>
                            <a href="<?= base_url('crud/ubah/') . $mhs->nim ?>">
                                <?= $no++ ?>
                            </a>
                        </td>
                        <td><?= $mhs->nim ?></td>
                        <td><?= $mhs->nama ?></td>
                        <td>
                            <a href="<?= base_url('crud/ubah/') . $mhs->nim ?>">
                                Ubah
                            </a>
                            |
                            <a href="<?= base_url('crud/hapus/') . $mhs->nim ?>">
                                Hapus
                            </a>
                         
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>

        </table>
    </div>
</body>

</html>