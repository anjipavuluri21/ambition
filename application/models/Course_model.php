<?php

class Course_model extends CI_Model {

public function __construct() {
parent::__construct();
}

    public function insertCourse($insert_data) {
        $courses_list = array(
            'exam_id' => $insert_data['exam_id'],
            'course_name' => $insert_data['course_name'],
            'course_price' => $insert_data['course_price'],
            'course_validity' => $insert_data['course_validity'],
              );
    
        $result = $this->db->insert('courses', $courses_list);
//            print_r($result);exit;
        if ($this->db->affected_rows() > 0) {
        $response = "success";
            } else {
           $response = "fail";
        }
        return $response;
    }


    
}
