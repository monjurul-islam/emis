<!--/**
 * students by class view
 * *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h4>All Students <button style="float:right; margin:2px;" onclick="generate_excel('all_students')" class="btn btn-primary " >Export To Excel</button></h4>

<table class="table table-bordered table-striped" id="all_students">
  <thead>
    <tr>
     <th>SL.</th>
      <th>Type</th>
      <th>Name</th>
      <th>Designation</th>
      <th>Mobile</th>
       <th>Working Hour</th>
      <th>Created by</th>
      <th>Modif. by</th>
      <th>Status</th>
  	  <th>Details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php 
	if($qry_success == 1)
	{
		$i=1;
		foreach($qry_result as $qry_res)
		{
		
			echo '<tr>
					  <td>'.$i.'</td>
					  <td>'.$qry_res->staff_type.'</td>
					  <td>'.$qry_res->name.' <br /><!--<img src="'.base_url().'assets/pic/'.$qry_res->staff_pic.'" alt="'.$qry_res->staff_pic.'" class="img-thumbnail" style=" height:60px;  ">--></td>
					  <td>'.$qry_res->designation.'</td>
					  <td>'.$qry_res->mobile.' </td>
					   <td>'.$qry_res->start_time.' to '.$qry_res->end_time.'</td>
					  <td>'.$this->m_common->get_username_by_id($qry_res->created_by).'<br /> '.$qry_res->created_dt.'</td>
					  <td>'.$this->m_common->get_username_by_id($qry_res->updated_by).'<br />'.$qry_res->updated_dt.'</td>
					  <td>'.$this->m_common->status_text($qry_res->status).'</td>
					  <td> <button class="btn btn-info" onclick="staff_by_id_modal_view('.$qry_res->id.')" >View Details</button><br /><hr style="margin: 3px;">
					  	   <a class="btn btn-primary" href="'.base_url().'profile/edit_staff/'.$qry_res->id.'">Edit Staff</a></td>
				</tr>';
	
			
     			$i++;
					  
		}
	}
	?>
    </tr>
  </tbody>
</table>

<script>

function staff_by_id_modal_view(staff_id)
{
	$.ajax({		
		 url:  "<?php echo site_url("profile/ajax_staff_by_id")?>/"+staff_id,		
		 success: function(html){
		 $("#modal_content").html(html);
		}
	});
	
	$('#lg_modal').modal();
}

</script>


