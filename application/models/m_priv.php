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
	
	function chk_mo_priv($module_id, $user_id) // checkes privilege of logged in user by module
	{
		if($user_id==1)
		{
			return TRUE;
		}
		else
		{			
			$qry_user_mo = $this->db->get_where('module_user_map', array('module_id'=>$module_id, 'user_id'=>$user_id));
			
			if($qry_user_mo->num_rows()>0)
			{
				return TRUE;
			}
			else
			{
				$qry_group = $this->db->get_where('user_group_map', array('user_id'=>$user_id)); // groups privileges
				if($qry_group->num_rows()>0)
				{
					foreach($qry_group->result() as $qry_group_res)
					{
						if($this->db->get_where('module_group_map', array('module_id'=>$module_id, 'group_id'=>$qry_group_res->user_id))->num_rows()>0)
						{
							return TRUE;
						}
						else return FALSE;
					}
				}
			}			
		}
	}
	
	
	function chk_fe_priv($feature_id , $user_id) // checkes privilege of logged in user by feature
	{
		if($user_id==1)
		{
			return TRUE;
		}
		else
		{
			$qry_user_fe = $this->db->get_where('feature_user_map', array('feature_id'=>$feature_id, 'user_id'=>$user_id));
			
			if($qry_user_fe->num_rows()>0)
			{
				return TRUE;
			}
			else
			{
				$qry_group = $this->db->get_where('user_group_map', array('user_id'=>$user_id)); // groups privileges
				if($qry_group->num_rows()>0)
				{
					foreach($qry_group->result() as $qry_group_res)
					{
						if($this->db->get_where('feature_group_map', array('feature_id'=>$feature_id, 'group_id'=>$qry_group_res->user_id))->num_rows()>0)
						{
							return TRUE;
						}
						else return FALSE;
					}
				}
			}			
		}
	}
	
	
	function get_user_wise_modules($user_id) // returns modules including membered groups
	{
		$modules = array();
		
		$this->db->select('module_id');
		$qry_module_user = $this->db->get_where('module_user_map', array('user_id'=>$user_id));
		if($qry_module_user->num_rows()>0)
		{
			foreach($qry_module_user->result() as $qry_module_user_res)
			{
				$modules[] = $qry_module_user_res->module_id;
			}
		}
		
		$qry_group = $this->db->get_where('user_group_map', array('user_id'=>$user_id)); // groups privileges
		if($qry_group->num_rows()>0)
		{
			foreach($qry_group->result() as $qry_group_res)
			{
				$this->db->select('module_id');
				$qry_module_group = $this->db->get_where('module_group_map', array('group_id'=>$qry_group_res->group_id));
				if($qry_module_group->num_rows()>0)
				{
					foreach($qry_module_group->result() as $qry_module_group_res)
					{
						$modules[] = $qry_module_group_res->module_id;
					}
				}
			}
		}
				
		return array_unique($modules);	
	}
	
	
	function get_module_wise_features_by_user($user_id, $module_id) // returns features including membered groups
	{
		$features = array();
		
		$qry_features = $this->db->get_where('features', array('module_id'=>$module_id));
		
		if($qry_features->num_rows()>0)
		{
			foreach($qry_features->result() as $qry_features_res)
			{
				if($this->db->get_where('feature_user_map', array('user_id'=>$user_id, 'feature_id'=>$qry_features_res->id))->num_rows()>0)
				{
					$features[] = $qry_features_res->id;
				}
			}
		}	
		
		$qry_group = $this->db->get_where('user_group_map', array('user_id'=>$user_id)); // groups privileges
		if($qry_group->num_rows()>0)
		{
			foreach($qry_group->result() as $qry_group_res)
			{				
				foreach($qry_features->result() as $qry_features_res)
				{
					if($this->db->get_where('feature_group_map', array('group_id'=>$qry_group_res->group_id, 'feature_id'=>$qry_features_res->id))->num_rows()>0)
					{
						$features[] = $qry_features_res->id;
					}
				}
			}
		}				
		return array_unique($features);	
	}
	
	
	
	
	//--------------------------- start privilege controlling functions ----------------------------------------------//
	
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
	
	function priv_module_by_group($module_id, $group_id)
	{
		if($this->db->get_where('module_group_map', array('module_id'=>$module_id, 'group_id'=>$group_id))->num_rows()>0)
		{
			return TRUE;
		}
		else
		return FALSE;
	}
	
	function priv_feature_by_group($feature_id, $group_id)
	{
		if($this->db->get_where('feature_group_map', array('feature_id'=>$feature_id, 'group_id'=>$group_id))->num_rows()>0)
		{
			return TRUE;
		}
		else
		return FALSE;
	}
	
		//--------------------------- end privilege controlling functions ----------------------------------------------//

}

/* End of file m_priv.php */
/* Location: ./application/models/m_priv.php */