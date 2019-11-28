<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Exams extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Exams_model');
    }

    public function index() {
        $this->load->view('welcome_message');
    }

    public function examDetails() {
        $this->load->view('exam_details');
    }

    public function addExam() {
        if (count($_POST)) {
            $exam_name = $this->input->post('exam_name');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('exam_name', 'Exam Name', 'required');

            if ($this->form_validation->run() == FALSE) {
                $errorMsg['text'] = validation_errors();
                $errorMsg['type'] = "danger";
                $this->session->set_flashdata('msg', $errorMsg);
                $this->load->view('add_exam');
            } else {

                $result = $this->Exams_model->insertExam($exam_name);
                if ($result == 'success') {
                    $successMsg['text'] = "Exam Added Succesfully";
                    $successMsg['type'] = "success";
                    $this->session->set_flashdata('msg', $successMsg);
                    $this->load->view('add_exam');
                } else {
                    $errorMsg['text'] = "Failed to exam contact admin";
                    $errorMsg['type'] = "danger";
                    $this->session->set_flashdata('msg', $errorMsg);
                    $this->load->view('add_exam');
                }
            }
        } else {
            $this->load->view('add_exam');
        }
    }

    public function sujects() {
        $this->load->view('mpsc_subjects');
    }

}
