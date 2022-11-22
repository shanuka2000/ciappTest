<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todolist extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function getlist($userid)
    {
        $this->db->where('user_id',$userid);
        $res = $this->db->get('todo');
        if ($res->num_rows() == 0) {
            return false;
        }
        $actions = array();
        foreach ($res->result() as $row) {
            $actions[] = $row;
        }
        return $actions;
    }

    function add($userid,$action)
    {
        date_default_timezone_set("Asia/Colombo");
        $current_time = date("h.i A");
        $current_date = date("Y-m-d");

        $this->db->insert('todo',array('user_id' => $userid,'action_title' => $action, 'time_created' => $current_time, 'date' => $current_date));
    }

    function removeAllTodos($userid) {
        $this->db->where('user_id', $userid);
        $this->db->delete('todo');
    }
}