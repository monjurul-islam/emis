<!--/**
 * students by class view
 * *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h4>Total Students in this Class: <strong><?php echo $qry_result_num;?></strong> <button style="float:right; margin:2px;" onclick="generate_excel('std_by_cls_structure')" class="btn btn-primary " >Export To Excel</button></h4>

<table class="table table-bordered table-striped" id="std_by_cls_structure">
  <thead>
    <tr>
      <th>Std ID</th>
      <th>Name</th>
      <th>Father</th>
      <th>Mother</th>
      <th>Created by</th>
      <th>Created dt</th>
      <th>Modif. by</th>
      <th>Modif. dt</th>
      <th>Status</th>
  	  <th>Details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
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
						  <td>'.$qry_std['qry_row']->f_name.' ('.$qry_std['qry_row']->f_mobile.')</td>
						  <td>'.$qry_std['qry_row']->m_name.' ('.$qry_std['qry_row']->m_mobile.')</td>
						  <td>'.$this->m_common->get_username_by_id($qry_std['qry_row']->created_by).'</td>
						  <td>'.$qry_std['qry_row']->created_dt.'</td>
						  <td>'.$this->m_common->get_username_by_id($qry_std['qry_row']->modified_by).'</td>
						  <td>'.$qry_std['qry_row']->modified_dt.'</td>
						  <td>'.$this->m_common->status_text($qry_std['qry_row']->status).'</td>
						  <td> <button class="btn btn-info" onclick="students_by_id_modal_view('.$qry_std['qry_row']->id.')" >Details</button></td>
					</tr>';
			}
			else
			{
				echo '<tr><td colspan="9">Student Not Found</td></tr>';
			}
			
     			
					  
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


