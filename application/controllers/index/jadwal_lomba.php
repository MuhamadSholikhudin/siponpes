<?php

class Jadwal_lomba extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hakakses') != 4) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Anda Belum Login
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
            redirect('auth/login');
        }
    }

    public function index()
    {

        $tahun = date('Y');
        // $data['penjadwalan'] = $this->db->get('jadwal_lomba')->result();
        $data['penjadwalan'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,jadwal_lomba.status_jadwal, jadwal_lomba.tgl_jadwal,hasil_ajuan.no_hasilajuan, hasil_ajuan.desa,hasil_ajuan.tahun, hasil_ajuan.kecamatan 
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan WHERE hasil_ajuan.tahun = '$tahun' AND jadwal_lomba.status_jadwal > 0")->result();
        // $data['penjadwalan'] = $this->db->query($queryjadwal)->result();

        // $data['penjadwalan'] = $this->model_penjadwalan->tampil_data();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin_sekda/jadwal_lomba', $data);
        $this->load->view('templates_admin/footer.php');
    }
    public function edit($id)
    {
        // $where = array('no_jadwal' => $id);
        $data['jadwal'] = $this->db->query("SELECT jadwal_lomba.no_jadwal,jadwal_lomba.status_jadwal, jadwal_lomba.tgl_jadwal, hasil_ajuan.desa,  hasil_ajuan.tahun, hasil_ajuan.kecamatan 
        FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan WHERE jadwal_lomba.no_jadwal = '$id'")->result();


        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('stafpmd/isijadwal', $data);
        $this->load->view('templates_admin/footer');
    }

    public function acc($no_jadwal)
    {
        $data = [
            'status_jadwal' => 2
        ];
        $where = [
            'no_jadwal' => $no_jadwal
        ];

        $this->model_penjadwalan->update_data($where, $data, 'jadwal_lomba');

        redirect('admin_sekda/Jadwal_lomba/');
    }

    public function batalkan($no_jadwal)
    {
        $data = [
            'status_jadwal' => 1
        ];
        $where = [
            'no_jadwal' => $no_jadwal
        ];

        $this->model_penjadwalan->update_data($where, $data, 'jadwal_lomba');


        redirect('admin_sekda/Jadwal_lomba/');
    }

    public function kembalikan($no_jadwal)
    {
        $data = [
            'status_jadwal' => 0
        ];
        $where = [
            'no_jadwal' => $no_jadwal
        ];

        $this->model_penjadwalan->update_data($where, $data, 'jadwal_lomba');


        redirect('admin_sekda/Jadwal_lomba/');
    }
}
