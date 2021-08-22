<?php
class Crud extends CI_Controller
{


    public function index(){

        $data['mahasiswa'] = $this->db->query("SELECT * FROM mahasiswa")->result(); //result() digunakan untuk menampilkan banyak baris
        // $data di masukkan ke view
        $this->load->view('crud/index', $data);
    }

    public function tambah()
    {
        // menampilkan view 
        $this->load->view('crud/tambah');
    }

    public function aksi_tambah()
    {
        // $this->input->post digunakan untuk mengambil data inputan view dari name
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');

        // query sql $this->db->query(" isi_query ");
        $this->db->query("INSERT INTO mahasiswa (nim, nama) VALUES ('$nim', '$nama')");
        
        // menuju alamat crud
        redirect('crud');
    }

    public function ubah($nim)
    {

        $data['mahasiswa'] = $this->db->query("SELECT * FROM mahasiswa WHERE nim = '$nim' ")->row(); //row() digunakan untuk menampilkan satu baris
        
        // $data di masukkan ke view
        $this->load->view('crud/ubah', $data);
    }

    public function aksi_ubah()
    {
        // $this->input->post digunakan untuk mengambil data inputan view dari name
        $nimlama = $this->input->post('nimlama');
        $nimbaru = $this->input->post('nimbaru');
        $nama = $this->input->post('nama');

        // query sql $this->db->query(" isi_query ");
        $this->db->query("UPDATE mahasiswa SET nim = '$nimbaru' , nama = '$nama' WHERE nim = '$nimlama' ");

        echo "<script>alert('data berhasil di ubah ');</script>";

        // menuju alamat crud
        redirect('crud');
    }

    public function hapus($nim)
    {

         $this->db->query("DELETE FROM mahasiswa WHERE nim = '$nim' ");

        // menuju alamat crud
        redirect('crud');
    }
}
