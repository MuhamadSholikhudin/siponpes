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
        <h5 class=" mt-3">Form Ubah Data Nama_tabel</h5>
        <form action="<?= base_url('crud/aksi_ubah') ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">Nim</label>
                <div class="col-sm-10">
                    <!--  name="nimbaru" digunakan untuk men set nim  -->
                    <input type="text" class="form-control" id="nim" name="nimbaru" value="<?= $mahasiswa->nim ?>">

                    <!-- name="nimlama" digunakan untuk kondisi pada where -->
                    <input type="hidden" class="form-control" id="nim" name="nimlama" value="<?= $mahasiswa->nim ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">nama</label>
                <div class="col-sm-10">

                    <!--  name="nama" digunakan untuk men set nama  -->
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa->nama ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">UBAH</button>
        </form>
    </div>
</body>

</html>