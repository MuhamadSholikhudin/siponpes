<?php

class Pengguna extends CI_Controller
{

    public function index()
    {
        $data['pengguna'] = $this->db->query("SELECT * FROM pengguna WHERE hakakses = 1")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pengguna/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function aksi_tambah()
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

        $this->Model_pengguna->tambah_pengguna($data, 'pengguna');
        redirect('admin/pengguna/');
    }

    public function ubah($id_pengguna)
    {

        $data['pengguna'] = $this->db->query("SELECT * FROM pengguna WHERE id_pengguna = '$id_pengguna' ")->row();
        $data['status'] = [0, 1];
        $data['hakakses'] = [1, 2];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pengguna/edit', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $hakakses = $this->input->post('hakakses');
        $status = $this->input->post('status');
        $id_pengguna = $this->input->post('id_pengguna');

        $data = [
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'hakakses' => $hakakses,
            'status' => $status
        ];
        $where = [
            'id_pengguna' => $id_pengguna
        ];

        $this->Model_pengguna->update_data($where, $data, 'pengguna');
        redirect('admin/pengguna/');
    }

    public function hapus($id_pengguna)
    {
        $where = ['id_pengguna' => $id_pengguna];

        // $cari = $this->db->query(" SELECT status_surat FROM surat_penugasan WHERE no_surat = '$no_surat' AND status_surat = 0 ")->num_rows();
        // if($cari > 0){
        $this->Model_penggguna->hapus_data($where, 'pengguna');
        redirect('admin/pengguna/');
        // }elseif($cari < 1){
        //     redirect('sekre/surat/');
        // }
    }
}
