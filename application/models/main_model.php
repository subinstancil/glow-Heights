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
			$this->db->order_by('stream_name', 'ASC');
			$query = $this->db->get('streams');
			return $query->result_array();
		}

		function fetch_course($stream_id){
			$this->db->where('stream_id', $stream_id);
			$this->db->order_by('course_name', 'ASC');
			$query = $this->db->get('courses');

			$output = '<option value = "">Course</option>';

			foreach ($query->result() as $row) {
				$output .= '<option value="'.$row->course_id.'">'.$row->course_name.'</option>';
			}

			return $output;
		}

		public function fetch_place(){
			// $this->db->order_by('district_name', 'ASC');
			$query = $this->db->get('district');
			
			$output = '<option value = "">Place</option>';

			foreach ($query->result() as $row) {
				$output .= '<option value="'.$row->district_id.'">'.$row->district_name.'</option>';
			}

			return $output;
		}

		function get_college($course, $place){
			$sql='select college_name, course_name, fees from (SELECT * FROM `college_courses` WHERE `college_id` IN (select college_id from college where district_id = '.$place.') AND `course_id`='.$course.') c JOIN college cc ON c.college_id = cc.college_id JOIN courses ccc ON c.course_id = ccc.course_id';
			$query = $this->db->query($sql);
			$x = 1;
			foreach ($query->result() as $row) {
				$output = '<tr>
                    <td>'.$x.'</td>
                    <td>'.$row->college_name.'</td>
                    <td>'.$row->course_name.'</td>
                    <td>'.$row->fees.'</td>
                </tr>';
                $x=$x+1;
			}

			return $output;
		}
	}
 ?>