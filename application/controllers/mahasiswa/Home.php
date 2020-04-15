<?php

class Home extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		//load model login_model
        $this->load->model('Login_model');
        //cek session dan level user
        if($this->Login_model->is_role() != "mahasiswa"){
            redirect("login");
        }
        
        //load model Form_model
        $this->load->model('Form_model');
        $this->load->helper('url','form');
        $this->load->library(array('form_validation','session'));
    }
	

	public function index()
	{
        // load view mahasiswa/home.php
        //$this->load->view("mahasiswa/home");

        $data['semester'] = $this->Form_model->tampil_semester();
        $data['dosen'] = $this->Form_model->tampil_dosen();
        $data['matkul'] = $this->Form_model->tampil_matkul();
        $data['nilai'] = $this->Form_model->tampil_nilai();
        $this->load->view('mahasiswa/home', $data);
        
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function form_isi()
    {
        $this->form_validation->set_rules('nim', 'Nim', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('semester', 'semester', 'required');
        $this->form_validation->set_rules('dosen', 'Dosen', 'required');
        $this->form_validation->set_rules('matkul', 'Matkul', 'required');
        $this->form_validation->set_rules('totalnilai', 'Total Nilai', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if($this->form_validation->run() === FALSE){
        //    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
        //                <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR! </b> Pastikan Anda Mengisi Form dengan Benar</div></div>';
        //            $this->load->view('mahasiswa/home', $data);
            //$this->load->view('mahasiswa', $data);
            $this->session->set_flashdata('gagal_isi_form', 'Pastikan anda mengisi form dengan benar');
            redirect('mahasiswa');
        } else {
            //$this->form_validation->run() === TRUE;
            $this->Form_model->isiform();

            // Set message
            $this->session->set_flashdata('isi_form', 'Anda telah mengisi formulir, Silakan untuk logout');

            redirect('mahasiswa');
        }
    }

}