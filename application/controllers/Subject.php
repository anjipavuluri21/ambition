<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {

    public function index() {
        $content=[
            'page_title'=>"Subjects",
        ];
        $this->load->view('subject/subject_list',$content);
    }

    

    public function addSubject() {
        $content=[
            'page_title'=>"Add Subject",
        ];
        $this->load->view('subject/add_subject',$content);
    }

    

}
