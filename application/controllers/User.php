<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	
	
        public function index(){
            $this->load->view('admin_login');
        }
        public function register(){
            $this->load->view('user_register');
        }
        public function user_list(){
            $this->load->view('user_list');
            
        }
}
