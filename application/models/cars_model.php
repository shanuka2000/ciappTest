<?php
class cars_model extends CI_Model {

    function __construct()
    {
        parent:: __construct();
        $db = $this->load->database();
    }

    function getCarDetailes($input) {
        $this->db->where('carMake',$input);
        $res = $this->db->get('cars');

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