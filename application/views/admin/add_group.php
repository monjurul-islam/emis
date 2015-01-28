<!--/**
 * Add group form
 *
 * form for adding new group
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h2>Add New Group <a style=" font-size:medium;float:right;" href="<?php echo base_url();?>admin/group">View All</a></h2>
<hr/>
<form class="form-horizontal" method="post" action="">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Group Name</label>
    <div class="col-sm-5">
      <input type="text" size="50" class="form-control" id="name" name="name" placeholder="Enter Name" required>
    </div>
    <div class="col-sm-5"><span style="color:red;"><?php if(isset($name_err)) echo $name_err; ?> </span></div>
  </div>
  <div class="form-group">
    <label for="type" class="col-sm-2 control-label">Group Type</label>
    <div class="col-sm-5">
      <input type="text" size="50" class="form-control" id="type" name="type" placeholder="Enter type"  required>
    </div>
    <div class="col-sm-5"><span style="color:red;"><?php if(isset($name_err)) echo $name_err; ?> </span></div>
  </div>
  <div class="form-group">
    <label for="status" class="col-sm-2 control-label">Group Status</label>
    <div class="col-sm-5">
      <select class="form-control"  id="status" name="status"  required>
        <option value="" selected="selected">Select Group Status</option>
        <option value="1" style="color:green;">Active</option>
        <option value="0" style="color:red;">Disable</option>
      </select>
    </div>
    <div class="col-sm-5"><span style="color:red;"><?php if(isset($name_err)) echo $name_err; ?> </span></div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input class="btn btn-success" type="submit" name="add_group" value="Create New group">
    </div>
  </div>
</form>
