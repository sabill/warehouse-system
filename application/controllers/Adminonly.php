<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminonly extends CI_Controller {

	
	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('adminonly');
        $this->load->view('templates/footer');
	}

}
