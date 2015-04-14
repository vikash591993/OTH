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
        return TRUE;
    }
    
    public function update_level($level,$user_id){
        //$new_level = $level
        $sql = "update users set level = '$level'+1 where id = '$user_id' ";
        $this->db->query($sql);
    }
    
    function update($user_id, $new_password) {
        $pwd_changed = "UPDATE users SET password= '$new_password' WHERE id='$user_id'";
        $this->db->query("$pwd_changed");
    }
    
    public function verify_password($user_id, $current_password) {
        $sql = "SELECT * from users where id='$user_id' and password='$current_password' ";
        $query = $this->db->query("$sql");
        if ($query->num_rows() == 0)
            return false;
        else
            return true;
    }
}
?>