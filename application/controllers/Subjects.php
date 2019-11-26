<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends CI_Controller {

    public function index() {
        $content=[
            'page_title'=>"Subjects",
        ];
        $this->load->view('subjects/subjects_list',$content);
    }

    

    public function addSubjects() {
        $content=[
            'page_title'=>"Add Subjects",
        ];
        $this->load->view('subjects/add_subjects',$content);
    }
    

}
