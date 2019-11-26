<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Exams extends CI_Controller {

    public function index() {
        $this->load->view('welcome_message');
    }

    public function examDetails() {
        $this->load->view('exam_details');
    }

    public function addExam() {
        $this->load->view('add_exam');
    }

    public function sujects() {
        $this->load->view('mpsc_subjects');
    }

}
