<div class="container">

    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang">
        + Tambah Barang
    </button>
    <br>
    <table class="table table-border">
        <tr>
            <th>NO</th>
            <th>Nama Barang</th>
            <th>Katerangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3" text-center>Aksi</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($barang as $brg) : ?>
            <tr>

                <td><?= $no++ ?></td>
                <td><?= $brg->nama_brg ?></td>
                <td><?= $brg->keterangan ?></td>
                <td><?= $brg->kategori ?></td>
                <td><?= $brg->harga ?></td>
                <td><?= $brg->stok ?></td>
                <td>
                    <div class="btn btn-primary btn-btn-sm">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </td>
                <td>
                    <?= anchor('admin/data_barang/edit/' . $brg->id_brg, '<div class="btn btn-success btn-btn-sm">
                        <i class="fa fa-edit"></i> </div>') ?>
                </td>
                <td><?= anchor('admin/data_barang/hapus/' . $brg->id_brg, '<div class="btn btn-success btn-btn-sm">
                        <i class="fa fa-trash"></i> </div>') ?>
                </td>

            </tr>
        <?php endforeach; ?>
    </table>
</div>




<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/data_barang/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama_brg">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="keterangan" name="keterangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>

                        <div class="col-sm-10">
                            <select class="form-control" name="kategori" id="kategori">
                                <option value="Pakaian Pria">Pakaian Pria</option>
                                <option value="Pakaian wanita">Pakaian Wanita</option>
                                <option value="Pakaian Anak">Pakaian Anak</option>
                                <option value="Peralatan Olahraga">Peralatan Olahraga</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="stok" name="stok">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="gambar" name="gambar">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>