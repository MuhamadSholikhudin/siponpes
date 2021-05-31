<?php
class Auth extends CI_Controller{

    public function login(){
        $this->form_validation->set_rules('username', 'username', 'required', ['required' => 'Username wajib di Isi !']);
        $this->form_validation->set_rules('password', 'password', 'required', ['required' => 'Password wajib di Isi !']);

        if ($this->form_validation->run() == FALSE){
                // $this->load->view('templates/header');
                $this->load->view('form_login');
                // $this->load->view('templates/footer');    
        }else {
            $auth = $this->Model_auth->cek_login();
            if($auth == FALSE){
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Username Atau Password Anda Salah
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');

                    redirect('auth/login');
            }else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('nama', $auth->nama);
                $this->session->set_userdata('level', $auth->level);

                switch($auth->level){
                    case 1 : redirect('sekre/dashboard');
                        break;
                    case 2: redirect('pegawai/dashboard');
                        break;
                    case 3: redirect('kadin/dashboard');
                        break;
                    default: break;
                }
            }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('auth/login');
    }

}