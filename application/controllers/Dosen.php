<?php
class Dosen extends CI_Controller
{


    public function index(){

        $data['dosen'] = $this->db->query("SELECT * FROM dosen")->result(); //result() digunakan untuk menampilkan banyak baris
        // $data di masukkan ke view
        $this->load->view('dosen/index', $data);
    }

    public function tambah()
    {
        // menampilkan view 
        $this->load->view('dosen/tambah');
    }

    public function aksi_tambah()
    {
        // $this->input->post digunakan untuk mengambil data inputan view dari name
        $nid = $this->input->post('nid');
        $nama_dosen = $this->input->post('nama_dosen');

        // query sql $this->db->query(" isi_query ");
        $this->db->query("INSERT INTO dosen (nid, nama_dosen) VALUES ('$nid', '$nama_dosen')");
        
        // menuju alamat crud
        redirect('dosen');
    }

    public function ubah($nid)
    {

        $data['dosen'] = $this->db->query("SELECT * FROM dosen WHERE nid = '$nid' ")->row(); //row() digunakan untuk menampilkan satu baris
        
        // $data di masukkan ke view
        $this->load->view('dosen/ubah', $data);
    }

    public function aksi_ubah()
    {
        // $this->input->post digunakan untuk mengambil data inputan view dari name
        $nidlama = $this->input->post('nidlama');
        $nidbaru = $this->input->post('nidbaru');
        $nama_dosen = $this->input->post('nama_dosen');

        // query sql $this->db->query(" isi_query ");
        $this->db->query("UPDATE dosen SET nid = '$nidbaru' , nama_dosen = '$nama_dosen' WHERE nid = '$nidlama' ");

        echo "<script>alert('data berhasil di ubah ');</script>";

        // menuju alamat crud
        redirect('dosen');
    }

    public function hapus($nid)
    {

         $this->db->query("DELETE FROM dosen WHERE nid = '$nid' ");

        // menuju alamat crud
        redirect('dosen');
    }
}
