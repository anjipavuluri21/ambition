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

public function examsList(){
$query = $this->db->query('select * from exams');
return $query->result();
}
    public function examEditValues($id){
$sql = $this->db->select('*')
->from('exams')
->where('exam_id', $id)
->get();
$result = $sql->row();
return $result;
}
public function updateExamname($exam_name, $id){
$sql = "update exams set exam_name='".$exam_name."'   where exam_id=".$id;
$this->db->query($sql);
}

    public function delete_exam_name($id){
        $sql="DELETE FROM exams where exam_id=".$id;
        $this->db->query($sql);
    }
    
}
