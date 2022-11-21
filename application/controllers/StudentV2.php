<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentV2 extends CI_Controller {
    public function index()
	{
		$this->load->view('student_detailsV2', array('name' => 'Shanuka Peiris', 'age' => 22, 'school' => 'D. S. Senanayake College', 'location' => 'Narahenpita'));
	}
}