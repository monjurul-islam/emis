<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
		$this->load->model('m_common');
		$this->load->model('m_menu');
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
			
			$data['page_title']		= 'Welcome';			
			$data['content_title']	= 'Welcome. Please Select Menu';						
			
			$result = array_merge($data, $org_info);			
			$this->load->view('admin_view', $result);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */