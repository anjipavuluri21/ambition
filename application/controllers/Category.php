<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Category_model');
        $this->load->model('Course_model');
        date_default_timezone_set("Asia/kolkata");
    }

    public function index() {
        $content = [
            'page_title' => "Category",
        ];
        $this->load->view('category/category_list', $content);
    }

    public function addCategory() {
        if (count($_POST)) {
            $insert_data = [];
            $insert_data['course_id'] = $this->input->post('course_id');
            $insert_data['course_category'] = $this->input->post('course_category');


            $this->load->library('form_validation');
            $this->form_validation->set_rules('course_id', 'Course id', 'required');
            $this->form_validation->set_rules('course_category', 'Course Category', 'required');


            if ($this->form_validation->run() == FALSE) {
                $errorMsg['text'] = validation_errors();
                $errorMsg['type'] = "danger";
                $this->session->set_flashdata('msg', $errorMsg);
                $this->load->view('category/add_Category');
            } else {

                $result = $this->Category_model->insertCourseCategory($insert_data);
//                print_r($result);exit;
                if ($result == 'success') {
                    $successMsg['text'] = "Course category Added Succesfully";
                    $successMsg['type'] = "success";
                    $this->session->set_flashdata('msg', $successMsg);
                    redirect(base_url('category'));
                } else {
                    $errorMsg['text'] = "Failed to Add Course Category contact admin";
                    $errorMsg['type'] = "danger";
                    $this->session->set_flashdata('msg', $errorMsg);
                    $this->load->view('category/add_Category');
                }
            }
        } else {

            $data['content'] = [
                'page_title' => "Add Category",
            ];
            $data['list'] = $this->Course_model->courseList();
//            print_r($data['list']);exit;
            $this->load->view('category/add_Category', $data);
        }
    }

}
