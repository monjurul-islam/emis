<!--/**
 * new feature view
 *
 * This view shows newlly added features data
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h2>Success! <a style=" font-size:medium;float:right;" href="<?php echo base_url();?>admin/feature">View All</a></h2>
<hr/>
<h3>feature Details</h3>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Module</th>
      <th>URL ALIAS</th>
      <th>Created by</th>
      <th>Created dt</th>
      <th>Modif. by</th>
      <th>Modif. dt</th>
      <th>Status</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php 
	if($qry_success == 1)
	{
     			echo '<td><strong>'.$qry_row->id.'</strong></td>
					  <td>'.$qry_row->name.'</td>
					  <td>'.$this->m_common->get_module_name_by_id($qry_row->module_id).'</td>
					  <td>'.$qry_row->url_alias.'</td>
					  <td>'.$this->m_common->get_username_by_id($qry_row->created_by).'</td>
					  <td>'.$qry_row->created_dt.'</td>
					  <td>'.$this->m_common->get_username_by_id($qry_row->modified_by).'</td>
					   <td>'.$qry_row->modified_dt.'</td>
					  <td>'.$this->m_common->status_text($qry_row->status).'</td>
					  <td> <a href="'.base_url().'admin/edit_feature/'.$qry_row->id.'">Edit</a> <a style="color:red;"  href="'.base_url().'admin/delete_feature/'.$qry_row->id.'">Delete</a></td>';
	}
	?>
    </tr>
  </tbody>
</table>
