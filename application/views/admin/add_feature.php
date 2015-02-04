<!--/**
 * Add feature form
 *
 * form for adding new feature
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h2>Add New feature <a style=" font-size:medium;float:right;" href="<?php echo base_url();?>admin/feature">View All</a></h2>
<hr/>
<form class="form-horizontal" method="post" action="">
  <div class="form-group">
    <label for="module_id" class="col-sm-2 control-label">Select Module</label>
    <div class="col-sm-5">
      <select class="form-control"  id="module_id" name="module_id"  required>
        <option value="" selected="selected">Select Module</option>
        <?php 	
			foreach($qry_result as $module)
			{
				echo '<option value="'.$module->id.'">'.$module->name.'</option>';
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
      <input type="text" size="50" class="form-control" id="name" name="name" placeholder="Enter Name" required>
    </div>
    <div class="col-sm-5"><span style="color:red;">
      <?php if(isset($name_err)) echo $name_err; ?>
      </span></div>
  </div>
  
  <div class="form-group">
    <label for="url_alias" class="col-sm-2 control-label">feature Url Alies/File Name</label>
    <div class="col-sm-5">
      <input type="text" size="50" class="form-control" id="url_alias" name="url_alias" placeholder="Enter Url Alies/File Name"  required>
    </div>
    <div class="col-sm-5"><span style="color:red;">
      <?php if(isset($name_err)) echo $name_err; ?>
      </span></div>
  </div>
  <div class="form-group">
    <label for="status" class="col-sm-2 control-label">feature Status</label>
    <div class="col-sm-5">
      <select class="form-control"  id="status" name="status"  required>
        <option value="" selected="selected">Select feature Status</option>
        <option value="1" style="color:green;">Active</option>
        <option value="0" style="color:red;">Disable</option>
      </select>
    </div>
    <div class="col-sm-5"><span style="color:red;">
      <?php if(isset($name_err)) echo $name_err; ?>
      </span></div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input class="btn btn-success" type="submit" name="add_feature" value="Create New feature">
    </div>
  </div>
</form>
