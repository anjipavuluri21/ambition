<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_category extends CI_Controller {

    public function index() {
        $content=[
            'page_title'=>"Subject category",
        ];
        $this->load->view('subject_category/subject_category_list',$content);
    }

    

    public function addSubjectCategory() {
        $content=[
            'page_title'=>"Add Subject Category",
        ];
        $this->load->view('subject_category/add_subject_Category',$content);
    }

    

}
