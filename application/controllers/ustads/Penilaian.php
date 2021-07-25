<?php

class Penilaian extends CI_Controller
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
        $data['penilaian'] = $this->db->query("SELECT * FROM pelajaran WHERE id_pengguna = $id_pengguna ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('ustads/penilaian/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function lihat($id_pengguna, $id_pelajaran)
    {
        $id_pel = $id_pelajaran;
        $data['penilaian'] = $this->db->query("SELECT * FROM nilai LEFT JOIN jadwal ON nilai.id_jadwal = jadwal.id_jadwal JOIN pelajaran ON pelajaran.id_pelajaran = jadwal.id_pelajaran WHERE jadwal.id_pelajaran = '$id_pel' AND pelajaran.id_pengguna = $id_pengguna ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('ustads/penilaian/lihat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function ubah($id_nilai)
    {
        // $id_pel = $id_pelajaran;
        $data['penilaian'] = $this->db->query("SELECT * FROM nilai WHERE id_nilai = $id_nilai ")->row();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('ustads/penilaian/edit', $data);
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

        $this->Model_penilaian->tambah_penilaian($data, 'penilaian');
        redirect('admin/penilaian/');
    }


    public function edit_aksi()
    {
        $id_nilai = $this->input->post('id_nilai');
        $nilai = $this->input->post('nilai');
        $id_pengguna = $this->input->post('id_pengguna');
        $id_pelajaran = $this->input->post('id_pelajaran');
               
        // $data['penilaian'] = $this->db->query("SELECT * FROM nilai JOIN jadwal ON nilai.id_jadwal = jadwal.id_jadwal WHERE nilai")->row();
        $data = [
            'nilai' => $nilai,
        ];
        $where = [
            'id_nilai' => $id_nilai
        ];

        $this->Model_nilai->update_data($where, $data, 'nilai');
        redirect('ustads/penilaian/lihat/'.$id_pengguna.'/'.$id_pelajaran);
    }

    public function hapus($id_penilaian)
    {
        $where = ['id_penilaian' => $id_penilaian];

        // $cari = $this->db->query(" SELECT status_surat FROM surat_penugasan WHERE no_surat = '$no_surat' AND status_surat = 0 ")->num_rows();
        // if($cari > 0){
        $this->Model_penilaian->hapus_data($where, 'penilaian');
        redirect('admin/penilaian/');
        // }elseif($cari < 1){
        //     redirect('sekre/surat/');
        // }
    }
}
