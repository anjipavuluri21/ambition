<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Exams extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('welcome_message');
    }

    public function examDetails() {
        $this->load->view('exam_details');
    }

    public function addExam() {
//        $this->load->view('add_exam');
        $exam_name = $this->input->post('exam_name');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('exam_name', 'Exam Name', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('add_exam');
        } else {
            $this->load->model('Exams_model');
            $result = $this->Exams_model->Examadd($exam_name);
//            print_r($result);exit;
            if ($result['msg'] == 'success') {
                echo "exam name inserted successfully";
            } else {
                echo "failed to add exam name";
            }
            $this->load->view('add_exam');
        }
    }

    public function sujects() {
        $this->load->view('mpsc_subjects');
    }

}
