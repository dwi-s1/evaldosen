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
        //load model
        $this->load->model('Data_model');
        $this->load->helper('url');
	}

	public function index()
	{
        $data['form'] = $this->Data_model->tampil_data()->result();
        //$this->load->view('v_tampil',$data);
        
        // load view dosen/home.php
        $this->load->view("dosen/home",$data);
        
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }



}