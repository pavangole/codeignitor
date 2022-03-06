<?php

class Todo extends CI_Controller {


    public function __contruct() {
        parent::__contruct();
        $this->load->model('todo_model');
    }

    public function index()
    {   
        $data['tasks'] = $this->todo_model->gettask();
        $this->load->view('/todo/index',$data);
    }

}   