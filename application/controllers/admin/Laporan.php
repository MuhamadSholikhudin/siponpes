<?php

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('tgl_indo');
        
    }
    

    public function pendaftaran()
    {
        $this->form_validation->set_rules('pilihan', 'pilihan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['pendaftaran'] = $this->db->query("SELECT * FROM pendaftaran ")->result();
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
                $data['pendaftaran'] = $this->db->query("SELECT * FROM pendaftaran WHERE tanggal_daftar BETWEEN '$tanggal_awal' AND '$tanggal_akhir'")->result();
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('laporan/laporan_pendaftaran', $data);
                $this->load->view('templates_admin/footer');
            }elseif($pilihan == 'bulan'){
                $bulan = $this->input->post('bulan');
                $tahun = $this->input->post('tahun');
                $data['cetak'] = ['bulan'];
                $data['bulan'] = [$bulan,  $tahun];
                
            $data['pendaftaran'] = $this->db->query("SELECT * FROM pendaftaran WHERE MONTH(tanggal_daftar) = '$bulan' AND YEAR(tanggal_daftar) = '$tahun' ")->result();
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('laporan/laporan_pendaftaran', $data);
                $this->load->view('templates_admin/footer');
            }elseif($pilihan == 'tahun'){
                $tahun = $this->input->post('tahun');
                $data['cetak'] = ['tahun'];
                $data['tahun'] = [ $tahun];
                
            $data['pendaftaran'] = $this->db->query("SELECT * FROM pendaftaran WHERE  YEAR(tanggal_daftar) = '$tahun' ")->result();
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('laporan/laporan_pendaftaran', $data);
                $this->load->view('templates_admin/footer');
            }
        }


    }


    public function cetak_pendaftaran_tanggal($tanggal_awal, $tanggal_akhir)
    {
        $data['pendaftaran'] = $this->db->query("SELECT * FROM pendaftaran WHERE tanggal_daftar BETWEEN '$tanggal_awal' AND '$tanggal_akhir'")->result();
        $data['hal'] = ['pertanggal'];
        $data['tanggal'] = [$tanggal_awal, $tanggal_akhir];
        $this->load->view('laporan/cetak_laporan_pendaftaran', $data);
    }
    public function cetak_pendaftaran_bulan($bulan, $tahun)
    {
        $data['pendaftaran'] = $this->db->query("SELECT * FROM pendaftaran WHERE MONTH(tanggal_daftar) = '$bulan' AND YEAR(tanggal_daftar) = '$tahun' ")->result();
        $data['hal'] = ['bulan'];
        $data['bulan'] = [$bulan, $tahun];
        $this->load->view('laporan/cetak_laporan_pendaftaran', $data);
    }
    public function cetak_pendaftaran_tahun($tahun)
    {
        $data['pendaftaran'] = $this->db->query("SELECT * FROM pendaftaran WHERE  YEAR(tanggal_daftar) = '$tahun' ")->result();
        $data['hal'] = ['tahun'];
        $data['tahun'] = [$tahun];
        $this->load->view('laporan/cetak_laporan_pendaftaran', $data);
    }
    
    public function pembayaran()
    {
        $this->form_validation->set_rules('pilihan', 'pilihan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['pembayaran'] = $this->db->query("SELECT * FROM pembayaran ")->result();
            $data['cetak'] = ['normal'];

            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('laporan/laporan_pembayaran', $data);
            $this->load->view('templates_admin/footer');
        }else{
            $pilihan = $this->input->post('pilihan');

            if($pilihan == 'tanggal'){
                $tanggal_awal = $this->input->post('tanggal_awal');
                $tanggal_akhir = $this->input->post('tanggal_akhir');
                $data['cetak'] = ['tanggal'];
                $data['tanggal'] = [$tanggal_awal,  $tanggal_akhir];
                $data['pembayaran'] = $this->db->query("SELECT * FROM pembayaran WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'")->result();
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('laporan/laporan_pembayaran', $data);
                $this->load->view('templates_admin/footer');
            }elseif($pilihan == 'bulan'){
                $bulan = $this->input->post('bulan');
                $tahun = $this->input->post('tahun');
                $data['cetak'] = ['bulan'];
                $data['bulan'] = [$bulan,  $tahun];
                
            $data['pembayaran'] = $this->db->query("SELECT * FROM pembayaran WHERE MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' ")->result();
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('laporan/laporan_pembayaran', $data);
                $this->load->view('templates_admin/footer');
            }elseif($pilihan == 'tahun'){
                $tahun = $this->input->post('tahun');
                $data['cetak'] = ['tahun'];
                $data['tahun'] = [ $tahun];
                
                $data['pembayaran'] = $this->db->query("SELECT * FROM pembayaran WHERE  YEAR(tanggal) = '$tahun' ")->result();
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('laporan/laporan_pembayaran', $data);
                $this->load->view('templates_admin/footer');
            }
        }
    }

    public function cetak_pembayaran_tanggal($tanggal_awal, $tanggal_akhir)
    {
        $data['pembayaran'] = $this->db->query("SELECT * FROM pembayaran WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'")->result();
        $data['hal'] = ['pertanggal'];
        $data['tanggal'] = [$tanggal_awal, $tanggal_akhir];
        $this->load->view('laporan/cetak_laporan_pembayaran', $data);
    }
    public function cetak_pembayaran_bulan($bulan, $tahun)
    {
        $data['pembayaran'] = $this->db->query("SELECT * FROM pembayaran WHERE MONTH(tanggal) = '$bulan' AND YEAR(tanggal) = '$tahun' ")->result();
        $data['hal'] = ['bulan'];
        $data['bulan'] = [$bulan, $tahun];
        $this->load->view('laporan/cetak_laporan_pembayaran', $data);
    }
    public function cetak_pembayaran_tahun($tahun)
    {
        $data['pembayaran'] = $this->db->query("SELECT * FROM pembayaran WHERE  YEAR(tanggal) = '$tahun' ")->result();
        $data['hal'] = ['tahun'];
        $data['tahun'] = [$tahun];
        $this->load->view('laporan/cetak_laporan_pembayaran', $data);
    }



    public function santri()
    {
        $this->form_validation->set_rules('pilihan', 'pilihan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['santri'] = $this->db->query("SELECT * FROM santri ")->result();
            $data['cetak'] = ['normal'];

            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('laporan/laporan_santri', $data);
            $this->load->view('templates_admin/footer');
        }else{
            $pilihan = $this->input->post('pilihan');

            if($pilihan == 'kelas'){
                $kelas = $this->input->post('kelas');

                $data['cetak'] = ['kelas'];
                $data['kelasi'] = [$kelas];

                $data['santri'] = $this->db->query("SELECT * FROM santri WHERE kelas = $kelas")->result();
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('laporan/laporan_santri', $data);
                $this->load->view('templates_admin/footer');
            }elseif($pilihan == 'kelas_periode'){
                $kelas = $this->input->post('kelas');
                $tahun = $this->input->post('tahun');
                $data['cetak'] = ['kelas_periode'];
                $data['kelas_periode'] = [$kelas,  $tahun];
                
            $data['santri'] = $this->db->query("SELECT * FROM santri WHERE kelas = $kelas  AND periodetahun = '$tahun' ")->result();
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('laporan/laporan_santri', $data);
                $this->load->view('templates_admin/footer');
            }elseif($pilihan == 'periode'){
                $tahun = $this->input->post('tahun');
                $data['cetak'] = ['periode'];
                $data['tahun'] = [ $tahun];
                
                $data['santri'] = $this->db->query("SELECT * FROM santri WHERE  periodetahun = '$tahun' ")->result();
                $this->load->view('templates_admin/header');
                $this->load->view('templates_admin/sidebar');
                $this->load->view('laporan/laporan_santri', $data);
                $this->load->view('templates_admin/footer');
            }
        }
    }

    public function cetak_santri_kelas($kelas)
    {
        $data['santri'] = $this->db->query("SELECT * FROM santri WHERE kelas = $kelas")->result();
        $data['hal'] = ['kelas'];
        $data['kelas'] = [$kelas];

                $this->load->view('laporan/cetak_laporan_santri', $data);
    }
    public function cetak_santri_periode($tahun)
    {
        $data['santri'] = $this->db->query("SELECT * FROM santri WHERE  periodetahun = '$tahun' ")->result();
        $data['hal'] = ['periode'];
        $data['periode'] = [$tahun];
        
        $this->load->view('laporan/cetak_laporan_santri', $data);
    }
    public function cetak_santri_periode_kelas($kelas, $tahun)
    {
        $data['santri'] = $this->db->query("SELECT * FROM santri WHERE kelas = $kelas  AND periodetahun = '$tahun' ")->result();
        $data['hal'] = ['kelas_periode'];
        $data['kelas_periode'] = [$kelas, $tahun];
        
        $this->load->view('laporan/cetak_laporan_santri', $data);
    }


    // public function santri()
    // {
    //     $data['santri'] = $this->db->query("SELECT * FROM santri ")->result();

    //     $this->load->view('templates_admin/header');
    //     $this->load->view('templates_admin/sidebar');
    //     $this->load->view('admin/laporan/santri', $data);
    //     $this->load->view('templates_admin/footer');
    // }

    public function ustads()
    {
        $data['ustads'] = $this->db->query("SELECT * FROM pengguna WHERE hakakses = 2 ")->result();
    
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/laporan/ustads', $data);
        $this->load->view('templates_admin/footer');
    }
}
