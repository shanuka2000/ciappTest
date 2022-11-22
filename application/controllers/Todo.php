<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('todolist');
    }

    public function index()
	{
        $username = $this->userid();
        $username = $this->session->username;
        $actions = $this->todolist->getlist($username);
		$this->load->view('todoview',array('actions' => $actions));
    }

    public function addTodo()
    {
        $username = $this ->userid();
        $username = $this->session->username;

        $todo = $this->input->post('todo');
        $this->todolist->add($username, $todo);

        redirect('/todo/');
    }

    public function removeAll()
    {
        $username = $this ->userid();
        $username = $this->session->username;

        $this->todolist->removeAllTodos($username);

        redirect('/todo/');
    }

    private function userid()
    {
        if (!isset($this->session->username)) {
            $this->session->username = uniqid();
            $username = $this->session->username;
        }
        else {
            $username = $this->session->username;
        }
        return $username;
    }
}