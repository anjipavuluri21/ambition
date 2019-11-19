<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function dash(){
		$this->load->view('index');
	}
        public function login(){
            $this->load->view('admin_login');
        }
        public function register(){
            $this->load->view('user_register');
        }
}
