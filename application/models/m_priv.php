<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * privilege model
 *
 * This model serves to check users privileges in modules
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */
class M_priv extends CI_Model
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
	
	function chk_priv($module_id)
	{
		if($this->tank_auth->get_user_id()==1)
		{
			return TRUE;
		}
		else
		return FALSE;
	}
}

/* End of file m_common.php */
/* Location: ./application/models/m_common.php */