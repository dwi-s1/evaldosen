<?php

class Home extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		//load model login_model
        $this->load->model('Login_model');
        //cek session dan level user
        if($this->Login_model->is_role() != "dosen"){
            redirect("login");
        }
	}

	public function index()
	{
        // load view dosen/home.php
        $this->load->view("dosen/home");
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}