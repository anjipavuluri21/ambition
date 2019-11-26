<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Papers extends CI_Controller {

    public function index() {
        $content=[
            'page_title'=>"Papers",
        ];
        $this->load->view('papers/papers_list',$content);
    }

    

    public function addPaper() {
        $content=[
            'page_title'=>"Add Paper",
        ];
        $this->load->view('papers/add_papers',$content);
    }

    

}
