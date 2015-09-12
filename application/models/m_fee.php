<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * fee model
 *
 * This model serves for fee module
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */
class M_fee extends CI_Model
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

	
	function configure_side_menu() // returns menu for student module
	{
		$menu = '';
				
		if($this->tank_auth->is_logged_in())
		{
			$menu.= '
					 <a class="btn btn-link" href="'.base_url().'fee/waiver_configure"><strong>Waiver Config.</strong></a>
					 <a  class="btn btn-link" href="'.base_url().'fee/installment_config"><strong>Installment Config.</strong></a>
					';
		}
		else
		{
			redirect('/auth/logout/');
		}
		
		return $menu;
	}
	
}

/* End of file m_fee.php */
/* Location: ./application/models/m_fee.php */