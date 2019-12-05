<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	 public function index()
	{
		// $valid = $this->form_validation;
		// $username = $this->input->post('username');
		// $password = $this->input->post('password');
		// $valid->set_rules('username','Username','required');
		// $valid->set_rules('password','Password','required');
		// if($valid->run()) {
		// 	$this->simple_login->login($username,$password, base_url('dashboard'), base_url('login'));
		// }
		$this->load->view('login');
	}

	public function logout(){
		$this->simple_login->logout();
	}

	public function cek_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		// $valid->set_rules('username','username','required');
		// $valid->set_rules('password','password','required');
		if(true) {

			// cek data di database user jika ada maka arahkan ke dashboard 
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			
			$data = $this->db->get('user')->result_array();

			if (count($data)) {
				redirect(base_url('dashboard'),'refresh');
			}else{
				redirect(base_url('login'),'refresh');
			}
		}


	}

}
