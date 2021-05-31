<?php

class Absensi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('level') != 2) {
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
        $username = $this->session->userdata('username');

        $data['surat'] = $this->db->query("SELECT surat_penugasan.keterangan, surat_penugasan.judul, surat_penugasan.no_surat, surat_penugasan.isi_surat, surat_penugasan.status_surat FROM surat_penugasan JOIN data_pegawai ON surat_penugasan.no_surat = data_pegawai.no_surat WHERE status_surat >= 2 AND data_pegawai.nip = '$username' ORDER BY surat_penugasan.no_surat DESC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pegawai/surat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function pegawai($no_surat)
    {
        $username = $this->session->userdata('username');

        $data['jadwal'] = $this->db->query("SELECT no_surat, id_jadwal, jadwal, nip, status_jadwal FROM jadwal_penugasan WHERE no_surat = $no_surat AND nip = '$username' ORDER BY jadwal ASC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pegawai/pegawai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function baru($no_surat){
        $where = array('no_surat' => $no_surat);
        $data = [
            'status_surat' => 3
        ];
        $this->Model_surat_penugasan->update_data($where, $data, 'surat_penugasan');

        redirect('pegawai/absensi/surat/'. $no_surat);
        

    }

    public function surat($no_surat)
    {
        $where = array('no_surat' => $no_surat);
        $data['surat'] = $this->Model_surat_penugasan->edit_surat_penugasan($where, 'surat_penugasan')->result();

        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();

        $data['datatugas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE no_surat = $no_surat ")->result();
        $data['dagas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE no_surat = $no_surat ");
 
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pegawai/lihat_surat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function input($id_jadwal , $no_surat)
    {
        $username = $this->session->userdata('username');
        $nama = $this->session->userdata('nama');
        $where = array('no_surat' => $no_surat);
        $data['surat'] = $this->Model_surat_penugasan->edit_surat_penugasan($where, 'surat_penugasan')->result();
        $where = array('id_jadwal' => $id_jadwal);
        $data['jadwal'] = $this->Model_jadwal_penugasan->edit_jadwal_penugasan($where, 'jadwal_penugasan')->result();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pegawai/input', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit($id_jadwal)
    {

        $where = array('id_jadwal' => $id_jadwal);
        $data['absensi'] = $this->Model_absensi->edit_absensi($where, 'absensi')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pegawai/update', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_absensi_aksi()
    {
        $keterangan = $this->input->post('keterangan');
        $id_jadwal = $this->input->post('id_jadwal');
        $status_absensi = $this->input->post('status_absensi');

        $data = [
            'keterangan' => $keterangan,
            'status_absensi' => $status_absensi
        ];
        $where = [
            'id_jadwal' => $id_jadwal
        ];

        $datat = [
            'status_jadwal' => $status_absensi
        ];
        $wheret = [
            'id_jadwal' => $id_jadwal
        ];

        $no_sur = $this->db->query("SELECT no_surat FROM jadwal_penugasan WHERE id_jadwal = '$id_jadwal' ");
        $row = $no_sur->row();
        $no_surat = $row->no_surat;

        $this->Model_absensi->update_data($where, $data, 'absensi');
        $this->Model_jadwal_penugasan->update_data($wheret, $datat, 'jadwal_penugasan');

        // $surat = $this->db->query(" SELECT no_surat FROM jadwal_penugasan WHERE id_jadwal = '$id_jadwal'");
        

        redirect('pegawai/absensi/pegawai/'.$no_surat);
    }


    public function tugas()
    {
        $nip = $this->session->userdata('username');
        $tanggal = date('Y-m-d');
        $keterangan = $this->input->post('keterangan');
        $status_absensi = $this->input->post('status_absensi');
        $no_surat = $this->input->post('no_surat');
        $id_jadwal = $this->input->post('id_jadwal');

        $datat = array(
            'id_jadwal' => $id_jadwal,
            'status_jadwal' => $status_absensi
        );
        $wheret = [
            'id_jadwal' => $id_jadwal
        ];

        $data = array(
          
            'keterangan' => $keterangan,
            'status_absensi' => $status_absensi
        );

        $where = [
            'id_jadwal' => $id_jadwal
        ];
        
        $this->Model_jadwal_penugasan->update_datat($wheret, $datat, 'jadwal_penugasan');

        $this->Model_absensi->update_data($where, $data, 'absensi');

        // $this->Model_absensi->tambah_absensi($data, 'absensi');

        redirect('pegawai/absensi/pegawai/' . $no_surat);
    }




}
