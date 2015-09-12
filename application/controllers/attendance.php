<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Attendance extends CI_Controller
{
	private $module_id			= 1116;		
	private $module_title		= 'MODULE: ATTENDANCE';
	
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
		$this->load->model('m_common');
		$this->load->model('m_menu');
		$this->load->model('m_priv');
		$this->load->model('m_profile');
		$this->load->model('m_attendance');
		$this->load->library('html2pdf');
		
		if($this->m_priv->chk_mo_priv($this->module_id, $this->tank_auth->get_user_id())==FALSE)
		{
			$this->m_common->ban_user($this->tank_auth->get_user_id(), $this->module_id);
		}
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
	
	
	// student attendance area...
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
	
	//not working this function in this purpose...
	function take_std_att() // loads interface for tking attendance
	{
		if (!$this->tank_auth->is_logged_in()) {			
			//redirect('/auth/login/');
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
			
			//$data['side_menu']	= $this->m_attendance->std_att_side_menu(); // sub feature menus for feature
			
			$data['content']	= ' Please Select Menu From Left';
			
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
			
			$std_qry_res['att_in'] = date("h:i:s");		
			
			echo $this->load->view('attendance/std_att_confirm', $std_qry_res, true);
		}
		else
		{
			echo 'No Students Found';
		} 		 
	}
	//not working this function
	
	function std_report()
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
			
			$data['content']	= $this->load->view('attendance/std_report/date_wise', $data, true);
			
			$data['page_title']		= 'Attendance: Student Report';			
			$data['content_title']	= 'Student Attendance Panel';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('module_view', $result);
		}
	}
	
	
	function std_date_wise_report() // ajax useges
	{	
		$data = $this->m_attendance->std_date_wise_report($this->uri->segment(3), $this->uri->segment(4), $this->uri->segment(5));	
		
		$filename = 'report.pdf';	
		
		//Load the library
		$this->load->library('html2pdf');		
		//Set folder to save PDF to
		$this->html2pdf->folder('./assets/pdfs/');		
		//Set the filename to save/download as			
		$this->html2pdf->filename($filename);		
		//Set the paper defaults
		$this->html2pdf->paper('legal', 'landscape');		
		//Load html view
		$this->html2pdf->html($data);		
		//$this->html2pdf->Output($filename); 
		
		$this->html2pdf->create('save');
		
		$data.= '<hr /> <a href='.base_url().'assets/pdfs/'.$filename.' target="_blank" class="btn btn-primary">Download</a> ';
		
		echo $data;
	}
	
	// student attendance area...
	function staff()
	{
		if (!$this->tank_auth->is_logged_in()) {			
			redirect('/auth/login/');
		} else {
			
			$feature_id			= 3337;		
			
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
			
			$data['side_menu']	= $this->m_attendance->staff_att_side_menu(); // sub feature menus for feature
			
			$data['content']	= ' Please Select Menu From Left';
			
			$data['page_title']		= 'Attendance: Staff';			
			$data['content_title']	= 'Staff Attendance Panel';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('module_view', $result);
		}
	}
	
	
	function staff_report()
	{
		if (!$this->tank_auth->is_logged_in()) {			
			redirect('/auth/login/');
		} else {
			
			$feature_id			= 3337;		
			
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
			
			$data['side_menu']	= $this->m_attendance->staff_att_side_menu(); // sub feature menus for feature 
			
			$data['content']	= $this->load->view('attendance/staff_report/date_wise', $data, true);
			
			$data['page_title']		= 'Attendance: Student Report';			
			$data['content_title']	= 'Student Attendance Panel';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('module_view', $result);
		}
	}
	
	
	function staff_date_wise_report() // ajax useges
	{	
		$data = $this->m_attendance->staff_date_wise_report($this->uri->segment(3), $this->uri->segment(4), $this->uri->segment(5));	
		
		$filename = 'report.pdf';	
		
		//Load the library
		$this->load->library('html2pdf');		
		//Set folder to save PDF to
		$this->html2pdf->folder('./assets/pdfs/');		
		//Set the filename to save/download as			
		$this->html2pdf->filename($filename);		
		//Set the paper defaults
		$this->html2pdf->paper('legal', 'landscape');		
		//Load html view
		$this->html2pdf->html($data);		
		//$this->html2pdf->Output($filename); 
		
		$this->html2pdf->create('save');
		
		$data.= '<hr /> <a href='.base_url().'assets/pdfs/'.$filename.' target="_blank" class="btn btn-primary">Download</a> ';
		
		echo $data;
	}
	
}