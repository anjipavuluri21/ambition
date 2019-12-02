<?php

class Chapters_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insertChapters($insert_data) {
        $chapters_list = array(
            'subject_id	' => $insert_data['subject_id'],
            'chapter_name' => $insert_data['chapter_name'],
            'created_at' => date('y-m-d h:i:s'),
            'created_by' => $this->session->userdata['user_data']['user_id'],
        );
        $result = $this->db->insert('chapters', $chapters_list);
//            print_r($result);exit;
        if ($this->db->affected_rows() > 0) {
            $response = "success";
        } else {
            $response = "fail";
        }
        return $response;
    }

    public function chaptersList() {
        $query = $this->db->query('SELECT chapters.*,subjects.subject_name
        FROM chapters
        LEFT JOIN subjects
        ON chapters.subject_id=subjects.subject_id');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function delete_Chapters($id){
        $sql = "DELETE FROM chapters where chapter_id=" . $id;
        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            $response = "success";
        } else {
            $response = "fail";
        }
        return $response;
    }
}
