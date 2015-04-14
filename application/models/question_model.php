<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Question_model extends CI_Model {
    public function get_answer($level){
        $query = $this->db->query("Select * from question where id='$level'");
        return $query->result();
    }
}
?>