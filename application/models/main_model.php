<?php 
	class Main_model extends CI_Model
	{
		public function __construct()
		{
				
		}

		public function get_course($stream = FALSE){
			if($stream === FALSE){
				$query = $this->db->get('courses');
				return $query->result_array();
			}

			$query = $this->db->get_where('courses', array('stream_id' => 2));
				return $query->result_array();
		}

		public function get_stream(){
			$query = $this->db->get('streams');
			return $query->result_array();
		}
	}
 ?>