<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_data_pegawai extends CI_Model
{
    public function tampil_data_pegawai()
    {
        return $this->db->get('data_pegawai');
    }

    public function tampil_pendaftaran()
    {
        $tahun = date('Y');
        return $this->db->get_where('data_pegawai', array('tahun' => $tahun));
    }

    // public function tambah_data_pegawai($data, $table)
    // {
    //     $this->db->insert($table, $data);
    // }

    public function tambah_data_pegawai($datat, $table)
    {
        $this->db->insert($table, $datat);
    }

    public function edit_data_pegawai($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function update_datat($wheret, $datat, $table)
    {
        $this->db->where($wheret);
        $this->db->update($table, $datat);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function get_sub_kecamatan()
    {
        $query = $this->db->query("SELECT COUNT(kode_data_pegawai), kecamatan FROM data_pegawai GROUP BY kecamatan");
        return $query->result();
    }

    
}
