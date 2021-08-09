<?php

class Jadwal extends CI_Controller
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
        $data['jadwal'] = $this->db->query("SELECT * FROM jadwal ORDER BY status DESC, periode_ajaran DESC")->result();
        $data['pelajaran'] = $this->db->query("SELECT * FROM pelajaran LEFT JOIN pengguna ON pelajaran.id_pengguna = pengguna.id_pengguna ")->result();
        $data['kelas'] = $this->db->query("SELECT * FROM kelas ")->result();
        $data['hari'] = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
        $data['waktu'] = ['Subuh', 'Pagi', 'Siang', 'Malam'];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('jadwal/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function kelas($id_kelas)
    {
        $data['jadwal'] = $this->db->query("SELECT * FROM jadwal ORDER BY status DESC, periode_ajaran DESC")->result();
        $data['pelajaran'] = $this->db->query("SELECT * FROM pelajaran LEFT JOIN pengguna ON pelajaran.id_pengguna = pengguna.id_pengguna ")->result();
        $data['kelas'] = $this->db->query("SELECT * FROM kelas ")->result();
        $data['hari'] = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
        $data['waktu'] = ['Subuh', 'Pagi', 'Siang', 'Malam'];
        $data['kelas'] = [$id_kelas];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('jadwal/jadwal_kelas', $data);
        $this->load->view('templates_admin/footer');
    }

    public function aksi_tambah()
    {

        $id_pelajaran = $this->input->post('id_pelajaran');
        $id_kelas = $this->input->post('id_kelas');
        $periode_ajaran = $this->input->post('periode_ajaran');
        $hari = $this->input->post('hari');
        $waktu = $this->input->post('waktu');
        $status = $this->input->post('status');

        $data = array(
            'id_pelajaran' => $id_pelajaran,
            'id_kelas' => $id_kelas,
            'periode_ajaran' => $periode_ajaran,
            'hari' => $hari,
            'waktu' => $waktu,
            'status' => $status
        );

        $this->Model_jadwal->tambah_jadwal($data, 'jadwal');
        redirect('admin/jadwal/');
    }

    public function ubah($id_jadwal)
    {

        $data['jadwal'] = $this->db->query("SELECT * FROM jadwal WHERE id_jadwal = '$id_jadwal' ")->row();
        $data['status'] = [0, 1];
        $data['hakakses'] = [3];
        $data['pelajaran'] = $this->db->query("SELECT * FROM pelajaran  ")->result();
        $data['kelas'] = $this->db->query("SELECT * FROM kelas  ")->result();
        $data['periodetahun'] = [2020, 2021, 2022, 2023,];
        $data['hari'] = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
        $data['waktu'] = ['Subuh', 'Pagi', 'Siang', 'Malam'];

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('jadwal/edit', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {
        $id_jadwal = $this->input->post('id_jadwal');
        $kode_jadwal = $this->input->post('kode_jadwal');
        $id_pelajaran = $this->input->post('id_pelajaran');
        $id_kelas = $this->input->post('id_kelas');
        $hari = $this->input->post('hari');
        $waktu = $this->input->post('waktu');
        $status = $this->input->post('status');

        $data = [
            // 'nama' => $nama,
            'kode_jadwal' => $kode_jadwal,
            'id_pelajaran' => $id_pelajaran,
            'id_kelas' => $id_kelas,
            'hari' => $hari,
            'waktu' => $waktu,
            'status' => $status
        ];

        $where = [
            'id_jadwal' => $id_jadwal
        ];

        $this->Model_jadwal->update_data($where, $data, 'jadwal');
        redirect('admin/jadwal/');
    }

    public function hapus($id_jadwal)
    {
        $where = ['id_jadwal' => $id_jadwal];

        // $cari = $this->db->query(" SELECT status_surat FROM surat_penugasan WHERE no_surat = '$no_surat' AND status_surat = 0 ")->num_rows();
        // if($cari > 0){
        // $this->Model_jadwal->hapus_data($where, 'jadwal');
        // redirect('admin/jadwal/');
        // }elseif($cari < 1){
        //     redirect('sekre/surat/');
        // }


        $cari_nilai = $this->db->query(" SELECT id_jadwal FROM nilai WHERE id_jadwal = $id_jadwal")->num_rows();
        if($cari_nilai < 1){
            $cari_perkembangan = $this->db->query(" SELECT id_jadwal FROM perkembangan_pembelajaran WHERE id_jadwal = $id_jadwal")->num_rows();
            if( $cari_perkembangan < 1){
            $cari_absensi = $this->db->query(" SELECT id_jadwal FROM absensi WHERE id_jadwal = $id_jadwal")->num_rows();
                
                if($cari_absensi < 1){
            $cari_pembelajaran = $this->db->query(" SELECT id_jadwal FROM pembelajaran WHERE id_jadwal = $id_jadwal")->num_rows();
                    
                    if( $cari_pembelajaran < 1){
                        $this->Model_jadwal->hapus_data($where, 'jadwal');
                        $this->session->set_flashdata('pesan', '<div class="alert bg-pink alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        Data jadwal Berhasil di hapus
                                        </div>');
                                        redirect('admin/jadwal/');
                    }else{
                        $this->session->set_flashdata('pesan', '<div class="alert bg-pink alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        Data jadwal Tidak dapat dihapus .... karena di pakai pembelajaran !!!
                                        </div>');
                        redirect('admin/jadwal/');
                    }
                   
                }else{
                    $this->session->set_flashdata('pesan', '<div class="alert bg-pink alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    Data jadwal Tidak dapat dihapus .... karena di pakai Absensi !!!
                                    </div>');
                    redirect('admin/jadwal/');
                }

            }else{
                $this->session->set_flashdata('pesan', '<div class="alert bg-pink alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                Data Pelajaran Tidak dapat dihapus .... karena di pakai Perkembangan pembelajaran !!!
                                </div>');
                redirect('admin/jadwal/');
            }
        }else{
            $this->session->set_flashdata('pesan', '<div class="alert bg-pink alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            Data jadwal Tidak dapat dihapus .... karena di pakai Nilai !!!
                            </div>');
            redirect('admin/jadwal/');
        }
    }



    function get_sub_id_pelajaran()
    {
        $id_pelajaran = $this->input->post('id_pelajaran', TRUE);
        $hari_pilih = $this->input->post('hari_pilih', TRUE);
        $waktu_pilih = $this->input->post('waktu_pilih', TRUE);
        $cari_ustads = $this->db->query("SELECT * FROM  pelajaran WHERE id_pelajaran = $id_pelajaran  ")->row();
        $data = $this->db->query("SELECT * FROM jadwal JOIN pelajaran ON jadwal.id_pelajaran = pelajaran.id_pelajaran WHERE pelajaran.id_pengguna = $cari_ustads->id_pengguna AND jadwal.hari = '$hari_pilih' AND jadwal.waktu = '$waktu_pilih' ")->num_rows();
        // $data = $this->db->query("SELECT * FROM jadwal WHERE id_pelajaran = $id_pelajaran AND hari = '$hari_pilih' AND waktu = '$waktu_pilih' ")->num_rows();
        // if($jum > 0){
        //     $data = "Jadwal pelajaran yang dipilih sudah ada pada hari" . $hari_pilih . " Waktu ". $waktu_pilih;
        // }elseif($jum < 1){
        //     $data = "Jadwal pelajaran yang dipilih pada hari" . $hari_pilih . " Waktu ". $waktu_pilih. " dapat ditambahlan ";
        $this->db->query("SELECT * FROM jadwal WHERE id_pelajaran = $id_pelajaran AND hari = '$hari_pilih' AND waktu = '$waktu_pilih' ")->num_rows();
        // }
        
        echo json_encode($data);
    }
}
