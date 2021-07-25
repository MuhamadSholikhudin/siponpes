<?php

class Jadwal extends CI_Controller
{

    // public function __construct()
    // {
    //     parent::__construct();

    //     if ($this->session->userdata('hakakses') != 1) {
    //         $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //                 Anda Belum Login
    //                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //                     <span aria-hidden="true">&times;</span>
    //                 </button>
    //                 </div>');
    //         redirect('page/login');
    //     }
    // }

    public function index()
    {
        $data['jadwal'] = $this->db->query("SELECT * FROM jadwal ")->result();
        $data['pelajaran'] = $this->db->query("SELECT * FROM pelajaran LEFT JOIN pengguna ON pelajaran.id_pengguna = pengguna.id_pengguna ")->result();
        $data['kelas'] = $this->db->query("SELECT * FROM kelas ")->result();
        $data['hari'] = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
        $data['waktu'] = ['Subuh', 'Pagi', 'Siang', 'Malam'];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('ustads/jadwal/index', $data);
        $this->load->view('templates_admin/footer');
    }
}