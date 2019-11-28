<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Course_model');
    }

    public function index() {
        $content = [
            'page_title' => "Courses",
        ];
        $this->load->view('courses/courses_list', $content);
    }

    public function addCourse() {
        $content = [
            'page_title' => "Add Courses",
        ];
        $this->load->view('courses/add_courses', $content);
    }

    public function add_course() {
        if (count($_POST)) {
            $insert_data = [];
            $insert_data['exam_id'] = $this->input->post('exam_id');
            $insert_data['course_name'] = $this->input->post('course_name');
            $insert_data['course_price'] = $this->input->post('course_price');
            $insert_data['course_validity'] = $this->input->post('course_price');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('exam_id', 'Exam id', 'required');
            $this->form_validation->set_rules('course_name', 'Course Name', 'required');
            $this->form_validation->set_rules('course_price', 'Course Price', 'required');
            $this->form_validation->set_rules('course_validity', 'Course Validity', 'required');

            if ($this->form_validation->run() == FALSE) {
                $errorMsg['text'] = validation_errors();
                $errorMsg['type'] = "danger";
                $this->session->set_flashdata('msg', $errorMsg);
                $this->load->view('courses/add_courses');
            } else {

                $result['data'] = $this->Course_model->insertExam($insert_data);
                if ($result == 'success') {
                    $successMsg['text'] = "Course Added Succesfully";
                    $successMsg['type'] = "success";
                    $this->session->set_flashdata('msg', $successMsg);
                    $this->load->view('courses/add_course');
                } else {
                    $errorMsg['text'] = "Failed to Course contact admin";
                    $errorMsg['type'] = "danger";
                    $this->session->set_flashdata('msg', $errorMsg);
                    $this->load->view('courses/add_courses');
                }
            }
        } else {
            $this->load->view('courses/add-course');
        }
    }

}
