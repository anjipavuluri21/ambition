<?php

class Exams_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insertExam($exam_name) {
        $exam_list = array(
            'exam_name' => $exam_name,
            'created_by' => $this->session->userdata['user_data']['user_id'],
            'created_at' => date('y-m-d h:i:s'),
        );
        $result = $this->db->insert('exams', $exam_list);
//            print_r($exam_list);exits;
        if ($this->db->affected_rows() > 0) {
            $response = "success";
        } else {
            $response = "fail";
        }
        return $response;
    }

}
