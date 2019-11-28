<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function loginCheck($email, $password) {

        $conditon = array(
            'email' => $email,
            'password' => $password,
        );
        $query = $this->db->select('*')
                ->from('users')
                ->where($conditon)
                ->limit(1)
                ->get();
//    print_r($result->result_array());
//    exit;
        $result = $query->result_array();
//        print_r($result);exit;

        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function register_user($insert_data) {
//        echo "welcome";
//        exit;
        $user_list = array(
            'name' => $insert_data['name'],
            'last_name' => $insert_data['last_name'],
            'email' => $insert_data['email'],
            'mobile_no' => $insert_data['mobile_no'],
            'password' => md5($insert_data['password']),
            'state' => $insert_data['state'],
            'district' => $insert_data['district'],
            'created_on' => date('d/m/y h:m:sa'),
        );
//        print_r($user_list);exit;
        $result = $this->db->insert('users', $user_list);
//        print_r($result);exit;
        if ($this->db->affected_rows() > 0) {
            $response = "success";
        } else {
            $response = "fail";
            
        }
        return $response;
        
    }
    public function display_user(){
        $query=$this->db->query('select * from users');
        return $query->result();
        
    }
}
