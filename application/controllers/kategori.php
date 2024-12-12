<?php

class Kategori extends CI_Controller {
    public function Elektronik() {
        $data['Elektronik'] = $this->modelKategori->Elektronik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('Elektronik', $data);
        $this->load->view('templates/footer');
    }

    public function PakaianWanita() {
        $data['PakaianWanita'] = $this->modelKategori->PakaianWanita()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('PakaianWanita', $data);
        $this->load->view('templates/footer');
    }

    public function PakaianPria() {
        $data['PakaianPria'] = $this->modelKategori->PakaianPria()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('PakaianPria', $data);
        $this->load->view('templates/footer');
    }

    public function PakaianAnak() {
        $data['PakaianAnak'] = $this->modelKategori->PakaianAnak()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('PakaianAnak', $data);
        $this->load->view('templates/footer');
    }
    
    public function PeralatanOlahraga() {
        $data['PeralatanOlahraga'] = $this->modelKategori->PeralatanOlahraga()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('PeralatanOlahraga', $data);
        $this->load->view('templates/footer');
    }
}