<?php

class Pendaftaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hakakses') != 1) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Anda Belum Login
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
            redirect('page/login');
        }
        $this->load->model('Model_pendaftaran');
    }

    public function index()
    {
        $data['pendaftaran'] = $this->db->query("SELECT * FROM pendaftaran ORDER BY id_daftar DESC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pendaftaran/index', $data);
        $this->load->view('templates_admin/footer');
    }
    
    public function tambah()
    {
        $data['pendaftaran'] = $this->db->query("SELECT * FROM pendaftaran ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pendaftaran/tambah', $data);
        $this->load->view('templates_admin/footer');
    }

    public function aksi_tambah()
    {
        $foto = $_FILES['foto']['name'];
        $file_kk = $_FILES['file_kk']['name'];
        $file_ket_ijin = $_FILES['file_ket_ijin']['name'];

        // $config['upload_path'] = './uploads/pendaftaran/';
        // $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
        // $this->load->library('upload', $config);


        // $file1 = $this->upload->data();

        if ($foto) {
            $config1['upload_path'] = './uploads/pendaftaran/foto';
            $config1['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
            $this->load->library('upload', $config1);
            $this->upload->do_upload('foto');
        }


        if ($file_kk) {
            $config2['upload_path'] = './uploads/pendaftaran/kartu_keluarga';
            $config2['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
            $this->load->library('upload', $config2);
            $this->upload->do_upload('file_kk');
        }
        // if ($file_ket_ijin) {
        //     $config3['upload_path'] = './uploads/pendaftaran/keterangan_ijin';
        //     $config3['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
        //     $this->load->library('upload', $config3);
        //     $this->upload->do_upload('file_ket_ijin');
        // }

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
            'nomor_wa' =>  $this->input->post('nomor_wa'),
            'email' =>  $this->input->post('email'),
            'foto' => $foto,
            'file_kk' => $file_kk,
            // 'file_ket_ijin' => $file_ket_ijin,
            'tanggal_daftar' => date('Y-m-d'),
            'status' => 1
        ];
        $this->db->insert('pendaftaran', $data);
        redirect('admin/pendaftaran/');
    }

    public function lihat($id_daftar)
    {

        $data['daftar'] = $this->db->query("SELECT * FROM pendaftaran WHERE id_daftar = '$id_daftar' ")->row();
        $data['status'] = [0, 1, 2, 3];
        $data['hakakses'] = [3];
        $data['periodetahun'] = [2020, 2021, 2022, 2023,];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pendaftaran/lihat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function ubah($id_daftar)
    {

        $data['daftar'] = $this->db->query("SELECT * FROM pendaftaran WHERE id_daftar = '$id_daftar' ")->row();
        $data['status'] = [0, 1, 2, 3];
        $data['hakakses'] = [3];
        $data['periodetahun'] = [2020, 2021, 2022, 2023,];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pendaftaran/edit', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_file($id_daftar)
    {

        $data['daftar'] = $this->db->query("SELECT * FROM pendaftaran WHERE id_daftar = '$id_daftar' ")->row();
        $data['status'] = [0, 1, 2, 3];
        $data['hakakses'] = [3];
        $data['periodetahun'] = [2020, 2021, 2022, 2023,];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pendaftaran/edit_file', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $id_daftar = $this->input->post('id_daftar');
        // $nama = $this->input->post('nama');
        $nomor_wa = $this->input->post('nomor_wa', true);
        $email = $this->input->post('email', true);
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jekel' => $this->input->post('jekel'),
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
            'tanggal_daftar' => $this->input->post('tanggal_daftar')
    
        ];
        $where = [
            'id_daftar' => $id_daftar
        ];

        $this->Model_pendaftaran->update_data($where, $data, 'pendaftaran');
        redirect('admin/pendaftaran/');
    }

    public function edit_file_aksi()
    {
        $id_daftar = $this->input->post('id_daftar');
        $cek_daftar = $this->db->query("SELECT * FROM pendaftaran WHERE id_daftar = '$id_daftar' ")->row();

        $foto = $_FILES['foto']['name'];
        $file_kk = $_FILES['file_kk']['name'];
        // $file_ket_ijin = $_FILES['file_ket_ijin']['name'];

        unlink(FCPATH . 'uploads/pendaftaran/' . $cek_daftar->foto);
        unlink(FCPATH . 'uploads/pendaftaran/' . $cek_daftar->file_kk);
        // unlink(FCPATH . 'uploads/pendaftaran/' . $cek_daftar->file_ket_ijin);


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
            // if ($this->upload->do_upload('file_ket_ijin')) {
            //     $new_file_ket_ijin = $this->upload->data('file_name');
            // }

            // $this->upload->do_upload('foto');
            // $this->upload->do_upload('file_kk');
            // $this->upload->do_upload('file_ket_ijin');            

        $data = [
            'foto' =>  $new_foto,
            'file_kk' => $new_file_kk
            // 'file_ket_ijin' => $new_file_ket_ijin,
        ];
        $where = [
            'id_daftar' => $id_daftar
        ];

        $this->Model_pendaftaran->update_data($where, $data, 'pendaftaran');
        redirect('admin/pendaftaran/ubah/'.$id_daftar);
    }

    public function hapus($id_daftar)
    {
        $where = ['id_daftar' => $id_daftar];

        $cari_pembayaran = $this->db->query(" SELECT id_daftar FROM pembayaran WHERE id_daftar = $id_daftar")->num_rows();
        if($cari_pembayaran < 1){
            $cari_santri = $this->db->query(" SELECT id_daftar FROM santri WHERE id_daftar = $id_daftar")->num_rows();
            if( $cari_santri < 1){
                $this->Model_pendaftaran->hapus_data($where, 'pendaftaran');
                $this->session->set_flashdata('pesan', '<div class="alert bg-pink alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">??</span></button>
                                Data Daftar Berhasil di hapus
                               
                                </div>');
                redirect('admin/pendaftaran/');
            }else{
                $this->session->set_flashdata('pesan', '<div class="alert bg-pink alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">??</span></button>
                                            Data Pendaftaran Masih di pakai pada Data santri
                                        </div>');
                redirect('admin/pendaftaran/');
            }
        }else{
            $this->session->set_flashdata('pesan', '<div class="alert bg-pink alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">??</span></button>
                    Data masih dipakai pembayaran
                    </div>');
            redirect('admin/pendaftaran/');

        }
    }

    public function terima($id_daftar)
    {
        $cari = $this->db->query(" SELECT * FROM pendaftaran WHERE id_daftar = $id_daftar")->row();

        // function send($target, $pesan){
        $curl = curl_init();

        $token = "G2v7XHYzzhCbETcV96WA"; // nomer token kita
        $pesan = "Assalamualakum Wr. Wb, Selamat ". $cari->nama_lengkap. " Persyaratan yang anda kirim melalu website pondok baitul kudus telah memenuhi persyaratan administrasi pendaftaran santri. Setelah lolos tahap administarsi pendaftaran selanjutnya adalah proses pembayaran dengan cara datang langsung ke pondok baitul kudus atau transfer ke no rekening bca :80698678578 atas nama : Pondok Pesantren baitul qudus dengan jumlah nominal Rp 500.000, setelah melakukan transfer silahkan upload bukti transfer ke alamat berikut --->  " . base_url('page/upload_pembayaran/'. $cari->id_daftar);
        $target = $cari->nomor_wa; //nomer target

        $data = [
            'status' => 2,
        ];
        $where = [
            'id_daftar' => $id_daftar,
        ];
        $this->Model_pendaftaran->update_data($where, $data, 'pendaftaran');


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

        redirect('admin/pendaftaran/');

    }


    public function kembalikan($id_daftar)
    {
        $cari = $this->db->query(" SELECT * FROM pendaftaran WHERE id_daftar = $id_daftar")->row();

        // function send($target, $pesan){
        $curl = curl_init();

        $token = "G2v7XHYzzhCbETcV96WA"; // nomer token kita
        $pesan = "Assalamualakum Wr. Wb, Selamat " . $cari->nama_lengkap . " Persyaratan yang anda kirim melalu website pondok baitul kudus belum memenuhi persyaratan administrasi pendaftaran santri. Silahkan Mendaftar kembali dengan data yang benar pada link alamat di ini ------> ". base_url('Page/daftar_ulang/'.$cari->id_daftar);
        $target = $cari->nomor_wa; //nomer target

        $data = [
            'status' => 0,
        ];
        $where = [
            'id_daftar' => $id_daftar,
        ];
        $this->Model_pendaftaran->update_data($where, $data, 'pendaftaran');


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

        redirect('admin/pendaftaran/');
    }
}
