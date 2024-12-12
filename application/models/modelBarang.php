<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Modelbarang extends CI_Model {
    public function showData(){
        return $this->db->get('data_barang');
    }

    public function insertData($data, $table){
        $this->db->insert($table, $data);
    }

    public function editData($where, $table) {
        return $this->db->get_where($table, $where);
    }

    public function updateData($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function deleteData($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_max_id($table) {
        $this->db->select_max('id_barang');
        $query = $this->db->get($table);
        return $query->row()->id_barang;
    }

    public function find($id) {
        $result = $this->db->where('id_barang', $id)
            ->limit(1)
            ->get('data_barang');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function detailBarang($id_barang){
		$result = $this->db->where('id_barang',$id_barang)->get('data_barang');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}
}