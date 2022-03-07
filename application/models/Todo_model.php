<?php
class Todo_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_task()
    {
        $query = $this->db->get('todo');
        return $query->result_array();

    }
}
