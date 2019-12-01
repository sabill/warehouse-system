<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barangout extends CI_Controller {

	
	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('barangout');
        $this->load->view('templates/footer');
	}

}
