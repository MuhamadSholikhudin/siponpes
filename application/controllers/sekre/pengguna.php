<?php

class Pengguna extends CI_Controller
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
        $data['penempatan'] = [
  
            "Kecamatan Kota",
            "Kecamatan Bae",
            "Kecamatan Dawe",
            "Kecamatan Gebog",
            "Kecamatan Jati",
            "Kecamatan Jekulo",
            "Kecamatan Kaliwungu",
            "Kecamatan Mejobo",
            "Kecamatan Undaan"
                    ];

        $data['user'] = $this->db->get('user')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/pengguna', $data);
        $this->load->view('templates_admin/footer');
    }

    
    public function tambah_aksi()
    {

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');


        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'level' => $level
        );

        $datat = array(
            'nama' => $nama,
            'nip' => $username
        );

        $this->Model_user->tambah_user($data, 'user');
        $this->Model_data_pegawai->tambah_data_pegawai($datat, 'data_pegawai');
        redirect('sekre/pengguna/');
    }

    public function edit($id_user)
    {

        $where = array('id_user' => $id_user);
        $data['user'] = $this->Model_user->edit_user($where, 'user')->result();
        $data['level'] = ['1', '2', '3'];
        $data['jabatan'] = [
            'Kepala Disnaker ',
            'Seketariat Disnaker ',
            'PWU Kecamatan Kota ',
            'PWU Kecamatan Bae ',
            'PWU Kecamatan Dawe ',
            'PWU Kecamatan Gebog ',
            'PWU Kecamatan Jati ',
            'PWU Kecamatan Jekulo ',
            'PWU Kecamatan Kaliwungu ',
            'PWU Kecamatan Mejobo ',
            'PWU Kecamatan Undaan '
        ];

        $data['penempatan'] = [
  
"Kecamatan Kota",
"Kecamatan Bae",
"Kecamatan Dawe",
"Kecamatan Gebog",
"Kecamatan Jati",
"Kecamatan Jekulo",
"Kecamatan Kaliwungu",
"Kecamatan Mejobo",
"Kecamatan Undaan"
        ];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/edit_pengguna', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $id_user = $this->input->post('id_user');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $nip = $this->input->post('username');
        $usernamelama = $this->input->post('usernamelama');
        $password = $this->input->post('password');
        $level = $this->input->post('level');
        $jabatan = $this->input->post('jabatan');
        $penempatan = $this->input->post('penempatan');

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'level' => $level,
            'jabatan' => $jabatan,
            'penempatan' => $penempatan,
        );

        $where = [
            'id_user' => $id_user
        ];

        $datat = [
            'nip' => $nip,
            'nama' => $nama
        ];

        $wheret = [
            'nip' => $usernamelama
        ];

        $this->Model_user->update_data($where, $data, 'user');
        $this->Model_data_pegawai->update_datat($wheret, $datat, 'data_pegawai');
        redirect('sekre/pengguna/');
    }

}
