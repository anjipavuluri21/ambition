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
        $subjects['list'] = $this->Subjects_model->subjectsList();
        $this->load->view('subjects/subjects_list', $subjects);
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

                $result = $this->Subjects_model->insert_subjects($insert_data);
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
            $data['list'] = $this->Paper_model->coursePaperList();
//            print_r($data['list']);exit;
            $this->load->view('subjects/add_subjects', $data);
        }
    }

    public function deleteSubjects() {
        $id = $this->uri->segment(3);
        $result = $this->Subjects_model->delete_subjects($id);
        if ($result == 'success') {
            $successMsg['text'] = "Subjects Deleted Succesfully";
            $successMsg['type'] = "success";
            $this->session->set_flashdata('msg', $successMsg);
            redirect(base_url('subjects/subjects_list'));
        } else {
            $errorMsg['text'] = "Failed to Delete Subjects contact admin";
            $errorMsg['type'] = "danger";
            $this->session->set_flashdata('msg', $errorMsg);
            redirect(base_url('subjects/subjects_list'));
        }
    }

    public function updatesubjects() {
        if (count($_POST)) {
            $update_subjects = [];
            $update_subjects['course_paper_id'] = $this->input->post('course_paper_id');
            $update_subjects['subject_name'] = $this->input->post('subject_name');
            $update_subjects['subjects_id'] = $this->input->post('subjects_id');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('course_paper_id', 'Course paper id', 'required');
            $this->form_validation->set_rules('subject_name', 'Subject Name', 'required');

            if ($this->form_validation->run() == FALSE) {
                $errorMsg['text'] = validation_errors();
                $errorMsg['type'] = "danger";
                $this->session->set_flashdata('msg', $errorMsg);
                $this->load->view('subjects/edit_subjects');
            } else {
                $result = $this->Subjects_model->updateSubjects($update_subjects);
                if ($result == 'success') {
                    $successMsg['text'] = "Subject updated Succesfully";
                    $successMsg['type'] = "success";
                    $this->session->set_flashdata('msg', $successMsg);
                    redirect(base_url('subjects'));
//                    
                } else {
                    $errorMsg['text'] = "Failed to update Subjects contact admin";
                    $errorMsg['type'] = "danger";
                    $this->session->set_flashdata('msg', $errorMsg);
                    $this->load->view('subjects/edit_subjects');
                }
            }
        } else {
            $data['content'] = [
                'page_title' => "Edit Subjects",
            ];
            $subjects_id = $this->uri->segment(3);
            $data['subjects_data'] = $this->Subjects_model->editSubjects($subjects_id);
//            print_r($data['category_data']);exit;
            $data['subject'] = $this->Paper_model->coursePaperList();
//            print_r($data['course']);exit;
            $this->load->view('subjects/edit_subjects', $data);
        }
    }

}
