<!--/**
 * Add Education Structure form
 *
 * form for adding new Education Structure
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h2>Add New Education Structure <a style=" font-size:medium;float:right;" href="<?php echo base_url();?>profile/edu_struct">View All</a></h2>
<hr/>
<form class="form-horizontal" method="post" action="">
  <div class="form-group">
    <label for="year_season" class="col-sm-2 control-label">Year/Season</label>
    <div class="col-sm-5">
      <select class="form-control"  id="year_season" name="year_season"  required>
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
    <label for="medium" class="col-sm-2 control-label">Medium</label>
    <div class="col-sm-5">
      <select class="form-control"  id="medium" name="medium"  required>
        <option value="" selected="selected">Select Medium</option>
        <?php			
			$medium = $this->m_common->all_active_tbl_data_('medium');			
			if($medium!=NULL)
			{
				foreach($medium as $medium)
				{
					echo ' <option value="'.$medium->id.'">'.$medium->name.'</option>';
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
    <label for="shift" class="col-sm-2 control-label">Shift</label>
    <div class="col-sm-5">
      <select class="form-control"  id="shift" name="shift"  required>
        <option value="" selected="selected">Select Shift</option>
        <?php			
			$shift = $this->m_common->all_active_tbl_data_('shift');			
			if($shift!=NULL)
			{
				foreach($shift as $shift)
				{
					echo ' <option value="'.$shift->id.'">'.$shift->name.'</option>';
				}
			}		 
		?>
      </select>
    </div>
    <div class="col-sm-5"><span style="color:red;">
      <?php if(isset($shift_err)) echo $shift_err; ?>
      </span></div>
  </div>
  <div class="form-group">
    <label for="version" class="col-sm-2 control-label">Version</label>
    <div class="col-sm-5">
      <select class="form-control"  id="version" name="version"  required>
        <option value="" selected="selected">Select Version</option>
        <?php			
			$version = $this->m_common->all_active_tbl_data_('version');			
			if($version!=NULL)
			{
				foreach($version as $version)
				{
					echo ' <option value="'.$version->id.'">'.$version->name.'</option>';
				}
			}		 
		?>
      </select>
    </div>
    <div class="col-sm-5"><span style="color:red;">
      <?php if(isset($version_err)) echo $version_err; ?>
      </span></div>
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
      <input class="btn btn-success" type="submit" name="add_edu_struct" value="Create New Education Structure">
    </div>
  </div>
</form>
