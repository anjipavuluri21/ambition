<?php

class Exams_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function Examadd($exam_name) {
        $exam_list = array(
            'exam_name' => '$exam_name',
            'created_at' => date('d/m/y h:m:sa'),
        );
        $result = $this->db->insert('exams', $exam_list);
//            print_r($exam_list);exits;
        if ($this->db->affected_rows() > 0) {
            $response['msg'] = "success";
        } else {
            $response['msg'] = "fail";
        }
    }

}
