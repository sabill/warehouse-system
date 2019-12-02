<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accept extends CI_Controller {

	
	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('accept');
        $this->load->view('templates/footer');
	}

}
