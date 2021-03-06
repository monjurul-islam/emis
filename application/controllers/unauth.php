<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Unauth extends CI_Controller
{
	private $module_id			= 1116;		
	private $module_title		= 'MODULE: ATTENDANCE';
	
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		//$this->load->library('tank_auth');
		$this->load->model('m_common');
		$this->load->model('m_menu');
		//$this->load->model('m_priv');
		//$this->load->model('m_profile');
		$this->load->model('m_attendance');
		
		/*if($this->m_priv->chk_mo_priv($this->module_id, $this->tank_auth->get_user_id())==FALSE)
		{
			$this->m_common->ban_user($this->tank_auth->get_user_id(), $this->module_id);
		}*/
		
		date_default_timezone_set('Asia/Dhaka');
	}
	
	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {			
			redirect('/auth/login/');
		} else {
		
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			$org_info			= $this->m_common->organisation_info();
			
			$data['menu']		= $this->m_menu->menu($data['user_id']);
			
			$data['side_menu']	= $this->m_menu->side_menu();
			
			$data['content']	= 'Attendance Content';
			
			$data['page_title']		= 'Moule: Attendance';			
			$data['content_title']	= 'Attendance Management';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('public_view', $result);
		}
	}
	
	function student()
	{
		if (!$this->tank_auth->is_logged_in()) {			
			redirect('/auth/login/');
		} else {
			
			$feature_id			= 3336;		
			
			if($this->m_priv->chk_fe_priv($feature_id, $this->tank_auth->get_user_id())==FALSE)
			{
				$this->m_common->ban_user($this->tank_auth->get_user_id(), $this->module_id);
			}
			
			$data['user_id']		= $this->tank_auth->get_user_id();
			$data['username']		= $this->tank_auth->get_username();
			$data['feature_id']		= $feature_id;
			$data['feature_name']	= $this->m_menu->get_feature_name_by_id($feature_id);
			
			$org_info			= $this->m_common->organisation_info();
			
			$data['menu']		= $this->m_menu->menu($data['user_id']);
			
			$data['side_menu']	= $this->m_attendance->std_att_side_menu(); // sub feature menus for feature
			
			$data['content']	= ' Please Select Menu From Left';
			
			$data['page_title']		= 'Attendance: Student';			
			$data['content_title']	= 'Student Attendance Panel';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('module_view', $result);
		}
	}
	
	function take_std_att() // loads interface for tking attendance
	{
		if (0) {			
			//redirect('/auth/login/');
		} else {
			
			$feature_id			= 3336;				
			$data['feature_id']		= $feature_id;
			$data['feature_name']	= $this->m_menu->get_feature_name_by_id($feature_id);			
			$org_info				= $this->m_common->organisation_info();
	
			$data['content']		= ' Please Select Menu From Left';			
			$data['page_title']		= 'Attendance: Student';			
			$data['content_title']	= 'Student Attendance Panel';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('attendance/take_std_att_view', $result);
		}
	}
	
	function save_std_att() // ajax usages for saving and shouing attendance details for students
	{
		$rfid_no = $this->uri->segment(3);      	 
		$std_qry = $this->db->get_where('student', array('rfid_no' => $rfid_no ));		 
		if($std_qry->num_rows()>0)
		{
			$std_qry_res = $std_qry->row_array();	
			$this->db->limit(1);			
			$this->db->order_by("id", "desc");
			$qry_att = $this->db->get_where('std_att', array('std_id'=>$std_qry_res['id'], 'date'=>date("Y-m-d")));
						
			if($qry_att->num_rows()>0)
			{
				if($qry_att->row()->status==1)
				{
					$att_entry = array(
										'std_id' 	=> $std_qry_res['id'],
										'date'  	=> date("Y-m-d"),
										'time'   	=> date("g:i a"),
										'status' 	=> '2',								
									);
				}
				else
				{
					$att_entry = array(
										'std_id' 	=> $std_qry_res['id'],
										'date'  	=> date("Y-m-d"),
										'time'   	=> date("g:i a"),
										'status' 	=> '1',								
									);
				}				
			}
			else
			{
				$att_entry = array(
									'std_id' 	=> $std_qry_res['id'],
									'date'  	=> date("Y-m-d"),
									'time'   	=> date("g:i a"),
									'status' 	=> '1',								
								);
			}			
							
			if($this->db->insert('std_att', $att_entry))
			{
				$std_qry_res['time']      = $att_entry['time'];
				$std_qry_res['att_status'] 	= $att_entry['status'];
			
				echo $this->load->view('attendance/std_att_confirm', $std_qry_res, true);
			}
			else
			echo 'Failed';			
		}
		else
		{
			echo '<h1>No Students Found</h1>';
		} 		 
	}
	
	
	function take_staff_att() // loads interface for tking attendance
	{
		if (0) {			
			//redirect('/auth/login/');
		} else {
			
			$feature_id			= 3337;				
			$data['feature_id']		= $feature_id;
			$data['feature_name']	= $this->m_menu->get_feature_name_by_id($feature_id);			
			$org_info				= $this->m_common->organisation_info();
	
			$data['content']		= ' Please Select Menu From Left';			
			$data['page_title']		= 'Attendance: Student';			
			$data['content_title']	= 'Student Attendance Panel';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('attendance/take_staff_att_view', $result);
		}
	}
	
	function save_staff_att() // ajax usages for saving and shouing attendance details for students
	{
		$rfid_no = $this->uri->segment(3);      	 
		$staff_qry = $this->db->get_where('staff', array('rfid_no' => $rfid_no ));		 
		if($staff_qry->num_rows()>0)
		{
			$staff_qry_res = $staff_qry->row_array();
			
			$this->db->limit(1);				
			$this->db->order_by("id", "desc");
			$qry_att = $this->db->get_where('staff_att', array('staff_id'=>$staff_qry_res['id'], 'date'=>date("Y-m-d")));
						
			if($qry_att->num_rows()>0)
			{
				if($qry_att->row()->status==1)
				{
					$att_entry = array(
										'staff_id' 	=> $staff_qry_res['id'],
										'date'  	=> date("Y-m-d"),
										'time'   	=> date("g:i a"),
										'status' 	=> '2',								
									);
				}
				else
				{
					$att_entry = array(
										'staff_id' 	=> $staff_qry_res['id'],
										'date'  	=> date("Y-m-d"),
										'time'   	=> date("g:i a"),
										'status' 	=> '1',								
									);
				}				
			}
			else
			{
				$att_entry = array(
									'staff_id' 	=> $staff_qry_res['id'],
									'date'  	=> date("Y-m-d"),
									'time'   	=> date("g:i a"),
									'status' 	=> '1',								
								);
			}			
							
			if($this->db->insert('staff_att', $att_entry))
			{
				$staff_qry_res['time']      	= $att_entry['time'];
				$staff_qry_res['att_status'] 	= $att_entry['status'];
				$staff_qry_res['todays_log'] 	= $this->m_attendance->staff_todays_log($staff_qry_res['id']);
			
				echo $this->load->view('attendance/staff_att_confirm', $staff_qry_res, true);
			}
			else
			echo 'Failed';			
		}
		else
		{
			echo '<h1>No Students Found</h1>';
		} 		 
	}
	
	
	
}