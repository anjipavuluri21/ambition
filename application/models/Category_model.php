<?php

class Category_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insertCourseCategory($insert_data){
        $category_list=array(
            'course_id' => $insert_data['course_id'],
            'course_category_name' => $insert_data['course_category'],
            'created_at' => date('y-m-d h:i:s'),
            'created_by' => $this->session->userdata['user_data']['user_id'],
            
        );
        $result = $this->db->insert('course_category', $category_list);
//            print_r($result);exit;
        if ($this->db->affected_rows() > 0) {
            $response = "success";
        } else {
            $response = "fail";
        }
        return $response;
    }

    
}
