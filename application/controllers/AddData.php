<?php
	class Adddata extends CI_Controller {
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('admin'))
				redirect('login');
			$this->load->model('add_model');
		}

		public function index(){
			$data['university'] = $this->add_model->get_university();
			$data['country'] = $this->add_model->get_country();

			$this->load->view('templates/header');
			$this->load->view('pages/add',$data);
			$this->load->view('templates/footer');
		}

		function add_university(){
			echo $this->add_model->adduniversity($this->input->post('university'));
			// echo $this->input->post('university');
		}

		function add_college(){
			if($this->input->post('college') != '' && $this->input->post('district') != '' && $this->input->post('university') != ''){
				echo $this->add_model->addcollege($this->input->post('college'),$this->input->post('district'),$this->input->post('university'));
			}
			else{
				echo "Please fill all the fields";
			}
		}

		function fetch_state(){
			if($this->input->post('country_id'))
			{
				echo $this->add_model->get_state($this->input->post('country_id'));
				// echo "<option>".$this->input->post('country_id')."</option>";
			}
		}

		function fetch_district(){
			if($this->input->post('state_id'))
			{
				echo $this->add_model->get_district($this->input->post('state_id'));
				// echo "<option>".$this->input->post('country_id')."</option>";
			}
		}

	}
?>