<section class="content">
    <div class="container-fluid">
        
        <?php
        $id_pengguna = $this->session->userdata('id_pengguna');
        ?>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Menu Rapot 
                            </h2>
                           
                        </div>
                        <div class="body">
                            <div class="demo-button">
                                <a href="<?= base_url('admin/rapot/kelas/1') ?>" class="btn btn-block btn-lg btn-primary waves-effect">Kelas 1</a>
                                <a href="<?= base_url('admin/rapot/kelas/2') ?>" class="btn btn-block btn-lg btn-success waves-effect">Kelas 2</a>
                                <a href="<?= base_url('admin/rapot/kelas/3') ?>" class="btn btn-block btn-lg btn-info waves-effect">Kelas 3</a>
                                <a href="<?= base_url('admin/rapot/kelas/4') ?>" class="btn btn-block btn-lg btn-warning waves-effect">Kelas 4</a>
                                <a href="<?= base_url('admin/rapot/kelas/5') ?>" class="btn btn-block btn-lg btn-danger waves-effect">Kelas 5</a>
                            </div>
                        </div>
                    </div>
                </div>

    </div>


</section>