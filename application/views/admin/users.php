<!--/**
 * user view
 *
 * This view takes all data of user table and parse in this view as necessary
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h2>All users <a style=" font-size:medium;float:right;" href="<?php echo base_url();?>admin/add_user">Create New</a></h2>
<hr/>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Email</th>
        <th>Group</th>
        <th>Activated</th>
        <th>Banned</th>
        <th>Ban Reason</th>
        <th>Last IP</th>
        <th>Last Login</th>
        <th>Created dt</th>
        <!--<th>Created By</th>-->
        <th>Modified dt</th>
       <!-- <th>Modified BY</th>-->
        <th> </th>
      </tr>
    </thead>
    <tbody>
      <?php 
	
	if($qry_success == 1)
	{
		$sl = 1;
		foreach($qry_result as $qry_res)
		{
			echo '<tr/>
					  <td>'.$sl.'</td>
					  <td>'.$qry_res->username.'<br /><a href="'.base_url().'admin/privileges/'.$qry_res->id.'">Priv</a></td>
					  <td>'.$qry_res->email.'</td>
					  <td>'.$this->m_common->get_groups_by_user($qry_res->id).'</td>
					  <td>'.$this->m_common->status_text($qry_res->activated).'</td>
					  <td>'.$this->m_common->banned_text($qry_res->banned).'</td>
					  <td>'.$qry_res->ban_reason.'</td>
					  <td>'.$qry_res->last_ip.'</td>
					  <td>'.$qry_res->last_login.'</td>
					  <td>'.$qry_res->created.'</td>
					<!--  <td>'.$this->m_common->get_username_by_id($qry_res->created_by).'</td>-->
					  <td>'.$qry_res->modified.'</td>
					  <!--<td>'.$this->m_common->get_username_by_id($qry_res->modified_by).'</td>-->
					  <td> <a href="'.base_url().'admin/edit_user/'.$qry_res->id.'">Edit</a> <a style="color:red;"  href="'.base_url().'admin/delete_user/'.$qry_res->id.'">Delete</a></td>
				  </tr>';
				  
			$sl++;
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
