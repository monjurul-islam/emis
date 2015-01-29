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
			
			$data = $this->group_by_id($this->input->post('id'));
			
			return $data;
		}
		else
		{
			return FALSE;
		}
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
			$data['qry_success'] = 1;
			$data['qry_row']  = $qry->row();
		}
		else
		{
			$data['qry_success'] = 0;
		}
		
		return $data;
	}
	
	function add_user()
	{
		
		if (!is_null($user_data['qry_data'] = $this->tank_auth->create_user_($this->input->post('username'), $this->input->post('email'), $this->input->post('password'), FALSE)))
		{
			$user_data['qry_success'] = 1;
		}
		else
		{
			$user_data['qry_success'] = 0;
		}
		
		return $user_data;
		
		/*$data = array(
						'username'			=> $this->input->post('username'),
						'email'			=> $this->input->post('email'),
						'password'			=> $this->input->post('password'),
						'status'		=> $this->input->post('status'),
						'created_by'	=> $this->tank_auth->get_user_id(),
						'created'	=> date("Y-m-d H:i:s")
					);		*/			
			
		/*if($this->db->insert('users', $data))
		{
			$data = $this->user_by_id($this->db->insert_id());
			
			return $data;
		}
		else
		{
			return FALSE;
		}*/
	}
	
	function update_user()
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
			$this->db->update('users', $data);
			
			$data = $this->user_by_id($this->input->post('id'));
			
			return $data;
		}
		else
		{
			return FALSE;
		}
	}
	
	//---------------------------------- area end for user management --------------------------------------------//
	
	
	
	
}

/* End of file m_admin.php */
/* Location: ./application/models/public/m_admin.php */