<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model {
    
    public function get_user($user_id){
        $query = $this->db->query("Select * from users where id='$user_id'");
        return $query->result();
    }
        
    public function verify_user($email,$password){
       $query = $this->db->query("select * from users where email='$email' and password='$password'");
       return $query->result();
    }
    
    public function verify_registration($data){
        $email = $data['email'];
        $sql = "select * from users where email='$email'";
        $query = $this->db->query("$sql");
        if($query->num_rows() == 0)
            return FALSE;
        else
            return TRUE;
    }
    
    public function insert($data){
        $query = $this->db->insert('users' ,$data);
    }
}