<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {


	public function index()
	{
		$this->load->view('head');
		$this->load->view('wrapper_aboutus');
		$this->load->view('floor');
	}
}
