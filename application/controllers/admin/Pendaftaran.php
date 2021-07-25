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
    }

    public function index()
    {
        $data['pendaftaran'] = $this->db->query("SELECT * FROM daftar ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pendaftaran/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function aksi_tambah()
    {

        // $nama = $this->input->post('nama');
        $id_pendaftar = $this->input->post('id_pendaftar');
        $jumlah = $this->input->post('jumlah');
        $status = $this->input->post('status');
        $tanggal = $this->input->post('tanggal');
        // $status = $this->input->post('status');

        $data = array(
            // 'nama' => $nama,
            'id_pendaftar' => $id_pendaftar,
            'jumlah' => $jumlah,
            'status' => $status,
            'tanggal' => $tanggal
        );

        $this->Model_pendaftaran->tambah_pendaftaran($data, 'pendaftaran');
        redirect('admin/pendaftaran/');
    }

    public function ubah($id_daftar)
    {

        $data['daftar'] = $this->db->query("SELECT * FROM daftar WHERE id_daftar = '$id_daftar' ")->row();
        $data['status'] = [0, 1];
        $data['hakakses'] = [3];
        $data['periodetahun'] = [2020, 2021, 2022, 2023,];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pendaftaran/edit', $data);
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
            'umur' => $this->input->post('umur'),
            'asal_sekolah' => $this->input->post('asal_sekolah'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kabupaten' => $this->input->post('kabupaten'),
            'provinsi' => $this->input->post('provinsi'),
            'nomor_sttb' => $this->input->post('nomor_sttb'),
            'nomor_skhu' => $this->input->post('nomor_skhu'),
            'jumlah_skhu' => $this->input->post('jumlah_skhu'),
            'agama' => $this->input->post('agama'),
            'alamat_tinggal' => $this->input->post('alamat_tinggal'),
            'nama_orang_tua' => $this->input->post('nama_orang_tua'),
            'alamat_orang_tua' => $this->input->post('alamat_orang_tua'),
            'nama_wali' => $this->input->post('nama_wali'),
            'alamat_wali' => $this->input->post('alamat_wali'),
            'nomor_wa' => $nomor_wa,
            'email' => $email,
            'tanggal_daftar' => $this->input->post('tanggal_daftar'),
            'status' => 2
        ];
        $where = [
            'id_daftar' => $id_daftar
        ];

        $this->Model_daftar->update_data($where, $data, 'daftar');
        redirect('admin/pendaftaran/');
    }

    public function hapus($id_pendaftaran)
    {
        $where = ['id_pendaftaran' => $id_pendaftaran];

        // $cari = $this->db->query(" SELECT status_surat FROM surat_penugasan WHERE no_surat = '$no_surat' AND status_surat = 0 ")->num_rows();
        // if($cari > 0){
        $this->Model_pendaftaran->hapus_data($where, 'pendaftaran');
        redirect('admin/pendaftaran/');
        // }elseif($cari < 1){
        //     redirect('sekre/surat/');
        // }
    }

    public function terima($id_daftar)
    {
        $cari = $this->db->query(" SELECT * FROM daftar WHERE id_daftar = $id_daftar")->row();

        // function send($target, $pesan){
        $curl = curl_init();

        $token = "G2v7XHYzzhCbETcV96WA"; // nomer token kita
        $pesan = "Assalamualakum Wr. Wb, Selamat ". $cari->nama_lengkap. " Persyaratan yang anda kirim melalu website pondok baitul kudus telah memenuhi persyaratan administrasi pendaftaran santri. Setelah lolos tahap administarsi pendaftaran selanjutnya adalah proses pembayaran dengan cara datang langsung ke pondok baitul kudus";
        $target = $cari->nomor_wa; //nomer target

        $data = [
            'status' => 2,
        ];
        $where = [
            'id_daftar' => $id_daftar,
        ];
        $this->Model_daftar->update_data($where, $data, 'daftar');


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
        $cari = $this->db->query(" SELECT * FROM daftar WHERE id_daftar = $id_daftar")->row();

        // function send($target, $pesan){
        $curl = curl_init();

        $token = "G2v7XHYzzhCbETcV96WA"; // nomer token kita
        $pesan = "Assalamualakum Wr. Wb, Selamat " . $cari->nama_lengkap . " Persyaratan yang anda kirim melalu website pondok baitul kudus belum memenuhi persyaratan administrasi pendaftaran santri. Silahkan Mendaftar kembali dengan data yang benar ";
        $target = $cari->nomor_wa; //nomer target

        $data = [
            'status' => 0,
        ];
        $where = [
            'id_daftar' => $id_daftar,
        ];
        $this->Model_daftar->update_data($where, $data, 'daftar');


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
