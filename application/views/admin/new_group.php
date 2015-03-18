<!--/**
 * new group view
 *
 * This view shows newlly added groups data
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h2>Success! <a style=" font-size:medium;float:right;" href="<?php echo base_url();?>admin/group">View All</a></h2>
<hr/>
<h3>New group Details</h3>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Type</th>
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
					  <td>'.$qry_row->name.'<br /><a href="'.base_url().'admin/group_privileges/'.$qry_res->id.'">Priv</a></td>
					  <td>'.$qry_row->type.'</td>
					  <td>'.$this->m_common->get_username_by_id($qry_row->created_by).'</td>
					  <td>'.$qry_row->created_dt.'</td>
					  <td>'.$this->m_common->get_username_by_id($qry_row->modified_by).'</td>
					   <td>'.$qry_row->modified_dt.'</td>
					  <td>'.$this->m_common->status_text($qry_row->status).'</td>
					  <td> <a href="'.base_url().'admin/edit_group/'.$qry_row->id.'">Edit</a> <a style="color:red;"  href="'.base_url().'admin/delete_group/'.$qry_row->id.'">Delete</a></td>';
	}
	?>
    </tr>
  </tbody>
</table>
