<?php

class Absensi extends CI_Controller
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

        $data['surat'] = $this->db->query('SELECT * FROM surat_penugasan WHERE status_surat > 2')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/absensi', $data);
        $this->load->view('templates_admin/footer');
    }


    public function surat($no_surat){

        $where = ['no_surat' => $no_surat];
        
            $data['no_sur'] = $this->Model_surat_penugasan->edit_surat_penugasan($where, 'surat_penugasan')->result();

        // $data['jadwal'] = $this->db->query("SELECT absensi.keterangan, jadwal_penugasan.id, jadwal_penugasan.jadwal, jadwal_penugasan.id_jadwal, jadwal_penugasan.status_jadwal FROM jadwal_penugasan 
        // JOIN absensi ON jadwal_penugasan.id_jadwal = absensi.id_jadwal WHERE jadwal_penugasan.no_surat = '$no_surat' ")->result();

        $data['jadwal'] = $this->db->query("SELECT * FROM jadwal_penugasan WHERE no_surat = '$no_surat' ")->result();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/daftarabsensi', $data);
        $this->load->view('templates_admin/footer');
    }


    public function acc_absen()
    {
        

        //Update data attribut
        $id_jadwal = $this->input->post('id_jadwal');
        $no_surat = $this->input->post('no_surat');



        $data = [
            'status_surat' => 4
        ];
        $where = [
            'no_surat' => $no_surat
        ];

        // $this->Model_surat_penugasan->update_data($where, $data, 'surat_penugasan');
        // $this->db->query("UPDATE surat_penugasan SET status_surat = 4 WHERE 'no_surat' => '$no_surat' ");

        $this->Model_surat_penugasan->update_data($where, $data, 'surat_penugasan');

        $result = array();
        foreach (
            $id_jadwal 
            as 
            $key => $val) {
            $result[] = array(
                "id_jadwal" => $id_jadwal[$key],
                "status_jadwal" => $_POST['status_jadwal'][$key] + 5
            );
        }
        $this->db->update_batch('jadwal_penugasan', $result, 'id_jadwal');

        $hasil = array();
        foreach ($id_jadwal
            as
            $key => $val) {
            $hasil[] = array(
                "id_jadwal" => $id_jadwal[$key],
                "status_absensi" => $_POST['status_absensi'][$key] + 5
            );
        }
        $this->db->update_batch('absensi', $hasil, 'id_jadwal');

        redirect('sekre/absensi/');
    }

}
