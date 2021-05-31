<?php

class Pegawai extends CI_Controller
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

        // $data['data_pegawai'] = $this->db->get('data_pegawai')->result();
        $data['data_pegawai'] = $this->db->query(" SELECT data_pegawai.id , data_pegawai.nip , data_pegawai.nama, data_pegawai.jabatan, data_pegawai.penempatan 
        FROM data_pegawai JOIN user ON data_pegawai.nip = user.username WHERE user.level != 1 ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/pegawai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {

        $nip = $this->input->post('nip');
        // $alamat = $this->input->post('alamat');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $penempatan = $this->input->post('penempatan');


        $data = array(
            'nip' => $nip,
            // 'alamat' => $alamat,
            'nama' => $nama,
            'jabatan' => $jabatan,
            'penempatan' => $penempatan
        );

        $this->Model_data_pegawai->tambah_data_pegawai($data, 'data_pegawai');
        redirect('sekre/pegawai/');
    }

    public function edit($id)
    {

        $where = array('id' => $id);
        $data['user'] = $this->Model_data_pegawai->edit_data_pegawai($where, 'data_pegawai')->result();
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
            'PWU Kecamatan Undaan ',
            'toolman otomotif ',
            'toolman otomotif ',
            'Toolmen Las ',
            'Toolmen komputer ',
            'TOOLMAN BUBUT & Perkayuan ',
            'Toolman Boga ',
            'TOOLMAN RIAS ',
            'Toolman Jahit '
        ];

        $data['penempatan'] = [
            "Pembina Utama IV/e",
            "Pembina UtamaMadya IV/d",
            "Pembina Utama Muda IV/c",
            "Pembina Tingkat I IV/b",
            "Pembina IV/a",
            "Penata Tingkat I III/d",
            "Penata III/c",
            "Penata Muda Tingkat I III/b",
            "Penata Muda III/a",
            "Pengatur Tingkat I II/d",
            "Pengatur	II/c",
            "Pengatur Muda Tingkat I II/b",
            "Pengatur Muda II/a",
            "Juru Tingkat I I/d",
            "Juru I/c",
            "Juru Muda Tingkat I I/b",
            "Juru Muda I/a"
        ];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/edit_pegawai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $nip = $this->input->post('username');
        $niplama = $this->input->post('niplama');
        $jabatan = $this->input->post('jabatan');
        $penempatan = $this->input->post('penempatan');

        $data = array(
            'nama' => $nama,
            'nip' => $nip,
            'jabatan' => $jabatan,
            'penempatan' => $penempatan,
        );

        $where = [
            'id' => $id
        ];

        
        $this->Model_data_pegawai->update_datat($where, $data, 'data_pegawai');
        redirect('sekre/pegawai/');
    }

    public function hapus($id){
        $filter = $this->db->query("SELECT surat_penugasan.status_surat FROM data_pegawai JOiN surat_penugasan ON data_pegawai.no_surat = surat_penugasan.no_surat WHERE surat_penugasan.status_surat < 2 AND data_pegawai.id = '$id' ")->result();

        if($filter > 1){
            redirect('sekre/pegawai/');
        }elseif($filter < 2){
            $where = ['id' => $id];
            $this->Model_data_pegawaig->hapus_data($where, 'data_pegawai');
            redirect('sekre/pegawai/');

        }
    }
}
