<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Papers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Paper_model');
        $this->load->model('Category_model');
        date_default_timezone_set("Asia/kolkata");
    }

    public function index() {
//        $content = [
//            'page_title' => "Papers",
//        ];
        $coursePaper['list'] = $this->Paper_model->coursePaperList();
        $this->load->view('papers/papers_list', $coursePaper);
    }

    public function addPaper() {
        if (count($_POST)) {
            $insert_data = [];
            $insert_data['course_category_id'] = $this->input->post('course_category_id');
            $insert_data['course_paper_name'] = $this->input->post('course_paper_name');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('course_category_id', 'Course Category id', 'required');
            $this->form_validation->set_rules('course_paper_name', 'Course Paper Name ', 'required');
            if ($this->form_validation->run() == FALSE) {
                $errorMsg['text'] = validation_errors();
                $errorMsg['type'] = "danger";
                $this->session->set_flashdata('msg', $errorMsg);
                $this->load->view('papers/add_papers');
            } else {

                $result = $this->Paper_model->insertCoursePaper($insert_data);
//                print_r($result);exit;
                if ($result == 'success') {
                    $successMsg['text'] = "Course Paper Added Succesfully";
                    $successMsg['type'] = "success";
                    $this->session->set_flashdata('msg', $successMsg);
                    redirect(base_url('papers'));
                } else {
                    $errorMsg['text'] = "Failed to Add Course Paper contact admin";
                    $errorMsg['type'] = "danger";
                    $this->session->set_flashdata('msg', $errorMsg);
                    $this->load->view('papers/add_papers');
                }
            }
        } else {

            $data['content'] = [
                'page_title' => "Add Course Paper",
            ];
            $data['list'] = $this->Category_model->categoryList();
//            print_r($data['list']);exit;
            $this->load->view('papers/add_papers', $data);
        }
    }

    public function deleteCoursePaper() {
        $id = $this->uri->segment(3);
        $result = $this->Paper_model->delete_course_paper($id);
        if ($result == 'success') {
            $successMsg['text'] = "Course category Paper Deleted Succesfully";
            $successMsg['type'] = "success";
            $this->session->set_flashdata('msg', $successMsg);
            redirect(base_url('papers'));
        } else {
            $errorMsg['text'] = "Failed to Delete Course Category Paper contact admin";
            $errorMsg['type'] = "danger";
            $this->session->set_flashdata('msg', $errorMsg);
            redirect(base_url('courses/courses_list'));
        }
    }

    public function updatePaper() {
        if (count($_POST)) {
            $updatepaper = [];
            $updatepaper['course_category_id'] = $this->input->post('course_category_id');
            $updatepaper['course_paper_name'] = $this->input->post('course_paper_name');
            $updatepaper['course_paper_id'] = $this->uri->segment(3);

            $this->load->library('form_validation');
            $this->form_validation->set_rules('course_category_id', 'Course Category id', 'required');
            $this->form_validation->set_rules('course_paper_name', 'Course Paper Name', 'required');


            if ($this->form_validation->run() == FALSE) {
                $errorMsg['text'] = validation_errors();
                $errorMsg['type'] = "danger";
                $this->session->set_flashdata('msg', $errorMsg);
                $this->load->view('papers/update_papers');
            } else {

                $result = $this->Paper_model->update_papers($updatepaper);
//                print_r($result);exit;
                if ($result == 'success') {
                    $successMsg['text'] = "Course updated Succesfully";
                    $successMsg['type'] = "success";
                    $this->session->set_flashdata('msg', $successMsg);
                    redirect(base_url('papers'));
//                    
                } else {
                    $errorMsg['text'] = "Failed to update Course contact admin";
                    $errorMsg['type'] = "danger";
                    $this->session->set_flashdata('msg', $errorMsg);
                    $this->load->view('papers/update_papers');
                }
            }
        } else {
            $paper_id = $this->uri->segment(3);
//            print_r($course_id);exit;
            $data['paper_data'] = $this->Paper_model->editPaper($paper_id);
//            print_r($data['paper_data'] );exit;
            $data['category_data'] = $this->Category_model->categoryList();
//            print_r($data['category_data']);exit;
            $this->load->view('papers/update_papers', $data);
        }
    }

}
