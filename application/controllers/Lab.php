<?php
defined("BASEPATH") OR exit('No direct script access allowed');

class Lab extends CI_Controller {


	public function index()
	 {
		// var_dump($_POST);
		$this->load->view('login');

		// if($_POST == NULL) {

		// 	$this->load->view('login');

		// } else {

		// 	$vars = array(
		// 		'username' => $this->input->post('username'),
		// 		'password' => $this->input->post('password')
		// 	);

		// 	$this->load->view('success', $vars);
			
		// }
		 
	 }


	// https://pastebin.com/rtyUFQE0

	public function authenticate()
	{
		// $this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == FALSE) {

			$this->index();

		} else {

			// $this->load->model('lab_model'); //autoload.php

			$semak = $this->lab_model->authUser();

			if($semak == "sah") {

				$vars['me'] = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
				);

				// get all users
				$vars['all'] = $this->lab_model->getAllUser();

				$this->load->view('success', $vars);

			} else {

				$this->index();
			}

			

		}

		
	}

	public function register()
	{
		$this->lab_model->registerUser();

		// redirect('lab/authenticate', 'refresh');
		$vars['me'] = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
				);

		// get all users
		$vars['all'] = $this->lab_model->getAllUser();

		$this->load->view('success', $vars);
	}


	// https://github.com/mhafizhasan/ci-training




	public function update($id = '')
	{
		$vars = $this->lab_model->getUserById($id);

		$this->load->view('update', $vars);
	}

	public function submitUpdate($id = '')
	{
		$this->lab_model->updateUser($id);

	}



	 public function activity1()
	 {
		//  $this->load->helper('url');
		 $this->load->view('act1');
	 }

	 public function activity2()
	 {
		 $this->load->view('act2');
	 }

	 












	 public function activity3()
	 {
		 $this->load->helper('url');
		 $this->load->library('session');

		//  $session_data = array(
		// 	'nama' => 'ahmad',
		// 	'umur' => '18'
		//  );

		// $this->session->set_userdata($session_data);
		$this->session->sess_destroy();

		 $this->load->view('act3');
	 }
	
}
