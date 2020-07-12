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

		public function fetch_country(){
			$this->db->order_by('country_name', 'ASC');
			$query = $this->db->get('country');
			return $query->result_array();
		}

		public function fetch_state2($country_id){
			$this->db->where('country_id', $country_id);
			$this->db->order_by('state_name', 'ASC');
			$query = $this->db->get('state');
			
			$output = '<option value = "">State</option>';

			foreach ($query->result() as $row) {
				$output .= '<option value="'.$row->state_id.'">'.$row->state_name.'</option>';
			}

			return $output;
		}

		public function fetch_state(){
			$this->db->order_by('state_name', 'ASC');
			$query = $this->db->get('state');
			return $query->result_array();
			
			// $output = '<option value = "">Place</option>';

			// foreach ($query->result() as $row) {
			// 	$output .= '<option value="'.$row->district_id.'">'.$row->district_name.'</option>';
			// }

			// return $output;
		}

		public function fetch_place($state_id){
			$this->db->where('state_id', $state_id);
			$this->db->order_by('district_name', 'ASC');
			$query = $this->db->get('district');
			
			$output = '<option value = "">Place</option>';

			foreach ($query->result() as $row) {
				$output .= '<option value="'.$row->district_id.'">'.$row->district_name.'</option>';
			}

			return $output;
		}

		function get_college($course, $place){
			$sql='select college_name,course_name,duration,fees,qualification,university_name,total_fees,after,district_name from (SELECT * FROM `college_courses` WHERE `college_id` IN (select college_id from college where district_id = '.$place.') AND `course_id`='.$course.') c JOIN college cc ON c.college_id = cc.college_id JOIN courses ccc ON c.course_id = ccc.course_id JOIN university u ON cc.university_id = u.university_id JOIN district dd ON cc.district_id = dd.district_id order by college_name';
			$query = $this->db->query($sql);
			$x = 1;
			$output='';
			foreach ($query->result() as $row) {
				$fees = str_replace('-', '<br>', $row->fees);
				$output .= '<tr>
                    <td class="align-middle">'.$x.'</td>
                    <td class="align-middle">'.$row->college_name.'</td>
                    <td class="align-middle">'.$row->course_name.'</td>
                    <td class="trow align-middle">'.$fees.'</td>
                    <td class="align-middle">'.$row->total_fees.'</td>
                    <td class="align-middle">'.$row->duration.' Years</td>
                    <td class="align-middle">'.$row->qualification.'</td>
                    <td class="align-middle">'.$row->university_name.'</td>
                    <td class="align-middle">'.$row->after.'</td>
                    <td class="align-middle">'.$row->district_name.'</td>
                </tr>';
                $x=$x+1;
			}
			if($x == 1){$output='<tr><td colspan="7"><center>No Records</center></td></tr>';}
			return $output;
		}

		function get_college_stream_place($place, $stream){
			$sql='select college_name,course_name,duration,fees,qualification,university_name,total_fees,after,district_name from (SELECT * FROM `college_courses` WHERE `college_id` IN (select college_id from college where district_id = '.$place.') AND `course_id` IN (select course_id from courses where stream_id = '.$stream.')) c JOIN college cc ON c.college_id = cc.college_id JOIN courses ccc ON c.course_id = ccc.course_id JOIN university u ON cc.university_id = u.university_id JOIN district dd ON cc.district_id = dd.district_id order by course_name';
			$query = $this->db->query($sql);
			$x = 1;
			$output='';
			foreach ($query->result() as $row) {
				$fees = str_replace('-', '<br>', $row->fees);
				$output .= '<tr>
                    <td class="align-middle">'.$x.'</td>
                    <td class="align-middle">'.$row->college_name.'</td>
                    <td class="align-middle">'.$row->course_name.'</td>
                    <td class="trow align-middle">'.$fees.'</td>
                    <td class="align-middle">'.$row->total_fees.'</td>
                    <td class="align-middle">'.$row->duration.' Years</td>
                    <td class="align-middle">'.$row->qualification.'</td>
                    <td class="align-middle">'.$row->university_name.'</td>
                    <td class="align-middle">'.$row->after.'</td>
                    <td class="align-middle">'.$row->district_name.'</td>
                </tr>';
                $x=$x+1;
			}
			if($x == 1){$output='<tr><td colspan="7"><center>No Records</center></td></tr>';}
			return $output;
		}

		function get_college_course($course){
			$sql='select college_name,course_name,duration,fees,qualification,university_name,total_fees,after,district_name from (SELECT * FROM `college_courses` WHERE  `course_id` = '.$course.') c JOIN college cc ON c.college_id = cc.college_id JOIN courses ccc ON c.course_id = ccc.course_id JOIN university u ON cc.university_id = u.university_id JOIN district dd ON cc.district_id = dd.district_id order by college_name';
			$query = $this->db->query($sql);
			$x = 1;
			$output='';
			foreach ($query->result() as $row) {
				$fees = str_replace('-', '<br>', $row->fees);
				$output .= '<tr>
                    <td class="align-middle">'.$x.'</td>
                    <td class="align-middle">'.$row->college_name.'</td>
                    <td class="align-middle">'.$row->course_name.'</td>
                    <td class="trow align-middle">'.$fees.'</td>
                    <td class="align-middle">'.$row->total_fees.'</td>
                    <td class="align-middle">'.$row->duration.' Years</td>
                    <td class="align-middle">'.$row->qualification.'</td>
                    <td class="align-middle">'.$row->university_name.'</td>
                    <td class="align-middle">'.$row->after.'</td>
                    <td class="align-middle">'.$row->district_name.'</td>
                </tr>';
                $x=$x+1;
			}
			if($x == 1){$output='<tr><td colspan="7"><center>No Records</center></td></tr>';}
			return $output;
		}

		function get_college_place($place){
			$sql='select college_name,course_name,duration,fees,qualification,university_name,total_fees,after,district_name from (SELECT * FROM `college_courses` WHERE `college_id` IN (select college_id from college where district_id = '.$place.')) c JOIN college cc ON c.college_id = cc.college_id JOIN courses ccc ON c.course_id = ccc.course_id JOIN university u ON cc.university_id = u.university_id JOIN district dd ON cc.district_id = dd.district_id order by course_name';
			$query = $this->db->query($sql);
			$x = 1;
			$output='';
			foreach ($query->result() as $row) {
				$fees = str_replace('-', '<br>', $row->fees);
				$output .= '<tr>
                    <td class="align-middle">'.$x.'</td>
                    <td class="align-middle">'.$row->college_name.'</td>
                    <td class="align-middle">'.$row->course_name.'</td>
                    <td class="trow align-middle">'.$fees.'</td>
                    <td class="align-middle">'.$row->total_fees.'</td>
                    <td class="align-middle">'.$row->duration.' Years</td>
                    <td class="align-middle">'.$row->qualification.'</td>
                    <td class="align-middle">'.$row->university_name.'</td>
                    <td class="align-middle">'.$row->after.'</td>
                    <td class="align-middle">'.$row->district_name.'</td>
                </tr>';
                $x=$x+1;
			}
			if($x == 1){$output='<tr><td colspan="7"><center>No Records</center></td></tr>';}
			return $output;
		}

		function get_college_stream($stream){
			$sql='select college_name,course_name,duration,fees,qualification,university_name,total_fees,after,district_name from (SELECT * FROM `college_courses` WHERE `course_id` IN (select course_id from courses where stream_id = '.$stream.')) c JOIN college cc ON c.college_id = cc.college_id JOIN courses ccc ON c.course_id = ccc.course_id JOIN university u ON cc.university_id = u.university_id JOIN district dd ON cc.district_id = dd.district_id order by course_name';
			$query = $this->db->query($sql);
			$x = 1;
			$output='';
			foreach ($query->result() as $row) {
				$fees = str_replace('-', '<br>', $row->fees);
				$output .= '<tr>
                    <td class="align-middle">'.$x.'</td>
                    <td class="align-middle">'.$row->college_name.'</td>
                    <td class="align-middle">'.$row->course_name.'</td>
                    <td class="trow align-middle">'.$fees.'</td>
                    <td class="align-middle">'.$row->total_fees.'</td>
                    <td class="align-middle">'.$row->duration.' Years</td>
                    <td class="align-middle">'.$row->qualification.'</td>
                    <td class="align-middle">'.$row->university_name.'</td>
                    <td class="align-middle">'.$row->after.'</td>
                    <td class="align-middle">'.$row->district_name.'</td>
                </tr>';
                $x=$x+1;
			}
			if($x == 1){$output='<tr><td colspan="7"><center>No Records</center></td></tr>';}
			return $output;
		}
















		function get_college_r($course, $place,$from,$to){
			if ($from == '') {
				$from = 0;
			}
			if ($to == '') {
				$to = 100000000000000;
			}
			$sql='select college_name,course_name,duration,fees,qualification,university_name,total_fees,after,district_name from (SELECT * FROM `college_courses` WHERE `college_id` IN (select college_id from college where district_id = '.$place.') AND `course_id`='.$course.' AND total_fees BETWEEN '.$from.' AND '.$to.') c JOIN college cc ON c.college_id = cc.college_id JOIN courses ccc ON c.course_id = ccc.course_id JOIN university u ON cc.university_id = u.university_id JOIN district dd ON cc.district_id = dd.district_id order by total_fees';
			$query = $this->db->query($sql);
			$x = 1;
			$output='';
			foreach ($query->result() as $row) {
				$fees = str_replace('-', '<br>', $row->fees);
				$output .= '<tr>
                    <td class="align-middle">'.$x.'</td>
                    <td class="align-middle">'.$row->college_name.'</td>
                    <td class="align-middle">'.$row->course_name.'</td>
                    <td class="trow align-middle">'.$fees.'</td>
                    <td class="align-middle">'.$row->total_fees.'</td>
                    <td class="align-middle">'.$row->duration.' Years</td>
                    <td class="align-middle">'.$row->qualification.'</td>
                    <td class="align-middle">'.$row->university_name.'</td>
                    <td class="align-middle">'.$row->after.'</td>
                    <td class="align-middle">'.$row->district_name.'</td>
                </tr>';
                $x=$x+1;
			}
			if($x == 1){$output='<tr><td colspan="7"><center>No Records</center></td></tr>';}
			return $output;
		}

		function get_college_stream_place_r($place, $stream,$from,$to){
			if ($from == '') {
				$from = 0;
			}
			if ($to == '') {
				$to = 100000000000000;
			}
			$sql='select college_name,course_name,duration,fees,qualification,university_name,total_fees,after,district_name from (SELECT * FROM `college_courses` WHERE `college_id` IN (select college_id from college where district_id = '.$place.') AND `course_id` IN (select course_id from courses where stream_id = '.$stream.') AND total_fees BETWEEN '.$from.' AND '.$to.') c JOIN college cc ON c.college_id = cc.college_id JOIN courses ccc ON c.course_id = ccc.course_id JOIN university u ON cc.university_id = u.university_id JOIN district dd ON cc.district_id = dd.district_id order by total_fees';
			$query = $this->db->query($sql);
			$x = 1;
			$output='';
			foreach ($query->result() as $row) {
				$fees = str_replace('-', '<br>', $row->fees);
				$output .= '<tr>
                    <td class="align-middle">'.$x.'</td>
                    <td class="align-middle">'.$row->college_name.'</td>
                    <td class="align-middle">'.$row->course_name.'</td>
                    <td class="trow align-middle">'.$fees.'</td>
                    <td class="align-middle">'.$row->total_fees.'</td>
                    <td class="align-middle">'.$row->duration.' Years</td>
                    <td class="align-middle">'.$row->qualification.'</td>
                    <td class="align-middle">'.$row->university_name.'</td>
                    <td class="align-middle">'.$row->after.'</td>
                    <td class="align-middle">'.$row->district_name.'</td>
                </tr>';
                $x=$x+1;
			}
			if($x == 1){$output='<tr><td colspan="7"><center>No Records</center></td></tr>';}
			return $output;
		}

		function get_college_course_r($course,$from,$to){
			if ($from == '') {
				$from = 0;
			}
			if ($to == '') {
				$to = 100000000000000;
			}
			$sql='select college_name,course_name,duration,fees,qualification,university_name,total_fees,after,district_name from (SELECT * FROM `college_courses` WHERE  `course_id` = '.$course.' AND total_fees BETWEEN '.$from.' AND '.$to.') c JOIN college cc ON c.college_id = cc.college_id JOIN courses ccc ON c.course_id = ccc.course_id JOIN university u ON cc.university_id = u.university_id JOIN district dd ON cc.district_id = dd.district_id order by total_fees';
			$query = $this->db->query($sql);
			$x = 1;
			$output='';
			foreach ($query->result() as $row) {
				$fees = str_replace('-', '<br>', $row->fees);
				$output .= '<tr>
                    <td class="align-middle">'.$x.'</td>
                    <td class="align-middle">'.$row->college_name.'</td>
                    <td class="align-middle">'.$row->course_name.'</td>
                    <td class="trow align-middle">'.$fees.'</td>
                    <td class="align-middle">'.$row->total_fees.'</td>
                    <td class="align-middle">'.$row->duration.' Years</td>
                    <td class="align-middle">'.$row->qualification.'</td>
                    <td class="align-middle">'.$row->university_name.'</td>
                    <td class="align-middle">'.$row->after.'</td>
                    <td class="align-middle">'.$row->district_name.'</td>
                </tr>';
                $x=$x+1;
			}
			if($x == 1){$output='<tr><td colspan="7"><center>No Records</center></td></tr>';}
			return $output;
		}

		function get_college_place_r($place,$from,$to){
			if ($from == '') {
				$from = 0;
			}
			if ($to == '') {
				$to = 100000000000000;
			}
			$sql='select college_name,course_name,duration,fees,qualification,university_name,total_fees,after,district_name from (SELECT * FROM `college_courses` WHERE `college_id` IN (select college_id from college where district_id = '.$place.') AND total_fees BETWEEN '.$from.' AND '.$to.') c JOIN college cc ON c.college_id = cc.college_id JOIN courses ccc ON c.course_id = ccc.course_id JOIN university u ON cc.university_id = u.university_id JOIN district dd ON cc.district_id = dd.district_id order by total_fees';
			$query = $this->db->query($sql);
			$x = 1;
			$output='';
			foreach ($query->result() as $row) {
				$fees = str_replace('-', '<br>', $row->fees);
				$output .= '<tr>
                    <td class="align-middle">'.$x.'</td>
                    <td class="align-middle">'.$row->college_name.'</td>
                    <td class="align-middle">'.$row->course_name.'</td>
                    <td class="trow align-middle">'.$fees.'</td>
                    <td class="align-middle">'.$row->total_fees.'</td>
                    <td class="align-middle">'.$row->duration.' Years</td>
                    <td class="align-middle">'.$row->qualification.'</td>
                    <td class="align-middle">'.$row->university_name.'</td>
                    <td class="align-middle">'.$row->after.'</td>
                    <td class="align-middle">'.$row->district_name.'</td>
                </tr>';
                $x=$x+1;
			}
			if($x == 1){$output='<tr><td colspan="7"><center>No Records</center></td></tr>';}
			return $output;
		}

		function get_college_stream_r($stream,$from,$to){
			if ($from == '') {
				$from = 0;
			}
			if ($to == '') {
				$to = 100000000000000;
			}
			$sql='select college_name,course_name,duration,fees,qualification,university_name,total_fees,after,district_name from (SELECT * FROM `college_courses` WHERE `course_id` IN (select course_id from courses where stream_id = '.$stream.') AND total_fees BETWEEN '.$from.' AND '.$to.') c JOIN college cc ON c.college_id = cc.college_id JOIN courses ccc ON c.course_id = ccc.course_id JOIN university u ON cc.university_id = u.university_id JOIN district dd ON cc.district_id = dd.district_id order by total_fees';
			$query = $this->db->query($sql);
			$x = 1;
			$output='';
			foreach ($query->result() as $row) {
				$fees = str_replace('-', '<br>', $row->fees);
				$output .= '<tr>
                    <td class="align-middle">'.$x.'</td>
                    <td class="align-middle">'.$row->college_name.'</td>
                    <td class="align-middle">'.$row->course_name.'</td>
                    <td class="trow align-middle">'.$fees.'</td>
                    <td class="align-middle">'.$row->total_fees.'</td>
                    <td class="align-middle">'.$row->duration.' Years</td>
                    <td class="align-middle">'.$row->qualification.'</td>
                    <td class="align-middle">'.$row->university_name.'</td>
                    <td class="align-middle">'.$row->after.'</td>
                    <td class="align-middle">'.$row->district_name.'</td>
                </tr>';
                $x=$x+1;
			}
			if($x == 1){$output='<tr><td colspan="7"><center>No Records</center></td></tr>';}
			return $output;
		}

	}
 ?>