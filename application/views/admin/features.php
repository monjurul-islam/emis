<!--/**
 * feature view
 *
 * This view takes all data of feature table and parse in this view as necessary
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h2>All features <a style=" font-size:medium;float:right;" href="<?php echo base_url();?>admin/add_feature">Create New</a></h2> 
<hr/>
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
      <th> </th>
    </tr>
  </thead>
  <tbody>
    <?php 
	
	if($qry_success == 1)
	{
		foreach($qry_result as $qry_res)
		{
			echo '<tr/>
					  <td><strong>'.$qry_res->id.'</strong></td>
					  <td>'.$qry_res->name.'</td>
					  <td>'.$this->m_common->get_module_name_by_id($qry_res->module_id).'</td>
					  <td>'.$qry_res->url_alias.'</td>
					  <td>'.$this->m_common->get_username_by_id($qry_res->created_by).'</td>
					  <td>'.$qry_res->created_dt.'</td>
					  <td>'.$this->m_common->get_username_by_id($qry_res->modified_by).'</td>
					   <td>'.$qry_res->modified_dt.'</td>
					  <td>'.$this->m_common->status_text($qry_res->status).'</td>
					  <td> <a href="'.base_url().'admin/edit_feature/'.$qry_res->id.'">Edit</a> <a style="color:red;"  href="'.base_url().'admin/delete_feature/'.$qry_res->id.'">Delete</a></td>
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
    
   
