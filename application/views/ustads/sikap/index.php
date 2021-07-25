<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>SIKAP DAN PRILAKU SANTRI</h2>
        </div>
        <?php
        $id_pengguna = $this->session->userdata('id_pengguna');
        ?>


        <form action="<?= base_url('ustads/sikap/kelas') ?>" method="POST" enctype="multipart/form-data">

            <label for="kelas">Kelas</label>
            <div class="form-group">
                <select class="selectpicker form-line" name="kelas" id="kelas">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <input type="hidden" value="<?= $id_pengguna ?>" name="id_pengguna">

            <button class="btn btn-primary  waves-effect" type="submit">SIMPAN</button>
        </form>

    </div>


</section>