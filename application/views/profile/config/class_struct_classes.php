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
      
      <th>Class</th>
      <th>Dept.</th>
      <th>Section</th>
      <th>Start</th>
      <th>End</th>
      <th>Created</th>
      <th>Modif</th>
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
						
						  <td>'.$this->m_common->get_class_name_by_id($qry_res->class_id).'</td>
						  <td>'.$this->m_common->get_dept_name_by_id($qry_res->dept_id).'</td>
						  <td>'.$this->m_common->get_section_name_by_id($qry_res->section_id).'</td>
						  <td>'.$qry_res->start_time.'</td>
						  <td>'.$qry_res->end_time.'</td>
						  <td>'.$this->m_common->get_username_by_id($qry_res->created_by).'<br />'.$qry_res->created_dt.'</td>
						  <td>'.$this->m_common->get_username_by_id($qry_res->modified_by).'<br />'.$qry_res->modified_dt.'</td>
						  <td>'.$this->m_common->status_text($qry_res->status).'</td>
						<td> <a href="'.base_url().'profile/edit_class_struct/'.$qry_res->id.'">Edit</a> </td>
					</tr>';
					  
		}
	}
	?>
    </tr>
  </tbody>
</table>
