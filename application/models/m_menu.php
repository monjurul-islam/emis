<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * menu model
 *
 * This model serves to calculate menu itms
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */
 
class M_menu extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	
	
	///===============================================================================================================================//
	///=====================================================Utilitu Funtions ==========================================================================//
	///===============================================================================================================================//
	function get_module_name_by_id($module_id)  // returns module name by given id
	{
		if($module_id!=0)
		return $this->db->get_where('modules', array('id'=>$module_id))->row()->name;
		else
		return '';
	}
	
	function get_feature_name_by_id($feature_id)  // returns feature name by given id
	{
		if($feature_id!=0)
		return $this->db->get_where('features', array('id'=>$feature_id))->row()->name;
		else
		return '';
	}
	
	function get_module_url_by_id($module_id)  // returns module url by given id
	{
		if($module_id!=0)
		return $this->db->get_where('modules', array('id'=>$module_id))->row()->url_alias;
		else
		return '';
	}
	
	function get_feature_url_by_id($feature_id)  // returns feature url by given id
	{
		if($feature_id!=0)
		return $this->db->get_where('features', array('id'=>$feature_id))->row()->url_alias;
		else
		return '';
	}
	
	///===============================================================================================================================//
	///===================================================Utility functions end=============================================================//
	///===============================================================================================================================//
	
	function menu($user_id) // returns menu as per user privileges
	{
		
		$menu = '';
		
		if($this->tank_auth->is_logged_in())
		{
			$modules = $this->m_priv->get_user_wise_modules($user_id);
			
			foreach($modules as $mo)
			{
				$menu.= '<ul class="nav navbar-nav">';
				$menu.= '	<li class="dropdown"> <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">'.$this->get_module_name_by_id($mo).'<span class="caret"></span></a>';			
				
				$features = $this->m_priv->get_module_wise_features_by_user($user_id, $mo);
				
				if(sizeof($features)>0)
				{
					$menu.='		<ul role="menu" class="dropdown-menu">';
					foreach($features as $fe)
					{
						$menu.= '			<li ><a  href="'.base_url().$this->get_module_url_by_id($mo).'/'.$this->get_feature_url_by_id($fe).'"><strong>'.$this->get_feature_name_by_id($fe).'</strong></a></li>';
					}
					$menu.= '		</ul>';
				}	
				
				$menu.='	</li>
					  	</ul>';
			}
		}
		else
		{
			redirect('/auth/logout/');
		}
		
		return $menu;
	}
	
	function sup_menu() // returns menu for superadmin
	{
		$menu = '';
				
		if($this->tank_auth->is_logged_in() && $this->tank_auth->get_user_id()==1)
		{
			$menu.= ' <ul class="nav navbar-nav">
						<li class="dropdown"> <a style="color:palegoldenrod;" aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">'.strtoupper($this->tank_auth->get_username()).'<span class="caret"></span></a>
						  <ul role="menu" class="dropdown-menu">
							<li ><a style=" color:sienna;" href="'.base_url().'admin/user"><strong>Manage Users</strong></a></li>
							<li ><a style=" color:sienna;" href="'.base_url().'admin/group"><strong>Manage Groups</strong></a></li>
							<li ><a style=" color:sienna;" href="'.base_url().'admin/module"><strong>Manage Modules</strong></a></li>
							<li ><a style=" color:sienna;" href="'.base_url().'admin/feature"><strong>Manage Features</strong></a></li>
							<li ><a style=" color:sienna;" href="'.base_url().'organisation"><strong>Organisation Info</strong></a></li>
						  </ul>
						</li>
					  </ul>';
		}
		else
		{
			redirect('/auth/logout/');
		}
		
		return $menu;
	}
	
	
	function side_menu() // returns menu as per user privileges
	{		
		$side_menu = '';
		
		if($this->tank_auth->is_logged_in())
		{
			$side_menu .= '';			
		}
		else
		{
			redirect('/auth/logout/');
		}
		
		if($this->tank_auth->get_user_id()==1)
		{
			// user is super level admin
			$side_menu .= $this->sup_menu();
		}
		
		return $side_menu;
	}
	
}

/* End of file m_menu.php */
/* Location: ./application/models/public/m_menu.php */