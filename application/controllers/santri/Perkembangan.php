<?php

class Perkembangan extends CI_Controller
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

    public function index($id_santri)
    {
        $data['perkembangan'] = $this->db->query("SELECT * FROM pelajaran LEFT JOIN jadwal ON pelajaran.id_pelajaran = jadwal.id_pelajaran JOIN perkembangan_pembelajaran ON jadwal.id_jadwal = perkembangan_pembelajaran.id_jadwal WHERE perkembangan_pembelajaran.id_santri = $id_santri ORDER BY perkembangan_pembelajaran.tanggal DESC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('santri/perkembangan/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function lihat($id_santri, $id_pelajaran)
    {
        $id_pel = $id_pelajaran;
        $data['perkembangan'] = $this->db->query("SELECT * FROM perkembangan_pembelajaran LEFT JOIN jadwal ON perkembangan_pembelajaran.id_jadwal = jadwal.id_jadwal JOIN pelajaran ON pelajaran.id_pelajaran = jadwal.id_pelajaran WHERE jadwal.id_pelajaran = '$id_pel' AND perkembangan_pembelajaran.id_santri = $id_santri ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('santri/perkembangan/lihat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function ubah($id_perkembangan)
    {
        // $id_pel = $id_pelajaran;
        $data['perkembangan'] = $this->db->query("SELECT * FROM perkembangan WHERE id_perkembangan = $id_perkembangan ")->row();
        $data['absen'] = ['Masuk', 'Ijin', 'Sakit', 'Alasan'];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('santri/perkembangan/edit', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $id_perkembangan = $this->input->post('id_perkembangan');
        $status = $this->input->post('status');
        $id_pengguna = $this->input->post('id_pengguna');
        $id_pelajaran = $this->input->post('id_pelajaran');

        // $data['penilaian'] = $this->db->query("SELECT * FROM nilai JOIN jadwal ON nilai.id_jadwal = jadwal.id_jadwal WHERE nilai")->row();
        $data = [
            'status' => $status,
        ];
        $where = [
            'id_perkembangan' => $id_perkembangan
        ];

        $this->Model_perkembangan->update_data($where, $data, 'perkembangan');
        redirect('santri/perkembangan/lihat/' . $id_pengguna . '/' . $id_pelajaran);
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
