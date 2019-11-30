<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaan extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('permintaan');
        $this->load->view('templates/footer');
	}
}