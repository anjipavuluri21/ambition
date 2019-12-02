<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chapter extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Subjects_model');
        $this->load->model('Chapters_model');
        date_default_timezone_set("Asia/kolkata");
    }

    public function index() {
        $chapter['list'] = $this->Chapters_model->chaptersList();
        $this->load->view('chapter/chapterlist', $chapter);
    }

    public function addChapters() {

        if (count($_POST)) {
            $insert_data = [];
            $insert_data['subject_id'] = $this->input->post('subject_id');
            $insert_data['chapter_name'] = $this->input->post('chapter_name');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('subject_id', 'Ssubject Id', 'required');
            $this->form_validation->set_rules('chapter_name', 'Chapter Name', 'required');

            if ($this->form_validation->run() == FALSE) {
                $errorMsg['text'] = validation_errors();
                $errorMsg['type'] = "danger";
                $this->session->set_flashdata('msg', $errorMsg);
                $this->load->view('chapter/addChapters');
            } else {

                $result = $this->Chapters_model->insertChapters($insert_data);
//                print_r($result);exit;
                if ($result == 'success') {
                    $successMsg['text'] = "Course Paper Added Succesfully";
                    $successMsg['type'] = "success";
                    $this->session->set_flashdata('msg', $successMsg);
                    redirect(base_url('chapter'));
                } else {
                    $errorMsg['text'] = "Failed to Add Course Paper contact admin";
                    $errorMsg['type'] = "danger";
                    $this->session->set_flashdata('msg', $errorMsg);
                    $this->load->view('chapter/addChapters');
                }
            }
        } else {

            $data['content'] = [
                'page_title' => "Add Chapter",
            ];
            $data['list'] = $this->Subjects_model->subjectsList();
//            print_r($data['list']);exit;
            $this->load->view('chapter/addChapters', $data);
        }
    }

    public function deleteChapters() {
        $id = $this->uri->segment(3);
        $result = $this->Chapters_model->delete_Chapters($id);
        if ($result == 'success') {
            $successMsg['text'] = "Chapters Deleted Succesfully";
            $successMsg['type'] = "success";
            $this->session->set_flashdata('msg', $successMsg);
            redirect(base_url('chapter'));
        } else {
            $errorMsg['text'] = "Failed to Delete Chapters contact admin";
            $errorMsg['type'] = "danger";
            $this->session->set_flashdata('msg', $errorMsg);
            redirect(base_url('subjects/subjects_list'));
        }
    }

}
