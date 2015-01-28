<!--/**
 * Add module form
 *
 * form for adding new module
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h2>Add New Module</h2>
<hr/>
<form class="form-horizontal" method="post" action="">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Module Name</label>
    <div class="col-sm-5">
      <input type="text" size="50" class="form-control" id="name" name="name" placeholder="Enter Name" required>
    </div>
    <div class="col-sm-5"><span style="color:red;"><?php if(isset($name_err)) echo $name_err; ?> </span></div>
  </div>
  <div class="form-group">
    <label for="type" class="col-sm-2 control-label">Module Type</label>
    <div class="col-sm-5">
      <input type="text" size="50" class="form-control" id="type" name="type" placeholder="Enter type"  required>
    </div>
    <div class="col-sm-5"><span style="color:red;"><?php if(isset($name_err)) echo $name_err; ?> </span></div>
  </div>
  <div class="form-group">
    <label for="url_alias" class="col-sm-2 control-label">Module Url Alies/File Name</label>
    <div class="col-sm-5">
      <input type="text" size="50" class="form-control" id="url_alias" name="url_alias" placeholder="Enter Url Alies/File Name"  required>
    </div>
    <div class="col-sm-5"><span style="color:red;"><?php if(isset($name_err)) echo $name_err; ?> </span></div>
  </div>
  <div class="form-group">
    <label for="status" class="col-sm-2 control-label">Module Status</label>
    <div class="col-sm-5">
      <select class="form-control"  id="status" name="status"  required>
        <option value="" selected="selected">Select Module Status</option>
        <option value="1" style="color:green;">Active</option>
        <option value="0" style="color:red;">Disable</option>
      </select>
    </div>
    <div class="col-sm-5"><span style="color:red;"><?php if(isset($name_err)) echo $name_err; ?> </span></div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input class="btn btn-success" type="submit" name="add_module" value="Create New Module">
    </div>
  </div>
</form>
