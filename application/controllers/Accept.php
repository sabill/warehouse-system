<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accept extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model("Permintaan_model");
		$this->load->library('form_validation');
	}

	
	public function index()
	{
		$request = $this->Permintaan_model;
		$data['listdata'] = $request->getAll();
		$this->load->view('templates/header');
        $this->load->view('accept', $data);
        $this->load->view('templates/footer');
	}



}
