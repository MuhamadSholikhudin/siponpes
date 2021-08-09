<?php

class Mengajar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('tgl_indo');
        
    }

    public function index()
    {
        $hari_ini = hari(date('Y-m-d'));
        // $data['jadwal'] = $this->db->query("SELECT * FROM jadwal LEFT JOIN pelajaran ON jadwal.id_pelajaran = pelajaran.id_pelajaran WHERE pelajaran.id_pengguna = 2 AND jadwal.hari = '$hari_ini'")->result();
$data['hari'] = [$hari_ini];
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('mengajar/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function pembelajaran($id_jadwal, $id_pelajaran)
    {
        $hari_ini = hari(date('Y-m-d'));
        $data['hari'] = [$hari_ini];
        $data['jadwal'] = $this->db->query("SELECT * FROM jadwal WHERE id_jadwal = $id_jadwal")->row();
        $data['pelajaran'] = $this->db->query("SELECT * FROM pelajaran WHERE id_pelajaran = $id_pelajaran")->row();
        $data['absen'] = ['Masuk', 'Ijin', 'Sakit', 'Alasan'];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('mengajar/pembelajaran', $data);
        $this->load->view('templates_admin/footer');
    }

    public function aksi_tambah(){
        
        $id_jadwal = $this->input->post('id_jadwal');
        $jadwal = $this->input->post('jadwal');
        $id_santri = $this->input->post('id_santri');
        $materi_belajar = $this->input->post('materi_belajar');
        $tampil_jadwal = $this->db->query("SELECT * FROM jadwal WHERE id_jadwal = $jadwal")->row();
        $nomer_jadwal = $jadwal;
        $nomer_pel = $tampil_jadwal->id_pelajaran;
        
        $data = array(
            'id_jadwal' => $jadwal,
            'materi_belajar' => $materi_belajar,
            'tanggal' => date('Y-m-d')
        );
        $this->Model_pembelajaran->tambah_pembelajaran($data, 'pembelajaran');

        $absens = array();
        foreach ($id_santri as $key => $val) {
            $absens[] = array(
                "id_santri" => $id_santri[$key],
                "id_kelas" => $_POST['id_kelas'][$key],
                "status" => 1,
                "absensi" => $_POST['absen'][$key],
                "tanggal" => date('Y-m-d'),
                "id_jadwal" => $jadwal
            );
        }
        $this->db->insert_batch('absensi', $absens);

        $perkembangans = array();
        foreach ($id_santri as $key => $val) {
            $perkembangans[] = array(
                "id_santri" => $id_santri[$key],
                "id_kelas" => $_POST['id_kelas'][$key],
                "keterangan" => $_POST['perkembangan'][$key],
                "tanggal" => date('Y-m-d'),
                "status" => 1,
                "id_jadwal" => $jadwal
            );
        }
        $this->db->insert_batch('perkembangan_pembelajaran', $perkembangans);

        $penilaian = $this->input->post('penilaian');
        if($penilaian == 'penilaian'){
            $nilais = array();
            foreach ($id_santri as $key => $val) {
                $nilais[] = array(
                    "id_santri" => $id_santri[$key],
                    "id_kelas" => $_POST['id_kelas'][$key],
                    "nilai" => $_POST['nilai'][$key],
                    "tanggal" => date('Y-m-d'),
                    "status" => 1,
                    "id_jadwal" => $jadwal
                );
            }
            $this->db->insert_batch('nilai', $nilais);
        }         

        redirect('ustads/mengajar/pembelajaran/'. $nomer_jadwal.'/'. $nomer_pel);
        // redirect('ustads/dashboard');
    }

    public function aksi_edit(){

        $id_jadwal = $this->input->post('id_jadwal');
        $jadwal = $this->input->post('jadwal');
        $id_pembelajaran = $this->input->post('id_pembelajaran');
        $id_santri = $this->input->post('id_santri');
        $materi_belajar = $this->input->post('materi_belajar');
        $tampil_jadwal = $this->db->query("SELECT * FROM jadwal WHERE id_jadwal = $jadwal")->row();
        $nomer_jadwal = $jadwal;
        $nomer_pel = $tampil_jadwal->id_pelajaran;
        
        $data = array(
            'id_jadwal' => $jadwal,
            'materi_belajar' => $materi_belajar,
            'tanggal' => date('Y-m-d')
        );
        $where = [
            'id_pembelajaran' => $id_pembelajaran,
        ];
        $this->Model_pembelajaran->update_data($where, $data, 'pembelajaran');

        $absens = array();
        foreach ($id_santri as $key => $val) {
            $absens[] = array(
                "id_absensi" => $_POST['id_absensi'][$key],
                "id_santri" => $id_santri[$key],
                "id_kelas" => $_POST['id_kelas'][$key],
                "status" => 1,
                "absensi" => $_POST['absen'][$key],
                "tanggal" => date('Y-m-d'),
                "id_jadwal" => $id_jadwal[$key]
            );
        }
        $this->db->update_batch('absensi', $absens, 'id_absensi');
        // $this->db->update_batch('nilai', $result, 'id_nilai');

        $perkembangans = array();
        foreach ($id_santri as $key => $val) {
            $perkembangans[] = array(
                "id_perkembangan" => $_POST['id_perkembangan'][$key],
                "id_santri" => $id_santri[$key],
                "id_kelas" => $_POST['id_kelas'][$key],
                "keterangan" => $_POST['perkembangan'][$key],
                "tanggal" => date('Y-m-d'),
                "status" => 1,
                "id_jadwal" => $id_jadwal[$key]
            );
        }
        $this->db->update_batch('perkembangan_pembelajaran', $perkembangans, 'id_perkembangan');


        // $pil = $this->input->post('pil');
        $penilaian = $this->input->post('penilaian');

        if($penilaian == 2){
            $nilais = array();
            foreach ($id_santri as $key => $val) {
                $nilais[] = array(
                    "id_nilai" => $_POST['id_nilai'][$key],
                    "id_santri" => $id_santri[$key],
                    "id_kelas" => $_POST['id_kelas'][$key],
                    "nilai" => $_POST['nilai'][$key],
                    "tanggal" => date('Y-m-d'),
                    "status" => 1,
                    "id_jadwal" => $jadwal
                );
            }
            $this->db->update_batch('nilai', $nilais, 'id_nilai');
        
        }elseif($penilaian == 'penilaian'){
            $nilais = array();
            foreach ($id_santri as $key => $val) {
                $nilais[] = array(
                    "id_santri" => $id_santri[$key],
                    "id_kelas" => $_POST['id_kelas'][$key],
                    "nilai" => $_POST['nilai'][$key],
                    "tanggal" => date('Y-m-d'),
                    "status" => 1,
                    "id_jadwal" => $jadwal
                );
            }
            $this->db->insert_batch('nilai', $nilais);
        }
        
        redirect('ustads/mengajar/pembelajaran/' . $nomer_jadwal . '/' . $nomer_pel);
    }

    public function hapus_nilai_all($id_jadwal, $unixtime){
        // echo $unixtime = $strtotime;
        echo $tanggal = date("Y-m-d", $unixtime);
        // $this->db->where('id_jadwal', $id_jadwal);
        // $this->db->where('tanggal', $tanggal);
        // $this->db->delete('nilai');
        $where = ['id_jadwal' => $id_jadwal, 'tanggal' => $tanggal];
        $this->Model_jadwal->hapus_data($where, 'nilai');
        $cari_jadwal = $this->db->query("SELECT * FROM jadwal WHERE id_jadwal = $id_jadwal")->row();
     
        redirect('ustads/mengajar/pembelajaran/' . $id_jadwal . '/' . $cari_jadwal->id_pelajaran);
        // redirect('ustads/dashboard');


    }

}