<!--/**
 * new Class Structure view
 *
 * This view shows newlly added Class Structure  data
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h2>Success! <a style=" font-size:medium;float:right;" href="<?php echo base_url();?>profile/class_struct">View All</a></h2>
<hr/>
<h3>New Class Structure Details</h3>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Year/Session</th>
      <th>Education Structure</th>
      <th>Class</th>
      <th>Dept.</th>
      <th>Section</th>
      <th>Start</th>
      <th>End</th>
      <th>Created</th>
      <th>Modif</th>
      <th>Status</th>
      <th> </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 
	if($qry_success == 1)
	{
     			echo '<td>'.$qry_row->id.'</td>
					  <td>'.$this->m_common->get_year_season_name_by_edu_struct_id($qry_row->edu_struct_id).'</td>
					  <td>'.$this->m_common->get_edu_struct_by_id($qry_row->edu_struct_id).'</td>
					  <td>'.$this->m_common->get_class_name_by_id($qry_row->class_id).'</td>
					  <td>'.$this->m_common->get_dept_name_by_id($qry_row->dept_id).'</td>
					  <td>'.$this->m_common->get_section_name_by_id($qry_row->section_id).'</td>
					  <td>'.$qry_row->start_time.'</td>
					  <td>'.$qry_row->end_time.'</td>
					  <td>'.$this->m_common->get_username_by_id($qry_row->created_by).'<br />'.$qry_row->created_dt.'</td>
					  <td>'.$this->m_common->get_username_by_id($qry_row->modified_by).'<br />'.$qry_row->modified_dt.'</td>
					  <td>'.$this->m_common->status_text($qry_row->status).'</td>
					  <td> <a href="'.base_url().'profile/edit_class_struct/'.$qry_row->id.'">Edit</a>  </td>';
	}
	?>
    </tr>
  </tbody>
</table>
<a style=" font-size:medium;float:right;" href="<?php echo base_url();?>profile/add_class_struct">Add New</a> 