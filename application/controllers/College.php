<?php
	class College extends CI_Controller {
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('admin'))
				redirect('login');
			$this->load->model('collegem');
		}

		public function index(){
		
			$this->load->view('templates/header');
			$this->load->view('pages/college');
			$this->load->view('templates/footer');
		}

		function autocomplete(){
			echo $this->collegem->getcollegeauto($this->input->post('query'));
		}

		function fetch_details(){
			
				echo $this->collegem->get_college($this->input->post('college'));
			
		}

	}
?>