<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permintaan extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Permintaan_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["requestproduction"] = $this->Permintaan_model->getAll();
		$this->load->view('templates/header');
        $this->load->view('permintaan', $data);
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$permintaan = $this->Permintaan_model;
		$validation = $this->form_validation;
		$validation->set_rules($permintaan->rules());

		if ($validation->run()) {
			$permintaan->save();
			echo "sukses";
			$this->session->set_flashdata('success', 'Berhasil meminta request');
		}
		$this->load->view('templates/header');
        $this->load->view('permintaan');
		$this->load->view('templates/footer');
		}
	
} 