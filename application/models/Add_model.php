<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Add_model extends CI_Model{
	 function adduniversity($name){
	 	$data = array('university_name'=>$name);
	 	if($this->db->insert('university',$data)){
	 		return "University added";
	 	}
	 	else{
	 		return "error";
	 	}
	 }
	  function addcountry($name){
	 	$data = array('country_name'=>$name);
	 	if($this->db->insert('country',$data)){
	 		return "Country added";
	 	}
	 	else{
	 		return "error";
	 	}
	 }

	 function addstate($state,$country){
	 	$data = array('country_id'=>$country,'state_name'=>$state);
	 	if($this->db->insert('state',$data)){
	 		return "State added";
	 	}
	 	else{
	 		return "error";
	 	}
	 }

	 function adddistrict($district,$state){
	 	$data = array('district_name'=>$district,'state_id'=>$state);
	 	if($this->db->insert('district',$data)){
	 		return "Place added";
	 	}
	 	else{
	 		return "error";
	 	}
	 }

	  function addstream($name){
	 	$data = array('stream_name'=>$name);
	 	if($this->db->insert('streams',$data)){
	 		return "Stream added";
	 	}
	 	else{
	 		return "error";
	 	}
	 }

	 function addcollege($name,$district,$university){
	 	$data = array('college_name'=>$name,'district_id'=>$district,'university_id'=>$university);
	 	if($this->db->insert('college',$data)){
	 		return "College added";
	 	}
	 	else{
	 		return "error";
	 	}
	 }
	 function addcolcourse($college,$course,$fees,$total_fees){
	 	$sql='INSERT INTO `college_courses`(`college_id`, `course_id`, `fees`, `total_fees`) VALUES ((select college_id from college where college_name = "'.$college.'"),'.$course.',"'.$fees.'",'.$total_fees.')';
	 	// $data = array('college_name'=>$name,'district_id'=>$district,'university_id'=>$university);
	 	if($this->db->query($sql)){
	 		return "Course added";
	 	}
	 	else{
	 		return "error";
	 	}
	 }

	 function addcourse($course,$stream,$duration,$qualification,$after){
	 	$data = array('course_name'=>$course,'stream_id'=>$stream,'duration'=>$duration,'qualification'=>$qualification,'after'=>$after);
	 	if($this->db->insert('courses',$data)){
	 		return "Course Added";
	 	}
	 	else{
	 		return "error";
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