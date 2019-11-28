<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('login');
    }

    public function register() {
        $this->load->view('user_register');
    }

    public function user_list() {
        $this->load->model('User_model');
        $result['data'] = $this->User_model->display_user();
        $this->load->view('user_list', $result);
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
            $errorMsg = validation_errors();
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
//                print_r($usercheck['user_type']);
//                exit;
                // load sessions
                $this->session->set_userdata('user_data', $user);
                redirect('dashboard');
            } else {
                $errorMsg = "Invalid Credntials!";

                $this->session->set_flashdata('msg', $errorMsg);

                $this->load->view('login');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_data');
        redirect(base_url());
    }

    public function userDetails() {
        $this->load->view('user_details');
    }

    public function user_register() {
//            echo "comming";
        $insert_data = [];
        $insert_data['name'] = $this->input->post('name');
        $insert_data['last_name'] = $this->input->post('last_name');
        $insert_data['email'] = $this->input->post('email');
        $insert_data['password'] = $this->input->post('password');
        $insert_data['mobile_no'] = $this->input->post('mobile_no');
        $insert_data['state'] = $this->input->post('state');
        $insert_data['district'] = $this->input->post('district');
        $insert_data['pin_code'] = $this->input->post('pin_code');

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('last_name', 'Last name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('mobile_no', 'Mobile Number', 'required|trim');
        $this->form_validation->set_rules('state', 'State');
        $this->form_validation->set_rules('district', 'District');
        $this->form_validation->set_rules('pin_Code', 'pin Code');

//        print_r($insert_data);exit;

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user_register');
        } else {
            $this->load->model('User_model');
            $result = $this->User_model->register_user($insert_data);
            if ($result['msg'] == 'success') {
                $this->load->view('login');
            } else {
                echo "something on went wrong";
            }
        }
    }

}
