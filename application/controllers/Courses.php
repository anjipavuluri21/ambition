<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Course_model');
        $this->load->model('Exams_model');
        date_default_timezone_set("Asia/kolkata");
    }

    public function index() {
        $courses['list'] = $this->Course_model->courseList();
        $this->load->view('courses/courses_list', $courses);
//        print_r($courses['list']);exit;
    }

    public function addCourse() {
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

                $result = $this->Course_model->insertCourse($insert_data);
                if ($result == 'success') {
                    $successMsg['text'] = "Course Added Succesfully";
                    $successMsg['type'] = "success";
                    $this->session->set_flashdata('msg', $successMsg);
                    $this->load->view('courses/add_courses');
                } else {
                    $errorMsg['text'] = "Failed to Add Course contact admin";
                    $errorMsg['type'] = "danger";
                    $this->session->set_flashdata('msg', $errorMsg);
                    $this->load->view('courses/add_courses');
                }
            }
        } else {

            $data['content'] = [
                'page_title' => "Add Courses",
            ];
            $data['exams_list'] = $this->Exams_model->examsList();
            $this->load->view('courses/add_courses', $data);
        }
    }

    public function updateCourse() {
        if (count($_POST)) {
            $exam_name = $this->input->post('exam_name');
            $course_name = $this->input->post('course_name');
            $course_price = $this->input->post('course_price');
            $course_validity = $this->input->post('course_validity');
            $exam_id = $this->input->post('exam_id');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('exam_name', 'Exam Name', 'required');
            $this->form_validation->set_rules('course_name', 'Course Name', 'required');
            $this->form_validation->set_rules('course_price', 'Course Price', 'required');
            $this->form_validation->set_rules('course_validity', 'Course Validity', 'required');

            if ($this->form_validation->run() == FALSE) {
                $errorMsg['text'] = validation_errors();
                $errorMsg['type'] = "danger";
                $this->session->set_flashdata('msg', $errorMsg);
                $this->load->view('update_courses');
            } else {

                $result = $this->Course_model->updateCourse($exam_name, $exam_id);
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
                    $this->load->view('edit_exams');
                }
            }
        } else {
            $exam_id = $this->uri->segment(3);
//            print_r($exam_id);exit;
            $data['exam_data'] = $this->Exams_model->getExamdata($exam_id);
//            print_r($data['exams_data']);exit;
            $this->load->view('edit_exams', $data);
        }
    }

    public function deleteCourse() {
        $id = $this->uri->segment(3);
        $result = $this->Course_model->delete_course($id);
        if ($result == 'success') {
            $successMsg['text'] = "Course Deleted Succesfully";
            $successMsg['type'] = "success";
            $this->session->set_flashdata('msg', $successMsg);
            redirect(base_url('courses'));
        } else {
            $errorMsg['text'] = "Failed to Delete Course contact admin";
            $errorMsg['type'] = "danger";
            $this->session->set_flashdata('msg', $errorMsg);
            redirect(base_url('courses/courses_list'));
        }
    }

}
