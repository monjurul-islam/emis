<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller
{
	private $module_id			= 1115;		
	private $module_title		= 'MODULE: PROFILE';
	
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
		$this->load->model('m_common');
		$this->load->model('m_menu');
		$this->load->model('m_priv');
		$this->load->model('m_profile');
		
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
			
			$data['content']	= 'Profile Content';
			
			$data['page_title']		= 'Moule: Profile';			
			$data['content_title']	= 'Profile Management';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('public_view', $result);
		}
	}
	
	///------------------------------------------------ Configuration ----------------------------------------------------//
	
	
	function configure()
	{
		if (!$this->tank_auth->is_logged_in()) {			
			redirect('/auth/login/');
		} else {
			
			$feature_id			= 3335;		
			
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
			
			$data['side_menu']	= $this->m_profile->conf_side_menu(); // sub feature menus for feature
			
			$data['content']	= ' Please Select Menu From Left';
			
			$data['page_title']		= 'Profile: Student';			
			$data['content_title']	= 'Configuration Panel';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('module_view', $result);
		}
	}
	
	function edu_struct()
	{
		if (!$this->tank_auth->is_logged_in()) {			
			redirect('/auth/login/');
		} else {
			
			$feature_id			= 3335;		
			
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
			
			$data['side_menu']	= $this->m_profile->conf_side_menu(); // sub feature menus for feature
			
			$data['content']	= $this->load->view('profile/config/edu_struct', $this->m_profile->edu_struct(), true);
			
			$data['page_title']		= 'Profile: Configure';			
			$data['content_title']	= 'Manage Education Structure';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('module_view', $result);
		}
	}
	
	function add_edu_struct()
	{
		if (!$this->tank_auth->is_logged_in()) {			
			redirect('/auth/login/');
		} else {
			
			$feature_id			= 3335;		
			
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
			
			$data['side_menu']	= $this->m_profile->conf_side_menu(); // sub feature menus for feature
			
			if($this->input->post('add_edu_struct'))
			{
				$new_edu_struct = $this->m_profile->add_edu_struct();
				
				if($new_edu_struct['qry_success']==1)
				{
					$data['content']	= $this->load->view('profile/config/new_edu_struct', $new_edu_struct, true);
				}
				else
				{
					$this->load->view('profile/config/add_edu_struct', '', true);
				}
			}
			else
			{
				$data['content']	= $this->load->view('profile/config/add_edu_struct', '', true);
				
			}
						
			$data['page_title']		= 'Profile: Configure';			
			$data['content_title']	= 'Manage Education Structure';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('module_view', $result);
		}
	}
	
			//======================education structure end======================//
	
	function class_struct()
	{
		if (!$this->tank_auth->is_logged_in()) {			
			redirect('/auth/login/');
		} else {
			
			$feature_id			= 3335;		
			
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
			
			$data['side_menu']	= $this->m_profile->conf_side_menu(); // sub feature menus for feature
			
			$data['content']	= $this->load->view('profile/config/class_struct', $this->m_profile->class_struct(), true);
			
			$data['page_title']		= 'Profile: Configure';			
			$data['content_title']	= 'Manage Class Structure';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('module_view', $result);
		}
	}
	
	function add_class_struct()
	{
		if (!$this->tank_auth->is_logged_in()) {			
			redirect('/auth/login/');
		} else {
			
			$feature_id			= 3335;		
			
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
			
			$data['side_menu']	= $this->m_profile->conf_side_menu(); // sub feature menus for feature
			
			if($this->input->post('add_class_struct'))
			{
				$new_class_struct = $this->m_profile->add_class_struct();
				
				if($new_class_struct['qry_success']==1)
				{
					$data['content']	= $this->load->view('profile/config/new_class_struct', $new_class_struct, true);
				}
				else
				{
					$this->load->view('profile/config/add_edu_struct', '', true);
				}
			}
			else
			{
				$data['content']	= $this->load->view('profile/config/add_class_struct', '', true);
				
			}
						
			$data['page_title']		= 'Profile: Configure';			
			$data['content_title']	= 'Manage Class Structure';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('module_view', $result);
		}
	}
	
	//========================ajax fuctions======================================//
	
	function ajax_edu_struct_by_year()
	{		
		$qry_edu_struct = $this->db->get_where('edu_struct', array('year_season_id'=>$this->uri->segment(3, 0)));
		
		if($qry_edu_struct->num_rows()>0)
		{
			$html = ' <option value="" selected="selected">Select Education Structure</option>';
			foreach($qry_edu_struct->result() as $qry_edu_struct_res)
			{
				$html.= '<option value="'.$qry_edu_struct_res->id.'"><u>'.$this->m_common->get_medium_name_by_id($qry_edu_struct_res->medium_id).', '.$this->m_common->get_version_name_by_id($qry_edu_struct_res->version_id).'  Version, '.$this->m_common->get_shift_name_by_id($qry_edu_struct_res->shift_id).' Shift</u></option>';
			}
			
			echo $html;
		}
		else
		{
			echo 0;
		}
		
	}
	
	
	function ajax_class_struct_by_edu_struct()
	{		
		$qry_class_struct = $this->db->get_where('class_struct', array('edu_struct_id'=>$this->uri->segment(3, 0)));
		
		if($qry_class_struct->num_rows()>0)
		{
			$html = '<h3>Class Structures of selected Education Structure</h3><hr/>';
			
			$data['qry_success'] = 1;
			$data['qry_result']  = $qry_class_struct->result();
			$html.= $this->load->view('profile/config/class_struct_classes', $data , true);;
			
			echo $html;
		}
		else
		{
			echo '<h3>Nothing Found. <a style=" font-size:medium;" href="'.base_url().'profile/add_class_struct">Create New</a></h3>';
		}
		
	}
	
	
	
	///-------------------------------------------------End Configuration -------------------------------------------------///
	///-------------------------------------------------End Configuration -------------------------------------------------///
	///-------------------------------------------------End Configuration -------------------------------------------------///
	
	function student()
	{
		if (!$this->tank_auth->is_logged_in()) {			
			redirect('/auth/login/');
		} else {
			
			$feature_id			= 3333;		
			
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
			
			$data['side_menu']	= $this->m_profile->std_side_menu(); // sub feature menus for feature
			
			$data['content']	= ' Please Select Menu From Left';
			
			$data['page_title']		= 'Profile: Student';			
			$data['content_title']	= 'Welcome '.$data['username'];						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('module_view', $result);
		}
	}	
	
	function add_student()
	{
		if (!$this->tank_auth->is_logged_in()) {			
			redirect('/auth/login/');
		} else {
			
			$feature_id			= 3333;		
			
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
			
			$data['side_menu']	= $this->m_profile->std_side_menu(); // sub feature menus for feature
			
			$data['content']	= $this->load->view('profile/student/student_form', '', true);;
			
			$data['page_title']		= 'Profile: Student';			
			$data['content_title']	= 'Add New Student';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('module_view', $result);
		}
	}	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */