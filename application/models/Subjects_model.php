<?php

class Subjects_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function Subjects_model($insert_data) {
        $subjects_list = array(
            'subject_name' => $insert_data['subject_name'],
            'created_at' => date('y-m-d h:i:s'),
            'created_by' => $this->session->userdata['user_data']['user_id'],
        );

        $result = $this->db->insert('subjects', $subjects_list);
//            print_r($result);exit;
        if ($this->db->affected_rows() > 0) {
            $response = "success";
        } else {
            $response = "fail";
        }
        return $response;
    }

    
    
}
