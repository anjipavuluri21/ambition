<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_papers extends CI_Controller {

    public function index() {
        $content=[
            'page_title'=>"Subject Papers",
        ];
        $this->load->view('subject_papers/subject_papers_list',$content);
    }

    

    public function addSubjectPaper() {
        $content=[
            'page_title'=>"Add Subject Paper",
        ];
        $this->load->view('subject_papers/add_subject_papers',$content);
    }

    

}
