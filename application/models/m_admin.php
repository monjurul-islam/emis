<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * admin model
 *
 * This model is only for superadmin
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */
 
class M_admin extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		
		if($this->tank_auth->get_user_id()!=1)
		{
			redirect('/auth/logout/');
		} 
	}
	
		//---------------- area started for module management --------------------------//

	function modules()
	{		
		$qry = $this->db->get('modules');
		
		if($qry->num_rows()>0)
		{
			$data['qry_success'] = 1;
			$data['qry_result']  = $qry->result();
		}
		else
		{
			$data['qry_success'] = 0;
		}
		
		return $data;
	}
	
	function module_by_id($id)
	{
		$qry = $this->db->get_where('modules', array('id'=>$id));
		
		if($qry->num_rows()>0)
		{
			$data['qry_success'] = 1;
			$data['qry_row']  = $qry->row();
		}
		else
		{
			$data['qry_success'] = 0;
		}
		
		return $data;
	}
	
	function add_module()
	{
		$data = array(
						'name'			=> $this->input->post('name'),
						'type'			=> $this->input->post('type'),
						'url_alias'		=> $this->input->post('url_alias'),
						'status'		=> $this->input->post('status'),
						'created_by'	=> $this->tank_auth->get_user_id(),
						'created_dt'	=> date("Y-m-d H:i:s")
					);					
			
		if($this->db->insert('modules', $data))
		{
			$data = $this->module_by_id($this->db->insert_id());
			
			return $data;
		}
		else
		{
			return FALSE;
		}
	}
	
	function update_module()
	{
		$data = array(
						'name'			=> $this->input->post('name'),
						'type'			=> $this->input->post('type'),
						'url_alias'		=> $this->input->post('url_alias'),
						'status'		=> $this->input->post('status'),
						'modified_by'	=> $this->tank_auth->get_user_id(),
					);						
		if($this->input->post('id')!="")
		{
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('modules', $data);
			
			$data = $this->module_by_id($this->input->post('id'));
			
			return $data;
		}
		else
		{
			return FALSE;
		}
	}
	
	//---------------------------------- area end for module management --------------------------------------------//
	
	//-----------------------------------******************************---------------------------------------------//
	
	//---------------- area started for feature management --------------------------//

	function features()
	{		
		$qry = $this->db->get('features');
		
		if($qry->num_rows()>0)
		{
			$data['qry_success'] = 1;
			$data['qry_result']  = $qry->result();
		}
		else
		{
			$data['qry_success'] = 0;
		}
		
		return $data;
	}
	
	function feature_by_id($id)
	{
		$qry = $this->db->get_where('features', array('id'=>$id));
		
		if($qry->num_rows()>0)
		{
			$data['qry_success'] = 1;
			$data['qry_row']  = $qry->row();
			$data['qry_modules']  = $this->modules();
			
		}
		else
		{
			$data['qry_success'] = 0;
		}
		
		return $data;
	}
	
	function add_feature()
	{
		$data = array(
						'module_id'		=> $this->input->post('module_id'),
						'name'			=> $this->input->post('name'),
						'url_alias'		=> $this->input->post('url_alias'),
						'status'		=> $this->input->post('status'),
						'created_by'	=> $this->tank_auth->get_user_id(),
						'created_dt'	=> date("Y-m-d H:i:s")
					);					
			
		if($this->db->insert('features', $data))
		{
			$data = $this->feature_by_id($this->db->insert_id());
			
			return $data;
		}
		else
		{
			return FALSE;
		}
	}
	
	function update_feature()
	{
		$data = array(
						'name'			=> $this->input->post('name'),
						'type'			=> $this->input->post('type'),
						'url_alias'		=> $this->input->post('url_alias'),
						'status'		=> $this->input->post('status'),
						'modified_by'	=> $this->tank_auth->get_user_id(),
					);						
		if($this->input->post('id')!="")
		{
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('features', $data);
			
			$data = $this->feature_by_id($this->input->post('id'));
			
			return $data;
		}
		else
		{
			return FALSE;
		}
	}
	
	//---------------------------------- area end for feature management --------------------------------------------//
	
	//-----------------------------------******************************---------------------------------------------//
	
	
	//---------------- area started for group management --------------------------//

	function groups()
	{	
	
		$qry = $this->db->get('groups');
		
		if($qry->num_rows()>0)
		{
			$data['qry_success'] = 1;
			$data['qry_result']  = $qry->result();
		}
		else
		{
			$data['qry_success'] = 0;
		}
		
		return $data;
	}
	
	function group_by_id($id)
	{
		$qry = $this->db->get_where('groups', array('id'=>$id));
		
		if($qry->num_rows()>0)
		{
			$data['qry_success'] = 1;
			$data['qry_row']  = $qry->row();
		}
		else
		{
			$data['qry_success'] = 0;
		}
		
		return $data;
	}
	
	function add_group()
	{
		$data = array(
						'name'			=> $this->input->post('name'),
						'type'			=> $this->input->post('type'),
						'status'		=> $this->input->post('status'),
						'created_by'	=> $this->tank_auth->get_user_id(),
						'created_dt'	=> date("Y-m-d H:i:s")
					);					
			
		if($this->db->insert('groups', $data))
		{
			$data = $this->group_by_id($this->db->insert_id());
			
			return $data;
		}
		else
		{
			return FALSE;
		}
	}
	
	function update_group()
	{
		$data = array(
						'name'			=> $this->input->post('name'),
						'type'			=> $this->input->post('type'),
						'status'		=> $this->input->post('status'),
						'modified_by'	=> $this->tank_auth->get_user_id(),
					);						
		if($this->input->post('id')!="")
		{
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('groups', $data);
						
			return $data;
		}
		else
		{
			return FALSE;
		}
	}
	
	function groups_by_user_id($id)
	{
		$this->db->select('group_id');
		$qry = $this->db->get_where('user_group_map', array('user_id'=>$id));
		if($qry->num_rows()>0)
		{
			$data['qry_success'] = 1;
			$data['qry_result']  = $qry->result();
		}
		else
		{
			$data['qry_success'] = 0;
		}
		
		return $data;

	}
	
	//---------------------------------- area end for group management --------------------------------------------//
	
	//-----------------------------------******************************---------------------------------------------//
	
	//---------------- area started for user management --------------------------//

	function users()
	{		
		$qry = $this->db->get('users');
		
		if($qry->num_rows()>0)
		{
			$data['qry_success'] = 1;
			$data['qry_result']  = $qry->result();
		}
		else
		{
			$data['qry_success'] = 0;
		}
		
		return $data;
	}
	
	function user_by_id($id)
	{
		$qry = $this->db->get_where('users', array('id'=>$id));
		
		if($qry->num_rows()>0)
		{
			$data['qry_success'] 	= 1;
			$data['qry_row']  		= $qry->row();
			
			$data['groups']			= $this->groups();
			$data['user_groups']	= $this->groups_by_user_id($id);			
		}
		else
		{
			$data['qry_success'] = 0;
		}
		
		return $data;
	}
	
	
	
	
	function add_user()
	{
		if (!is_null($this->tank_auth->create_user_($this->input->post('username'), $this->input->post('email'), $this->input->post('password'), FALSE)))
		{
			$inserted_user_id = $this->db->insert_id();
			
			$data_group = $this->groups();
			
			foreach($data_group['qry_result'] as $groups)
			{
				
				if($this->input->post('group_'.$groups->id))
				{
					$data_group = array(
											'user_id'			=> $inserted_user_id,
											'group_id'			=> $groups->id,
											'created_by'		=> $this->tank_auth->get_user_id(),
											'created_dt'		=> date("Y-m-d H:i:s")
										);
					
					$this->db->insert('user_group_map', $data_group);
				}
			}
			$data = $this->user_by_id($inserted_user_id);
		}
		else
		{
			$data['qry_success'] = 0;
		}
		
		return $data;
	}
	
	function update_user()
	{
		$data = array(
						'username'		=> $this->input->post('username'),
						'email'			=> $this->input->post('email'),
						'password'		=> $this->tank_auth_rasel->hash_password($this->input->post('password')),
						'banned'		=> $this->input->post('status'),
						'modified_by'	=> $this->tank_auth->get_user_id(),
					);						
		if($this->input->post('id')!="")
		{
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('users', $data);
			
			$data_group = $this->groups();
			
			$this->db->where('user_id', $this->input->post('id'));
			$this->db->delete('user_group_map');
			
			foreach($data_group['qry_result'] as $groups)
			{				
				if($this->input->post('group_'.$groups->id))
				{
					$data_group = array(
											'user_id'			=> $this->input->post('id'),
											'group_id'			=> $groups->id,
											'created_by'		=> $this->tank_auth->get_user_id(),
											'created_dt'		=> date("Y-m-d H:i:s")
										);
					
					$this->db->insert('user_group_map', $data_group);
				}
			}
			
			
			$data = $this->user_by_id($this->input->post('id'));
			
			return $data;
		}
		else
		{
			$data['qry_success'] = 0;
			return $data;
		}
	}
	
	//---------------------------------- area end for user management --------------------------------------------//
	
		//---------------------------------- area Started for user privileges management --------------------------------------------//
	
	function user_privileges($user_id)
	{
		$data['qry_modules'] = $this->db->get_where('modules', array('status'=>1));
		$data['user_id']	 = $user_id;
		
		if($qry_priv = $this->db->get_where('module_user_map', array('user_id'=>$user_id))->num_rows()>0)
		{
			$privileged_modules = array();

			foreach($qry_priv->result() as $qry_priv_res)
			{
				$privileged_modules[] = $qry_priv_res->module_id;
			}
			$data['privileged_modules'] = $privileged_modules;
			
			return $data;			
		}
		else
		{
			$data['privileged_modules'] = 0;
			return $data;
		}
	}
	
	
}

/* End of file m_admin.php */
/* Location: ./application/models/public/m_admin.php */