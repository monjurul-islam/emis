<?php if(isset($msg)) echo '<h3>'.$msg.'</h3>'; ?>

<h2>
  <?php if(isset($form_title)) echo $form_title; ?>
</h2>
<form id="student_form" class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>profile/add_staff" >
  <div class="row" style="background:mediumturquoise;">
    <div class="col-md-12">
      <h1 align="center"><u>Employee Information</u>
        <hr />
      </h1>
      <div class="form-group">
        <label for="staff_type" class="col-sm-2 control-label"> Type / Catagory</label>
        <div class="col-sm-5">
          <select class="form-control"  id="staff_type" name="staff_type"  required>
            <option value="" selected="selected">Select Employee Type </option>
            <option value="Teacher">Teacher </option>
            <option value="Admin" >Admin </option>
            <option value="Staff" >Staff </option>
            <option value="Director" >Director </option>
            <option value="Donor" >Donor </option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="shift" class="col-sm-2 control-label"> Working Shift</label>
        <div class="col-sm-5">
          <select class="form-control"  id="shift" name="shift"  required>
            <option value="" selected="selected">Select Working Shift </option>
            <option value="Morning">Morning </option>
            <option value="Evening" >Evening </option>
            <option value="Full" >Full </option>
            <option value="Other" >Other </option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="hour" class="col-sm-2 control-label"> Working Hour</label>
        <div class="col-sm-2">
		<input type="text" id="timeFrom" class="form-control">
        </div>
        <label class=" col-sm-1 control-label" style="width:20px !important;">To</label>
         <div class="col-sm-2">
        <input type="text" id="timeTo" class="form-control" >
       </div> 
      </div>
      <div class="form-group">
        <label for="designation" class="col-sm-2 control-label">Designation</label>
        <div class="col-sm-6">
          <input   value="<?php if(isset($designation)) echo  $designation; ?>"  type="name" class="form-control" id="designation" name="designation" placeholder="Enter Employee Designation" required>
        </div>
      </div>
      <div class="form-group">
        <label for="dob" class="col-sm-2 control-label">Date Of Birth</label>
        <div class="col-sm-3">
          <input   value="<?php if(isset($dob)) echo  $dob; ?>"  type="date" class="form-control" id="dob" placeholder="DOB" name="dob" required>
        </div>
        <label for="age" class="col-sm-1 control-label">Age</label>
        <div class="col-sm-2">
          <input   value="<?php if(isset($age)) echo  $age; ?>"  type="name" class="form-control" id="age" placeholder="Age" name="age" required>
        </div>
        <label for="gender" class="col-sm-1 control-label">Gender</label>
        <div class="col-sm-3">
          <select class="form-control"  id="gender" name="gender"  required>
            <option value="" selected="selected">Select Gender</option>
            <option value="Male" >Male</option>
            <option value="Female" >Female</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="blood" class="col-sm-2 control-label">Blood</label>
        <div class="col-sm-3">
          <input   value="<?php if(isset($blood)) echo  $blood; ?>"  type="name" class="form-control" id="blood" placeholder="blood" name="blood" required>
        </div>
        <label for="nationality" class="col-sm-1 control-label">Nationality</label>
        <div class="col-sm-2">
          <input   value="<?php if(isset($nationality)) echo  $nationality; ?>"  type="name" class="form-control" id="nationality" placeholder="Nationality" name="nationality" >
        </div>
        <label for="religion" class="col-sm-1 control-label">Religion</label>
        <div class="col-sm-3">
          <select class="form-control"  id="religion" name="religion"  required>
            <option value="" selected="selected">Select Religion</option>
            <option>Islam</option>
            <option>Hindu</option>
            <option>Other</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="present_address" class="col-sm-2 control-label">Present Address</label>
        <div class="col-sm-4">
          <textarea  class="form-control" name="present_address" id="present_address" rows="3" required ></textarea>
        </div>
        <label for="permanent_address" class="col-sm-2 control-label">Permanent Address</label>
        <div class="col-sm-4">
          <textarea  class="form-control" name="permanent_address" id="permanent_address" required rows="3" ></textarea>
        </div>
      </div>
    </div>
  </div>
  <br />
  <div class="row" style="background:skyblue;">
    <div class="col-md-12">
      <h1 align="center"><u>Upload Images</u>
        <hr />
      </h1>
      <div class="form-group" style="overflow:hidden;">
        <div class="col-sm-3">
          <label for="std_pic">Student's Picture</label>
          <input type="file" id="std_pic" name="std_pic"  required>
          <p class="help-block">Please Select Student's Picture.</p>
        </div>
        <div class="col-sm-3">
          <label for="std_pic">Father's Picture</label>
          <input type="file" id="f_pic" name="f_pic"  required>
          <p class="help-block">Please Select Father's Picture.</p>
        </div>
        <div class="col-sm-3">
          <label for="std_pic">Mother's Picture</label>
          <input type="file" id="m_pic" name="m_pic"  required>
          <p class="help-block">Please Select Mother's Picture.</p>
        </div>
        <div class="col-sm-2">
          <label for="std_pic">Guardian's Picture</label>
          <input type="file" id="g_1_pic" name="g_1_pic"  >
          <p class="help-block">Please Select Guardian's Picture.</p>
        </div>
      </div>
    </div>
  </div>
  <br />
  <div class="form-group">
    <div class="col-sm-9"> </div>
    <div class="col-sm-3">
      <input type="submit" class=" btn btn-lg btn-success" id="add_student_submit" name="add_student_submit" value="<?php if(isset($submit_text)) echo  $submit_text; ?>" placeholder="Add New Student">
    </div>
  </div>
</form>
<script type="text/javascript">

jQuery.validator.setDefaults({});
	$( "#student_form" ).validate({
		rules: {
			password: "required",
			password_confirm: {
			equalTo: "#password"
			}
		}
	});
	
	
$(function () {
	$('#timeFrom').timeEntry();
	$('#timeTo').timeEntry();
});




</script> 
