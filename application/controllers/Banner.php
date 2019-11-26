<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

    public function index() {
        $content=[
            'page_title'=>"Banner",
        ];
        $this->load->view('banner/addBanner',$content);
    }

    

//    public function addBanner() {
//        $content=[
//            'page_title'=>"Add Banner",
//        ];
//        $this->load->view('banner/addBanner',$content);
//    }
    

}
