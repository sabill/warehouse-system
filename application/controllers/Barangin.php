<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barangin extends CI_Controller {

	
	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('barangin');
        $this->load->view('templates/footer');
	}

}
