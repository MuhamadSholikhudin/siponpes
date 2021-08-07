<?php

class Rapot extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // if ($this->session->userdata('hakakses') > 2) {
        //     $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //             Anda Belum Login
        //             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //                 <span aria-hidden="true">&times;</span>
        //             </button>
        //             </div>');
        //     redirect('page/login');
        // }
        $this->load->helper('tgl_indo');
    }

    public function index()
    {
        // $data['rapot'] = $this->db->query("SELECT * FROM pelajaran WHERE id_pengguna = $id_pengguna ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/rapot/index');
        $this->load->view('templates_admin/footer');
    }

    public function kelas($kelas)
    {
        // $id_pengguna = $this->input->post('id_pengguna');
        $data['kelas_ini'] = [$kelas];

        $data['rapot'] = $this->db->query("SELECT * FROM santri  WHERE  kelas = $kelas ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/rapot/kelas', $data);
        $this->load->view('templates_admin/footer');
    }

    public function lihat($id_santri)
    {
        $data['santri'] =  $this->db->query("SELECT * FROM santri WHERE id_santri = $id_santri")->row();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/rapot/lihat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function naik_kelas()
    {
        $kelas = $this->input->post('kelas');
        $putusan = $this->input->post('putusan');
        $id_santri = $this->input->post('id_santri');

        $data = array(       
            'kelas' => $putusan
        );
        $where = array(       
            'id_santri' => $id_santri
        );

        $this->Model_santri->update_data($where, $data, 'santri');
        redirect('admin/rapot/kelas/'. $kelas);
    }

    public function tambah($id_pelajaran, $id_kelas, $id_santri)
    {    
        $cari_santri = $this->db->query("SELECT * FROM santri WHERE id_santri = $id_santri ")->row();
        $cari_daftar = $this->db->query("SELECT * FROM daftar WHERE id_daftar = $cari_santri->id_daftar ")->row();
        $cari_pelajaran = $this->db->query("SELECT * FROM pelajaran WHERE id_pelajaran =  $id_pelajaran")->row();
        
        $data['id_pelajaran'] = [$id_pelajaran];
        $data['id_kelas'] = [$id_kelas];
        $data['id_santri'] = [$id_santri];
        $data['nama_pelajaran'] = [$cari_pelajaran->nama_pelajaran];
        $data['nama_lengkap'] = [$cari_daftar->nama_lengkap];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/rapot/tambah', $data);
        $this->load->view('templates_admin/footer');
    }
    
    public function ubah($id_rapot_dan_prilaku, $id_kelas)
    {
        $data['id_kelas'] = [$id_kelas];
        $data['rapot'] = $this->db->query("SELECT * FROM rapot_dan_prilaku WHERE id_rapot_dan_prilaku = $id_rapot_dan_prilaku ")->row();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/rapot/edit', $data);
        $this->load->view('templates_admin/footer');
    }

    public function aksi_tambah()
    {
        $id_pelajaran = $this->input->post('id_pelajaran');
        $kelas = $this->input->post('kelas');
        $id_santri = $this->input->post('id_santri');

        $ketaatan = $this->input->post('ketaatan');
        $ketakdiman = $this->input->post('ketakdiman');
        $kedisiplinan = $this->input->post('kedisiplinan');
        $kerapian = $this->input->post('kerapian');
        $kesemangatan = $this->input->post('kesemangatan');
        $partisipasi = $this->input->post('partisipasi');
        $etika = $this->input->post('etika');
        $kerjasama = $this->input->post('kerjasama');
        $kelengkapan_catatan = $this->input->post('kelengkapan_catatan');

        $data = array(
            'ketaatan' => $ketaatan,
            'ketakdiman' => $ketakdiman,
            'kedisiplinan' => $kedisiplinan,
            'kerapian' => $kerapian,
            'kesemangatan' => $kesemangatan,
            'partisipasi' => $partisipasi,
            'etika' => $etika,
            'kerjasama' => $kerjasama,
            'kelengkapan_catatan' => $kelengkapan_catatan,

            'id_pelajaran' => $id_pelajaran,
            'kelas' => $kelas,
            'id_santri' => $id_santri
        );

        $this->Model_rapot_dan_prilaku->tambah_rapot_dan_prilaku($data, 'rapot_dan_prilaku');
        redirect('admin/rapot/lihat/'. $kelas.'/'.$id_pelajaran);
    }


    public function aksi_edit()
    {
        $id_rapot_dan_prilaku = $this->input->post('id_rapot_dan_prilaku');
        $id_pelajaran = $this->input->post('id_pelajaran');
        $kelas = $this->input->post('kelas');
        $id_santri = $this->input->post('id_santri');

        $ketaatan = $this->input->post('ketaatan');
        $ketakdiman = $this->input->post('ketakdiman');
        $kedisiplinan = $this->input->post('kedisiplinan');
        $kerapian = $this->input->post('kerapian');
        $kesemangatan = $this->input->post('kesemangatan');
        $partisipasi = $this->input->post('partisipasi');
        $etika = $this->input->post('etika');
        $kerjasama = $this->input->post('kerjasama');
        $kelengkapan_catatan = $this->input->post('kelengkapan_catatan');

        $data = array(
            'ketaatan' => $ketaatan,
            'ketakdiman' => $ketakdiman,
            'kedisiplinan' => $kedisiplinan,
            'kerapian' => $kerapian,
            'kesemangatan' => $kesemangatan,
            'partisipasi' => $partisipasi,
            'etika' => $etika,
            'kerjasama' => $kerjasama,
            'kelengkapan_catatan' => $kelengkapan_catatan,

            'id_pelajaran' => $id_pelajaran,
            'kelas' => $kelas,
            'id_santri' => $id_santri
        );
        $where = [
            'id_rapot_dan_prilaku' => $id_rapot_dan_prilaku
        ];

        $this->Model_rapot_dan_prilaku->update_data($where, $data, 'rapot_dan_prilaku');
        
        redirect('admin/rapot/lihat/'. $kelas.'/'.$id_pelajaran);
    }

    public function hapus($id_rapot)
    {
        $where = ['id_rapot' => $id_rapot];

        // $cari = $this->db->query(" SELECT status_surat FROM surat_penugasan WHERE no_surat = '$no_surat' AND status_surat = 0 ")->num_rows();
        // if($cari > 0){
        $this->Model_rapot->hapus_data($where, 'rapot');
        redirect('admin/rapot/');
        // }elseif($cari < 1){
        //     redirect('sekre/surat/');
        // }
    }


    function get_sub_id_kelas()
    {
        $id_kelas = $this->input->post('putusan', TRUE);
        $data = $this->Model_kelas->get_sub_id($id_kelas)->result();
        echo json_encode($data);
    }
}
