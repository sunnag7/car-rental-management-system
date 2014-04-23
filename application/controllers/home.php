<?php

class Home extends CI_Controller {
	public function index($msg = NULL) {
		$data['msg'] = $msg;
		$this->load->view('header');
		$this->load->view('view_home', $data);
		$this->load->view('footer');
	}
	

	
	
	function profile()
	{
		$this->load->view('view_profile');
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url());
	}
}

