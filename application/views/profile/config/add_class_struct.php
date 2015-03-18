<!--/**
 * Add Education Structure form
 *
 * form for adding new Education Structure
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h2>Add New Class Structure <a style=" font-size:medium;float:right;" href="<?php echo base_url();?>profile/class_struct">View All</a></h2>
<hr/>
<form class="form-horizontal" method="post" action="">
  <div class="form-group">
    <label for="year_season" class="col-sm-2 control-label">Year/Season</label>
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
  <div class="form-group">
    <label for="edu_struct" class="col-sm-2 control-label"><strong>Education Structure</strong></label>
    <div class="col-sm-7">
      <select class="form-control"  id="edu_struct" name="edu_struct"  required >
        <option value="" selected="selected">First Select Year/Season</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="class" class="col-sm-2 control-label">Class</label>
    <div class="col-sm-5">
      <select class="form-control"  id="class" name="class"  required>
        <option value="" selected="selected">Select Class</option>
        <?php			
			$class = $this->m_common->all_active_tbl_data_('class');			
			if($class!=NULL)
			{
				foreach($class as $class)
				{
					echo ' <option value="'.$class->id.'">'.$class->name.'</option>';
				}
			}		 
		?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="dept" class="col-sm-2 control-label">Department</label>
    <div class="col-sm-5">
      <select class="form-control"  id="dept" name="dept"  required>
        <option value="" selected="selected">Select Department</option>
        <?php			
			$dept = $this->m_common->all_active_tbl_data_('dept');			
			if($dept!=NULL)
			{
				foreach($dept as $dept)
				{
					echo ' <option value="'.$dept->id.'">'.$dept->name.'</option>';
				}
			}		 
		?>
      </select>
    </div>
    <div class="col-sm-5"><span style="color:red;">
      <?php if(isset($medium_err)) echo $medium_err; ?>
      </span></div>
  </div>
  <div class="form-group">
    <label for="section" class="col-sm-2 control-label">Section</label>
    <div class="col-sm-5">
      <select class="form-control"  id="section" name="section"  required>
        <option value="" selected="selected">Select Section</option>
        <?php			
			$section = $this->m_common->all_active_tbl_data_('section');			
			if($section!=NULL)
			{
				foreach($section as $section)
				{
					echo ' <option value="'.$section->id.'">'.$section->name.'</option>';
				}
			}		 
		?>
      </select>
    </div>
    <div class="col-sm-5"><span style="color:red;">
      <?php if(isset($medium_err)) echo $medium_err; ?>
      </span></div>
  </div>
  <div class="form-group">
    <label for="timeFrom" class="col-sm-2 control-label"> Class Time</label>
    <div class="col-sm-2">
      <input type="text" id="timeFrom" name="start_time" class="form-control">
    </div>
    <label class=" col-sm-1 control-label" style="width:20px !important;">To</label>
    <div class="col-sm-2">
      <input type="text" id="timeTo" name="end_time" class="form-control" >
    </div>
  </div>
  <div class="form-group">
    <label for="status" class="col-sm-2 control-label">Status</label>
    <div class="col-sm-5">
      <select class="form-control"  id="status" name="status"  required>
        <option value="" selected="selected">Select Status</option>
        <option value="1" style="color:green;">Enable</option>
        <option value="0" style="color:red;">Disable</option>
      </select>
    </div>
    <div class="col-sm-5"><span style="color:red;">
      <?php if(isset($name_err)) echo $name_err; ?>
      </span></div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input class="btn btn-success" type="submit" name="add_class_struct" value="Create New Class Structure">
    </div>
  </div>
</form>
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
	
$(function () {
	$('#timeFrom').timeEntry({ampmPrefix: ' '});
	$('#timeTo').timeEntry({ampmPrefix: ' '});
});

</script> 
