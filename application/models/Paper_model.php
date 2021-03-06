<?php

class Paper_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insertCoursePaper($insert_data) {
        $courrsepaper_list = array(
            'course_category_id' => $insert_data['course_category_id'],
            'course_paper_name' => $insert_data['course_paper_name'],
            'created_at' => date('y-m-d h:i:s'),
            'created_by' => $this->session->userdata['user_data']['user_id'],
        );
        $result = $this->db->insert('course_papers', $courrsepaper_list);
//            print_r($result);exit;
        if ($this->db->affected_rows() > 0) {
            $response = "success";
        } else {
            $response = "fail";
        }
        return $response;
    }

    public function coursePaperList() {
        $query = $this->db->query('SELECT course_papers.*,course_category.course_category_name
        FROM course_papers
        LEFT JOIN course_category
        ON course_papers.course_category_id=course_category.course_category_id');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function delete_course_paper($id) {
        $sql = "DELETE FROM course_papers where course_paper_id=" . $id;
        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            $response = "success";
        } else {
            $response = "fail";
        }
        return $response;
    }

    public function update_papers($updatepaper) {
        $paper_list = array(
            'course_category_id' => $updatepaper['course_category_id'],
            'course_paper_name' => $updatepaper['course_paper_name'],
            'updated_at' => date('y-m-d h:i:s'),
            'updated_by' => $this->session->userdata['user_data']['user_id'],
        );
        $this->db->where('course_category_id', $updatepaper['course_category_id']);
        $this->db->update('course_papers', $paper_list);

        if ($this->db->affected_rows() > 0) {
            $response = "success";
        } else {
            $response = "fail";
        }
        return $response;
    }

    public function editPaper($course_paper_id) {
        $query = $this->db->select('*')
                ->from('course_papers')
                ->where('course_paper_id', $course_paper_id)
                ->get();
        return $query->row();
    }

}
