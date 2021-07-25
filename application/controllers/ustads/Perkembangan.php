<?php

class Perkembangan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // if ($this->session->userdata('hakakses') > 2) {
        //     $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //             Anda Belum Login
        //             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //                 <span aria-hidden="true">&times;</span>
        //             </button>
        //             </div>');
        //     redirect('page/login');
        // }
        $this->load->helper('tgl_indo');
    }

    public function index($id_pengguna)
    {
        $data['perkembangan'] = $this->db->query("SELECT * FROM pelajaran WHERE id_pengguna = $id_pengguna ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('ustads/perkembangan/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function lihat($id_pengguna, $id_pelajaran)
    {
        $id_pel = $id_pelajaran;
        $data['perkembangan'] = $this->db->query("SELECT * FROM perkembangan_pembelajaran LEFT JOIN jadwal ON perkembangan_pembelajaran.id_jadwal = jadwal.id_jadwal JOIN pelajaran ON pelajaran.id_pelajaran = jadwal.id_pelajaran WHERE jadwal.id_pelajaran = '$id_pel' AND pelajaran.id_pengguna = $id_pengguna ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('ustads/perkembangan/lihat', $data);
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

        $this->Model_perkembangan->tambah_perkembangan($data, 'perkembangan');
        redirect('admin/perkembangan/');
    }

    public function ubah($id_perkembangan)
    {

        $data['perkembangan'] = $this->db->query("SELECT * FROM perkembangan WHERE id_perkembangan = '$id_perkembangan' ")->row();
        $data['status'] = [0, 1];
        $data['hakakses'] = [3];
        $data['periodetahun'] = [2020, 2021, 2022, 2023,];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('perkembangan/edit', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $id_perkembangan = $this->input->post('id_perkembangan');
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
            'id_perkembangan' => $id_perkembangan
        ];

        $this->Model_perkembangan->update_data($where, $data, 'perkembangan');
        redirect('admin/perkembangan/');
    }

    public function hapus($id_perkembangan)
    {
        $where = ['id_perkembangan' => $id_perkembangan];

        // $cari = $this->db->query(" SELECT status_surat FROM surat_penugasan WHERE no_surat = '$no_surat' AND status_surat = 0 ")->num_rows();
        // if($cari > 0){
        $this->Model_perkembangan->hapus_data($where, 'perkembangan');
        redirect('admin/perkembangan/');
        // }elseif($cari < 1){
        //     redirect('sekre/surat/');
        // }
    }
}
