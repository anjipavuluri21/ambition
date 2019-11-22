<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main_subjects extends CI_Controller {

    public function index() {
        $content = [
            'page_title' => "Main_subjects",
        ];
        $this->load->view('main_subjects/main_subjects_list', $content);
    }

    public function addSubjectPaper() {
        $content = [
            'page_title' => "Main subjects Add",
        ];
        $this->load->view('main_subjects/add_main_subjects', $content);
    }
}
