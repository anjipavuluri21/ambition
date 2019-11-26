<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends CI_Controller {

    public function index() {
        $content=[
            'page_title'=>"Images",
        ];
        $this->load->view('images/images_list',$content);
    }

    

    public function addImages() {
        $content=[
            'page_title'=>"Add Images",
        ];
        $this->load->view('images/add_image',$content);
    }

    

}
