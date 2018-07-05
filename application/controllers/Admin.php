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
        // $data['surat'] = $this->db->query("SELECT * FROM pengurus WHERE status_surat != 0 ORDER BY id_pengurus DESC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/dashboard');
        $this->load->view('templates_admin/footer');
    }

    public function pembayaran()
    {
        // $data['surat'] = $this->db->query("SELECT * FROM pengurus WHERE status_surat != 0 ORDER BY id_pengurus DESC")->result();

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
        // $data['surat'] = $this->db->query("SELECT * FROM pengurus WHERE status_surat != 0 ORDER BY id_pengurus DESC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/jadwal');
        $this->load->view('templates_admin/footer');
    }

    public function absensi()
    {
        // $data['surat'] = $this->db->query("SELECT * FROM pengurus WHERE status_surat != 0 ORDER BY id_pengurus DESC")->result();

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

    public function aksi_tambah_pengurus()
    {
        
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $hakakses = $this->input->post('hakakses');
        $status = $this->input->post('status');

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'status' => $status,
            'hakakses' => $hakakses
        );

        $this->Model_pengurus->tambah_pengurus($data, 'pengurus');
        redirect('admin/pengurus/');
    }

    public function ubah_pengurus($id_pengurus)
    {

$data['pengurus'] = $this->db->query("SELECT * FROM pengurus WHERE id_pengurus = '$id_pengurus' ")->row();
$data['status'] = [0, 1];
$data['hakakses'] = [1, 2];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_pengurus', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_pengurus_aksi()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $hakakses = $this->input->post('hakakses');
        $status = $this->input->post('status');
        $id_pengurus = $this->input->post('id_pengurus');

        $data = [
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'hakakses' => $hakakses,
            'status' => $status
        ];
        $where = [
            'id_pengurus' => $id_pengurus
        ];

        $this->Model_pengurus->update_data($where, $data, 'pengurus');
        redirect('admin/pengurus/');
    }

    public function hapus_pengurus($id_pengurus)
    {
        $where = [ 'id_pengurus' => $id_pengurus];

// $cari = $this->db->query(" SELECT status_surat FROM surat_penugasan WHERE no_surat = '$no_surat' AND status_surat = 0 ")->num_rows();
        // if($cari > 0){
            $this->Model_pengurus->hapus_data($where, 'pengurus');
            redirect('admin/pengurus/');
        // }elseif($cari < 1){
        //     redirect('sekre/surat/');
        // }
    }

    public function santri()
    {
        $data['santri'] = $this->db->query("SELECT * FROM santri ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/santri', $data);
        $this->load->view('templates_admin/footer');
    }

    public function aksi_tambah_santri()
    {
        
        // $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $periodetahun = $this->input->post('periodetahun');
        // $status = $this->input->post('status');

        $data = array(
            // 'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'status' => 1,
            'hakakses' => 3,
            'periodetahun' => $periodetahun,
            'id_daftar' => 0
        );

        $this->Model_santri->tambah_santri($data, 'santri');
        redirect('admin/santri/');
    }

    public function ubah_santri($id_santri)
    {

$data['santri'] = $this->db->query("SELECT * FROM santri WHERE id_santri = '$id_santri' ")->row();
$data['status'] = [0, 1];
$data['hakakses'] = [3];
$data['periodetahun'] = [2020, 2021, 2022, 2023,];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_santri', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_santri_aksi()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $hakakses = $this->input->post('hakakses');
        $status = $this->input->post('status');
        $id_santri = $this->input->post('id_santri');
        $periodetahun = $this->input->post('periodetahun');

        $data = [
            // 'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'hakakses' => $hakakses,
            'status' => $status,
            'periodetahun' => $periodetahun
        ];
        $where = [
            'id_santri' => $id_santri
        ];

        $this->Model_santri->update_data($where, $data, 'santri');
        redirect('admin/santri/');
    }

    public function hapus_santri($id_santri)
    {
        $where = [ 'id_santri' => $id_santri];

// $cari = $this->db->query(" SELECT status_surat FROM surat_penugasan WHERE no_surat = '$no_surat' AND status_surat = 0 ")->num_rows();
        // if($cari > 0){
            $this->Model_santri->hapus_data($where, 'santri');
            redirect('admin/santri/');
        // }elseif($cari < 1){
        //     redirect('sekre/surat/');
        // }
    }


    public function lihat($id_pengurus)
    {
        $where = array('id_pengurus' => $id_pengurus);
        $data['surat'] = $this->Model_pengurus->edit_pengurus($where, 'pengurus')->result();

        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();

        $data['datatugas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE id_pengurus = $id_pengurus ")->result();
        $data['dagas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE id_pengurus = $id_pengurus ");

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kadin/lihat_surat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function lihat_acc($id_pengurus)
    {
        $where = array('id_pengurus' => $id_pengurus);
        $data['surat'] = $this->Model_pengurus->edit_pengurus($where, 'pengurus')->result();

        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();

        $data['datatugas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE id_pengurus = $id_pengurus ")->result();
        $data['dagas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE id_pengurus = $id_pengurus ");


        $data['user'] = $this->db->query(" SELECT * FROM user ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kadin/acc_surat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function lihat_batalkan($id_pengurus)

    {
        $where = array('id_pengurus' => $id_pengurus);
        $data['surat'] = $this->Model_pengurus->edit_pengurus($where, 'pengurus')->result();

        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();

        $data['datatugas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE id_pengurus = $id_pengurus ")->result();
        $data['dagas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE id_pengurus = $id_pengurus ");


        $data['user'] = $this->db->query(" SELECT * FROM user ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kadin/batal_surat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function acc()
    {
        //Update data attribut   
        $id_pengurus = $this->input->post('id_pengurus');
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
            'id_pengurus' => $id_pengurus
        ];

        $this->Model_pengurus->update_data($where, $data, 'pengurus');
        redirect('kadin/surat/');
    }


    public function acc_surat()
    {
        //Update data attribut   
        $id_pengurus = $this->input->post('id_pengurus');
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
            'id_pengurus' => $id_pengurus
        ];

        $this->Model_pengurus->update_data($where, $data, 'pengurus');
        redirect('kadin/surat/');
    }

    public function batalkan()
    {

        //Update data attribut
        $id = $this->input->post('id');
        $id_pengurus = $this->input->post('id_pengurus');
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
            'id_pengurus' => $id_pengurus
        ];
        $this->Model_pengurus->update_data($where, $data, 'pengurus');
        redirect('kadin/surat/');
    }

    public function kembalikan_surat($id_pengurus)
    {
        //Update data attribut
        $data = [
            'status_surat' => 0
        ];
        $where = [
            'id_pengurus' => $id_pengurus
        ];
        $this->Model_pengurus->update_data($where, $data, 'pengurus');
        redirect('kadin/surat/');

    }

}
