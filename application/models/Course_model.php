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
            'created_at' => date('y-m-d h:i:s'),
            'created_by' => $this->session->userdata['user_data']['user_id'],
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

    public function courseList() {
        $query = $this->db->query("SELECT courses.*, exams.exam_name
        FROM courses
        LEFT JOIN exams
        ON courses.exam_id = exams . exam_id");
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function delete_course($id) {
        $sql = "DELETE FROM courses where course_id=" . $id;
        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            $response = "success";
        } else {
            $response = "fail";
        }
        return $response;
    }

    public function editCourse($course_id) {
        $query = $this->db->select('*')
                ->from('courses')
                ->where('course_id', $course_id)
                ->get();
        return $query->row();
    }

    public function updateCourse($update_data) {
        $course_update = array(
            'exam_id' => $update_data['exam_id'],
            'course_name' => $update_data['course_name'],
            'course_price' => $update_data['course_price'],
            'course_validity' => $update_data['course_validity'],
            'updated_at' => date('y-m-d h:i:s'),
            'updated_by' => $this->session->userdata['user_data']['user_id'],
        );
        $this->db->where('course_id', $course_id);
        $this->db->update('courses', $course_update);

        if ($this->db->affected_rows() > 0) {
            $response = "success";
        } else {
            $response = "fail";
        }
        return $response;
    }

}
