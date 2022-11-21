<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentForm extends CI_Controller {
    public function index()
	{
		$this->load->view('studentForm');
	}

    public function actionGet() {
        $field = $this->input->get('name');

        $this->load->view('greeting_View', array('name' => $field, 'requestType' => 'GET'));
    }

    public function actionPost() {
        $field = $this->input->post('name');

        $this->load->view('greeting_View', array('name' => $field, 'requestType' => 'POST'));
    }
}