<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardAdmin extends CI_Controller{

    public function index(){
        $this->load->view('templatesAdmin/header');
		$this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('templatesAdmin/footer');
    }
}