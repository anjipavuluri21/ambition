<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends CI_Controller {

    public function __construct() {
        parent::__construct();
         $this->load->model('Subjects_model');
        $this->load->model('Paper_model');
        date_default_timezone_set("Asia/kolkata");
    }

    public function index() {
        $content = [
            'page_title' => "Subjects",
        ];
        $this->load->view('subjects/subjects_list', $content);
    }

    public function addSubjects() {

        if (count($_POST)) {
            $insert_data = [];
            $insert_data['course_paper_id'] = $this->input->post('course_paper_id');
            $insert_data['subject_name'] = $this->input->post('subject_name');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('course_paper_id', 'Course paper id', 'required');
            $this->form_validation->set_rules('subject_name', 'Subject Name', 'required');
            if ($this->form_validation->run() == FALSE) {
                $errorMsg['text'] = validation_errors();
                $errorMsg['type'] = "danger";
                $this->session->set_flashdata('msg', $errorMsg);
                $this->load->view('subjects/add_subjects');
            } else {

                $result = $this->Paper_model->insertCoursePaper($insert_data);
//                print_r($result);exit;
                if ($result == 'success') {
                    $successMsg['text'] = "Course Paper Added Succesfully";
                    $successMsg['type'] = "success";
                    $this->session->set_flashdata('msg', $successMsg);
                    redirect(base_url('subjects'));
                } else {
                    $errorMsg['text'] = "Failed to Add Course Paper contact admin";
                    $errorMsg['type'] = "danger";
                    $this->session->set_flashdata('msg', $errorMsg);
                    $this->load->view('subjects/add_subjects');
                }
            }
        } else {

            $data['content'] = [
                'page_title' => "Add Course Paper",
            ];
            $data['list'] = $this->Paper_model->scoursePaperList();
//            print_r($data['list']);exit;
            $this->load->view('subjects/add_subjects', $data);
        }
    }

}
