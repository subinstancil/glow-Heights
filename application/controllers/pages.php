<?php
	class Pages extends CI_Controller {
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('admin'))
				redirect('login');
		}
		function logout()
		{
			$this->session->unset_userdata('admin');
			$this->load->view('login');
		}
		public function index(){

			
			$data['streams'] = $this->main_model->get_stream();
			$data['state'] = $this->main_model->fetch_state();
		
			$this->load->view('templates/header');
			$this->load->view('pages/home',$data);
			$this->load->view('templates/footer');
		}

		public function about(){

			$this->load->view('templates/header');
			$this->load->view('pages/about');
			$this->load->view('templates/footer');
		}

		public function fetch_course(){
			if($this->input->post('stream_id'))
			{
				echo $this->main_model->fetch_course($this->input->post('stream_id'));
			}
		}

		public function fetch_place(){
			if($this->input->post('state_id'))
			{
				echo $this->main_model->fetch_place($this->input->post('state_id'));
			}
		}

		function fetch_details(){
			
				if($this->input->post('course') == '' && $this->input->post('place') != '' && $this->input->post('stream') == '')
				{
					echo $this->main_model->get_college_place($this->input->post('place'));
				}
				elseif($this->input->post('course') == '' && $this->input->post('place') != '' && $this->input->post('stream') != '')
				{
					echo $this->main_model->get_college_stream_place($this->input->post('place'),$this->input->post('stream'));
				}

				elseif($this->input->post('course') != '' && $this->input->post('place') != '' && $this->input->post('stream') != '')
				{
					echo $this->main_model->get_college($this->input->post('course'),$this->input->post('place'));
				}

				elseif($this->input->post('course') != '' && $this->input->post('place') == '' && $this->input->post('stream') != '')
				{
					echo $this->main_model->get_college_course($this->input->post('course'));
				}
				elseif($this->input->post('stream') != '' && $this->input->post('place') == '' && $this->input->post('course') == '')
				{
					echo $this->main_model->get_college_stream($this->input->post('stream'));
				}

				else{
					echo '<tr><td colspan="7"><center>No Records</center></td></tr>';
				}

				
		}

	}
?>