<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->library('tank_auth');
		$this->load->model('m_admin');
		$this->load->model('m_common');
		$this->load->model('m_menu');
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
				
				if($new_module['id']!=NULL || $new_module['id']!="")
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
	
	
	
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */