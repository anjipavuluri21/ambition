<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index() {
        $this->load->view('login');
    }

    public function register() {
        $this->load->view('user_register');
    }

    public function user_list() {
        $this->load->view('user_list');
    }

    public function login() {
        $email = trim($this->input->post('email'));
        $password = trim($this->input->post('password'));

        // load model
        $this->load->model('User_model');

        // load model method
//        print_r($query);exit;

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $errorMsg=validation_errors();
                $this->session->set_flashdata('msg', $errorMsg);

            $this->load->view('login');
        } else {
            $usercheck = $this->User_model->loginCheck($email, $password);
//            print_r($usercheck);exit;
            if ($usercheck != false) {

                $user = [
                    'user_id' => $usercheck[0]['user_id'],
                    'user_name' => $usercheck[0]['name'],
                    'user_email' => $usercheck[0]['email'],
                    'user_type' => $usercheck[0]['user_type'],
                ];
                // load sessions
                $this->session->set_userdata('user_data', $user);
                redirect('dashboard');
            } else {
                $errorMsg="Invalid Credntials!";

                $this->session->set_flashdata('msg', $errorMsg);

                $this->load->view('login');
            }
        }
    }
    public function logout(){
        $this->session->unset_userdata('user_data');
        redirect(base_url());

    }
}
