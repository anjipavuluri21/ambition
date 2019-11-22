<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

    public function index() {
//        $this->load->view('login');
    }
    
    public function purchase(){
        $content=[
            'page_title'=>"Purchase_history",
        ];
        $this->load->view('payment/purchase_history',$content);
    }
    
    public function renewal(){
         $content=[
            'page_title'=>"Renewal History",
        ];
               $this->load->view('payment/resnewal_history',$content);
 
    }
}
