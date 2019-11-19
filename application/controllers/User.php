<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
        public function user_list(){
            $this->load->view('user_list');
            
        }
}
