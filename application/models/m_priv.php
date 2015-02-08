<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * privilege model
 *
 * This model serves to check users/groups privileges in modules
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
	
	function chk_priv($module_id) // checkes privilege of logged in user by module
	{
		if($this->tank_auth->get_user_id()==1)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	function priv_module_by_user($module_id, $user_id)
	{
		if($this->db->get_where('module_user_map', array('module_id'=>$module_id, 'user_id'=>$user_id))->num_rows()>0)
		{
			return TRUE;
		}
		else
		return FALSE;
	}
	
	function priv_feature_by_user($feature_id, $user_id)
	{
		if($this->db->get_where('feature_user_map', array('feature_id'=>$feature_id, 'user_id'=>$user_id))->num_rows()>0)
		{
			return TRUE;
		}
		else
		return FALSE;
	}
}

/* End of file m_common.php */
/* Location: ./application/models/m_common.php */