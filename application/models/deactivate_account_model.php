<?php

class Deactivate_account_model extends CI_Model {

    function deactivate($user_id) {

        $sql1 = "DELETE FROM users WHERE id= '$user_id'";
        $this->db->query("$sql1");

        
    }

}
