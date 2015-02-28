<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * common model
 *
 * This model serves to give basic public informations to controller
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */
class M_common extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	
	function organisation_info() // returns organisation/institute's basic information
	{
		$qry_org = $this->db->get_where('organisation', array('id'=>1));
		
		if($qry_org->num_rows()>0)
		{
			// yes we got org. info 
			$qry_org_res = $qry_org->row();
			
			$data['org_name']		 = $qry_org_res->name;
			$data['org_type']		 = $qry_org_res->type;
			$data['org_branch']		 = $qry_org_res->branch;
			$data['org_address']	 = $qry_org_res->address;
			$data['org_phone'] 		 = $qry_org_res->phone;
			$data['org_mobile']		 = $qry_org_res->mobile;
			$data['org_email'] 		 = $qry_org_res->email;
			$data['org_website']	 = $qry_org_res->website;
			$data['org_dialog'] 	 = $qry_org_res->dialog;
			
			return $data;					
		}
		else
		{
			//sorry failed to retrive org. info			
			$data['org_name']		 = '___Royal Technology___';
			$data['org_type']		 = '___Royal Technology___';
			$data['org_branch']		 = '___Royal Technology___';
			$data['org_address']	 = '___Royal Technology___';
			$data['org_phone'] 		 = '___Royal Technology___';
			$data['org_mobile']		 = '___Royal Technology___';
			$data['org_email'] 		 = '___Royal Technology___';
			$data['org_website']	 = '___Royal Technology___';
			$data['org_dialog'] 	 = '___Royal Technology___';			
			
			return $data;			
		}
	}
	
	function get_username_by_id($user_id) // returns username by given id
	{
		if($user_id!=0)
		return strtoupper($this->db->get_where('users', array('id'=>$user_id))->row()->username);
		else
		return '';
	}
	
	function get_groupname_by_id($group_id) // returns group name by given id
	{
		if($group_id!=0)
		return strtoupper($this->db->get_where('groups', array('id'=>$group_id))->row()->name);
		else
		return '';
	}
	
	function get_module_name_by_id($module_id)  // returns module name by given id
	{
		if($module_id!=0)
		return '<strong>'.strtoupper($this->db->get_where('modules', array('id'=>$module_id))->row()->name).'('.$module_id.')</strong>';
		else
		return '';
	}
	
	function get_feature_name_by_id($feature_id)  // returns feature name by given id
	{
		if($feature_id!=0)
		return '<strong>'.strtoupper($this->db->get_where('features', array('id'=>$feature_id))->row()->name).'('.$feature_id.')</strong>';
		else
		return '';
	}
	
	function get_groups_by_user($user_id) // returns groups_by_user by given id as group txt with link
	{
		$qry = $this->db->get_where('user_group_map', array('user_id'=>$user_id));
		
		$groups = '';
		
		if($qry->num_rows()>0)
		{			
			foreach($qry->result() as $qry_group)
			{
				$data = $this->m_admin->group_by_id($qry_group->group_id);
				$groups.= '<a style=" text-decoration:underline;" href="'.base_url().'admin/group">'.$data['qry_row']->name.'</a><br />';
			}
			
			return $groups;
		}
		else
		return $groups;;
	}
	
	function status_text($status) // return status text
	{
		if($status==1) return '<span style="color:green;">Enable</span>'; else return '<span style="color:red;">Disable</span>';
	}
	
	function banned_text($status) // return banned text
	{
		if($status==1) return '<span style="color:red;">Banned</span>'; else return '<span style="color:green;">Not Banned</span>';
	}
	
	function ban_user($user, $cause) // when unauthorised module/feature access occur then this function will ban user
	{
		$data = array(
						'banned' 		=> 1,
						'ban_reason'	=> $cause
						
					);
		$this->db->where('id', $user);
		$this->db->update('users', $data);
		redirect('/auth/logout/');
	}
	
	function all_active_tbl_data_($tbl_name) // returns all table fields which has status 1, by given table name
	{
		$qry = $this->db->get_where($tbl_name, array('status'=>1));
		if($qry->num_rows()>0)
		{
			return $qry->result();
		}
		else
		return NULL;
	}
	
	function get_medium_name_by_id($medium_id)  // returns medium name by given id
	{
		if($medium_id!=0)
		return '<strong>'.strtoupper($this->db->get_where('medium', array('id'=>$medium_id))->row()->name).'</strong>';
		else
		return '';
	}
	
	function get_shift_name_by_id($shift_id)  // returns shift name by given id
	{
		if($shift_id!=0)
		return '<strong>'.strtoupper($this->db->get_where('shift', array('id'=>$shift_id))->row()->name).'</strong>';
		else
		return '';
	}
	
	function get_version_name_by_id($version_id)  // returns version name by given id
	{
		if($version_id!=0)
		return '<strong>'.strtoupper($this->db->get_where('version', array('id'=>$version_id))->row()->name).'</strong>';
		else
		return '';
	}
	
	function get_class_name_by_id($class_id)  // returns class name by given id
	{
		if($class_id!=0)
		return '<strong>'.strtoupper($this->db->get_where('class', array('id'=>$class_id))->row()->name).'</strong>';
		else
		return '';
	}
	
	function get_dept_name_by_id($dept_id)  // returns dept name by given id
	{
		if($dept_id!=0)
		return '<strong>'.strtoupper($this->db->get_where('dept', array('id'=>$dept_id))->row()->name).'</strong>';
		else
		return '';
	}
	
	function get_section_name_by_id($section_id)  // returns section name by given id
	{
		if($section_id!=0)
		return '<strong>'.strtoupper($this->db->get_where('section', array('id'=>$section_id))->row()->name).'</strong>';
		else
		return '';
	}
	
	function get_year_season_name_by_id($year_season_id)  // returns year_season name by given id
	{
		if($year_season_id!=0)
		return '<strong>'.strtoupper($this->db->get_where('year_season', array('id'=>$year_season_id))->row()->year).'</strong>';
		else
		return '';
	}
	
	function get_year_season_name_by_edu_struct_id($edu_struct_id)
	{
		if($edu_struct_id!=0)
		return '<strong>'.strtoupper($this->db->get_where('year_season', array('id'=>$this->db->get_where('edu_struct', array('id'=>$edu_struct_id))->row()->year_season_id))->row()->year).'</strong>';
		else
		return '';
	}
	
	function get_edu_struct_by_id($edu_struct_id)
	{
		$qry_row = $this->db->get_where('edu_struct', array('id'=>$edu_struct_id))->row();
		$edu_struct = $this->get_medium_name_by_id($qry_row->medium_id).', '.$this->get_version_name_by_id($qry_row->version_id).'  Version, '.$this->get_shift_name_by_id($qry_row->shift_id).' Shift';
		
		return $edu_struct;	
	}
	
	function get_active_class_structure_by_std_id($std_id)
	{
		$data = '';
		
		$qry_class_std_map = $this->db->get_where('class_struct_std_map', array('std_id'=>$std_id, 'status'=>1));
		
		if($qry_class_std_map->num_rows()>0)
		{
			$class_struct_id = $qry_class_std_map->row()->class_struct_id;
			
			$qry_class_struct_res =  $this->db->get_where('class_struct', array('id'=>$class_struct_id))->row();
			
			$data.= '<h4>Class: '.$this->get_class_name_by_id($qry_class_struct_res->class_id).', Section: '.$this->get_section_name_by_id($qry_class_struct_res->section_id).', Dept: '.$this->get_dept_name_by_id($qry_class_struct_res->dept_id).' </h4>';
			
			$data.= '<h5>'.$this->get_edu_struct_by_id($qry_class_struct_res->edu_struct_id).', Year: '.$this->get_year_season_name_by_edu_struct_id($qry_class_struct_res->edu_struct_id).'</h5>';	
			
			return $data;

		}
		
		
	}
	
}

/* End of file m_common.php */
/* Location: ./application/models/m_common.php */