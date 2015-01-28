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
						'created_dt'	=> $this->input->post('url_alias')
					);					
			
		if($this->db->insert('modules', $data))
		{
			$data['id'] = $this->db->insert_id();
			
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
						'created_by'	=> $this->tank_auth->get_user_id(),
						'created_dt'	=> $this->input->post('url_alias')
					);						
		if($this->input->post('id')!="")
		{
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('modules', $data);
			
			$data['id'] = $this->input->post('id');
			
			return $data;
		}
		else
		{
			return FALSE;
		}
	}
	
	
	
}

/* End of file m_admin.php */
/* Location: ./application/models/public/m_admin.php */