<?php

class Category_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insertCourseCategory($insert_data) {
        $category_list = array(
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

    public function categoryList() {
        $query = $this->db->query('SELECT course_category.*,courses.course_name
        FROM course_category
        LEFT JOIN courses
        ON course_category.course_id=courses.course_id');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function delete_course_category($id) {
        $sql = "DELETE FROM course_category where course_category_id=" . $id;
        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            $response = "success";
        } else {
            $response = "fail";
        }
        return $response;
    }
      public function editCourseCategory($course_category_id) {
        $query = $this->db->select('*')
                ->from('course_category')
                ->where('course_category_id', $course_category_id)
                ->get();
        return $query->row();
    }
    public function updateCategory($update_category) {
        $category_data = array(
            'course_category_id' => $update_category['course_category_id'],
            'course_category_name' => $update_category['course_category'],
            'updated_at' => date('y-m-d h:i:s'),
            'updated_by' => $this->session->userdata['user_data']['user_id'],
        );
        
        $this->db->where('course_category_id', $update_data['course_category_id']);
        $this->db->update('course_category', $category_data);
        
        if ($this->db->affected_rows() > 0) {
            $response = "success";
        } else {
            $response = "fail";
        }
        return $response;
    }

}
