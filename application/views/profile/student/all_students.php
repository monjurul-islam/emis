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
      <th>Std ID</th>
      <th>Name</th>
      <th>Father</th>
      <th>Mother</th>
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
					  <td>'.$qry_res->std_id.'</td>
					  <td>'.$qry_res->name.' <br /><img src="'.base_url().'assets/pic/'.$qry_res->std_pic.'" alt="'.$qry_res->std_pic.'" class="img-thumbnail" style=" height:60px;  "></td>
					  <td>'.$qry_res->f_name.' ('.$qry_res->f_mobile.')</td>
					  <td>'.$qry_res->m_name.' ('.$qry_res->m_mobile.')</td>
					  <td>'.$this->m_common->get_username_by_id($qry_res->created_by).'<br /> '.$qry_res->created_dt.'</td>
					  <td>'.$this->m_common->get_username_by_id($qry_res->modified_by).'<br />'.$qry_res->modified_dt.'</td>
					  <td>'.$this->m_common->status_text($qry_res->status).'</td>
					  <td> <button class="btn btn-info" onclick="students_by_id_modal_view('.$qry_res->id.')" >View Details</button><br /><hr style="margin: 3px;">
					  	   <a class="btn btn-primary" href="'.base_url().'profile/edit_student/'.$qry_res->id.'">Edit Student</a></td>
				</tr>';
	
			
     			$i++;
					  
		}
	}
	?>
    </tr>
  </tbody>
</table>

<script>

function students_by_id_modal_view(std_id)
{
	$.ajax({		
		 url:  "<?php echo site_url("profile/ajax_student_by_id")?>/"+std_id,		
		 success: function(html){
		 $("#modal_content").html(html);
		}
	});
	
	$('#lg_modal').modal();
}

</script>


