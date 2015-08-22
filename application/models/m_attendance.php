<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * attendance model
 *
 * This model serves for attendance module
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */
class M_attendance extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	
	private function index()
	{
		if (!$this->tank_auth->is_logged_in()) 
		{
			redirect('/auth/logout/');
		}
	}

	
	function std_att_side_menu() // returns menu for student module
	{
		$menu = '';
				
		if($this->tank_auth->is_logged_in())
		{
			$menu.= '
					 <a target="_blank"  class="btn btn-link" href="'.base_url().'unauth/take_std_att"><strong>Take Attendance</strong></a>
					 <a  class="btn btn-link" href="'.base_url().'attendance/std_report"><strong>Report</strong></a>
					';
		}
		else
		{
			redirect('/auth/logout/');
		}
		
		return $menu;
	}
	
	function std_date_wise_report($from, $to, $class)
	{		
		$data = "<style>
							table {
								border-collapse: collapse;
							}
							
							table, td, th {
								border: 1px solid black;
							}
				</style>";
		
		$data .= '<div class="table-responsive"><table class="table table-bordered" style="border:1px solid black;">'; //exceptionally nedded
		
		$data.= '<tr>';
		
		$data.= '<caption><h3>'.$this->m_common->class_struct_by_class_struct_id($class).'</h3></caption>';
		
		$data.= '<th>Student ID</th>';
		
		$new_from = $from;
		while(strtotime($to)>=strtotime($new_from))
		{
			$day = strtotime($new_from);
			
			$data.= '<th>'.date("d-m-Y", $day).'</th>';
			
			$new_from = $this->add_one_day($new_from);
		}
		
		$data.= '</tr>';		
		
		$qry_std = $this->db->get_where('class_struct_std_map', array('class_struct_id'=>$class));
		
		foreach($qry_std->result() as $qry_std_res)
		{			
			$data.= '<tr>';			
			$data.= '<td>'.$this->m_profile->student_id_by_db_id($qry_std_res->std_id).'</td>';			
			
			$new_from = $from;
			
			while(strtotime($to)>=strtotime($new_from))
			{
				$qry_att = $this->db->get_where('std_att', array('std_id'=>$qry_std_res->std_id, 'date'=>$new_from));
				$data.= '<td>';
				foreach($qry_att->result() as $qry_att_res)
				{
					if($qry_att_res->status==1)
					{
						$data.= '<h5 class="btn btn-success btn-sm" style="padding:3px; margin:1px;">In: '.$qry_att_res->time.' </h5> ';
					}
					else
					{
						$data.= ' <h5 class="btn btn-danger btn-sm" style="padding:3px; margin:1px;">Out: '.$qry_att_res->time.'</h5>';
					}					
				}
				
				$data.= '</td>';
				
				$new_from = $this->add_one_day($new_from);
			}			
		}	
		
		$data.= '</table></div>';
		
		return $data;
				
	}
	
	
	
	function add_one_day($from)// add one extra day to given date 
	{
		$date = new DateTime($from);
		$date->add(new DateInterval('P1D'));
		return $date->format('Y-m-d');
	} 
	

	
	
	
}

/* End of file m_attendance.php */
/* Location: ./application/models/m_profile.php */