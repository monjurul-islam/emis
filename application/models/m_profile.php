<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * profile model
 *
 * This model serves for profile module
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */
class M_profile extends CI_Model
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
	
	
	///------------------------------------------------ Configuration ----------------------------------------------------//

	
	function conf_side_menu() // returns menu for configuration panel
	{
		$menu = '';
				
		if($this->tank_auth->is_logged_in())
		{
			$menu.= '<a  class="btn btn-link" href="'.base_url().'profile/edu_struct"><strong>Education Structure</strong></a>';
			$menu.= '<a  class="btn btn-link" href="'.base_url().'profile/class_struct"><strong>Class Structure</strong></a>';
		}
		else
		{
			redirect('/auth/logout/');
		}
		
		return $menu;
	}
	
	function edu_struct()
	{
		$qry = $this->db->get('edu_struct');
		
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
	
	function edu_struct_by_id($id)
	{
		$qry = $this->db->get_where('edu_struct', array('id'=>$id));
		
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
	
	function add_edu_struct()
	{
		$data = array(
						'year_season_id'	=> $this->input->post('year_season'),
						'medium_id'			=> $this->input->post('medium'),
						'shift_id'			=> $this->input->post('shift'),
						'version_id'		=> $this->input->post('version'),
						'status'			=> $this->input->post('status'),
						'created_by'		=> $this->tank_auth->get_user_id(),
						'created_dt'		=> date("Y-m-d H:i:s")
					);					
			
		if($this->db->insert('edu_struct', $data))
		{
			$data = $this->edu_struct_by_id($this->db->insert_id());
			
			return $data;
		}
		else
		{
			return FALSE;
		}
	}
	
	function update_edu_struct()
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
			$this->db->update('edu_struct', $data);
			
			$data = $this->edu_struct_by_id($this->input->post('id'));
			
			return $data;
		}
		else
		{
			return FALSE;
		}
	}
	
			//===========================================================//
			
	function class_struct()
	{
		$qry = $this->db->get('class_struct');
		
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
	
	function class_struct_by_id($id)
	{
		$qry = $this->db->get_where('class_struct', array('id'=>$id));
		
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
	
	
	function add_class_struct()
	{
		$data = array(
						'edu_struct_id'		=> $this->input->post('edu_struct'),
						'class_id'			=> $this->input->post('class'),
						'dept_id'			=> $this->input->post('dept'),
						'section_id'		=> $this->input->post('section'),
						'status'			=> $this->input->post('status'),
						'created_by'		=> $this->tank_auth->get_user_id(),
						'created_dt'		=> date("Y-m-d H:i:s")
					);					
			
		if($this->db->insert('class_struct', $data))
		{
			$data = $this->class_struct_by_id($this->db->insert_id());
			
			return $data;
		}
		else
		{
			return FALSE;
		}
	}
	
	
	
	///-------------------------------------------------End Configuration -------------------------------------------------///
	///-------------------------------------------------End Configuration -------------------------------------------------///
	///-------------------------------------------------End Configuration -------------------------------------------------///
	
	
	function std_side_menu() // returns menu for student module
	{
		$menu = '';
				
		if($this->tank_auth->is_logged_in())
		{
			$menu.= '
					 <a  class="btn btn-link" href="'.base_url().'profile/add_student"><strong>Add Student</strong></a>
					 <a  class="btn btn-link" href="'.base_url().'profile/add_student"><strong>Search Student</strong></a>
					 <a  class="btn btn-link" href="'.base_url().'profile/add_student"><strong>Reports</strong></a>
					';
		}
		else
		{
			redirect('/auth/logout/');
		}
		
		return $menu;
	}
	
	
	
}

/* End of file m_profile.php */
/* Location: ./application/models/m_profile.php */