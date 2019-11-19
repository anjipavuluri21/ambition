<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
        public function  courseDetails(){
                $this->load->view('course_details');
        }
        public function addCourse(){
            $this->load->view('add_course');
        }
}