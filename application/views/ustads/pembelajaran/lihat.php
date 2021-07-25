<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>PEMBELAJARAN</h2>
        </div>
        <?php
        $id_pengguna = $this->session->userdata('id_pengguna');
        ?>

        <table class="table table-bordered table-striped" border="1">
            <thead>
                <tr>
                    <th> No </th>
                    <th>Materi Belajar</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($pembelajaran as $pem) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $pem->materi_belajar ?></td>
                        <td>
                            <?= longdate_indo($pem->tanggal) ?>
                        </td>
                        <td>
                            <?= $pem->waktu ?>
                        </td>
                                               
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

    </div>


</section>