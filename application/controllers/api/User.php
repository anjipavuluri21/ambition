<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function login() {
        $response = [];
        if (count($_POST)) {
            $email = trim($this->input->post('email'));
            $password = trim($this->input->post('password'));

            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE) {
                $response['status'] = "Fail";
                $response['message'] = validation_errors();
            } else {
                $usercheck = $this->User_model->loginCheck($email, $password);
                if ($usercheck != false) {
                    $user = [
                        'user_id' => $usercheck[0]['user_id'],
                        'user_name' => $usercheck[0]['name'],
                        'user_email' => $usercheck[0]['email'],
                        'user_type' => $usercheck[0]['user_type'],
                    ];
                    $response['status'] = "Success";
                    $response['message'] = "Login Succesfully";
                    $response['result'] = $user;
                } else {
                    $response['status'] = "Fail";
                    $response['message'] = "Invalid Credntials!";
                }
            }
        } else {
            $response['status'] = "Fail";
            $response['message'] = "Inavalid Inputs";
        }

        echo json_encode($response);
    }

    public function user_register() {
        $response = [];
        if (count($_POST)) {
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
                $response['status'] = "Fail";
                $response['message'] = validation_errors();
            } else {
                $result = $this->User_model->register_user($insert_data);
                if ($result == 'success') {
                   $response['status'] = "Success";
                    $response['message'] = "User Added Succesfully";
                } else {
                    $response['status'] = "Fail";
                    $response['message'] = "Failed to add User";
                }
            }
        }
         else {
            $response['status'] = "Fail";
            $response['message'] = "Inavalid Inputs";
        }

        echo json_encode($response);
//            echo "comming";
    }

}
