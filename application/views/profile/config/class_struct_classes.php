<!--/**
 * Class Structure view
 *
 * This view shows Class Structure by education structure data
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<table class="table table-bordered table-striped">
  <thead>
    <tr>
     <th>ID</th>
      <!-- <th>Year/Session</th>
      <th>Education Structure</th>-->
      <th>Class</th>
      <th>Dept.</th>
      <th>Section</th>
      <th>Created by</th>
     <th>Created dt</th>
      <th>Modif. by</th>
      <th>Modif. dt</th>
      <th>Status</th>
    <th> Edit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php 
	if($qry_success == 1)
	{
		foreach($qry_result as $qry_res)
		{
     			echo '<tr>
						  <td>'.$qry_res->id.'</td>
						<!--  <td>'.$this->m_common->get_year_season_name_by_edu_struct_id($qry_res->edu_struct_id).'</td>
						  <td>'.$this->m_common->get_edu_struct_by_id($qry_res->edu_struct_id).'</td>-->
						  <td>'.$this->m_common->get_class_name_by_id($qry_res->class_id).'</td>
						  <td>'.$this->m_common->get_dept_name_by_id($qry_res->dept_id).'</td>
						  <td>'.$this->m_common->get_section_name_by_id($qry_res->section_id).'</td>
						  <td>'.$this->m_common->get_username_by_id($qry_res->created_by).'</td>
						 <td>'.$qry_res->created_dt.'</td>
						  <td>'.$this->m_common->get_username_by_id($qry_res->modified_by).'</td>
						   <td>'.$qry_res->modified_dt.'</td>
						  <td>'.$this->m_common->status_text($qry_res->status).'</td>
						<td> <a href="'.base_url().'profile/edit_class_struct/'.$qry_res->id.'">Edit</a> </td>
					</tr>';
					  
		}
	}
	?>
    </tr>
  </tbody>
</table>
