<?php

class Pelajaran extends CI_Controller
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
        $data['pelajaran'] = $this->db->query("SELECT * FROM pelajaran ")->result();
        $data['pengguna'] = $this->db->query("SELECT * FROM pengguna WHERE hakakses = 2 AND status = 1 ")->result();
        $data['jenis'] = ['Materi', 'Konsep dan Praktikum'];
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pelajaran/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function aksi_tambah()
    {

        $id_pengguna = $this->input->post('id_pengguna');
        $kode_pelajaran = $this->input->post('kode_pelajaran');
        $nama_pelajaran = $this->input->post('nama_pelajaran');
        $jenis = $this->input->post('jenis');

        $data = array(
            // 'nama' => $nama,
            'kode_pelajaran' => $kode_pelajaran,
            'nama_pelajaran' => $nama_pelajaran,
            'jenis' => $jenis,
            'id_pengguna' => $id_pengguna
        );

        $this->Model_pelajaran->tambah_pelajaran($data, 'pelajaran');
        redirect('admin/pelajaran/');
    }

    public function ubah($id_pelajaran)
    {

        $data['pelajaran'] = $this->db->query("SELECT * FROM pelajaran WHERE id_pelajaran = '$id_pelajaran' ")->row();
        $data['pengguna'] = $this->db->query("SELECT * FROM pengguna WHERE hakakses = 2 AND status = 1 ")->result();        
        $data['status'] = [0, 1];
        $data['hakakses'] = [3];
        $data['periodetahun'] = [2020, 2021, 2022, 2023,];
        $data['jenis'] = ['Materi', 'Konsep dan Praktikum'];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pelajaran/edit', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $id_pelajaran = $this->input->post('id_pelajaran');
        $id_pengguna = $this->input->post('id_pengguna');
        $kode_pelajaran = $this->input->post('kode_pelajaran');
        $nama_pelajaran = $this->input->post('nama_pelajaran');
        $jenis = $this->input->post('jenis');

        $data = [
            // 'nama' => $nama,
            'kode_pelajaran' => $kode_pelajaran,
            'nama_pelajaran' => $nama_pelajaran,
            'jenis' => $jenis,
            'id_pengguna' => $id_pengguna
        ];
        $where = [
            'id_pelajaran' => $id_pelajaran
        ];

        $this->Model_pelajaran->update_data($where, $data, 'pelajaran');
        redirect('admin/pelajaran/');
    }

    public function hapus($id_pelajaran)
    {
        $where = ['id_pelajaran' => $id_pelajaran];

        // $cari = $this->db->query(" SELECT status_surat FROM surat_penugasan WHERE no_surat = '$no_surat' AND status_surat = 0 ")->num_rows();
        // if($cari > 0){
        $this->Model_pelajaran->hapus_data($where, 'pelajaran');
        redirect('admin/pelajaran/');
        // }elseif($cari < 1){
        //     redirect('sekre/surat/');
        // }
    }
}
