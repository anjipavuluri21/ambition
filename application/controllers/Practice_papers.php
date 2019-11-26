<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Practice_papers extends CI_Controller {

    public function index() {
        $content=[
            'page_title'=>"Practice papers",
        ];
        $this->load->view('practice_paper/practice_papers_list',$content);
    }

    

    public function addPracticePaper() {
        $content=[
            'page_title'=>"Add Practice Paper",
        ];
        $this->load->view('practice_paper/add_practice_papers',$content);
    }
    

}
