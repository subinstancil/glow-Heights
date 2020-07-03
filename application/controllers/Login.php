<?php
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('admin'))
			redirect('pages');
	}
	function index()
	{
		$this->load->view('login');
	}
	function verify()
	{
		//username:admin password:123456
		$this->load->model('admin');
		$check = $this->admin->validate();
		if($check)
		{
			$this->session->set_userdata('admin','1');
			redirect('pages');
		}
		else
		{
			redirect('login');
		}
	}

	
}