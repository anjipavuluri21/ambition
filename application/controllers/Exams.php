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
        $result['data'] = $this->Exams_model->examsList();
        $this->load->view('exams/exam_details', $result);
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
                $this->load->view('exams/add_exam');
            } else {

                $result = $this->Exams_model->insertExam($exam_name);
                if ($result == 'success') {
                    $successMsg['text'] = "Exam Added Succesfully";
                    $successMsg['type'] = "success";
                    $this->session->set_flashdata('msg', $successMsg);
                    $this->load->view('exams/add_exam');
                } else {
                    $errorMsg['text'] = "Failed to exam contact admin";
                    $errorMsg['type'] = "danger";
                    $this->session->set_flashdata('msg', $errorMsg);
                    $this->load->view('exams/add_exam');
                }
            }
        } else {
            $this->load->view('exams/add_exam');
        }
    }

    public function sujects() {
        $this->load->view('mpsc_subjects');
    }

    public function updateExam() {
        if (count($_POST)) {
            $exam_name = $this->input->post('exam_name');
            $exam_id = $this->input->post('exam_id');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('exam_name', 'Exam Name', 'required');

            if ($this->form_validation->run() == FALSE) {
                $errorMsg['text'] = validation_errors();
                $errorMsg['type'] = "danger";
                $this->session->set_flashdata('msg', $errorMsg);
                $this->load->view('exams/edit_exams');
            } else {

                $result = $this->Exams_model->updateExam($exam_name, $exam_id);
                if ($result == 'success') {
                    $successMsg['text'] = "Exam updated Succesfully";
                    $successMsg['type'] = "success";
                    $this->session->set_flashdata('msg', $successMsg);
                    redirect(base_url('exams/examDetails'));
//                    $this->load->view('exam_details');
                } else {
                    $errorMsg['text'] = "Failed to update exam contact admin";
                    $errorMsg['type'] = "danger";
                    $this->session->set_flashdata('msg', $errorMsg);
                    $this->load->view('exams/edit_exams');
                }
            }
        } else {
            $exam_id = $this->uri->segment(3);
//            print_r($exam_id);exit;
            $data['exam_data'] = $this->Exams_model->getExamdata($exam_id);
//            print_r($data['exams_data']);exit;
            $this->load->view('exams/edit_exams', $data);
        }
    }

    public function deleteExam() {
        $id = $this->uri->segment(3);
        $result = $this->Exams_model->delete_exam_name($id);
        if ($result == 'success') {
            $successMsg['text'] = "Exam Deleted Succesfully";
            $successMsg['type'] = "success";
            $this->session->set_flashdata('msg', $successMsg);
            redirect(base_url('exams/examDetails'));
        } else {
            $errorMsg['text'] = "Failed to Delete exam contact admin";
            $errorMsg['type'] = "danger";
            $this->session->set_flashdata('msg', $errorMsg);
            redirect(base_url('exams/examDetails'));
        }
    }

}
