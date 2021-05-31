<div class="container-fluid">
    <h4>Detail Pesanan<div class="btn btn-sm btn-success">No. Invoice <?= $invoice->id; ?></div>
    </h4>

    <table class="table table-bordered table-striped">
        <tr>
            <th>ID Barang</th>
            <th>Nama Produk</th>
            <th>Jumlah Pesanan</th>
            <th>Harga Satuan</th>
            <th>Sub Total</th>
        </tr>
        <?php $total = 0;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;
        ?>
            <tr>
                <th><?= $psn->id_brg; ?></th>
                <th><?= $psn->nama_brg; ?></th>
                <th><?= $psn->jumlah; ?></th>
                <th><?= number_format($psn->harga, 0, ',', '.'); ?></th>
                <th><?= number_format($subtotal, 0, ',', '.'); ?></th>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3" align="right"></td>
            <td>Grand Total</td>
            <td align="right"><?= number_format($total, 0, ',', '.'); ?></td>
        </tr>
    </table>

    <a class="btb btn-sm btn-primary" href="<?= base_url('admin/invoice/index'); ?>">Kembali</a>
</div>