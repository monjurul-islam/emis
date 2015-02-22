<!--/**
 * class structures view
 *
 * This view takes all data of edu_struct table and parse in this view as necessary
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h2>Class Structures <a style=" font-size:medium;float:right;" href="<?php echo base_url();?>profile/add_class_struct">Create New</a></h2>
<hr/>
<form class="form-horizontal" method="post" action="">
  <div class="form-group input-lg">
    <label for="year_season" class="col-sm-3 control-label">Year/Season</label>
    <div class="col-sm-5">
      <select class="form-control"  id="year_season" name="year_season"  required onchange="edu_struct_by_year()">
        <option value="" selected="selected">Select Year/Session</option>
        <?php			
			$year_season = $this->m_common->all_active_tbl_data_('year_season');			
			if($year_season!=NULL)
			{
				foreach($year_season as $year_season_res)
				{
					echo ' <option value="'.$year_season_res->id.'">'.$year_season_res->year.'</option>';
				}
			}		 
		?>
      </select>
    </div>
    <div class="col-sm-5"><span style="color:red;">
      <?php if(isset($year_session_err)) echo $year_session_err; ?>
      </span></div>
  </div>
  <div class="form-group input-lg">
    <label for="edu_struct" class="col-sm-3 control-label"><strong>Education Structure</strong></label>
    <div class="col-sm-7">
      <select class="form-control"  id="edu_struct" name="edu_struct"  required onchange="class_struct_by_edu_struct()">
        <option value="" selected="selected">First Select Year/Season</option>
      </select>
    </div>
  </div>
</form>
<div class="col-sm-12" id="class_struct"> </div>
<script type="text/javascript">

function edu_struct_by_year()
{
	$("#edu_struct").html("loading...");	
	var year_id = $('#year_season').val();	
	$.ajax({		
		 url:  "<?php echo site_url("profile/ajax_edu_struct_by_year")?>/"+year_id,		
		 success: function(html){
		 $("#edu_struct").html(html);
		}
	});
}

function class_struct_by_edu_struct()
{
	$("#class_struct").html("<h2>loading...</h2>");	
	var edu_struct_id = $('#edu_struct').val();	
	//alert(edu_struct_id);
	$.ajax({		
		 url:  "<?php echo site_url("profile/ajax_class_struct_by_edu_struct")?>/"+edu_struct_id,		
		 success: function(html){
		 $("#class_struct").html(html);
		}
	});
}

</script> 
