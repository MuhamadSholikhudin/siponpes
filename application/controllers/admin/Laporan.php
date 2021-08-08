<?php

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('tgl_indo');
        
    }
    
    // public function pendaftaran()
    // {
    //     $data['pendaftaran'] = $this->db->query("SELECT * FROM daftar ")->result();

    //     $this->load->view('templates_admin/header');
    //     $this->load->view('templates_admin/sidebar');
    //     $this->load->view('admin/laporan/pendaftaran', $data);
    //     $this->load->view('templates_admin/footer');
    // }
    public function pendaftaran()
    {
        $this->form_validation->set_rules('pilihan', 'pilihan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['pendaftaran'] = $this->db->query("SELECT * FROM daftar ")->result();
            $data['cetak'] = ['normal'];

            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('laporan/laporan_pendaftaran', $data);
            $this->load->view('templates_admin/footer');
        }else{
            $pilihan = $this->input->post('pilihan');

            if($pilihan == 'tanggal'){
                $tanggal_awal = $this->input->post('tanggal_awal');
                $tanggal_akhir = $this->input->post('tanggal_akhir');
                $data['cetak'] = ['tanggal'];
                $data['tanggal'] = [$tanggal_awal,  $tanggal_akhir];
                $data['pendaftaran'] = $this->db->query("SELECT * FROM daftar WHERE tanggal_daftar BETWEEN '$tanggal_awal' AND '$tanggal_akhir'")->result();
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('laporan/laporan_pendaftaran', $data);
                $this->load->view('templates_admin/footer');
            }elseif($pilihan == 'bulan'){
                $bulan = $this->input->post('bulan');
                $tahun = $this->input->post('tahun');
                $data['cetak'] = ['bulan'];
                $data['bulan'] = [$bulan,  $tahun];
                
            $data['pendaftaran'] = $this->db->query("SELECT * FROM daftar WHERE MONTH(tanggal_daftar) = '$bulan' AND YEAR(tanggal_daftar) = '$tahun' ")->result();
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('laporan/laporan_pendaftaran', $data);
                $this->load->view('templates_admin/footer');
            }elseif($pilihan == 'tahun'){
                $tahun = $this->input->post('tahun');
                $data['cetak'] = ['tahun'];
                $data['tahun'] = [ $tahun];
                
            $data['pendaftaran'] = $this->db->query("SELECT * FROM daftar WHERE  YEAR(tanggal_daftar) = '$tahun' ")->result();
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('laporan/laporan_pendaftaran', $data);
                $this->load->view('templates_admin/footer');
            }
        }


    }


    public function cetak_pendaftaran_tanggal($tanggal_awal, $tanggal_akhir)
    {
        $data['pendaftaran'] = $this->db->query("SELECT * FROM daftar WHERE tanggal_daftar BETWEEN '$tanggal_awal' AND '$tanggal_akhir'")->result();
        $this->load->view('laporan/cetak_laporan_pendaftaran', $data);
    }
    public function cetak_pendaftaran_bulan($bulan, $tahun)
    {
        $data['pendaftaran'] = $this->db->query("SELECT * FROM daftar WHERE MONTH(tanggal_daftar) = '$bulan' AND YEAR(tanggal_daftar) = '$tahun' ")->result();
        $this->load->view('laporan/cetak_laporan_pendaftaran', $data);
    }
    public function cetak_pendaftaran_tahun($tahun)
    {
        $data['pendaftaran'] = $this->db->query("SELECT * FROM daftar WHERE  YEAR(tanggal_daftar) = '$tahun' ")->result();
        $this->load->view('laporan/cetak_laporan_pendaftaran', $data);
    }
    
    public function pembayaran()
    {
        $data['pembayaran'] = $this->db->query("SELECT * FROM pembayaran ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/laporan/pembayaran', $data);
        $this->load->view('templates_admin/footer');
    }

    public function santri()
    {
        $data['santri'] = $this->db->query("SELECT * FROM santri ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/laporan/santri', $data);
        $this->load->view('templates_admin/footer');
    }

    public function ustads()
    {
        $data['ustads'] = $this->db->query("SELECT * FROM pengguna WHERE hakakses = 2 ")->result();
    
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/laporan/ustads', $data);
        $this->load->view('templates_admin/footer');
    }
}
