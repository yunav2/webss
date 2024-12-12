<?php

class Auth extends CI_Controller {

    public function login()
    {

        $this->form_validation->set_rules('username',
        'Username','required',['required' => 'Username Diisi dong mas !']);
        $this->form_validation->set_rules('password',
        'Password','required',['required' => 'Password Diisi dong mas !']);

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('login');
            $this->load->view('templates/footer');
        }else {
            $auth = $this->modelAuth->cek_login();

            if($auth == FALSE)
            {
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username Atau Password Anda Salah!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');
              redirect('auth/login');
            }else {
                $this->session->set_userdata('username',$auth->username);
                $this->session->set_userdata('role_id',$auth->role_id);

                switch($auth->role_id){
                    case 1 : redirect('admin/dashboardAdmin');
                             break;
                    case 2 : redirect('dashboard');
                             break;
                    default: break;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}