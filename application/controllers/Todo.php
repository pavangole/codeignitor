<?php

class Todo extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model('todo_model');
    }

    public function index()
    {   
        $data['tasks'] = $this->todo_model->get_task();
        $this->load->view('/todo/index',$data);
    }

}   