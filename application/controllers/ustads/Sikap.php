<?php

class Sikap extends CI_Controller
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
        // $data['sikap'] = $this->db->query("SELECT * FROM pelajaran WHERE id_pengguna = $id_pengguna ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('ustads/sikap/index');
        $this->load->view('templates_admin/footer');
    }

    public function kelas()
    {
        $id_pengguna = $this->input->post('id_pengguna');
        $kelas = $this->input->post('kelas');

        $data['sikap'] = $this->db->query("SELECT * FROM pelajaran LEFT JOIN jadwal ON pelajaran.id_pelajaran = jadwal.id_pelajaran WHERE pelajaran.id_pengguna = $id_pengguna AND jadwal.id_kelas = $kelas ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('ustads/sikap/kelas', $data);
        $this->load->view('templates_admin/footer');
    }

    public function lihat($id_kelas, $id_pelajaran)
    {
        $id_pel = $id_pelajaran;
        $cari_pelajaran = $this->db->query("SELECT * FROM  pelajaran WHERE id_pelajaran =  $id_pel")->row();
        $data['id_pelajaran'] = [$cari_pelajaran->id_pelajaran];
        $data['nama_pelajaran'] = [$cari_pelajaran->nama_pelajaran];
        $data['id_kelas'] = [$id_kelas];


        // $data['sikap'] = $this->db->query("SELECT * FROM sikap_dan_prilaku LEFT JOIN pelajaran ON pelajaran.id_pelajaran = sikap_dan_prilaku.id_pelajaran WHERE sikap_dan_prilaku.id_pelajaran = '$id_pel' AND pelajaran.id_pengguna = $id_pengguna ")->result();

        $data['sikap'] =  $this->db->query("SELECT * FROM sikap_dan_prilaku WHERE id_pelajaran = $id_pel")->result();


        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('ustads/sikap/lihat', $data);
        $this->load->view('templates_admin/footer');
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
        $this->load->view('ustads/sikap/tambah', $data);
        $this->load->view('templates_admin/footer');
    }
    
    public function ubah($id_nilai)
    {
        // $id_pel = $id_pelajaran;
        $data['sikap'] = $this->db->query("SELECT * FROM nilai WHERE id_nilai = $id_nilai ")->row();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('ustads/sikap/edit', $data);
        $this->load->view('templates_admin/footer');
    }
    public function aksi_tambah()
    {
        $id_pelajaran = $this->input->post('id_pelajaran');
        $id_kelas = $this->input->post('id_kelas');
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
            'id_kelas' => $id_kelas,
            'id_santri' => $id_santri
        );

        $this->Model_sikap->tambah_sikap($data, 'sikap');
        redirect('ustads/sikap/');
    }


    public function edit_aksi()
    {
        $id_nilai = $this->input->post('id_nilai');
        $nilai = $this->input->post('nilai');
        $id_pengguna = $this->input->post('id_pengguna');
        $id_pelajaran = $this->input->post('id_pelajaran');
               
        // $data['sikap'] = $this->db->query("SELECT * FROM nilai JOIN jadwal ON nilai.id_jadwal = jadwal.id_jadwal WHERE nilai")->row();
        $data = [
            'nilai' => $nilai,
        ];
        $where = [
            'id_nilai' => $id_nilai
        ];

        $this->Model_nilai->update_data($where, $data, 'nilai');
        redirect('ustads/sikap/lihat/'.$id_pengguna.'/'.$id_pelajaran);
    }

    public function hapus($id_sikap)
    {
        $where = ['id_sikap' => $id_sikap];

        // $cari = $this->db->query(" SELECT status_surat FROM surat_penugasan WHERE no_surat = '$no_surat' AND status_surat = 0 ")->num_rows();
        // if($cari > 0){
        $this->Model_sikap->hapus_data($where, 'sikap');
        redirect('admin/sikap/');
        // }elseif($cari < 1){
        //     redirect('sekre/surat/');
        // }
    }
}
