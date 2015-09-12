<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fee extends CI_Controller
{
	private $module_id			= 1117;		
	private $module_title		= 'MODULE: FEE';
	
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
		$this->load->model('m_common');
		$this->load->model('m_menu');
		$this->load->model('m_priv');
		$this->load->model('m_profile');
		$this->load->model('m_fee');
		
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
			
			$data['content']	= 'Fee Content.  Description';
			
			$data['page_title']		= 'Moule: Fee';			
			$data['content_title']	= 'Fee Management';						
			
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
			
			$feature_id			= 3338;		
			
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
			
			$data['side_menu']	= $this->m_fee->configure_side_menu(); // sub feature menus for feature
			
			$data['content']	= ' Please Select Menu From Left';
			
			$data['page_title']		= 'Fee: Configure';			
			$data['content_title']	= 'Configuration Panel';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('module_view', $result);
		}
	}
	
	function waiver_configure()
	{
		if (!$this->tank_auth->is_logged_in()) {			
			redirect('/auth/login/');
		} else {
			
			$feature_id			= 3338;		
			
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
			
			$data['side_menu']	= $this->m_fee->configure_side_menu(); // sub feature menus for feature
			
			$data['content']	= $this->load->view('fee/config/waiver_configure', $this->m_profile->class_struct(), true);
			
			$data['page_title']		= 'Fee: Waiver Configure';			
			$data['content_title']	= 'Waiver Configuration Panel';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('module_view', $result);
		}
	}
	
	//--------------------------end configuration --------------------------------------------//
	//--------------------------start ajax usages function -----------------------------------//
	
	function ajax_students_by_class_structure_for_fee_waiver()
	{
		$qry_class_struct_std = $this->db->get_where('class_struct_std_map', array('class_struct_id'=>$this->uri->segment(3, 0)));
		
		if($qry_class_struct_std->num_rows()>0)
		{
			$html = '<h3>Students In This Class</h3><hr/>';
			
			$data['qry_success'] = 1;
			$data['qry_result_num'] =  $qry_class_struct_std->num_rows();
			$data['qry_result']  	=  $qry_class_struct_std->result();
			$html.= $this->load->view('fee/config/class_struct_students_for_waiver', $data , true);;
			
			echo $html;
		}
		else
		{
			echo '<h3>Nothing Found. <a style=" font-size:medium;" href="'.base_url().'profile/add_student">Add New Student</a></h3>';
		}
	}
	
	
}

/* End of file fee.php */
/* Location: ./application/controllers/fee.php */