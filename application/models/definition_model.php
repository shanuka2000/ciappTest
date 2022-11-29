<?php
class definition_model extends CI_Model {

    function __construct()
    {
        parent:: __construct();
        $db = $this->load->database();
    }

    function getDef($input) {
        $this->db->where('word',$input);
        $res = $this->db->get('definitions');

        if ($res->num_rows() == 0) {
            return false;
        }


        $actions = array();
        foreach ($res->result() as $row) {
            $actions[] = $row;
        }
        return $actions;
    }
}