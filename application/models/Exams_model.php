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

    public function examsList() {
        $query = $this->db->query('select * from exams');
        return $query->result();
    }

    public function getExamdata($exam_id) {
        $query = $this->db->select('*')
                ->from('exams')
                ->where('exam_id', $exam_id)
                ->get();
        return $query->row();
    }

    public function updateExam($exam_name, $exam_id) {
        $exam_update = array(
            'exam_name' => $exam_name,
            'updated_by' => $this->session->userdata['user_data']['user_id'],
            'updated_at' => date('y-m-d h:i:s'),
        );
        $this->db->where('exam_id', $exam_id);
        $this->db->update('exams', $exam_update);
         if ($this->db->affected_rows() > 0) {
            $response = "success";
        } else {
            $response = "fail";
        }
        return $response;
    }

    public function delete_exam_name($id) {
        $sql = "DELETE FROM exams where exam_id=" . $id;
        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            $response = "success";
        } else {
            $response = "fail";
        }
        return $response;
    }

}
