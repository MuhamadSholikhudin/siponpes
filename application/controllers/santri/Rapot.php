<?php

class Rapot extends CI_Controller
{

    public function index()
    {
        $data['pembelajaran'] = $this->db->query("SELECT * FROM pembelajaran ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('rapot/index', $data);
        $this->load->view('templates_admin/footer');
    }
}
