<?php

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('level') != 3) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Anda Belum Login
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
            redirect('auth/login');
        }
    }

    public function pegawai()
    {

        $data['user'] = $this->db->get('user')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('laporan/laporan_pegawai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function cetak_pegawai()
    {

        $data['user'] = $this->db->get('user')->result();
        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();

        $this->load->view('laporan/cetak_laporan_pegawai', $data);
    }

    public function surat()
    {

        // $data['surat'] = $this->db->query(" SELECT * FROM surat_penugasan WHERE status_surat = 4")->result();

        $tanggal_awal = $this->input->post('tanggal_awal');
        $tanggal_akhir = $this->input->post('tanggal_akhir');

        $data['surat'] = $this->db->query(" SELECT * FROM surat_penugasan WHERE tgl_buat BETWEEN '$tanggal_awal' AND '$tanggal_akhir' ")->result();

        // $data['cetak'] = ['<script>window.location.href = "http://externalpage.com";target = "_blank";</script>'];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('laporan/laporan_surat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function surat_pertanggal()
    {
        $tanggal_awal = $this->input->post('tanggal_awal');
        $tanggal_akhir = $this->input->post('tanggal_akhir');

        $data['surat'] = $this->db->query(" SELECT * FROM surat_penugasan WHERE tgl_buat BETWEEN '$tanggal_awal' AND '$tanggal_akhir' ")->result();


        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();

        // $this->load->view('templates_admin/header');
        // $this->load->view('templates_admin/sidebar');
        // $this->load->view('laporan/laporan_surat_pilih', $data);
        // $this->load->view('templates_admin/footer');

        $this->load->view('laporan/cetak_laporan_surat', $data);
    }

    public function surat_perbulan()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data['surat'] = $this->db->query(" SELECT * FROM surat_penugasan WHERE MONTH(tgl_buat) = '$bulan' AND YEAR(tgl_buat) = '$tahun'  ")->result();

        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();

        // $this->load->view('templates_admin/header');
        // $this->load->view('templates_admin/sidebar');
        // $this->load->view('laporan/laporan_surat_pilih', $data);
        // $this->load->view('templates_admin/footer');

        $this->load->view('laporan/cetak_laporan_surat', $data);
    }

    public function surat_pertahun()
    {
        $pertahun = $this->input->post('tahun');
        if ($pertahun < 1) {
            redirect('sekre/laporan/surat');
        }

        $data['surat'] = $this->db->query(" SELECT * FROM surat_penugasan WHERE  YEAR(tgl_buat) = '$pertahun'  ")->result();

        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();

        // $this->load->view('templates_admin/header');
        // $this->load->view('templates_admin/sidebar');
        // $this->load->view('laporan/laporan_surat_pilih', $data);
        // $this->load->view('templates_admin/footer');

        $this->load->view('laporan/cetak_laporan_surat', $data);
    }

    public function cetak_surat($no_surat)
    {
        $where = array('no_surat' => $no_surat);
        $data['surat'] = $this->Model_surat_penugasan->edit_surat_penugasan($where, 'surat_penugasan')->result();

        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();

        $data['datatugas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE no_surat = $no_surat ")->result();
        $data['dagas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE no_surat = $no_surat ");


        // $data['user'] = $this->db->query(" SELECT user.nama FROM user JOIN data_pegawai ON user.username = data_pegawai.nip
        //  WHERE data_pegawai.no_surat != '$no_surat'")->result();

        $data['user'] = $this->db->query(" SELECT * FROM user")->result();


        $this->load->view('laporan/cetak_laporan_surat', $data);
    }

    public function absensi()
    {


        $tanggal_awal = $this->input->post('tanggal_awal');
        $tanggal_akhir = $this->input->post('tanggal_akhir');

        // $data['surat'] = $this->db->query(" SELECT * FROM surat_penugasan WHERE tgl_buat BETWEEN '$tanggal_awal' AND '$tanggal_akhir' ")->result();


        $data['jadwal'] = $this->db->query(" SELECT * FROM jadwal_penugasan JOIN data_pegawai ON jadwal_penugasan.id = data_pegawai.id WHERE jadwal_penugasan.jadwal BETWEEN  '$tanggal_awal' AND '$tanggal_akhir' ")->result();


        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('laporan/laporan_absensi', $data);
        $this->load->view('templates_admin/footer');
    }

    public function absensi_pertanggal()
    {
        $tanggal_awal = $this->input->post('tanggal_awal');
        $tanggal_akhir = $this->input->post('tanggal_akhir');

        // $data['surat'] = $this->db->query(" SELECT * FROM surat_penugasan WHERE tgl_buat BETWEEN '$tanggal_awal' AND '$tanggal_akhir' ")->result();

        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();


        $data['jadwal'] = $this->db->query(" SELECT * FROM jadwal_penugasan JOIN data_pegawai ON jadwal_penugasan.id = data_pegawai.id WHERE jadwal_penugasan.jadwal BETWEEN  '$tanggal_awal' AND '$tanggal_akhir' ")->result();

        // $this->load->view('templates_admin/header');
        // $this->load->view('templates_admin/sidebar');
        // $this->load->view('laporan/laporan_absensi_pilih', $data);
        // $this->load->view('templates_admin/footer');

        $this->load->view('laporan/cetak_laporan_absensi', $data);
    }

    public function absensi_perbulan()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();


        // $data['surat'] = $this->db->query(" SELECT * FROM surat_penugasan WHERE MONTH(tgl_buat) = '$bulan' AND YEAR(tgl_buat) = '$tahun'  ")->result();
        $data['jadwal'] = $this->db->query(" SELECT * FROM jadwal_penugasan JOIN data_pegawai ON jadwal_penugasan.id = data_pegawai.id WHERE MONTH(jadwal_penugasan.jadwal) = '$bulan' AND YEAR(jadwal_penugasan.jadwal) = '$tahun' ")->result();

        // $this->load->view('templates_admin/header');
        // $this->load->view('templates_admin/sidebar');
        // $this->load->view('laporan/laporan_absensi_pilih', $data);
        // $this->load->view('templates_admin/footer');

        $this->load->view('laporan/cetak_laporan_absensi', $data);
    }

    public function absensi_pertahun()
    {
        $pertahun = $this->input->post('tahun');
        if ($pertahun < 1) {
            redirect('sekre/laporan/surat');
        }
        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();


        // $data['surat'] = $this->db->query(" SELECT * FROM surat_penugasan WHERE  YEAR(tgl_buat) = '$pertahun'  ")->result();
        $data['jadwal'] = $this->db->query(" SELECT * FROM jadwal_penugasan JOIN data_pegawai ON jadwal_penugasan.id = data_pegawai.id WHERE  YEAR(jadwal_penugasan.jadwal) = '$pertahun' ")->result();

        // $this->load->view('templates_admin/header');
        // $this->load->view('templates_admin/sidebar');
        // $this->load->view('laporan/laporan_absensi_pilih', $data);
        // $this->load->view('templates_admin/footer');

        $this->load->view('laporan/cetak_laporan_absensi', $data);
    }




    public function absensi_pegawai($no_surat)
    {
        $where = array('no_surat' => $no_surat);

        $data['user'] = $this->db->get('user')->result();
        // $data['jadwal'] = $this->db->query(" SELECT * FROM jadwal_penugasan WHERE no_surat = '$no_surat'")->result();
        $data['jadwal'] = $this->db->query(" SELECT * FROM jadwal_penugasan JOIN data_pegawai ON jadwal_penugasan.id = data_pegawai.id WHERE jadwal_penugasan.no_surat = '$no_surat'")->result();
        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();

        $this->load->view('laporan/cetak_laporan_absensi', $data);
    }
}
