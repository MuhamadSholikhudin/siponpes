<?php

class Pembayaran extends CI_Controller
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
        $data['pembayaran'] = $this->db->query("SELECT * FROM pembayaran")->result();
        // $data['pendaftaran'] = $this->db->query("SELECT * FROM daftar WHERE id_daftar = 2")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pembayaran/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function aksi_tambah()
    {

        // $nama = $this->input->post('nama');
        $id_daftar = $this->input->post('id_daftar');
        $jumlah = $this->input->post('jumlah');
        $status = $this->input->post('status');
        $tanggal = $this->input->post('tanggal');
        // $status = $this->input->post('status');

        $data = array(
            // 'nama' => $nama,
            'id_daftar' => $id_daftar,
            'jumlah' => $jumlah,
            'status' => $status,
            'tanggal' => $tanggal
        );

        if($id_daftar){

            $teks = $this->input->post('nama_pendaftar');
            $pecah = explode(" ", $teks);
            $kalimat1 = $pecah[0] . $id_daftar;
            $kalimat2 = $pecah[0] . $id_daftar. date('Y');

            // $nama = $this->input->post('nama');
            $username = $kalimat1;
            $password = $kalimat2;
            // $status = $this->input->post('status');

            $datas = array(
                // 'nama' => $nama,
                'username' => $username,
                'password' => $password,
                'status' => 1,
                'hakakses' => 3,
                'periodetahun' => date('Y'),
                'id_daftar' => $id_daftar
            );

            $this->Model_santri->tambah_santris($datas, 'santri');
        }
        
        $this->Model_pembayaran->tambah_pembayaran($data, 'pembayaran');
        redirect('admin/pembayaran/');
    }

    public function ubah($id_pembayaran)
    {

        $data['pembayaran'] = $this->db->query("SELECT * FROM pembayaran WHERE id_pembayaran = '$id_pembayaran' ")->row();
        $data['status'] = [0, 1];
        $data['hakakses'] = [3];
        $data['periodetahun'] = [2020, 2021, 2022, 2023,];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pembayaran/edit', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $id_pembayaran = $this->input->post('id_pembayaran');
         // $nama = $this->input->post('nama');
        $id_pendaftar = $this->input->post('id_pendaftar');
        $jumlah = $this->input->post('jumlah');
        $status = $this->input->post('status');
        $tanggal = $this->input->post('tanggal');
        // $status = $this->input->post('status');

        $data = array(
            // 'nama' => $nama,
            'id_pendaftar' => $id_pendaftar,
            'jumlah' => $jumlah,
            'status' => $status,
            'tanggal' => $tanggal
        );
        $where = [
            'id_pembayaran' => $id_pembayaran
        ];

        $this->Model_pembayaran->update_data($where, $data, 'pembayaran');
        redirect('admin/pembayaran/');
    }

    public function hapus($id_pembayaran)
    {
        $where = ['id_pembayaran' => $id_pembayaran];

        // $cari = $this->db->query(" SELECT status_surat FROM surat_penugasan WHERE no_surat = '$no_surat' AND status_surat = 0 ")->num_rows();
        // if($cari > 0){
        $this->Model_pembayaran->hapus_data($where, 'pembayaran');
        redirect('admin/pembayaran/');
        // }elseif($cari < 1){
        //     redirect('sekre/surat/');
        // }
    }

    function get_sub_id_daftar()
    {
        $id_daftar = $this->input->post('id_daftar', TRUE);
        $data = $this->Model_pembayaran->get_sub_id($id_daftar)->result();
        echo json_encode($data);
    }
}
