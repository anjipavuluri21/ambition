<?php

class Subjects_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insert_subjects($insert_data) {
        $subjects_list = array(
            'course_paper_id' => $insert_data['course_paper_id'],
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

    public function subjectsList() {
        $query = $this->db->query('SELECT subjects.*,course_papers.course_paper_name 
            FROM subjects 
            LEFT JOIN course_papers 
            ON subjects.course_paper_id=course_papers.course_paper_id
');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function delete_subjects($id) {
        $sql = "DELETE FROM subjects where subject_id=" . $id;
        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            $response = "success";
        } else {
            $response = "fail";
        }
        return $response;
    }
    public function editSubjects($subjects_id) {
        $query = $this->db->select('*')
                ->from('subjects')
                ->where('subject_id', $subjects_id)
                ->get();
        return $query->row();
    }
    public function updateSubjects($update_subjects) {
        $subjects_list = array(
            'course_paper_id' => $update_subjects['course_paper_id'],
            'subject_name' => $update_subjects['subject_name'],
            'created_at' => date('y-m-d h:i:s'),
            'created_by' => $this->session->userdata['user_data']['user_id'],
        );
        $this->db->where('subject_id', $update_subjects['subjects_id']);
        $this->db->update('subjects', $subjects_list);
    }

}
