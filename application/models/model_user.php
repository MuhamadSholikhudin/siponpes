<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_user');
    }

    public function tambah_user($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_user($where, $table)
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

    public function find($id)
    {
        $result = $this->db->where('id_brg', $id)
        ->limit(1)
        ->get('tb_user');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function detail_brg($id_brg){
$result = $this->db->where('id_brg', $id_brg)->get('tb_user');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->like('nama_brg', $keyword);
        $this->db->or_like('kategori', $keyword);
        $this->db->or_like('harga', $keyword);
        $this->db->or_like('keterangan', $keyword);
        

        return $this->db->get()->result();
    }

    function get_sub_siuser($username)
    {
        $query = $this->db->query(" SELECT nama, jabatan, penempatan FROM  user  WHERE username = $username LIMIT 1");
        // $query = $this->db->get_where('tb_transaksi', array('notransaksi' => $notransaksi));
        return $query;
    }
}
