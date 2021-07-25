<?php

class Absensi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hakakses') == ' ') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Anda Belum Login
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
            redirect('page/login');
        }
        $this->load->helper('tgl_indo');
    }

    public function index($id_pengguna)
    {
        $data['absensi'] = $this->db->query("SELECT * FROM pelajaran WHERE id_pengguna = $id_pengguna ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('ustads/absensi/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function lihat($id_pengguna, $id_pelajaran)
    {
        $id_pel = $id_pelajaran;
        $data['absensi'] = $this->db->query("SELECT * FROM absensi LEFT JOIN jadwal ON absensi.id_jadwal = jadwal.id_jadwal JOIN pelajaran ON pelajaran.id_pelajaran = jadwal.id_pelajaran WHERE jadwal.id_pelajaran = '$id_pel' AND pelajaran.id_pengguna = $id_pengguna ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('ustads/absensi/lihat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function ubah($id_absensi)
    {
        // $id_pel = $id_pelajaran;
        $data['absensi'] = $this->db->query("SELECT * FROM absensi WHERE id_absensi = $id_absensi ")->row();
        $data['absen'] = ['Masuk', 'Ijin', 'Sakit', 'Alasan'];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('ustads/absensi/edit', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $id_absensi = $this->input->post('id_absensi');
        $status = $this->input->post('status');
        $id_pengguna = $this->input->post('id_pengguna');
        $id_pelajaran = $this->input->post('id_pelajaran');

        // $data['penilaian'] = $this->db->query("SELECT * FROM nilai JOIN jadwal ON nilai.id_jadwal = jadwal.id_jadwal WHERE nilai")->row();
        $data = [
            'status' => $status,
        ];
        $where = [
            'id_absensi' => $id_absensi
        ];

        $this->Model_absensi->update_data($where, $data, 'absensi');
        redirect('ustads/absensi/lihat/' . $id_pengguna . '/' . $id_pelajaran);
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
