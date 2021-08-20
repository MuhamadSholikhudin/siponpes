<?php
class Crud extends CI_Controller
{


    public function mahasiswa (){
        $data['title'] = 'Mahasiswa';

        $this->load->view('page/theme/header', $data);
        $this->load->view('page/beranda');
        $this->load->view('page/theme/footer');

    }
}
