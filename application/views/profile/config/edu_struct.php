<!--/**
 * edu_struct view
 *
 * This view takes all data of edu_struct table and parse in this view as necessary
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h2>All Education Structures <a style=" font-size:medium;float:right;" href="<?php echo base_url();?>profile/add_edu_struct">Create New</a></h2> 
<hr/>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Year/Session</th>
      <th>Medium/Curriculam</th>
      <th>Shift</th>
      <th>Version</th>
      <th>Created by</th>
      <th>Created dt</th>
      <th>Modif.<br/>by</th>
      <th>Modif.<br />dt</th>
      <th>Status</th>
      <th> </th>
    </tr>
  </thead>
  <tbody>
    <?php 
	
	if($qry_success == 1)
	{
		foreach($qry_result as $qry_res)
		{
			echo '	<tr>
					  <td>'.$qry_res->id.'</td>
					  <td>'.$this->m_common->get_year_season_name_by_id($qry_res->year_season_id).'</td>
					  <td>'.$this->m_common->get_medium_name_by_id($qry_res->medium_id).'</td>
					  <td>'.$this->m_common->get_shift_name_by_id($qry_res->shift_id).'</td>
					  <td>'.$this->m_common->get_version_name_by_id($qry_res->version_id).'</td>
					  <td>'.$this->m_common->get_username_by_id($qry_res->created_by).'</td>
					  <td>'.$qry_res->created_dt.'</td>
					  <td>'.$this->m_common->get_username_by_id($qry_res->modified_by).'</td>
					   <td>'.$qry_res->modified_dt.'</td>
					  <td>'.$this->m_common->status_text($qry_res->status).'</td>
					  <td> <a style=" display:none;"  href="'.base_url().'admin/edit_edu_struct/'.$qry_res->id.'">Edit</a> </td>
				</tr>';
		}
	}
	
	?>
  </tbody>
</table>

	<h2 style="color:red;">
    <?php	
	if($qry_success == 0)
	{
		echo 'No Data Found';
	}	
	?>
    </h2>
    
   
