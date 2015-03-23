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
					 <a  class="btn btn-link" href="'.base_url().'attendance/take_std_att"><strong>Take Attendance</strong></a>
					 <a  class="btn btn-link" href="'.base_url().'attendance/#"><strong>Attendance By Class</strong></a>
					 <a  class="btn btn-link" href="'.base_url().'attendance/staff_by_cat"><strong>Employee By Type</strong></a>
					 <a  class="btn btn-link" href="#'.base_url().'attendance/add_student"><strong>Reports</strong></a>
					';
		}
		else
		{
			redirect('/auth/logout/');
		}
		
		return $menu;
	}
	

	
	
	
}

/* End of file m_attendance.php */
/* Location: ./application/models/m_profile.php */