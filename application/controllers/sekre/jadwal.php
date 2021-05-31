<?php

class Jadwal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('level') != 1) {
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

        $data['surat'] = $this->db->query("SELECT * FROM surat_penugasan WHERE status_surat > 1 ORDER BY no_surat DESC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/jadwal', $data);
        $this->load->view('templates_admin/footer');
    }

    public function data($no_surat)
    {
        
        $data['pegawai'] = $this->db->query("SELECT * FROM data_pegawai WHERE no_surat = $no_surat ORDER BY no_surat DESC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/jadwal_data', $data);
        $this->load->view('templates_admin/footer');
    }

    public function pegawai($id)
    {
        $data['pegawai'] = $this->db->query("SELECT * FROM data_pegawai WHERE id = $id ")->result();

        $data['jadwal'] = $this->db->query("SELECT * FROM jadwal_penugasan WHERE id = $id ORDER BY id_jadwal DESC")->result();

        $data['surat'] = $this->db->query("SELECT * FROM surat_penugasan JOIN data_pegawai ON surat_penugasan.no_surat = data_pegawai.no_surat WHERE data_pegawai.id = '$id' ")->result(); 
       
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/jadwal_pegawai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function pegawai_edit($id_jadwal)
    {

        $data['jadwal'] = $this->db->query("SELECT * FROM jadwal_penugasan WHERE id_jadwal = $id_jadwal ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/edit_jadwal', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_jadwal_aksi()
    {
        $id_jadwal = $this->input->post('id_jadwal');
        $jadwal = $this->input->post('jadwal');
        $id = $this->input->post('id');

        $data = array(
            'jadwal' => $jadwal
        );

        $where = [
            'id_jadwal' => $id_jadwal
        ];

        $datat = array(
            'tanggal' => $jadwal
        );

        $wheret = [
            'id_jadwal' => $id_jadwal
        ];

        $this->Model_jadwal_penugasan->update_data($where, $data, 'jadwal_penugasan');
        $this->Model_absensi->update_datat($wheret, $datat, 'absensi');
        redirect('sekre/jadwal/pegawai/' . $id);
    }

    public function tambah_aksi()
    {

        // $judul = $this->input->post('judul');
        $jadwal = $this->input->post('jadwal');
        $id = $this->input->post('id');
        $nip = $this->input->post('nip');
        $no_surat = $this->input->post('no_surat');
        $id_jadwalabsensi = $this->input->post('id_jadwalabsensi');
        // $status_surat = 0;


        $data = array(
            'jadwal' => $jadwal,
            'id' => $id,
            'nip' => $nip,
            'no_surat' => $no_surat
        );

        $datat = array(
            'nip' => $nip,
            'tanggal' => $jadwal,
            'id_jadwal' => $id_jadwalabsensi,
            
        );

        $this->Model_jadwal_penugasan->tambah_jadwal_penugasan($data, 'jadwal_penugasan');
        $this->Model_absensi->tambah_absensit($datat, 'absensi');
        
        redirect('sekre/jadwal/pegawai/'. $id);
    }


    public function jadwal_lihat()
    {
        // $id_jadwal = $_POST['id_jadwal'];
        // $where = array('id_jadwal' => $id_jadwal);
        // echo json_encode($this->Model_jadwal_penugasan->edit_jadwal_penugasan($where, 'jadwal_penugasan')->result());
        // echo json_encode($_POST['id_jadwal']);

        echo $_POST['id_jadwal'];
       
    }

    public function buka()
    {
        $id_jadwal = $_POST['id_jadwal'];
        $where = array('id_jadwal' => $id_jadwal);
        echo json_encode($this->Model_jadwal_penugasan->edit_jadwal_penugasan($where, 'jadwal_penugasan')->result());
        // $this->Model_jadwal_penugasan->edit_jadwal_penugasan($where, 'jadwal_penugasan')->result();
        // echo json_encode($_POST['id']);

        // echo $_POST['id'];
        // echo "ok";
    }

    public function pegawai_hapus($id, $id_jadwal)
    {

        $where = ['id_jadwal' => $id_jadwal];
        $this->Model_jadwal_penugasan->hapus_data($where, 'jadwal_penugasan');
        $this->Model_absensi->hapus_data($where, 'absensi');
        redirect('sekre/jadwal/pegawai/' . $id);
    }

}
