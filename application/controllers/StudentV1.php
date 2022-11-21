<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentV1 extends CI_Controller {
    public function index()
	{
		$this->load->view('student_detailsV1');
	}
}