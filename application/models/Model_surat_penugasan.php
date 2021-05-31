<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_surat_penugasan extends CI_Model
{
    public function tampil_data()
    {
        $this->db->order_by('no_surat', 'desc');
        return $this->db->get('surat_penugasan');
    }

    public function tampil_pensurat_penugasanan()
    {
        $tahun = date('Y');
        return $this->db->get_where('surat_penugasan', array('tahun' => $tahun));        
    }

    public function tambah_surat_penugasan($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_surat_penugasan($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }


  
}
