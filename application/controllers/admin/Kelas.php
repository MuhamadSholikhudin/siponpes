<?php

class kelas extends CI_Controller
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
        $data['kelas'] = $this->db->query("SELECT * FROM kelas ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kelas/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function aksi_tambah()
    {

        $kelas = $this->input->post('kelas');
        $nama_kelas = $this->input->post('nama_kelas');
        

        $data = array(
            'nama_kelas' => $nama_kelas,
            'kelas' => $kelas
        );

        $this->Model_kelas->tambah_kelas($data, 'kelas');
        redirect('admin/kelas/');
    }

    public function ubah($id_kelas)
    {

        $data['kelas'] = $this->db->query("SELECT * FROM kelas WHERE id_kelas = '$id_kelas' ")->row();
        $data['status'] = [0, 1];
        $data['hakakses'] = [3];
        $data['periodetahun'] = [2020, 2021, 2022, 2023,];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kelas/edit', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $id_kelas = $this->input->post('id_kelas');
        $kelas = $this->input->post('kelas');
        $nama_kelas = $this->input->post('nama_kelas');


        $data = array(
            'nama_kelas' => $nama_kelas,
            'kelas' => $kelas
        );

        $where = [
            'id_kelas' => $id_kelas
        ];

        $this->Model_kelas->update_data($where, $data, 'kelas');
        redirect('admin/kelas/');
    }

    public function hapus($id_kelas)
    {
        $where = ['id_kelas' => $id_kelas];

        $cari = $this->db->query(" SELECT id_kelas FROM jadwal WHERE id_kelas = $id_kelas ")->num_rows();
        if($cari > 0){
     
       
                $this->session->set_flashdata('pesan', '<div class="alert bg-pink alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                Data Pelajaran Tidak dapat di hapus, karena dipakai oleh jadwal
                                </div>');
                
            redirect('admin/kelas/');
        }elseif($cari < 1){
            $this->Model_kelas->hapus_data($where, 'kelas');
                $this->session->set_flashdata('pesan', '<div class="alert bg-pink alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                Data Kelas Berhasil di hapus
                                </div>');
                redirect('admin/kelas/');
            
        }


        
    }
}
