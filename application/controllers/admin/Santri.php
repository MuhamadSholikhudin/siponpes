<?php

class Santri extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hakakses') != 1) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Anda Belum Login
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
            redirect('page/login');
        }
    }

    public function index()
    {
        // $data['surat'] = $this->db->query("SELECT * FROM pengurus WHERE status_surat != 0 ORDER BY id_pengurus DESC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('santri/dashboard');
        $this->load->view('templates_admin/footer');
    }

    public function aksi_tambah_santri()
    {
        
        // $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $periodetahun = $this->input->post('periodetahun');
        // $status = $this->input->post('status');

        $data = array(
            // 'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'status' => 1,
            'hakakses' => 3,
            'periodetahun' => $periodetahun,
            'id_daftar' => 0
        );

        $this->Model_santri->tambah_santri($data, 'santri');
        redirect('admin/santri/');
    }

    public function ubah_santri($id_santri)
    {

$data['santri'] = $this->db->query("SELECT * FROM santri WHERE id_santri = '$id_santri' ")->row();
$data['status'] = [0, 1];
$data['hakakses'] = [3];
$data['periodetahun'] = [2020, 2021, 2022, 2023,];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('santri/edit_santri', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_santri_aksi()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $hakakses = $this->input->post('hakakses');
        $status = $this->input->post('status');
        $id_santri = $this->input->post('id_santri');
        $periodetahun = $this->input->post('periodetahun');

        $data = [
            // 'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'hakakses' => $hakakses,
            'status' => $status,
            'periodetahun' => $periodetahun
        ];
        $where = [
            'id_santri' => $id_santri
        ];

        $this->Model_santri->update_data($where, $data, 'santri');
        redirect('admin/santri/');
    }

    public function hapus_santri($id_santri)
    {
        $where = [ 'id_santri' => $id_santri];

// $cari = $this->db->query(" SELECT status_surat FROM surat_penugasan WHERE no_surat = '$no_surat' AND status_surat = 0 ")->num_rows();
        // if($cari > 0){
            $this->Model_santri->hapus_data($where, 'santri');
            redirect('admin/santri/');
        // }elseif($cari < 1){
        //     redirect('sekre/surat/');
        // }
    }



}
