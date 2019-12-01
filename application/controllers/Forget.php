<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forget extends CI_Controller {

	public function index()
	{
        $this->load->view('forget');
        $this->load->view('templates/footer');
	}
}