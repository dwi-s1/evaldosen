<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load library form validasi
        $this->load->library('form_validation');
        //load model login_model
        $this->load->model('Login_model');
        
    }

    public function index()
    {

            if($this->Login_model->is_logged_in())
            {
                if($this->session->userdata("status") == "dosen"){
                    redirect('dosen');
                }
                if($this->session->userdata("status") == "mahasiswa"){
                    redirect('mahasiswa');
                }
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
                //redirect("dashboard");

            }else{

                //jika session belum terdaftar

                //set form validation
                $this->form_validation->set_rules('iduser', 'Iduser', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

                //set message form validation
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> Harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $iduser = $this->input->post("iduser", TRUE);
                $password = MD5($this->input->post('password', TRUE));

                //checking data via model
                $checking = $this->Login_model->check_login('akun', array('iduser' => $iduser), array('password' => $password));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'user_id'   => $apps->iduser,
                            'user_name' => $apps->nama,
                            'user_pass' => $apps->password,
                            'status'      => $apps->status
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        //redirect berdasarkan level user
                        if($this->session->userdata("status") == "dosen"){
                            redirect('dosen');
                        }else{
                            redirect('mahasiswa');
                        }

                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> Username atau Password Salah!</div></div>';
                    $this->load->view('login', $data);
                }

            }else{

                $this->load->view('login');
            }

        }

    }
}