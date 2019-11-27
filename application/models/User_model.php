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
            'name' => $name,
            'last_name' => $last_name,
            'email' => $email,
            'mobile_no' => $mobile_no,
            'password' => $password,
            'state' => $state,
            'district' => $district,
        );
//        print_r($user_list);exit;
        $result=$this->db->insert('users', $user_list);
      print_r($result);exit;
        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }

}
