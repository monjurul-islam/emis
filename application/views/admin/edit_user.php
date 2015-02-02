<!--/**
 * Edit user form
 *
 * form for Editing user
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h2>Edit New User <a style=" font-size:medium;float:right;" href="<?php echo base_url();?>admin/user">View All</a></h2>
<hr/>
<form class="form-horizontal" method="post" action="" id="edit_user">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">User Name</label>
    <div class="col-sm-5">
    	<input type="hidden" value="<?php echo $this->uri->segment(3,0); ?>" name="id" />
      <input type="text" size="50" class="form-control" id="name" name="username" value="<?php echo $qry_row->username;?>" placeholder="Enter User Name" required>
    </div>
    <div class="col-sm-5"><span style="color:red;">
      <?php if(isset($name_err)) echo $name_err; ?>
      </span></div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">New Password</label>
    <div class="col-sm-5">
      <input id="password" name="password" type="password" maxlength="50" value="" class="form-control" required>
    </div>
    <div class="col-sm-5"><span style="color:red;" class="status">
      <?php if(isset($name_err)) echo $name_err; ?>
      </span></div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Confirm Password</label>
    <div class="col-sm-5">
      <input id="password_confirm" name="password_confirm" type="password" maxlength="50" value="" class="form-control" required>
    </div>
  </div>
  <div class="form-group">
    <label for="type" class="col-sm-2 control-label">User Email</label>
    <div class="col-sm-5">
      <input type="email" size="50" class="form-control" id="email" name="email" value="<?php echo $qry_row->email;?>" placeholder="Enter Email"  required>
    </div>
  </div>
  <div class="form-group">
    <label for="activated" class="col-sm-2 control-label">User Status</label>
    <div class="col-sm-5">
      <select class="form-control"  id="activated" name="activated"  required>
        <option value="" selected="selected">Select User Status</option>
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
      <input class="btn btn-success" type="submit" name="update_user" value="Update User">
    </div>
  </div>
</form>
<script>
// just for the demos, avoids form submit
jQuery.validator.setDefaults({
});
$( "#edit_user" ).validate({
rules: {
password: "required",
password_confirm: {
equalTo: "#password"
}
}
});
</script> 
