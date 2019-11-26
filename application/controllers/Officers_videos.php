<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class officers_videos extends CI_Controller {

    public function index() {
        $content=[
            'page_title'=>"Officers Vedios",
        ];
        $this->load->view('officers_videos/officers_videos_list',$content);
    }

    

    public function addOfficersVedios() {
        $content=[
            'page_title'=>"Add officers vedios",
        ];
        $this->load->view('officers_videos/add_officers_videos',$content);
    }
    
}
