<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chapter extends CI_Controller {

    public function index() {
        $content=[
            'page_title'=>"Chapter",
        ];
        $this->load->view('chapter/chapterlist',$content);
    }

    

    public function addChapters() {
        $content=[
            'page_title'=>"Add Chapter",
        ];
        $this->load->view('chapter/addChapters',$content);
    }
    

}
