<?php
 class todo_model extends CI_Model {
    public function __contruct() {
        $this->load->database();
    }

    public function gettask()
    {
        $query = $this->db->get('todo');
        return $query->result_array();
        
    }
}