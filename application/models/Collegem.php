<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Collegem extends CI_Model{
    
    function getcollegeauto($name){
        $data = array();
        $sql="SELECT * FROM college WHERE college_name LIKE '%".$name."%'";
        $query = $this->db->query($sql);
        foreach ($query->result_array() as $row) {
            $data[$row["college_id"]] = $row["college_name"];
        }
        return json_encode($data);
    }

    function get_college($name){
            $sql='select course_name,duration,fees,qualification,university_name from (SELECT * FROM `college_courses` WHERE `college_id` IN (select college_id from college where college_name = "'.$name.'")) c JOIN college cc ON c.college_id = cc.college_id JOIN courses ccc ON c.course_id = ccc.course_id JOIN university u ON cc.university_id = u.university_id order by course_name';
            $query = $this->db->query($sql);
            $x = 1;
            $output='name';
            foreach ($query->result() as $row) {
                $fees = str_replace(',', '<br>', $row->fees);
                $output .= '<tr>
                    <td class="align-middle">'.$x.'</td>
                    <td class="align-middle">'.$row->course_name.'</td>
                    <td class="trow align-middle">'.$fees.'</td>
                    <td class="align-middle">'.$row->duration.' Years</td>
                    <td class="align-middle">'.$row->qualification.'</td>
                    <td class="align-middle">'.$row->university_name.'</td>
                </tr>';
                $x=$x+1;
            }
            if($x == 1){$output='<tr><td colspan="7"><center>No Records</center></td></tr>';}
            return $output;
    }
}