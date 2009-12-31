<section class="content">
    <div class="container-fluid">
       <div class="card">
               <div class="body bg-white">
                            <div class="text-center mb-3">
                                <h4>LAPORAN DATA USTADS</h4>
                                <h4>PONDOK PESAMTREN BAITUL QUDUS</h4>
                                <h4>PANJANG BAE KUDUS</h4>
                            </div>
                            <div class="table-responsive   text-dark">
                            <table class="table table-bordered ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>hakakses</th>
                                    <th>Status</th>
                                    
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($ustads as $peng) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $peng->nama ?></td>
                                        <td><?= $peng->username ?></td>
                                        <td><?= $peng->hakakses ?></td>
                                        <td><?= $peng->status ?></td>
                                      
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        
                                </table>
                            </div>
                            <div class="text-right">
                                kudus, <?= mediumdate_indo(date('Y-m-d')) ?>
                                <br>
                                <br>
                                <br>
                                <br>
                                <?php
                            $nama_ustad = $this->db->query(" SELECT * FROM pengguna WHERE hakakses = 1")->row();
                            echo $nama_ustad->nama;
                            ?>
                            </div>

                        </div>
    
        </div>
    </div>
</section>