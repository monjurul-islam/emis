<!--/**
 * module view
 *
 * This view takes all data of module table and parse in this view as necessary
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h2>All Modules <a style=" font-size:medium;float:right;" href="<?php echo base_url();?>admin/add_module">Create New</a></h2> 
<hr/>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Type</th>
      <th>URL ALIAS</th>
      <th>Created by</th>
      <th>Created dt</th>
      <th>Modified by</th>
      <th>Modified dt</th>
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
					  <td>'.$qry_res->id.'</td>
					  <td>'.$qry_res->name.'</td>
					  <td>'.$qry_res->type.'</td>
					  <td>'.$qry_res->url_alias.'</td>
					  <td>'.$this->m_common->get_username_by_id($qry_res->created_by).'</td>
					  <td>'.$qry_res->created_dt.'</td>
					  <td>'.$qry_res->modified_by.'</td>
					  <td>'.$qry_res->modified_dt.'</td>
					  <td>'.$qry_res->status.'</td>
					  <td> Edit</td>
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
    
   
