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
	
	function menu() // returns menu as per user privileges
	{
		
		$menu = '';
		
		if($this->tank_auth->is_logged_in())
		{
			$menu .= '<ul class="nav navbar-nav">
						<li class="dropdown"> <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Profile<span class="caret"></span></a>
						  <ul role="menu" class="dropdown-menu">
							<li ><a  href="'.base_url().'user"><strong>Manage Users</strong></a></li>
							<li ><a  href="'.base_url().'group"><strong>Manage Groups</strong></a></li>
							<li ><a  href="'.base_url().'module"><strong>Manage Modules</strong></a></li>
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
	
	function sup_menu() // returns menu for superadmin
	{
		$menu = '';
				
		if($this->tank_auth->is_logged_in() && $this->tank_auth->get_user_id()==1)
		{
			$menu.= ' <ul class="nav navbar-nav">
						<li class="dropdown"> <a style="color:palegoldenrod;" aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">'.strtoupper($this->tank_auth->get_username()).'<span class="caret"></span></a>
						  <ul role="menu" class="dropdown-menu">
							<li ><a style=" color:sienna;" href="'.base_url().'user"><strong>Manage Users</strong></a></li>
							<li ><a style=" color:sienna;" href="'.base_url().'admin/group"><strong>Manage Groups</strong></a></li>
							<li ><a style=" color:sienna;" href="'.base_url().'admin/module"><strong>Manage Modules</strong></a></li>
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

/* End of file m_common.php */
/* Location: ./application/models/public/m_common.php */