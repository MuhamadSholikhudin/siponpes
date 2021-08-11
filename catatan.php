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






elseif( $bulan[0] == "01){ echo "Januari"; } 
                                            elseif( $bulan[0] == "02){ echo "Februari"; } 
                                            elseif( $bulan[0] == "03){ echo "Maret"; } 
                                            elseif( $bulan[0] == "04){ echo "April"; } 
                                            elseif( $bulan[0] == "05){ echo "Mei"; } 
                                            elseif( $bulan[0] == "06){ echo "Juni"; } 
                                            elseif( $bulan[0] == "07){ echo "Juli"; } 
                                            elseif( $bulan[0] == "08){ echo "Agustus"; } 
                                            elseif( $bulan[0] == "09){ echo "September"; } 
                                            elseif( $bulan[0] == "10){ echo "Oktober"; } 
                                            elseif( $bulan[0] == "11){ echo "November"; } 
                                            elseif( $bulan[0] == "12){ echo "Desember"; } 