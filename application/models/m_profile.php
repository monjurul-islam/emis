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
	
	///------------------------------------------------ Student ----------------------------------------------------//
		
	//--------------------------------------- image uploader helper function -------------------------------------//
	
	function pic_upload( $file_name, $pic_new_name )
	{	
		
		$config_std['upload_path'] = './assets/pic/';
		$config_std['allowed_types'] = 'gif|jpg|png';
		$config_std['file_name'] = $pic_new_name.'.png' ;
		//$config_std['overwrite'] = 'TRUE';		

		$this->load->library('upload', $config_std);
		if ( ! $this->upload->do_upload($file_name))
		{
			//echo print_r(array('error' => $this->upload->display_errors()));
		}
		else
		{
			$upolad_data = $this->upload->data();
			return $upolad_data['file_name'];
		}
	}
	
	function add_new_student()
	{		
		$std_pref_id = $this->generate_std_id($this->input->post('gender'),  date("y", mktime($this->input->post('year_season'))));			
		$std_pic   = $this->pic_upload('std_pic',  $std_pref_id);
		$m_pic     = $this->pic_upload('f_pic',	   $std_pref_id);
	    $f_pic     = $this->pic_upload('m_pic',    $std_pref_id);
		$gur_1_pic = $this->pic_upload('g_1_pic',  $std_pref_id);
		
		$data = array(
						'std_id'  					 => $std_pref_id,
						'name'  					 => $this->input->post('name') ,
						'name_in_bangla'		     => $this->input->post('name_in_bangla') ,
						'rfid_no'					 => $this->input->post('rfid_no') ,
						'dob'  						 => $this->input->post('dob') ,
						'age'  						 => $this->input->post('age') ,
						'gender'  					 => $this->input->post('gender') ,
						'blood'  					 => $this->input->post('blood') ,
						'nationality'  				 => $this->input->post('nationality') ,
						'religion'  				 => $this->input->post('religion') ,
						'present_address'   		 => $this->input->post('present_address') ,
						'permanent_address'  		 => $this->input->post('permanent_address') ,
						'admission_requested_for'  	 => $this->input->post('admission_requested_for') ,
						'adm_written_mark' 			 => $this->input->post('adm_written_mark') ,
						'adm_student_viva_mark' 	 => $this->input->post('adm_student_viva_mark') ,
						'adm_parents_viva_mark'  	 => $this->input->post('adm_parents_viva_mark') ,
						'adm_medical_test_mark'   	 => $this->input->post('adm_medical_test_mark') ,
						'adm_physical_test_mark'   	 => $this->input->post('adm_physical_test_mark') ,
						'adm_total_mark'   			 => $this->input->post('adm_total_mark') ,
						'adm_outof_mark'   			 => $this->input->post('adm_outof_mark') ,
						'adm_fee'  					 => $this->input->post('adm_fee') ,
						'adm_prime_bank_branch'  	 => $this->input->post('adm_prime_bank_branch') ,
						'adm_date'  				 => $this->input->post('adm_date') ,
						'previous_school'   		 => $this->input->post('previous_school') ,
						'previous_school_address'    => $this->input->post('previous_school_address') ,
						'previous_school_phone'      => $this->input->post('previous_school_phone') ,
						'previous_school_email'  	 => $this->input->post('previous_school_email') ,
						'previous_school_last_class' => $this->input->post('previous_school_last_class') ,
						'previous_school_result'  	 => $this->input->post('previous_school_result') ,
						'std_pic'  					 => $std_pic,
						'f_name'  					 => $this->input->post('f_name') ,
						'f_pic'  					 => $f_pic,
						'f_name_in_bangla' 			 => $this->input->post('f_name_in_bangla') ,
						'f_nationality'   			 => $this->input->post('f_nationality') ,
						'f_national_id'  			 => $this->input->post('f_national_id') ,
						'f_religion'  				 => $this->input->post('f_religion') ,
						'f_edu_quali'  				 => $this->input->post('f_edu_quali') ,
						'f_profession'  			 => $this->input->post('f_profession') ,
						'f_organisation'  			 => $this->input->post('f_organisation') ,
						'f_designation' 			 => $this->input->post('f_designation') ,
						'f_income'  				 => $this->input->post('f_income') ,
						'f_present_address'  		 => $this->input->post('f_present_address') ,
						'f_permanent_address'  		 => $this->input->post('f_permanent_address') ,
						'f_phone'  					 => $this->input->post('f_phone') ,
						'f_mobile'  				 => $this->input->post('f_mobile') ,
						'f_email'  					 => $this->input->post('f_email') ,
						'f_blood'  					 => $this->input->post('f_blood') ,
						'm_name'   					 => $this->input->post('m_name') ,
						'm_pic'  					 => $m_pic ,
						'm_name_in_bangla'  		 => $this->input->post('m_name_in_bangla') ,
						'm_nationality'  			 => $this->input->post('m_nationality') ,
						'm_national_id' 			 => $this->input->post('m_national_id') ,
						'm_religion'   				 => $this->input->post('m_religion') ,
						'm_edu_quali'   			 => $this->input->post('m_edu_quali') ,
						'm_profession' 			     => $this->input->post('m_profession') ,
						'm_organisation' 			 => $this->input->post('m_organisation') ,
						'm_designation'  			 => $this->input->post('m_designation') ,
						'm_income'  				 => $this->input->post('m_income') ,
						'm_present_address'  		 => $this->input->post('m_present_address') ,
						'm_permanent_address' 		 => $this->input->post('m_permanent_address') ,
						'm_phone'  					 => $this->input->post('m_phone') ,
						'm_mobile' 					 => $this->input->post('m_mobile') ,
						'm_email'  					 => $this->input->post('m_email') ,
						'm_blood' 					 => $this->input->post('m_blood') ,
						'g_1_name'  				 => $this->input->post('g_1_name') ,
						'g_1_pic'  					 => $gur_1_pic ,
						'g_1_name_in_bangla'   		 => $this->input->post('g_1_name_in_bangla') ,
						'g_1_relation'   			 => $this->input->post('g_1_relation') ,
						'g_1_national_id'   		 => $this->input->post('g_1_national_id') ,
						'g_1_profession'			 => $this->input->post('g_1_profession') ,
						'g_1_address'   			 => $this->input->post('g_1_address') ,
						'g_1_phone'  				 => $this->input->post('g_1_phone') ,
						'g_1_mobile'   => $this->input->post('g_1_mobile') ,
						'g_1_email'   => $this->input->post('g_1_email') ,
						'g_1_blood'   => $this->input->post('g_1_blood') ,
						'g_2_name'   => $this->input->post('g_2_name') ,
						'g_2_name_in_bangla'   => $this->input->post('g_2_name_in_bangla') ,
						'g_2_relation'   => $this->input->post('g_2_relation') ,
						'g_2_national_id'   => $this->input->post('g_2_national_id') ,
						'g_2_profession'   => $this->input->post('g_2_profession') ,
						'g_2_address'   => $this->input->post('g_2_address') ,
						'g_2_phone'   => $this->input->post('g_2_phone') ,
						'g_2_mobile'   => $this->input->post('g_2_mobile') ,
						'g_2_email'   => $this->input->post('g_2_email') ,
						'g_2_blood'   => $this->input->post('g_2_blood') ,
						'status'				=> 1,
						'created_by'			=> $this->tank_auth->get_user_id(),
						'created_dt'			=> date("Y-m-d H:i:s")
					);
			
			if( $this->input->post('class_struct') && $this->input->post('class_struct')!=NULL && $this->input->post('name') && $this->input->post('name')!=NULL )
			{
				if($this->db->insert('student', $data))
				{
					$this->m_common->activity_log('insert', 'Created New Student ID-'.$std_pref_id.', Name- '.$this->input->post('name')); // inserts into activity log table
					
					$std_insert_id = $this->db->insert_id();
					
					$data_class_map = array(											
											'std_id' 				=> $std_insert_id,
											'class_struct_id' 		=>  $this->input->post('class_struct'),
											'status'				=> 1,
											'created_by'			=> $this->tank_auth->get_user_id(),
											'created_dt'			=> date("Y-m-d H:i:s")											
											);
											
					if($this->db->insert('class_struct_std_map', $data_class_map))
					{
						$this->m_common->activity_log('insert', 'Created New Class Structure for Std ID- '.$std_pref_id.', Name- '.$this->input->post('name')); // inserts into activity log table
						
						$data['id'] = $std_insert_id;						
						$data['qry_success'] = 1;						
						return $data;
					}
				}
				else
				{
					$data['class_struct'] = $this->m_common->get_active_class_structure_by_std_id($std_insert_id);						
					$data['qry_success'] = 0;						
					return $data;
					
				}
			}
			else 
			{
				//$data['class_struct'] = $this->m_common->get_active_class_structure_by_std_id($std_insert_id);						
				$data['qry_success'] = 0;						
				return $data;
			}		
	}
	
	// id generation functions
	private $branch_no  = '01';
	private $year_digit = '15';
	private function generate_std_id($gender, $year)
	{
		$std_id = $this->branch_no.$year;
		
		if($gender=="Male")	$std_id .= '2';
		elseif($gender=="Female") $std_id .= '1';
		else return NULL;		
		
		$query = $this->db->query("SELECT * FROM `student` WHERE `std_id` LIKE '$std_id%'");		
		if ($query->num_rows() > 0)
		{
			$rowcount = $query->num_rows();
			$rowcount++;		
			$c = $this->LPAD( $rowcount, 3, "0");			
			$std_id .= $c;
		}
		else $std_id.="001";
				
		return $std_id;		
	}	
	function LPAD($str, $tlen, $by)
	{
		$len = strlen($str);
		for( $i=$len; $i<$tlen; $i++)
		{
			$str = $by.$str;
		}	
		return $str;
	}
	//--------------------------------------//
	
	
	function update_student()
	{		
		$data = array(
						'name'  					 => $this->input->post('name') ,
						'name_in_bangla'		     => $this->input->post('name_in_bangla') ,
						'rfid_no'					 => $this->input->post('rfid_no') ,
						'dob'  						 => $this->input->post('dob') ,
						'age'  						 => $this->input->post('age') ,
						'gender'  					 => $this->input->post('gender') ,
						'blood'  					 => $this->input->post('blood') ,
						'nationality'  				 => $this->input->post('nationality') ,
						'religion'  				 => $this->input->post('religion') ,
						'present_address'   		 => $this->input->post('present_address') ,
						'permanent_address'  		 => $this->input->post('permanent_address') ,
						'admission_requested_for'  	 => $this->input->post('admission_requested_for') ,
						'adm_written_mark' 			 => $this->input->post('adm_written_mark') ,
						'adm_student_viva_mark' 	 => $this->input->post('adm_student_viva_mark') ,
						'adm_parents_viva_mark'  	 => $this->input->post('adm_parents_viva_mark') ,
						'adm_medical_test_mark'   	 => $this->input->post('adm_medical_test_mark') ,
						'adm_physical_test_mark'   	 => $this->input->post('adm_physical_test_mark') ,
						'adm_total_mark'   			 => $this->input->post('adm_total_mark') ,
						'adm_outof_mark'   			 => $this->input->post('adm_outof_mark') ,
						'adm_fee'  					 => $this->input->post('adm_fee') ,
						'adm_prime_bank_branch'  	 => $this->input->post('adm_prime_bank_branch') ,
						'adm_date'  				 => $this->input->post('adm_date') ,
						'previous_school'   		 => $this->input->post('previous_school') ,
						'previous_school_address'    => $this->input->post('previous_school_address') ,
						'previous_school_phone'      => $this->input->post('previous_school_phone') ,
						'previous_school_email'  	 => $this->input->post('previous_school_email') ,
						'previous_school_last_class' => $this->input->post('previous_school_last_class') ,
						'previous_school_result'  	 => $this->input->post('previous_school_result') ,						
						'f_name'  					 => $this->input->post('f_name') ,
						'f_name_in_bangla' 			 => $this->input->post('f_name_in_bangla') ,
						'f_nationality'   			 => $this->input->post('f_nationality') ,
						'f_national_id'  			 => $this->input->post('f_national_id') ,
						'f_religion'  				 => $this->input->post('f_religion') ,
						'f_edu_quali'  				 => $this->input->post('f_edu_quali') ,
						'f_profession'  			 => $this->input->post('f_profession') ,
						'f_organisation'  			 => $this->input->post('f_organisation') ,
						'f_designation' 			 => $this->input->post('f_designation') ,
						'f_income'  				 => $this->input->post('f_income') ,
						'f_present_address'  		 => $this->input->post('f_present_address') ,
						'f_permanent_address'  		 => $this->input->post('f_permanent_address') ,
						'f_phone'  					 => $this->input->post('f_phone') ,
						'f_mobile'  				 => $this->input->post('f_mobile') ,
						'f_email'  					 => $this->input->post('f_email') ,
						'f_blood'  					 => $this->input->post('f_blood') ,
						'm_name'   					 => $this->input->post('m_name') ,
						'm_name_in_bangla'  		 => $this->input->post('m_name_in_bangla') ,
						'm_nationality'  			 => $this->input->post('m_nationality') ,
						'm_national_id' 			 => $this->input->post('m_national_id') ,
						'm_religion'   				 => $this->input->post('m_religion') ,
						'm_edu_quali'   			 => $this->input->post('m_edu_quali') ,
						'm_profession' 			     => $this->input->post('m_profession') ,
						'm_organisation' 			 => $this->input->post('m_organisation') ,
						'm_designation'  			 => $this->input->post('m_designation') ,
						'm_income'  				 => $this->input->post('m_income') ,
						'm_present_address'  		 => $this->input->post('m_present_address') ,
						'm_permanent_address' 		 => $this->input->post('m_permanent_address') ,
						'm_phone'  					 => $this->input->post('m_phone') ,
						'm_mobile' 					 => $this->input->post('m_mobile') ,
						'm_email'  					 => $this->input->post('m_email') ,
						'm_blood' 					 => $this->input->post('m_blood') ,
						'g_1_name'  				 => $this->input->post('g_1_name') ,
						'g_1_name_in_bangla'   => $this->input->post('g_1_name_in_bangla') ,
						'g_1_relation'   => $this->input->post('g_1_relation') ,
						'g_1_national_id'   => $this->input->post('g_1_national_id') ,
						'g_1_profession'   => $this->input->post('g_1_profession') ,
						'g_1_address'   => $this->input->post('g_1_address') ,
						'g_1_phone'   => $this->input->post('g_1_phone') ,
						'g_1_mobile'   => $this->input->post('g_1_mobile') ,
						'g_1_email'   => $this->input->post('g_1_email') ,
						'g_1_blood'   => $this->input->post('g_1_blood') ,
						'g_2_name'   => $this->input->post('g_2_name') ,
						'g_2_name_in_bangla'   => $this->input->post('g_2_name_in_bangla') ,
						'g_2_relation'   => $this->input->post('g_2_relation') ,
						'g_2_national_id'   => $this->input->post('g_2_national_id') ,
						'g_2_profession'   => $this->input->post('g_2_profession') ,
						'g_2_address'   => $this->input->post('g_2_address') ,
						'g_2_phone'   => $this->input->post('g_2_phone') ,
						'g_2_mobile'   => $this->input->post('g_2_mobile') ,
						'g_2_email'   => $this->input->post('g_2_email') ,
						'g_2_blood'   => $this->input->post('g_2_blood') ,
						'status'				=> 1,
						'modified_by'			=> $this->tank_auth->get_user_id(),
					);
										
			$std_pic   = $this->input->post('std_pic_old');
			$m_pic     = $this->input->post('m_pic_old');
	  		$f_pic     = $this->input->post('f_pic_old');
			$g_1_pic   = $this->input->post('g_1_pic_old');
					
		if (!empty($_FILES['std_pic']['name'])) 
		{	
			echo $_FILES['std_pic']['name'];		
			if($this->input->post('std_pic_old')!=0)
			{
				unlink('./assets/pic/'.$this->input->post('std_pic_old'));
			}
			
			$std_pic   = $this->pic_upload('std_pic',  $this->input->post('std_id'));
			
			//echo $std_pic;			
		}
		if (!empty($_FILES['m_pic']['name'])) 
		{			
			if($this->input->post('m_pic_old')!=0)
			{
				unlink('./assets/pic/'.$this->input->post('m_pic_old'));
			}
			
			$m_pic   = $this->pic_upload('m_pic',  $this->input->post('std_id'));
			
		}
		if (!empty($_FILES['f_pic']['name'])) 
		{			
			if($this->input->post('f_pic_old')!=0)
			{
				unlink('./assets/pic/'.$this->input->post('f_pic_old'));
			}
			
			$f_pic   = $this->pic_upload('f_pic',  $this->input->post('std_id'));
			
		}
		if (!empty($_FILES['g_1_pic']['name'])) 
		{			
			if($this->input->post('g_1_pic_old')!=0)
			{
				unlink('./assets/pic/'.$this->input->post('g_1_pic_old'));
			}
			
			$g_1_pic   = $this->pic_upload('g_1_pic',  $this->input->post('std_id'));			
		}
		
		$data['std_pic']	 = $std_pic;
		$data['m_pic']		 = $m_pic;
		$data['f_pic']		 = $f_pic;
		$data['g_1_pic']	 = $g_1_pic;		
		
		$this->db->where('id', $this->input->post('id') );
		
		if($this->db->update('student', $data))
		{
			$this->m_common->activity_log('update', 'Updated Students Data, ID-'.$this->input->post('std_id').', Name- '.$this->input->post('name')); // inserts into activity log table
			
			$data['id'] = $this->input->post('id');
			$data['std_id'] = $this->input->post('std_id');
			
			if($this->input->post('class_struct')!=NULL || $this->input->post('class_struct')!="")
			{
				$data_stat_dis = array('status'=>0);
				$this->db->where('std_id', $this->input->post('id'));
				$this->db->update('class_struct_std_map', $data_stat_dis);
				
				$this->m_common->activity_log('disable', 'Disabled Class Structure for Std ID- '.$this->input->post('std_id').', Name- '.$this->input->post('name')); // inserts into activity log table
				
				$data_class_map = array(  'std_id' 				=> $this->input->post('id'),
										  'class_struct_id' 	=>  $this->input->post('class_struct'),
										  'status'				=> 1,
										  'created_by'			=> $this->tank_auth->get_user_id(),
										  'created_dt'			=> date("Y-m-d H:i:s")											
										);
				if($this->db->insert('class_struct_std_map', $data_class_map))
				{	
				
					$this->m_common->activity_log('update', 'Updated New Class Structure for Std ID- '.$this->input->post('std_id').', Name- '.$this->input->post('name')); // inserts into activity log table
								
					$data['class_struct'] = $this->m_common->get_active_class_structure_by_std_id($this->input->post('id'));					
					$data['qry_success'] = 1;					
					return $data;
				}
				else 
				{
					$data['class_struct'] = $this->m_common->get_active_class_structure_by_std_id($this->input->post('id'));							
					$data['qry_success'] = 1;							
					return $data;
				}	
			}
			else
			{
				$data['class_struct'] = $this->m_common->get_active_class_structure_by_std_id($this->input->post('id'));						
				$data['qry_success'] = 1;						
				return $data;
			}
		}
		else
		{
			$data['id'] = $this->input->post('id');			
			$data['class_struct'] = $this->m_common->get_active_class_structure_by_std_id($std_insert_id);						
			$data['qry_success'] = 0;
						
			return $data;
		}
			
	}
	
	
	function student_by_id($id)
	{
		$qry = $this->db->get_where('student', array('id'=>$id));
		
		if($qry->num_rows()>0)
		{
			$data['qry_success']	 = 1;
			$data['qry_row'] 		 = $qry->row();
		}
		else
		{
			$data['qry_success'] = 0;
		}
		
		return $data;
	}
	
	function student_id_by_db_id($id)
	{
		$qry = $this->db->get_where('student', array('id'=>$id));
		
		if($qry->num_rows()>0)
		{
			return $qry->row()->std_id;
		}
		else
		{
			return 'Not Found';
		}
		
		return $data;
	}
	
	function all_students()
	{
		$this->db->order_by("std_id", "asc"); 
		$qry = $this->db->get('student');
		
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
	
	function std_side_menu() // returns menu for student module
	{
		$menu = '';
				
		if($this->tank_auth->is_logged_in())
		{
			$menu.= '
					 <a  class="btn btn-link" href="'.base_url().'profile/add_student"><strong>Add Student</strong></a>
					 <a  class="btn btn-link" href="'.base_url().'profile/student_by_class"><strong>Student by Class</strong></a>
					 <a  class="btn btn-link" href="'.base_url().'profile/all_student"><strong>All Students</strong></a>
					';
		}
		else
		{
			redirect('/auth/logout/');
		}
		
		return $menu;
	}
	
	
	
	
	///------------------------------------------------ End Student ----------------------------------------------------//	
	
	///------------------------------------------------ Start Staff ----------------------------------------------------//	
	
	
	function add_new_staff()
	{
		$staff_id  = $this->generate_staff_id($this->input->post('gender'));	
		$staff_pic   = $this->pic_upload('staff_pic',  $staff_id);
		
		$data = array(
						  'staff_type'  => $this->input->post('staff_type') ,
						  'staff_id'  => $staff_id ,
						  'staff_pic'  => $staff_pic,
						  'name'  => $this->input->post('name') ,
						  'dob'  => $this->input->post('dob') ,
						  'age'  => $this->input->post('age') ,
						  'gender'  => $this->input->post('gender') ,
						  'blood'  => $this->input->post('blood') ,
						  'religion'  => $this->input->post('religion') ,
						  'nationality'  => $this->input->post('nationality') ,
						  'national_id'  => $this->input->post('national_id') ,
						  'mobile'  => $this->input->post('mobile') ,
						  'email'  => $this->input->post('email') ,
						  'emergency_contact_name'  => $this->input->post('emergency_contact_name') ,
						  'emergency_contact_mobile'  => $this->input->post('emergency_contact_mobile') ,
						  'emergency_contact_relation'  => $this->input->post('emergency_contact_relation') ,
						  'present_address'  => $this->input->post('present_address') ,
						  'permanent_address'  => $this->input->post('permanent_address') ,
						  'marital_status'  => $this->input->post('marital_status') ,
						  'spouce_name'  => $this->input->post('spouce_name') ,
						  'spouce_occupation'  => $this->input->post('spouce_occupation') ,
						  'joinning_date'  => $this->input->post('joinning_date') ,
						  'designation'  => $this->input->post('designation') ,
						  'subject'  => $this->input->post('subject') ,
						  'medium'  => $this->input->post('medium') ,
						  'class'  => $this->input->post('class') ,
						  'dept'  => $this->input->post('dept') ,
						  'section'  => $this->input->post('section') ,
						  'job_nature'  => $this->input->post('job_nature') ,
						  
						  'status'  => $this->input->post('status') ,
						  'f_name'  => $this->input->post('f_name') ,
						  'f_occu'  => $this->input->post('f_occu') ,
						  'f_edu_quali'  => $this->input->post('f_edu_quali') ,
						  'f_national_id'  => $this->input->post('f_national_id') ,
						  'm_name'  => $this->input->post('m_name') ,
						  'm_occu'  => $this->input->post('m_occu') ,
						  'm_edu_quali'  => $this->input->post('m_edu_quali') ,
						  'm_national_id'  => $this->input->post('m_national_id') ,
						  'appointed_for'  => $this->input->post('appointed_for') ,
						  'working_shift'  => $this->input->post('working_shift') ,
						  'start_time'  => $this->input->post('start_time') ,
						  'end_time'  => $this->input->post('end_time') ,
						  'bank_acc'  => $this->input->post('bank_acc') ,
						  'bank_acc_name'  => $this->input->post('bank_acc_name') ,
						  'bank_name'  => $this->input->post('bank_name') ,
						  'bank_branch'  => $this->input->post('bank_branch') ,
						  'quantan_grad'  => $this->input->post('quantan_grad') ,
						  'quantam_id'  => $this->input->post('quantam_id') ,
						  'quan_prom_id'  => $this->input->post('quan_prom_id') ,
						  'quan_branch'  => $this->input->post('quan_branch') ,
						  'political_inv' => $this->input->post('political_inv') ,
						  'political_inv_detail'  => $this->input->post('political_inv_detail') ,
						  'special_qual'  => $this->input->post('special_qual') ,
						  'ntrca_exam'  => $this->input->post('ntrca_exam') ,
						  'others'  => $this->input->post('others'),
						  'created_by'			=> $this->tank_auth->get_user_id(),
						  'created_dt'			=> date("Y-m-d H:i:s") 
					);
			
			if( $this->input->post('name') && $this->input->post('name')!=NULL && $this->input->post('mobile') && $this->input->post('mobile')!=NULL && $this->input->post('staff_type') && $this->input->post('staff_type')!=NULL )
			{
				if($this->db->insert('staff', $data))
				{	
					$staff_insert_id = $this->db->insert_id();					
					$data['id'] = $staff_insert_id;						
					$data['qry_success'] = 1;
					$data['msg'] = 'New Staff Added Success';											
					return $data;
				}
				else
				{
					$data['qry_success'] = 0;						
					return $data;					
				}
			}
			else 
			{
				$data['qry_success'] = 0;						
				return $data;
			}		
	}
	
	// id generation functions for staff
	private function generate_staff_id($gender)
	{
		$staff_id = $this->branch_no.$this->year_digit.'E';
		
		if($gender=="Male")	$staff_id .= '2';
		elseif($gender=="Female") $staff_id .= '1';
		else return NULL;		
		
		$query = $this->db->query("SELECT * FROM `staff` WHERE `staff_id` LIKE '$staff_id%'");		
		if ($query->num_rows() > 0)
		{
			$rowcount = $query->num_rows();
			$rowcount++;		
			$c = $this->LPAD( $rowcount, 3, "0");			
			$staff_id .= $c;
		}
		else $staff_id.="001";
				
		return $staff_id;		
	}
	
	
	
	function update_staff()
	{		
		$data = array(
						  'staff_type'  => $this->input->post('staff_type') ,
						  'name'  => $this->input->post('name') ,
						  'dob'  => $this->input->post('dob') ,
						  'age'  => $this->input->post('age') ,
						  'gender'  => $this->input->post('gender') ,
						  'blood'  => $this->input->post('blood') ,
						  'religion'  => $this->input->post('religion') ,
						  'nationality'  => $this->input->post('nationality') ,
						  'national_id'  => $this->input->post('national_id') ,
						  'mobile'  => $this->input->post('mobile') ,
						  'email'  => $this->input->post('email') ,
						  'emergency_contact_name'  => $this->input->post('emergency_contact_name') ,
						  'emergency_contact_mobile'  => $this->input->post('emergency_contact_mobile') ,
						  'emergency_contact_relation'  => $this->input->post('emergency_contact_relation') ,
						  'present_address'  => $this->input->post('present_address') ,
						  'permanent_address'  => $this->input->post('permanent_address') ,
						  'marital_status'  => $this->input->post('marital_status') ,
						  'spouce_name'  => $this->input->post('spouce_name') ,
						  'spouce_occupation'  => $this->input->post('spouce_occupation') ,
						  'joinning_date'  => $this->input->post('joinning_date') ,
						  'designation'  => $this->input->post('designation') ,
						  'subject'  => $this->input->post('subject') ,
						  'medium'  => $this->input->post('medium') ,
						  'class'  => $this->input->post('class') ,
						  'dept'  => $this->input->post('dept') ,
						  'section'  => $this->input->post('section') ,
						  'job_nature'  => $this->input->post('job_nature') ,
						 
						  'status'  => $this->input->post('status') ,
						  'f_name'  => $this->input->post('f_name') ,
						  'f_occu'  => $this->input->post('f_occu') ,
						  'f_edu_quali'  => $this->input->post('f_edu_quali') ,
						  'f_national_id'  => $this->input->post('f_national_id') ,
						  'm_name'  => $this->input->post('m_name') ,
						  'm_occu'  => $this->input->post('m_occu') ,
						  'm_edu_quali'  => $this->input->post('m_edu_quali') ,
						  'm_national_id'  => $this->input->post('m_national_id') ,
						  'appointed_for'  => $this->input->post('appointed_for') ,
						  'working_shift'  => $this->input->post('working_shift') ,
						  'start_time'  => $this->input->post('start_time') ,
						  'end_time'  => $this->input->post('end_time') ,
						  'bank_acc'  => $this->input->post('bank_acc') ,
						  'bank_acc_name'  => $this->input->post('bank_acc_name') ,
						  'bank_name'  => $this->input->post('bank_name') ,
						  'bank_branch'  => $this->input->post('bank_branch') ,
						  'quantan_grad'  => $this->input->post('quantan_grad') ,
						  'quantam_id'  => $this->input->post('quantam_id') ,
						  'quan_prom_id'  => $this->input->post('quan_prom_id') ,
						  'quan_branch'  => $this->input->post('quan_branch') ,
						  'political_inv' => $this->input->post('political_inv') ,
						  'political_inv_detail'  => $this->input->post('political_inv_detail') ,
						  'special_qual'  => $this->input->post('special_qual') ,
						  'ntrca_exam'  => $this->input->post('ntrca_exam') ,
						  'others'  => $this->input->post('others'),
						  'updated_by'			=> $this->tank_auth->get_user_id(),
					);
										
		$staff_pic   = $this->input->post('staff_pic_old');
		
	    echo $staff_pic;
	 			
		if (!empty($_FILES['staff_pic']['name'])) 
		{
			unlink('./assets/pic/'.$this->input->post('staff_pic_old'));	
			$staff_pic   = $this->pic_upload('staff_pic',  $this->input->post('staff_id'));
		}
		
		
		$data['staff_pic']	 = $staff_pic;
		
		$this->db->where('id', $this->input->post('id') );
		
		if($this->db->update('staff', $data))
		{
			$this->m_common->activity_log('update', 'Updated Staff Data, ID-'.$this->input->post('staff_id').', Name- '.$this->input->post('name')); // inserts into activity log table		
			$data['id'] = $this->input->post('id');			
			$data['qry_success'] = 1;
						
			return $data;
		}
			
	}
	
	
	function staff_by_id($id)
	{
		$qry = $this->db->get_where('staff', array('id'=>$id));
		
		if($qry->num_rows()>0)
		{
			$data['qry_success']	 = 1;
			$data['qry_row'] 		 = $qry->row();
		}
		else
		{
			$data['qry_success'] = 0;
		}
		
		return $data;
	}
	
	function all_staff()
	{
		$this->db->order_by("staff_type", "asc"); 
		$qry = $this->db->get('staff');
		
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
	
	function staff_side_menu() // returns menu for student module
	{
		$menu = '';
				
		if($this->tank_auth->is_logged_in())
		{
			$menu.= '
					  <a  class="btn btn-link" href="'.base_url().'profile/staff"><strong>All Employee</strong></a>
					 <a  class="btn btn-link" href="'.base_url().'profile/add_staff"><strong>Add Employee</strong></a>
					 <a  class="btn btn-link" href="'.base_url().'profile/staff_by_cat"><strong>Employee By Type</strong></a>
					 <a  class="btn btn-link" href="#'.base_url().'profile/add_student"><strong>Reports</strong></a>
					';
		}
		else
		{
			redirect('/auth/logout/');
		}
		
		return $menu;
	}
	
	
	///------------------------------------------------ End Staff ----------------------------------------------------//
		
	
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
			$this->m_common->activity_log('insert', 'Created New Education Structure'); // inserts into activity log table
			
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
			
			$this->m_common->activity_log('update', 'Updated Education Structure'); // inserts into activity log table
			
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
						'start_time'		=> $this->input->post('start_time'),
						'end_time'			=> $this->input->post('end_time'),
						'status'			=> $this->input->post('status'),
						'created_by'		=> $this->tank_auth->get_user_id(),
						'created_dt'		=> date("Y-m-d H:i:s")
					);					
			
		if($this->db->insert('class_struct', $data))
		{
			$this->m_common->activity_log('insert', 'Created New Class Structure'); // inserts into activity log table
			
			$data = $this->class_struct_by_id($this->db->insert_id());
			
			return $data;
		}
		else
		{
			return FALSE;
		}
	}
	
	function update_class_struct()
	{
		$data = array(
						'class_id'			=> $this->input->post('class'),
						'dept_id'			=> $this->input->post('dept'),
						'section_id'		=> $this->input->post('section'),
						'start_time'		=> $this->input->post('start_time'),
						'end_time'			=> $this->input->post('end_time'),
						'status'			=> $this->input->post('status'),
						'modified_by'		=> $this->tank_auth->get_user_id(),
					);	
		if($this->input->post('edu_struct') && $this->input->post('edu_struct')!="")
		{
			$data['edu_struct_id'] = $this->input->post('edu_struct');
		}				
		
		$this->db->where('id', $this->input->post('id'));
			
		if($this->db->update('class_struct', $data))
		{
			$this->m_common->activity_log('update', 'Updated Class Structure, ID-'.$this->input->post('id')); // inserts into activity log table
			
			$data = $this->class_struct_by_id($this->input->post('id'));
			
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
	
	
	
	
	
	
	
}

/* End of file m_profile.php */
/* Location: ./application/models/m_profile.php */