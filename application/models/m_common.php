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
	
	function get_username_by_id($user_id)
	{
		if($user_id!=0)
		return $this->db->get_where('users', array('id'=>$user_id))->row()->username;
	}
	
	function status_text($status)
	{
		if($status==1) return '<span style="color:green;">Active</span>'; else return '<span style="color:red;">Disabled</span>';
	}
	
}

/* End of file m_common.php */
/* Location: ./application/models/m_common.php */