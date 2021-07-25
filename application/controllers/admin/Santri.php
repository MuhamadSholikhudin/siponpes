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
        $data['santri'] = $this->db->query("SELECT * FROM santri ")->result();
        $data['daftar'] = $this->db->query("SELECT * FROM daftar ")->result();
        $data['kelas'] = [1, 2, 3, 4];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('santri/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function aksi_tambah()
    {

        // $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $periodetahun = $this->input->post('periodetahun');
        $kelas = $this->input->post('kelas');

        $data = array(
            'username' => $username,
            'password' => $password,
            'status' => 1,
            'kelas' => $kelas,
            'hakakses' => 3,
            'periodetahun' => $periodetahun,
            'id_daftar' => 0
        );

        $this->Model_santri->tambah_santri($data, 'santri');
        redirect('admin/santri/');
    }
    public function detail($id_santri, $id_daftar)
    {

        $data['santri'] = $this->db->query("SELECT * FROM santri WHERE id_santri = '$id_santri' ")->row();
        $data['daftar'] = $this->db->query("SELECT * FROM daftar WHERE id_daftar = '$id_daftar' ")->row();
        $data['status'] = [0, 1];
        $data['kelas'] = [1, 2, 3, 4];
        $data['hakakses'] = [3];
        $data['periodetahun'] = [2020, 2021, 2022, 2023,];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('santri/detail', $data);
        $this->load->view('templates_admin/footer');
    }
    public function ubah($id_santri)
    {

        $data['santri'] = $this->db->query("SELECT * FROM santri WHERE id_santri = '$id_santri' ")->row();
        $data['status'] = [0, 1];
        $data['kelas'] = [1, 2, 3, 4];
        $data['hakakses'] = [3];
        $data['periodetahun'] = [2020, 2021, 2022, 2023,];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('santri/edit', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $id_santri = $this->input->post('id_santri');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $hakakses = $this->input->post('hakakses');
        $status = $this->input->post('status');
        $kelas = $this->input->post('kelas');
        $periodetahun = $this->input->post('periodetahun');

        $data = [
            // 'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'hakakses' => $hakakses,
            'status' => $status,
            'kelas' => $kelas,
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
        $where = ['id_santri' => $id_santri];

        // $cari = $this->db->query(" SELECT status_surat FROM surat_penugasan WHERE no_surat = '$no_surat' AND status_surat = 0 ")->num_rows();
        // if($cari > 0){
        $this->Model_santri->hapus_data($where, 'santri');
        redirect('admin/santri/');
        // }elseif($cari < 1){
        //     redirect('sekre/surat/');
        // }
    }
}
