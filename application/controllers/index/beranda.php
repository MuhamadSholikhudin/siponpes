<?php

class Beranda extends CI_Controller{



    public function index(){

$data['listberita'] = $this->db->query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5")->result();
        $data['listberitalama'] = $this->db->query("SELECT * FROM berita ORDER BY id_berita ASC LIMIT 3")->result();

        $this->load->view('templates/header');
        $this->load->view('beranda/index', $data);
        $this->load->view('templates/footer');
    }

    public function berita($id_berita)
    {
        $where = $id_berita;
        $data['listberita'] = $this->db->query("SELECT * FROM berita WHERE id_berita < '$id_berita' ORDER BY id_berita DESC LIMIT 6")->result();
        $data['berita'] = $this->db->query("SELECT * FROM berita WHERE id_berita = '$id_berita' ")->result();
        // $data['berita'] = $this->model_berita->edit_berita($where, 'berita')->result();


        $this->load->view('templates/header');
        $this->load->view('beranda/berita', $data);
        $this->load->view('templates/footer');
    }

    public function profile()
    {
$data['listberita'] = $this->db->query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5")->result();

        $this->load->view('templates/header');
        $this->load->view('beranda/profile', $data);
        $this->load->view('templates/footer');
    }

    public function contact()
    {
$data['listberita'] = $this->db->query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5")->result();

        $this->load->view('templates/header');
        $this->load->view('beranda/contact', $data);
        $this->load->view('templates/footer');
    }

    

}