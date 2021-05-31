<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_jadwal_penugasan extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('jadwal_penugasan');
    }

    public function tampil_jadwal_penugasan()
    {
        $tahun = date('Y');
        return $this->db->get_where('jadwal_penugasan', array('tahun' => $tahun));
    }

    public function tambah_jadwal_penugasan($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_jadwal_penugasan($where, $table)
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

}
