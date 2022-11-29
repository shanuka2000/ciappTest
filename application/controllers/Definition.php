<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Definition extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('definition_model');
    }

    public function index() {
        $this->load->view('definition_view');
    }

    public function getDef() {
        $input = $this->input->post('input');

        $result = $this->definition_model->getDef($input);

        echo json_encode($result);
    }
}