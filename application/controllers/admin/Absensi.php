<?php

class Absensi extends CI_Controller
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
        $data['absensi'] = $this->db->query("SELECT * FROM absensi ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('absensi/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function aksi_tambah()
    {

        // $nama = $this->input->post('nama');
        $id_pelajaran = $this->input->post('id_pelajaran');
        $id_santri = $this->input->post('id_santri');
        $status = $this->input->post('status');
        $tanggal = $this->input->post('tanggal');
        // $status = $this->input->post('status');

        $data = array(
            // 'nama' => $nama,
            'id_pelajaran' => $id_pelajaran,
            'id_santri' => $id_santri,
            'status' => $status,
            'tanggal' => $tanggal
        );

        $this->Model_absensi->tambah_absensi($data, 'absensi');
        redirect('admin/absensi/');
    }

    public function ubah($id_absensi)
    {

        $data['absensi'] = $this->db->query("SELECT * FROM absensi WHERE id_absensi = '$id_absensi' ")->row();
        $data['status'] = [0, 1];
        $data['hakakses'] = [3];
        $data['periodetahun'] = [2020, 2021, 2022, 2023,];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('absensi/edit', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $id_absensi = $this->input->post('id_absensi');
        // $nama = $this->input->post('nama');
        // $nama = $this->input->post('nama');
        $id_pelajaran = $this->input->post('id_pelajaran');
        $id_santri = $this->input->post('id_santri');
        $status = $this->input->post('status');
        $tanggal = $this->input->post('tanggal');
        // $status = $this->input->post('status');

        $data = array(
            // 'nama' => $nama,
            'id_pelajaran' => $id_pelajaran,
            'id_santri' => $id_santri,
            'status' => $status,
            'tanggal' => $tanggal
        );
        $where = [
            'id_absensi' => $id_absensi
        ];

        $this->Model_absensi->update_data($where, $data, 'absensi');
        redirect('admin/absensi/');
    }

    public function hapus($id_absensi)
    {
        $where = ['id_absensi' => $id_absensi];

        // $cari = $this->db->query(" SELECT status_surat FROM surat_penugasan WHERE no_surat = '$no_surat' AND status_surat = 0 ")->num_rows();
        // if($cari > 0){
        $this->Model_absensi->hapus_data($where, 'absensi');
        redirect('admin/absensi/');
        // }elseif($cari < 1){
        //     redirect('sekre/surat/');
        // }
    }
}
