<!--/**
 * students by class view for fee waiver configure
 * *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->


<table class="table table-bordered table-striped" id="std_by_cls_structure">
  <thead>
    <tr>
      <th>Std ID</th>
      <th>Name</th>
      <th colspan="6" align="center">Give Waiver</th>
     
  	  <th>Details</th>
    </tr>
  </thead>
  <tbody>
    <?php 
	if($qry_success == 1)
	{
		foreach($qry_result as $qry_res)
		{
			$qry_std = $this->m_profile->student_by_id($qry_res->std_id);
			
			if($qry_std['qry_success']==1)
			{
				echo '<tr>
						  <td>'.$qry_std['qry_row']->std_id.'</td>
						  <td>'.$qry_std['qry_row']->name.'</td>
						  <td colspan="6"></td>
						  <td> <button class="btn btn-info btn-xs" onclick="students_by_id_modal_view('.$qry_std['qry_row']->id.')" >Student Details</button></td>
					</tr>';
			}
			else
			{
				echo '<tr><td colspan="9">Student Not Found</td></tr>';
			}
			
     			
					  
		}
	}
	?>
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


