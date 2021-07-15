<?php

class pembelajaran extends CI_Controller
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
        $data['pembelajaran'] = $this->db->query("SELECT * FROM pembelajaran ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pembelajaran/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function aksi_tambah()
    {

        // $nama = $this->input->post('nama');
        $id_pelajaran = $this->input->post('id_pelajaran');
        $id_santri = $this->input->post('id_santri');
        $materi_belajar = $this->input->post('materi_belajar');
        $tanggal = $this->input->post('tanggal');
        // $status = $this->input->post('status');

        $data = array(
            // 'nama' => $nama,
            'id_pelajaran' => $id_pelajaran,
            'id_santri' => $id_santri,
            'materi_belajar' => $materi_belajar,
            'tanggal' => $tanggal
        );

        $this->Model_pembelajaran->tambah_pembelajaran($data, 'pembelajaran');
        redirect('admin/pembelajaran/');
    }

    public function ubah($id_pembelajaran)
    {

        $data['pembelajaran'] = $this->db->query("SELECT * FROM pembelajaran WHERE id_pembelajaran = '$id_pembelajaran' ")->row();
        $data['status'] = [0, 1];
        $data['hakakses'] = [3];
        $data['periodetahun'] = [2020, 2021, 2022, 2023,];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pembelajaran/edit', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $id_pembelajaran = $this->input->post('id_pembelajaran');
        $id_pelajaran = $this->input->post('id_pelajaran');
        $id_santri = $this->input->post('id_Santri');
        $materi_belajar = $this->input->post('materi_belajar');
        $tanggal = $this->input->post('tanggal');

        $data = [
            // 'nama' => $nama,
            'id_pelajaran' => $id_pelajaran,
            'id_santri' => $id_santri,
            'materi_belajar' => $materi_belajar,
            'tanggal' => $tanggal,
        ];
        $where = [
            'id_pembelajaran' => $id_pembelajaran
        ];

        $this->Model_pembelajaran->update_data($where, $data, 'pembelajaran');
        redirect('admin/pembelajaran/');
    }

    public function hapus($id_pembelajaran)
    {
        $where = ['id_pembelajaran' => $id_pembelajaran];

        // $cari = $this->db->query(" SELECT status_surat FROM surat_penugasan WHERE no_surat = '$no_surat' AND status_surat = 0 ")->num_rows();
        // if($cari > 0){
        $this->Model_pembelajaran->hapus_data($where, 'pembelajaran');
        redirect('admin/pembelajaran/');
        // }elseif($cari < 1){
        //     redirect('sekre/surat/');
        // }
    }
}
