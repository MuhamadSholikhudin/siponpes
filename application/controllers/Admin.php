<?php

class Admin extends CI_Controller
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
        // $data['surat'] = $this->db->query("SELECT * FROM surat_penugasan WHERE status_surat != 0 ORDER BY no_surat DESC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/dashboard');
        $this->load->view('templates_admin/footer');
    }

    public function pembayaran()
    {
        // $data['surat'] = $this->db->query("SELECT * FROM surat_penugasan WHERE status_surat != 0 ORDER BY no_surat DESC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/pembayaran');
        $this->load->view('templates_admin/footer');
    }

    public function pendaftaran()
    {
        $data['pendaftaran'] = $this->db->query("SELECT * FROM daftar")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/pendaftaran', $data);
        $this->load->view('templates_admin/footer');
    }
    
    public function jadwal()
    {
        // $data['surat'] = $this->db->query("SELECT * FROM surat_penugasan WHERE status_surat != 0 ORDER BY no_surat DESC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/jadwal');
        $this->load->view('templates_admin/footer');
    }

    public function absensi()
    {
        // $data['surat'] = $this->db->query("SELECT * FROM surat_penugasan WHERE status_surat != 0 ORDER BY no_surat DESC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/absensi');
        $this->load->view('templates_admin/footer');
    }

    public function pengurus()
    {
        $data['pengurus'] = $this->db->query("SELECT * FROM pengurus ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/pengurus', $data);
        $this->load->view('templates_admin/footer');
    }

    public function santri()
    {
        // $data['surat'] = $this->db->query("SELECT * FROM surat_penugasan WHERE status_surat != 0 ORDER BY no_surat DESC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/santri');
        $this->load->view('templates_admin/footer');
    }
    

    public function lihat($no_surat)
    {
        $where = array('no_surat' => $no_surat);
        $data['surat'] = $this->Model_surat_penugasan->edit_surat_penugasan($where, 'surat_penugasan')->result();

        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();

        $data['datatugas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE no_surat = $no_surat ")->result();
        $data['dagas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE no_surat = $no_surat ");

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kadin/lihat_surat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function lihat_acc($no_surat)
    {
        $where = array('no_surat' => $no_surat);
        $data['surat'] = $this->Model_surat_penugasan->edit_surat_penugasan($where, 'surat_penugasan')->result();

        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();

        $data['datatugas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE no_surat = $no_surat ")->result();
        $data['dagas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE no_surat = $no_surat ");


        $data['user'] = $this->db->query(" SELECT * FROM user ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kadin/acc_surat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function lihat_batalkan($no_surat)

    {
        $where = array('no_surat' => $no_surat);
        $data['surat'] = $this->Model_surat_penugasan->edit_surat_penugasan($where, 'surat_penugasan')->result();

        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();

        $data['datatugas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE no_surat = $no_surat ")->result();
        $data['dagas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE no_surat = $no_surat ");


        $data['user'] = $this->db->query(" SELECT * FROM user ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kadin/batal_surat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function acc()
    {
        //Update data attribut   
        $no_surat = $this->input->post('no_surat');
        $id = $this->input->post('id');
        $result = array();
        foreach ($id as $key => $val) {
            $result[] = array(
                "id" => $id[$key],
                "status_pegawai" => $_POST['status_pegawai'][$key]
            );
        }
        $this->db->update_batch('data_pegawai', $result, 'id');

        $data = [   
            'status_surat' => 2
        ];
        $where = [
            'no_surat' => $no_surat
        ];

        $this->Model_surat_penugasan->update_data($where, $data, 'surat_penugasan');
        redirect('kadin/surat/');
    }


    public function acc_surat()
    {
        //Update data attribut   
        $no_surat = $this->input->post('no_surat');
        $id = $this->input->post('id');
        $result = array();
        foreach ($id as $key => $val) {
            $result[] = array(
                "id" => $id[$key],
                "status_pegawai" => $_POST['status_pegawai'][$key]
            );
        }
        $this->db->update_batch('data_pegawai', $result, 'id');

        $data = [
            'status_surat' => 2
        ];
        $where = [
            'no_surat' => $no_surat
        ];

        $this->Model_surat_penugasan->update_data($where, $data, 'surat_penugasan');
        redirect('kadin/surat/');
    }

    public function batalkan()
    {

        //Update data attribut
        $id = $this->input->post('id');
        $no_surat = $this->input->post('no_surat');
        $id = $this->input->post('id');

        $result = array();
        foreach ($id as $key => $val) {
            $result[] = array(
                "id" => $id[$key],
                "status_pegawai" => $_POST['status_pegawai'][$key]
            );
        }
        $this->db->update_batch('data_pegawai', $result, 'id');

        $data = [
            'status_surat' => 1
        ];
        $where = [
            'no_surat' => $no_surat
        ];
        $this->Model_surat_penugasan->update_data($where, $data, 'surat_penugasan');
        redirect('kadin/surat/');
    }

    public function kembalikan_surat($no_surat)
    {
        //Update data attribut
        $data = [
            'status_surat' => 0
        ];
        $where = [
            'no_surat' => $no_surat
        ];
        $this->Model_surat_penugasan->update_data($where, $data, 'surat_penugasan');
        redirect('kadin/surat/');

    }

}
