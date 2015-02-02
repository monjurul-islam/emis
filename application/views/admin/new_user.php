<!--/**
 * single user view
 *
 * This view takes only one user data and parse in this view as necessary
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h2> <?php if($qry_success == 1) echo 'Success';?> <a style=" font-size:medium;float:right;" href="<?php echo base_url();?>admin/users">View All</a></h2> 
<hr/>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Group</th>
      <th>Activated</th>
      <th>Banned</th>
      <th>Ban Reason</th>
      <th>Last IP</th>
      <th>Last Login</th>
      <th>Created</th>
      <th>Modified</th>
      <th> </th>
    </tr>
  </thead>
  <tbody>
    <?php 
	
	if($qry_success == 1)
	{
		echo '<tr/>
				  <td>'.$qry_row->id.'</td>
				  <td>'.$qry_row->username.'<br /><a href="'.base_url().'admin/privileges/'.$qry_row->id.'">Privileges</a></td>
				  <td>'.$qry_row->email.'</td>
				  <td>'.$qry_row->id.' group</td>
				  <td>'.$this->m_common->status_text($qry_row->activated).'</td>
				  <td>'.$this->m_common->banned_text($qry_row->banned).'</td>
				  <td>'.$qry_row->ban_reason.'</td>
				  <td>'.$qry_row->last_ip.'</td>
				  <td>'.$qry_row->last_login.'</td>
				  <td>'.$qry_row->created.'</td>
				  <td>'.$qry_row->modified.'</td>
				  <td> <a href="'.base_url().'admin/edit_user/'.$qry_row->id.'">Edit</a> <a style="color:red;"  href="'.base_url().'admin/delete_user/'.$qry_row->id.'">Delete</a></td>
			  </tr>';
				  
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
    
   
