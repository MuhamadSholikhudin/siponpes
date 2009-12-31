<?php

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('tgl_indo');
        
    }
    
    public function pendaftaran()
    {
        $data['pendaftaran'] = $this->db->query("SELECT * FROM daftar ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/laporan/pendaftaran', $data);
        $this->load->view('templates_admin/footer');
    }
    
    public function pembayaran()
    {
        $data['pembayaran'] = $this->db->query("SELECT * FROM pembayaran ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/laporan/pembayaran', $data);
        $this->load->view('templates_admin/footer');
    }


    public function santri()
    {
        $data['santri'] = $this->db->query("SELECT * FROM santri ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/laporan/santri', $data);
        $this->load->view('templates_admin/footer');
    }

    public function ustads()
    {
        $data['ustads'] = $this->db->query("SELECT * FROM pengguna WHERE hakakses = 2 ")->result();
    
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/laporan/ustads', $data);
        $this->load->view('templates_admin/footer');
    }
}
