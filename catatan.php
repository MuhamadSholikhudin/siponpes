<?php
if ($kelengkapan_catatan >= 90 and $kelengkapan_catatan <= 100) {
    echo 'Sangat Baik';
} elseif ($kelengkapan_catatan >= 65 and $kelengkapan_catatan <= 89) {
    echo 'Baik';
} elseif ($kelengkapan_catatan >= 60 and $kelengkapan_catatan <= 64) {
    echo 'Cukup';
} elseif ($kelengkapan_catatan >= 21 and $kelengkapan_catatan <= 59) {
    echo 'Kurang';
} elseif ($kelengkapan_catatan >= 0 and $kelengkapan_catatan <= 20) {
    echo 'Sangat Kurang';
}
?>

<td>

    <?= $pem->id_santri ?>
</td>
<td><?= $pem->ketaatan ?></td>
<td>

    <?= $pem->ketaatan ?>

</td>
<td>
    <?= $pem->kerapian  ?>
</td>
<td>
    <?= $pem->kerapian  ?>
</td>
<td>
    <?= $pem->kesemangatan  ?>
</td>




$ketaatan = $ada_sikap->ketaatan;
$ketakdiman = $ada_sikap->ketakdiman;
$kedisiplinan = $ada_sikap->kedisiplinan;
$kerapian = $ada_sikap->kerapian;
$kesemangatan = $ada_sikap->kesemangatan;
$partisipasi = $ada_sikap->partisipasi;
$etika = $ada_sikap->etika);
$kerjasama = $ada_sikap->kerjasama;