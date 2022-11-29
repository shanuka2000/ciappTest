<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('cars_model');
    }

    public function index() {
        $this->load->view('car_form_view');
    }

    public function getCarDetails() {
        $input = $this->input->post('input');

        $result = $this->cars_model->getCarDetailes($input);

        echo json_encode($result);
    }
}