<?php

class Coba extends CI_Controller
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
        $this->load->view('coba/coba', $data);
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
        $this->load->view('coba/jadwal', $data);
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
                "status" => $_POST['absen'][$key],
                "tanggal" => date('Y-m-d'),
                "id_jadwal" => $jadwal
            );
        }
        $this->db->insert_batch('absensi', $absens);

        $perkembangans = array();
        foreach ($id_santri as $key => $val) {
            $perkembangans[] = array(
                "id_santri" => $id_santri[$key],
                "keterangan" => $_POST['perkembangan'][$key],
                "tanggal" => date('Y-m-d'),
                "id_jadwal" => $jadwal
            );
        }
        $this->db->insert_batch('perkembangan_pembelajaran', $perkembangans);


        $nilais = array();
        foreach ($id_santri as $key => $val) {
            $nilais[] = array(
                "id_santri" => $id_santri[$key],
                "nilai" => $_POST['nilai'][$key],
                "tanggal" => date('Y-m-d'),
                "id_jadwal" => $jadwal
            );
        }
        $this->db->insert_batch('nilai', $nilais);

        redirect('ustads/coba/pembelajaran/'. $nomer_jadwal.'/'. $nomer_pel);
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
                "status" => $_POST['absen'][$key],
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
                "keterangan" => $_POST['perkembangan'][$key],
                "tanggal" => date('Y-m-d'),
                "id_jadwal" => $id_jadwal[$key]
            );
        }
        $this->db->update_batch('perkembangan_pembelajaran', $perkembangans, 'id_perkembangan');
        
        $nilais = array();
        foreach ($id_santri as $key => $val) {
            $nilais[] = array(
                "id_nilai" => $_POST['id_nilai'][$key],
                "id_santri" => $id_santri[$key],
                "nilai" => $_POST['nilai'][$key],
                "tanggal" => date('Y-m-d'),
                "id_jadwal" => $jadwal
            );
        }
        $this->db->update_batch('nilai', $nilais, 'id_nilai');
        
        redirect('ustads/coba/pembelajaran/' . $nomer_jadwal . '/' . $nomer_pel);

    }

}