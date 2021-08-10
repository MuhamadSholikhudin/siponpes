<?php

class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        // if ($this->session->userdata('email')) {
        //     redirect('user');
        // }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Sistem Ponpes Baitul Qudus';
            $this->load->view('page/theme/header', $data);
            $this->load->view('page/beranda');
            $this->load->view('page/theme/footer');
        } else {
            // validasinya success
            // $this->_login();
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'username', 'required', ['required' => 'Username wajib di Isi !']);
        $this->form_validation->set_rules('password', 'password', 'required', ['required' => 'Password wajib di Isi !']);

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
            $data['title'] = 'Sistem Ponpes Baitul Qudus';
            $this->load->view('page/theme/header', $data);
            $this->load->view('page/login');
            $this->load->view('page/theme/footer');
        } else {
            $auth = $this->Model_auth->cek_login();
            if ($auth == FALSE) {
                $auth_santri = $this->Model_auth->cek_santri();
                if ($auth_santri == FALSE) {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-primary d-flex align-items-center" role="alert">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                </svg>
                                                <div>
                                                    Username atau password yang anda masukkan salah !
                                                </div>
                                                </div>');
                    redirect('page/login');
                } else {
                    $this->session->set_userdata('id_santri', $auth_santri->id_santri);
                    $this->session->set_userdata('username', $auth_santri->username);
                    $this->session->set_userdata('hakakses', $auth_santri->hakakses);
                    $this->session->set_userdata('status', $auth_santri->status);
                    $this->session->set_userdata('status', $auth_santri->kelas);
                    switch ($auth_santri->hakakses) {
                        case 3:
                            redirect('santri/dashboard');
                            break;
                        default:
                            break;
                    }
                }

            } else {
                $this->session->set_userdata('id_pengguna', $auth->id_pengguna);
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('nama', $auth->nama);
                $this->session->set_userdata('hakakses', $auth->hakakses);
                $this->session->set_userdata('status', $auth->status);

                switch ($auth->hakakses) {
                    case 1:
                        redirect('admin/dashboard/index');
                        break;
                    case 2:
                        redirect('ustads/dashboard/index');
                        break;
                    case 3:
                        redirect('admin/kadin/dashboard');
                        break;
                    default:
                        break;
                }
            }
        }
    }


    // public function login()
    // {

    // $username = $this->input->post('username');
    // $password = $this->input->post('password');

    // $user = $this->db->get_where('pengurus', ['username' => $username])->row_array();

    // // jika usernya ada
    // if ($user) {
    // // jika usernya aktif
    // if ($user['status'] == 1) {
    // // cek password
    // if (password_verify($password, $user['password'])) {
    // $data = [
    // 'username' => $user['username'],
    // 'hakakses' => $user['hakakses']
    // ];
    // $this->session->set_userdata($data);
    // if ($user['hakakses'] == 1) {
    // redirect('pengurus');
    // } else {
    // redirect('page');
    // }
    // } else {
    // $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
    // $data['title'] = 'Sistem Ponpes Baitul Qudus';
    // $this->load->view('page/theme/header', $data);
    // $this->load->view('page/login');
    // $this->load->view('page/theme/footer');
    // }
    // } else {
    // $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
    // $data['title'] = 'Sistem Ponpes Baitul Qudus';
    // $this->load->view('page/theme/header', $data);
    // $this->load->view('page/login');
    // $this->load->view('page/theme/footer');
    // }
    // } else {
    // $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
    // $data['title'] = 'Sistem Ponpes Baitul Qudus';
    // $this->load->view('page/theme/header', $data);
    // $this->load->view('page/login');
    // $this->load->view('page/theme/footer');
    // }
    // }

    public function registration()
    {
        // if ($this->session->userdata('email')) {
        // redirect('user');
        // }

        $this->form_validation->set_rules('nama_lengkap', 'Name', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Email', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Name', 'required|trim');
        $this->form_validation->set_rules('umur', 'Email', 'required|trim');
        // $this->form_validation->set_rules('asal_sekolah', 'Name', 'required|trim');
        // $this->form_validation->set_rules('kecamatan', 'Email', 'required|trim');
        // $this->form_validation->set_rules('kabupaten', 'Name', 'required|trim');
        // $this->form_validation->set_rules('provinsi', 'Email', 'required|trim');
        // $this->form_validation->set_rules('nomor_sttb', 'Name', 'required|trim');
        // $this->form_validation->set_rules('nomor_skhu', 'Email', 'required|trim');
        $this->form_validation->set_rules('nomor_wa', 'Name', 'required|trim');
        $this->form_validation->set_rules('jumlah_skhu', 'Email', 'required|trim');
        $this->form_validation->set_rules('agama', 'Name', 'required|trim');
        $this->form_validation->set_rules('nama_orang_tua', 'Email', 'required|trim');
        $this->form_validation->set_rules('alamat_orang_tua', 'Name', 'required|trim');
        $this->form_validation->set_rules('nama_wali', 'Email', 'required|trim');
        $this->form_validation->set_rules('alamat_wali', 'Name', 'required|trim');
        $this->form_validation->set_rules('nomor_wa', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $nomor_wa = $this->input->post('nomor_wa', true);
        $email = $this->input->post('email', true);

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Pendaftaran';

            $this->load->view('page/theme/header', $data);
            $this->load->view('page/registration');
            $this->load->view('page/theme/footer');
        } else {

            // $cek = $this->db->query("SELECT * FROM daftar WHERE nomor_wa = '$nomor_wa' AND status > 0 ")->num_rows();
            $cek2 = $this->db->query("SELECT * FROM daftar WHERE email = '$email' AND status > 0 ")->num_rows();
            
            if ($cek2 > 0) {
                $data['title'] = 'Pendaftaran';
                $this->session->set_flashdata('pesan', '<script>
                alert("Email yang anda daftarkan sudah terdaftar di sistem");
            </script>');
                $this->load->view('page/theme/header', $data);
                $this->load->view('page/registration');
                $this->load->view('page/theme/footer');
            } else {
                
                $foto = $_FILES['foto']['name'];
                $file_kk = $_FILES['file_kk']['name'];
                $file_ket_ijin = $_FILES['file_ket_ijin']['name'];

                $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
                $config['max_size']      = '2048';
                $config['upload_path'] = './uploads/pendaftaran/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $new_foto = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('file_kk')) {
                    $new_file_kk = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('file_ket_ijin')) {
                    $new_file_ket_ijin = $this->upload->data('file_name');
                }


                $data = [
                    'nama_lengkap' => $this->input->post('nama_lengkap'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'umur' => $this->input->post('umur'),
                    // 'asal_sekolah' => $this->input->post('asal_sekolah'),
                    // 'kecamatan' => $this->input->post('kecamatan'),
                    // 'kabupaten' => $this->input->post('kabupaten'),
                    // 'provinsi' => $this->input->post('provinsi'),
                    // 'nomor_sttb' => $this->input->post('nomor_sttb'),
                    // 'nomor_skhu' => $this->input->post('nomor_skhu'),
                    // 'jumlah_skhu' => $this->input->post('jumlah_skhu'),
                    'agama' => $this->input->post('agama'),
                    'alamat_tinggal' => $this->input->post('alamat_tinggal'),
                    'nama_orang_tua' => $this->input->post('nama_orang_tua'),
                    'alamat_orang_tua' => $this->input->post('alamat_orang_tua'),
                    'nama_wali' => $this->input->post('nama_wali'),
                    'alamat_wali' => $this->input->post('alamat_wali'),
                    'nomor_wa' => $nomor_wa,
                    'email' => $email,
                    'foto' =>  $new_foto,
                    'file_kk' => $new_file_kk,
                    'file_ket_ijin' => $new_file_ket_ijin,
                    'tanggal_daftar' => date('Y-m-d'),
                    'status' => 1
                ];
                $this->db->insert('daftar', $data);

                $curl = curl_init();

                $token = "G2v7XHYzzhCbETcV96WA"; // nomer token kita
                $pesan = "Assalamualakum Wr. Wb, Selamat " . $nama_lengkap . " Persyaratan yang anda kirim melalu website pondok baitul kudus berhasil di kirim untuk lebih lanjutnya di terima atau tidaknya menunggu informasi dari Pondok Pesantren Baitul Kudus ";
                $target = $nomor_wa; //nomer target
        
        
                $datat = [
                    'phone' => $target,
                    'type' => 'text',
                    'delay' => 0,
                    'delay_req' => 0,
                    'text' => $pesan
                ];
        
                curl_setopt(
                    $curl,
                    CURLOPT_HTTPHEADER,
                    array(
                        "Authorization: $token",
                    )
                );
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($datat));
                curl_setopt($curl, CURLOPT_URL, "https://fonnte.com/api/send_message.php");
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
                $result = curl_exec($curl);
                curl_close($curl);
        
                print $result;
        

                $this->session->set_flashdata('pesan', '<div class="alert bg-pink alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                Data Pendaftaran Yang Anda ajukan berhasil di kirim
            </div>');
                redirect('page');
            }



            // siapkan token
            // $token = base64_encode(random_bytes(32));
            // $user_token = [
            // 'email' => $email,
            // 'token' => $token,
            // 'date_created' => time()
            // ];

            // $this->db->insert('daftar', $data);
            // $this->db->insert('user_token', $user_token);

            // $this->_sendEmail($token, 'verify');

            // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please activate your account</div>');
            // redirect('daftar');
        }
    }

    
    public function daftar_ulang($id_daftar)
    {
        $cari = $this->db->query(" SELECT * FROM daftar WHERE id_daftar = $id_daftar")->row();

        if($cari->status < 1){

            $data['title'] = 'Pendaftaran Ulang';
            $this->session->set_flashdata('pesan', '<script>alert("Silahkan Melengkapi data Anda dengan benar"); </script>');
         
         
            $data['daftar'] = $this->db->query(" SELECT * FROM daftar WHERE id_daftar = $id_daftar")->row();
            
            $this->load->view('page/theme/header', $data);
            $this->load->view('page/daftar_ulang', $data);
            $this->load->view('page/theme/footer');
        }elseif($cari->status > 0){
            $this->session->set_flashdata('pesan', '<script> alert("data pendafataran anda sudah terkirim di pondok pesantren tunggu informasi selanjutnya");</script>');
            redirect('page');
        }
    }


    public function melengkapi_pendaftaran()
    {
        $id_daftar = $this->input->post('id_daftar');
        // $nama = $this->input->post('nama');
        $nomor_wa = $this->input->post('nomor_wa', true);
        $email = $this->input->post('email', true);

        $cek_daftar = $this->db->query("SELECT * FROM daftar WHERE id_daftar = '$id_daftar' ")->row();

        $foto = $_FILES['foto']['name'];
        $file_kk = $_FILES['file_kk']['name'];
        $file_ket_ijin = $_FILES['file_ket_ijin']['name'];

        unlink(FCPATH . 'uploads/pendaftaran/' . $cek_daftar->foto);
        unlink(FCPATH . 'uploads/pendaftaran/' . $cek_daftar->file_kk);
        unlink(FCPATH . 'uploads/pendaftaran/' . $cek_daftar->file_ket_ijin);


            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
            $config['max_size']      = '2048';
            $config['upload_path'] = './uploads/pendaftaran/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $new_foto = $this->upload->data('file_name');
            }
            if ($this->upload->do_upload('file_kk')) {
                $new_file_kk = $this->upload->data('file_name');
            }
            if ($this->upload->do_upload('file_ket_ijin')) {
                $new_file_ket_ijin = $this->upload->data('file_name');
            }

            // $this->upload->do_upload('foto');
            // $this->upload->do_upload('file_kk');
            // $this->upload->do_upload('file_ket_ijin');            

  
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jekel' => $this->input->post('jekel'),
            'umur' => $this->input->post('umur'),
            'agama' => $this->input->post('agama'),
            'alamat_tinggal' => $this->input->post('alamat_tinggal'),
            'nama_orang_tua' => $this->input->post('nama_orang_tua'),
            'alamat_orang_tua' => $this->input->post('alamat_orang_tua'),
            'nama_wali' => $this->input->post('nama_wali'),
            'alamat_wali' => $this->input->post('alamat_wali'),
            'nomor_wa' => $nomor_wa,
            'email' => $email,            
            'foto' =>  $new_foto,
            'file_kk' => $new_file_kk,
            'file_ket_ijin' => $new_file_ket_ijin,
        ];
        $where = [
            'id_daftar' => $id_daftar
        ];
        $this->Model_daftar->update_data($where, $data, 'daftar');


        $curl = curl_init();

        $token = "G2v7XHYzzhCbETcV96WA"; // nomer token kita
        $pesan = "Assalamualakum Wr. Wb, Selamat " . $nama_lengkap . " Persyaratan yang anda kirim melalu website pondok baitul kudus berhasil di kirim untuk lebih lanjutnya di terima atau tidaknya menunggu informasi dari Pondok Pesantren Baitul Kudus ";
        $target = $nomor_wa; //nomer target


        $datat = [
            'phone' => $target,
            'type' => 'text',
            'delay' => 0,
            'delay_req' => 0,
            'text' => $pesan
        ];

        curl_setopt(
            $curl,
            CURLOPT_HTTPHEADER,
            array(
                "Authorization: $token",
            )
        );
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($datat));
        curl_setopt($curl, CURLOPT_URL, "https://fonnte.com/api/send_message.php");
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        $result = curl_exec($curl);
        curl_close($curl);

        print $result;

        $this->session->set_flashdata('pesan', '<script> alert("Data pendafataran sudah terkirim ke sistem");</script>');
        
        redirect('page');
    }


    public function beranda()
    {
        // echo 'Beranda';
        $data['title'] = 'Sistem Ponpes Baitul Qudus';

        $this->load->view('page/theme/header', $data);
        $this->load->view('page/beranda');
        $this->load->view('page/theme/footer');
    }
    
    public function tentang()
    {
        $data['title'] = 'Sistem Ponpes Baitul Qudus';

        $this->load->view('page/theme/header', $data);
        $this->load->view('page/tentang');
        $this->load->view('page/theme/footer');
    }
    
    public function kontak()
    {
        $data['title'] = 'Sistem Ponpes Baitul Qudus';

        $this->load->view('page/theme/header', $data);
        $this->load->view('page/kontak');
        $this->load->view('page/theme/footer');
    }



    public function logout()
    {
        $this->session->sess_destroy();
      

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('page/login');
    }
}
