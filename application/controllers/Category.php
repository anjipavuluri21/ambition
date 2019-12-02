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
//        $content = [
//            'page_title' => "Category",
//        ];
//        $this->load->view('category/category_list', $content);
        $category['list'] = $this->Category_model->categoryList();
        $this->load->view('category/category_list', $category);
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

    public function deleteCategory() {
        $id = $this->uri->segment(3);
        $result = $this->Category_model->delete_course_category($id);
        if ($result == 'success') {
            $successMsg['text'] = "Course Category Deleted Succesfully";
            $successMsg['type'] = "success";
            $this->session->set_flashdata('msg', $successMsg);
            redirect(base_url('category'));
        } else {
            $errorMsg['text'] = "Failed to Delete Course Category contact admin";
            $errorMsg['type'] = "danger";
            $this->session->set_flashdata('msg', $errorMsg);
            redirect(base_url('category'));
        }
    }

    public function updateCategory() {
        if (count($_POST)) {
            $update_category = [];
            $update_category['course_id'] = $this->input->post('course_id');
            $update_category['course_category'] = $this->input->post('course_category');
            $update_category['course_category_id'] = $this->uri->segment(3);

            $this->load->library('form_validation');
            $this->form_validation->set_rules('course_id', 'Course id', 'required');
            $this->form_validation->set_rules('course_category', 'Course Category', 'required');

            if ($this->form_validation->run() == FALSE) {
                $errorMsg['text'] = validation_errors();
                $errorMsg['type'] = "danger";
                $this->session->set_flashdata('msg', $errorMsg);
                $this->load->view('category/edit_category');
            } else {
                $result = $this->Category_model->updateCategory($update_category);
//                print_r($result);exit;     
                if ($result == 'success') {
                    $successMsg['text'] = "Course Category updated Succesfully";
                    $successMsg['type'] = "success";
                    $this->session->set_flashdata('msg', $successMsg);
                    redirect(base_url('category'));
//                    
                } else {
                    $errorMsg['text'] = "Failed to update Course Category contact admin";
                    $errorMsg['type'] = "danger";
                    $this->session->set_flashdata('msg', $errorMsg);
                    $this->load->view('category/edit_category');
                }
            }
        }else{
            $course_category_id=$this->uri->segment(3);
            $data['category_data']=$this->Category_model->editCourseCategory($course_category_id);
//            print_r($data['category_data']);exit;
            $data['course'] = $this->Course_model->courseList();
//            print_r($data['course']);exit;
            $this->load->view('category/edit_category',$data);
            
        }
    }

}
