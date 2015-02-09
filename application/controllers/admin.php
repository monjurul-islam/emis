<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->library('tank_auth');
		$this->load->library('tank_auth_rasel');
		$this->load->model('m_admin');
		$this->load->model('m_common');
		$this->load->model('m_menu');
		$this->load->model('m_priv');
		if (!$this->tank_auth->is_logged_in()) 
		{
			redirect('/auth/login/');
		}
		else
		{
			if($this->tank_auth->get_user_id()!=1)
			{
				redirect('/auth/logout/');
			} 			
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
			
			$data['menu']		= $this->m_menu->menu();
			
			$data['side_menu']	= $this->m_menu->side_menu();
			
			$data['content']	= 'test content';
			
			$data['page_title']		= 'Admin';			
			$data['content_title']	= 'Welcome Admin. Please Select Menu';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('admin_view', $result);
		}
	}
	
	//---------------- area started for module management --------------------------//
	
	function module()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			$org_info			= $this->m_common->organisation_info();
			
			$data['menu']		= $this->m_menu->menu();
			
			$data['side_menu']	= $this->m_menu->side_menu();
			
			$data['content']	= $this->load->view('admin/modules', $this->m_admin->modules(), true);
			
			$data['page_title']		= 'Admin: Module';			
			$data['content_title']	= 'Manage Modules';
						
			$result = array_merge($data, $org_info);			
			$this->load->view('admin_view', $result);
		}
	}
	
	function add_module()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			$org_info			= $this->m_common->organisation_info();
			
			$data['menu']		= $this->m_menu->menu();
			
			$data['side_menu']	= $this->m_menu->side_menu();			
						
			if($this->input->post('add_module'))
			{
				$new_module = $this->m_admin->add_module();
				
				if($new_module['qry_success']==1)
				{
					$data['content']	= $this->load->view('admin/new_module', $new_module, true);
				}
				else
				{
					$this->load->view('admin/add_module', '', true);
				}
			}
			else
			{
				$data['content']	= $this->load->view('admin/add_module', '', true);
			}
					
			$data['page_title']		= 'Admin: Module';			
			$data['content_title']	= 'Manage Modules';
						
			$result = array_merge($data, $org_info);			
			$this->load->view('admin_view', $result);
		}
	}
	
	function edit_module()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			$org_info			= $this->m_common->organisation_info();
			
			$data['menu']		= $this->m_menu->menu();
			
			$data['side_menu']	= $this->m_menu->side_menu();			
						
			if($this->input->post('update_module'))
			{
				$update_module = $this->m_admin->update_module();
				
				if($update_module['qry_success']==1)
				{
					$data['content']	= $this->load->view('admin/new_module', $update_module, true);
				}
				else
				{
					$this->load->view('admin/add_module', '', true);
				}
			}
			elseif($this->uri->segment(3,0)!="")
			{
				$data['content']	= $this->load->view('admin/edit_module', $this->m_admin->module_by_id($this->uri->segment(3,0)), true);
			}
					
			$data['page_title']		= 'Admin: Module';			
			$data['content_title']	= 'Manage Modules';
						
			$result = array_merge($data, $org_info);			
			$this->load->view('admin_view', $result);
		}
	}
	
	//---------------------------------- area end for module management --------------------------------------------//
	
	//-----------------------------------******************************---------------------------------------------//
	
	//---------------- area started for feature management --------------------------//
	
	function feature()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			$org_info			= $this->m_common->organisation_info();
			
			$data['menu']		= $this->m_menu->menu();
			
			$data['side_menu']	= $this->m_menu->side_menu();
			
			$data['content']	= $this->load->view('admin/features', $this->m_admin->features(), true);
			
			$data['page_title']		= 'Admin: feature';			
			$data['content_title']	= 'Manage features';
						
			$result = array_merge($data, $org_info);			
			$this->load->view('admin_view', $result);
		}
	}
	
	function add_feature()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			$org_info			= $this->m_common->organisation_info();
			
			$data['menu']		= $this->m_menu->menu();
			
			$data['side_menu']	= $this->m_menu->side_menu();			
						
			if($this->input->post('add_feature'))
			{
				$new_feature = $this->m_admin->add_feature();
				
				if($new_feature['qry_success']==1)
				{
					$data['content']	= $this->load->view('admin/new_feature', $new_feature, true);
				}
				else
				{
					$this->load->view('admin/add_feature', $this->m_admin->modules(), true);
				}
			}
			else
			{
				$data['content']	= $this->load->view('admin/add_feature', $this->m_admin->modules(), true);
			}
					
			$data['page_title']		= 'Admin: feature';			
			$data['content_title']	= 'Manage features';
						
			$result = array_merge($data, $org_info);			
			$this->load->view('admin_view', $result);
		}
	}
	
	function edit_feature()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			$org_info			= $this->m_common->organisation_info();
			
			$data['menu']		= $this->m_menu->menu();
			
			$data['side_menu']	= $this->m_menu->side_menu();			
						
			if($this->input->post('update_feature'))
			{
				$update_feature = $this->m_admin->update_feature();
				
				if($update_feature['qry_success']==1)
				{
					$data['content']	= $this->load->view('admin/new_feature', $update_feature, true);
				}
				else
				{
					$this->load->view('admin/add_feature', $this->m_admin->feature_by_id($this->uri->segment(3,0)), true);
				}
			}
			elseif($this->uri->segment(3,0)!="")
			{
				$data['content']	= $this->load->view('admin/edit_feature', $this->m_admin->feature_by_id($this->uri->segment(3,0)), true);
			}
					
			$data['page_title']		= 'Admin: feature';			
			$data['content_title']	= 'Manage features';
						
			$result = array_merge($data, $org_info);			
			$this->load->view('admin_view', $result);
		}
	}
	
	//---------------------------------- area end for feature management --------------------------------------------//
	
	//-----------------------------------******************************---------------------------------------------//
	
	//---------------- area started for group management --------------------------//
	
	function group()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			$org_info			= $this->m_common->organisation_info();
			
			$data['menu']		= $this->m_menu->menu();
			
			$data['side_menu']	= $this->m_menu->side_menu();
			
			$data['content']	= $this->load->view('admin/groups', $this->m_admin->groups(), true);
			
			$data['page_title']		= 'Admin: group';			
			$data['content_title']	= 'Manage groups';
						
			$result = array_merge($data, $org_info);			
			$this->load->view('admin_view', $result);
		}
	}
	
	function add_group()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			$org_info			= $this->m_common->organisation_info();
			
			$data['menu']		= $this->m_menu->menu();
			
			$data['side_menu']	= $this->m_menu->side_menu();			
						
			if($this->input->post('add_group'))
			{
				$new_group = $this->m_admin->add_group();
				
				if($new_group['qry_success']==1)
				{
					$data['content']	= $this->load->view('admin/new_group', $new_group, true);
				}
				else
				{
					$this->load->view('admin/add_group', '', true);
				}
			}
			else
			{
				$data['content']	= $this->load->view('admin/add_group', '', true);
			}
					
			$data['page_title']		= 'Admin: group';			
			$data['content_title']	= 'Manage groups';
						
			$result = array_merge($data, $org_info);			
			$this->load->view('admin_view', $result);
		}
	}
	
	function edit_group()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			$org_info			= $this->m_common->organisation_info();
			
			$data['menu']		= $this->m_menu->menu();
			
			$data['side_menu']	= $this->m_menu->side_menu();			
						
			if($this->input->post('update_group'))
			{
				$update_group = $this->m_admin->update_group();
				
				if($update_group['qry_success']==1)
				{
					$data['content']	= $this->load->view('admin/new_group', $update_group, true);
				}
				else
				{
					$this->load->view('admin/add_group', '', true);
				}
			}
			elseif($this->uri->segment(3,0)!="")
			{
				$data['content']	= $this->load->view('admin/edit_group', $this->m_admin->group_by_id($this->uri->segment(3,0)), true);
			}
					
			$data['page_title']		= 'Admin: group';			
			$data['content_title']	= 'Manage groups';
						
			$result = array_merge($data, $org_info);			
			$this->load->view('admin_view', $result);
		}
	}
	//---------------------------------- area end for group management --------------------------------------------//
	
	//-----------------------------------******************************---------------------------------------------//
	
	//---------------- area started for user management --------------------------//
	
	function user()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			$org_info			= $this->m_common->organisation_info();
			
			$data['menu']		= $this->m_menu->menu();
			
			$data['side_menu']	= $this->m_menu->side_menu();
			
			$data['content']	= $this->load->view('admin/users', $this->m_admin->users(), true);
			
			$data['page_title']		= 'Admin: user';			
			$data['content_title']	= 'Manage users';
						
			$result = array_merge($data, $org_info);			
			$this->load->view('admin_view', $result);
		}
	}
	
	function add_user()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			$org_info			= $this->m_common->organisation_info();
			
			$data['menu']		= $this->m_menu->menu();
			
			$data['side_menu']	= $this->m_menu->side_menu();			
						
			if($this->input->post('add_user'))
			{
				$new_user = $this->m_admin->add_user();
				
				if($new_user['qry_success']==1)
				{
					$data['content']	= $this->load->view('admin/new_user', $new_user, true);
				}
				else
				{				
					$this->load->view('admin/add_user', $this->m_admin->groups() , true);
				}
			}
			else
			{
				$data['content']	= $this->load->view('admin/add_user',  $this->m_admin->groups(), true);
			}
					
			$data['page_title']		= 'Admin: user';			
			$data['content_title']	= 'Manage users';
						
			$result = array_merge($data, $org_info);			
			$this->load->view('admin_view', $result);
		}
	}
	
	function edit_user()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			$org_info			= $this->m_common->organisation_info();
			
			$data['menu']		= $this->m_menu->menu();
			
			$data['side_menu']	= $this->m_menu->side_menu();			
						
			if($this->input->post('update_user'))
			{
				$update_user = $this->m_admin->update_user();
				
				if($update_user['qry_success']==1)
				{
					$data['content']	= $this->load->view('admin/new_user', $update_user, true);
				}
				else
				{
					$this->load->view('admin/add_user', '', true);
				}
			}
			elseif($this->uri->segment(3,0)!="")
			{
				$data['content']	= $this->load->view('admin/edit_user', $this->m_admin->user_by_id($this->uri->segment(3,0)), true);
			}
					
			$data['page_title']		= 'Admin: user';			
			$data['content_title']	= 'Manage users';
						
			$result = array_merge($data, $org_info);			
			$this->load->view('admin_view', $result);
		}
	}
	//---------------------------------- area end for user management --------------------------------------------//
	// ------------------------------------------------------------------------------------------------------------//
	
	//---------------------------------------------------------------------Started Privilege to user --------------------------//
	
	function user_privileges()
	{
		if (!$this->tank_auth->is_logged_in()) {			
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			$org_info			= $this->m_common->organisation_info();
			
			$data['menu']		= $this->m_menu->menu();
			
			$data['side_menu']	= $this->m_menu->side_menu();
			
			if($this->input->post('update_priv')) $this->m_admin->update_user_priv($this->input->post('user_id'));

			$data['content']	= $this->load->view('admin/user_privilege', $this->m_admin->user_privileges($this->uri->segment(3,0)), true);;
			
			$data['page_title']		= 'Admin: User Privileges';			
			$data['content_title']	= 'Manage User Privileges';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('admin_view', $result);
		}
	}
	
	function group_privileges()
	{
		if (!$this->tank_auth->is_logged_in()) {			
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			
			$org_info			= $this->m_common->organisation_info();
			
			$data['menu']		= $this->m_menu->menu();
			
			$data['side_menu']	= $this->m_menu->side_menu();
			
			if($this->input->post('update_priv')) $this->m_admin->update_group_priv($this->input->post('group_id'));

			$data['content']	= $this->load->view('admin/group_privilege', $this->m_admin->group_privileges($this->uri->segment(3,0)), true);;
			
			$data['page_title']		= 'Admin: group Privileges';			
			$data['content_title']	= 'Manage group Privileges';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('admin_view', $result);
		}
	}
	
	
		
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */