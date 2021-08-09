<?php

class Rapot extends CI_Controller
{

    public function index()
    {
        $data['pembelajaran'] = $this->db->query("SELECT * FROM pembelajaran ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('santri/rapot/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function cetak_rapot($id_santri, $kelas)
    {
        $data['id_santri'] = [$id_santri];
        $data['kelas'] = [$kelas];
        $data['pembelajaran'] = $this->db->query("SELECT * FROM pembelajaran ")->result();

        $this->load->view('santri/rapot/cetak_rapot', $data);

    }
}
