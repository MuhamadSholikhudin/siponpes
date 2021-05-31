<?php

class Surat extends CI_Controller
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

        $data['surat'] = $this->db->query("SELECT * FROM surat_penugasan ORDER BY no_surat DESC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/surat', $data);
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
        $this->load->view('sekre/lihat_surat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit($no_surat)
    {
        $where = array('no_surat' => $no_surat);
        $data['surat'] = $this->Model_surat_penugasan->edit_surat_penugasan($where, 'surat_penugasan')->result();

        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();

        $data['datatugas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE no_surat = $no_surat ")->result();
        $data['dagas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE no_surat = $no_surat ");


        // $data['user'] = $this->db->query(" SELECT user.nama FROM user JOIN data_pegawai ON user.username = data_pegawai.nip
        //  WHERE data_pegawai.no_surat != '$no_surat'")->result();

$data['user'] = $this->db->query(" SELECT * FROM user")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/edit_surat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {

        $judul = $this->input->post('judul');
        $keterangan = $this->input->post('keterangan');
        $isi_surat = $this->input->post('isi_surat');
        $tgl_buat = $this->input->post('tgl_buat');
        $penempatan = $this->input->post('penempatan');
        $status_surat = 0;


        $data = array(
            'judul' => $judul,
            'keterangan' => $keterangan,
            'isi_surat' => $isi_surat,
            'penempatan' => $penempatan,
            'status_surat' => $status_surat,
            'tgl_buat' => $tgl_buat
        );

        $this->Model_surat_penugasan->tambah_surat_penugasan($data, 'surat_penugasan');
        redirect('sekre/surat/');
    }

    public function tambah_pegawai_aksi()
    {

        $nip = $this->input->post('nip');
        $no_surat = $this->input->post('no_surat');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $penempatan = $this->input->post('penempatan');

        $data = array(
            'nip' => $nip,
            'no_surat' => $no_surat,
            'nama' => $nama,
            'jabatan' => $jabatan,
            'penempatan' => $penempatan
        );

        $this->Model_data_pegawai->tambah_data_pegawai($data, 'data_pegawai');
        redirect('sekre/surat/edit/' . $no_surat);
    }

    public function edit_surat_aksi()
    {
        $keterangan = $this->input->post('keterangan');
        $penempatan = $this->input->post('penempatan');
        $isi_surat = $this->input->post('isi_surat');
        $no_surat = $this->input->post('no_surat');

        $data = [
            'keterangan' => $keterangan,
            'penempatan' => $penempatan,
            'isi_surat' => $isi_surat
        ];
        $where = [
            'no_surat' => $no_surat
        ];

        $this->Model_surat_penugasan->update_data($where, $data, 'surat_penugasan');
        redirect('sekre/surat/');
    }



    public function hapus($no_surat)
    {
        $where = [ 'no_surat' => $no_surat];

$cari = $this->db->query(" SELECT status_surat FROM surat_penugasan WHERE no_surat = '$no_surat' AND status_surat = 0 ")->num_rows();
        if($cari > 0){
            $this->Model_surat_penugasan->hapus_data($where, 'surat_penugasan');
            redirect('sekre/surat/');
        }elseif($cari < 1){
            redirect('sekre/surat/');
        }
    }

    public function hapus_pegawai_aksi($no_surat, $nip)
    {

        // $nip = $this->input->post('nip');
        // $no_surat = $this->input->post('no_surat');


        $where = ['nip' => $nip , 'no_surat' => $no_surat];

        $this->Model_data_pegawai->hapus_data($where, 'data_pegawai');
        redirect('sekre/surat/edit/' . $no_surat);
    }

    public function ajukan_surat($no_surat)
    {      
        $data = [
                       'status_surat' => 1
        ];
        $where = [
            'no_surat' => $no_surat
        ];

        $this->Model_surat_penugasan->update_data($where, $data, 'surat_penugasan');
        redirect('sekre/surat/');
    }


    function get_sub_user()
    {
        $username = $this->input->post('id', TRUE);
        $data = $this->Model_user->get_sub_siuser($username)->result();
        echo json_encode($data);
    }
}
