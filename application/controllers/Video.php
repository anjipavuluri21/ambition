<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

    public function index() {
//        $this->load->view('login');
    }
    
    public function all_videos(){
        $content=[
            'page_title'=>"Officers Video",
        ];
        $this->load->view('video/total_videos',$content);
    }
    
    public function add_videos(){
         $content=[
            'page_title'=>"Add videos Chapter Wise",
        ];
               $this->load->view('video/add_video',$content);
 
    }
    public function officers_video_uploading(){
         $content=[
            'page_title'=>" Add videos",
        ];
               $this->load->view('video/officers_video',$content);
 
    }
}
