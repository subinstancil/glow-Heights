<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Add_model extends CI_Model{
	 function adduniversity($name){
	 	$data = array('university_name'=>$name);
	 	if($this->db->insert('university',$data)){
	 		return "University added";
	 	}
	 	else{
	 		echo "error";
	 	}
	 }

	 function addcollege($name,$district,$university){
	 	$data = array('college_name'=>$name,'district_id'=>$district,'university_id'=>$university);
	 	if($this->db->insert('college',$data)){
	 		return "College added";
	 	}
	 	else{
	 		echo "error";
	 	}
	 }

	 function get_university(){
	 	$this->db->order_by('university_name', 'ASC');
		$query = $this->db->get('university');
		return $query->result_array();
	 }
	 function get_country(){
	 	$this->db->order_by('country_name', 'ASC');
		$query = $this->db->get('country');
		return $query->result_array();
	 }
	 function get_state($country_id){
	 	$this->db->where('country_id', $country_id);
		$this->db->order_by('state_name', 'ASC');
		$query = $this->db->get('state');
			
		$output = '<option value = "">State</option>';

		foreach ($query->result() as $row) {
			$output .= '<option value="'.$row->state_id.'">'.$row->state_name.'</option>';
		}

		return $output;
	 }
	  function get_district($state_id){
	 	$this->db->where('state_id', $state_id);
		$this->db->order_by('district_name', 'ASC');
		$query = $this->db->get('district');
			
		$output = '<option value = "">District</option>';

		foreach ($query->result() as $row) {
			$output .= '<option value="'.$row->district_id.'">'.$row->district_name.'</option>';
		}

		return $output;
	 }
}