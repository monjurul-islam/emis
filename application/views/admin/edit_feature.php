<!--/**
 * Edit feature form
 *
 * form for editing feature
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<?php if($qry_success==1){?>

<h2>Edit feature : <?php echo $qry_row->name; ?><a style=" font-size:medium;float:right;" href="<?php echo base_url();?>admin/feature">View All</a></h2>
<hr/>
<form class="form-horizontal" method="post" action="">

 <div class="form-group">
    <label for="module_id" class="col-sm-2 control-label">Select Module</label>
    <div class="col-sm-5">
      <select class="form-control"  id="module_id" name="module_id"  required>
        <option value="" >Select Module</option>
        <?php 	
			foreach($qry_modules['qry_result'] as $module)
			{
				if($module->id == $qry_row->module_id)
				{
					echo '<option value="'.$module->id.'" selected="selected">'.$module->name.'</option>';
				}
				else
				{
					echo '<option value="'.$module->id.'">'.$module->name.'</option>';
				}
			}		
		?>
      </select>
    </div>
    <div class="col-sm-5"><span style="color:red;">
      <?php if(isset($name_err)) echo $name_err; ?>
      </span></div>
  </div>

  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">feature Name</label>
    <div class="col-sm-5">
      <input type="hidden" class="form-control" name="id" value="<?php echo $qry_row->id; ?>" required>
      <input type="text" size="50" class="form-control" id="name" name="name" placeholder="Enter Name" value="<?php echo $qry_row->name; ?>" required>
    </div>
    <div class="col-sm-5"><span style="color:red;"><?php if(isset($name_err)) echo $name_err; ?> </span></div>
  </div>
 
  <div class="form-group">
    <label for="url_alias" class="col-sm-2 control-label">feature Url Alies/File Name</label>
    <div class="col-sm-5">
      <input type="text" size="50" class="form-control" id="url_alias" name="url_alias" placeholder="Enter Url Alies/File Name" value="<?php echo $qry_row->url_alias; ?>"  required>
    </div>
    <div class="col-sm-5"><span style="color:red;"><?php if(isset($name_err)) echo $name_err; ?> </span></div>
  </div>
  <div class="form-group">
    <label for="status" class="col-sm-2 control-label">feature Status</label>
    <div class="col-sm-5">
      <select class="form-control"  id="status" name="status"  required>
        <option value="">Select feature Status</option>
        <option value="1" <?php if($qry_row->status==1) echo ' selected="selected"'; ?> style="color:green;">Active</option>
        <option value="0" <?php if($qry_row->status==0) echo ' selected="selected"'; ?>style="color:red;">Disable</option>
      </select>
    </div>
    <div class="col-sm-5"><span style="color:red;"><?php if(isset($name_err)) echo $name_err; ?> </span></div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input class="btn btn-success" type="submit" name="update_feature" value="Update feature">
    </div>
  </div>
</form>

<?php } else echo '<h2>feature Not Exist<a style=" font-size:medium;float:right;" href="<?php echo base_url();?>admin/feature">View All features</a></h2>';?>
