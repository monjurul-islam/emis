<!--/**
 * new Eduction Structure view
 *
 * This view shows newlly added Eduction Structure  data
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h2>Success! <a style=" font-size:medium;float:right;" href="<?php echo base_url();?>profile/edu_struct">View All</a></h2>
<hr/>
<h3>New Eduction Structure Details</h3>
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
      <th>Modif. by</th>
      <th>Modif. dt</th>
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
					  <td>'.$this->m_common->get_year_season_name_by_id($qry_row->year_season_id).'</td>
					  <td>'.$this->m_common->get_medium_name_by_id($qry_row->medium_id).'</td>
					  <td>'.$this->m_common->get_shift_name_by_id($qry_row->shift_id).'</td>
					  <td>'.$this->m_common->get_version_name_by_id($qry_row->version_id).'</td>
					  <td>'.$this->m_common->get_username_by_id($qry_row->created_by).'</td>
					  <td>'.$qry_row->created_dt.'</td>
					  <td>'.$this->m_common->get_username_by_id($qry_row->modified_by).'</td>
					   <td>'.$qry_row->modified_dt.'</td>
					  <td>'.$this->m_common->status_text($qry_row->status).'</td>
					  <td> <a href="'.base_url().'admin/edit_edu_struct/'.$qry_row->id.'">Edit</a> </td>';
	}
	?>
    </tr>
  </tbody>
</table>
