<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_age extends CI_Controller {

    public function index()
	{
		$this->load->view('user_birthday');
	}

    public function actionCalculateAge()
    {
        $name = $this->input->post('name');
        $year = $this->input->post('year');
        $month = $this->input->post('month');
        $date = $this->input->post('date');

        $this->load->model('Age_calculation');

        $age = $this->Age_calculation->calculateAge($year, $month, $date);

        $this->load->view('display_age', array('age' => $age, 'name' => $name));
    }
}