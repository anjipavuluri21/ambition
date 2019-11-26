<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function index() {
        $content=[
            'page_title'=>"Category",
        ];
        $this->load->view('category/category_list',$content);
    }

    

    public function addCategory() {
        $content=[
            'page_title'=>"Add Category",
        ];
        $this->load->view('category/add_Category',$content);
    }

    

}
