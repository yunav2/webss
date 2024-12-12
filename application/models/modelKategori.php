<?php

class ModelKategori extends CI_Model {
    public function Elektronik(){
        return $this->db->get_where("data_barang",
        array('kategori' =>'elektronik'));
    }

    public function PakaianWanita(){
        return $this->db->get_where("data_barang",
        array('kategori' =>'Pakaian Wanita'));
    }

    public function PakaianPria(){
        return $this->db->get_where("data_barang",
        array('kategori' =>'Pakaian Pria'));
    }

    public function PakaianAnak(){
        return $this->db->get_where("data_barang",
        array('kategori' =>'Pakaian Anak-anak'));
    }

    public function PeralatanOlahraga(){
        return $this->db->get_where("data_barang",
        array('kategori' =>'Peralatan Olahraga'));
    }
}
