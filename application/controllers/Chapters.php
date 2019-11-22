<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chapters extends CI_Controller {

    public function index() {
        $content=[
            'page_title'=>"Chapters",
        ];
        $this->load->view('chapters/chapters_list',$content);
    }

    

    public function addChapters() {
        $content=[
            'page_title'=>"Add Chapters",
        ];
        $this->load->view('chapters/add_chapters',$content);
    }
    

}
