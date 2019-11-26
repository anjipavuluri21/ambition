<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

    public function index() {
        $content=[
            'page_title'=>"Courses",
        ];
        $this->load->view('courses/courses_list',$content);
    }

    

    public function addCourse() {
        $content=[
            'page_title'=>"Add Courses",
        ];
        $this->load->view('courses/add_courses',$content);
    }

    

}
