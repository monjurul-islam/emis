<!--<button style="float:right; margin:2px;" id="std_by_id" class="btn btn-primary " >Print</button>
-->

<form id="staff_form" class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>profile/edit_staff" > 
 <h2>Staff ID :
    <?php if(isset($staff_id)) echo  $staff_id;?>
  </h2>
  <div class="row" style="background:mediumturquoise;" >
    <div class="col-md-12">
      <h1 align="center"><u>Employee Information</u>
        <hr />
      </h1>
      <div class="form-group">
        <div class="col-sm-12">
          <div class="col-sm-9" >
            <div class="form-group">
              <label for="name" class="col-sm-3 control-label">Name</label>
              <div class="col-sm-8">
                <input    value="<?php if(isset($name)) echo  $name; ?>"  type="name" class="form-control" id="name" name="name" placeholder="Enter Employee Name" required>
                <input    value="<?php echo  $staff_pic; ?>"  type="hidden" class="form-control" id="staff_pic_old" name="staff_pic_old" required>
                <input    value="<?php echo  $id; ?>"  type="hidden" class="form-control" id="id" name="id"  required>
                <input    value="<?php echo  $staff_id; ?>"  type="hidden" class="form-control" id="staff_id" name="staff_id"  required>
              </div>
            </div>
            <div class="form-group">
              <label for="designation" class="col-sm-3 control-label">Designation</label>
              <div class="col-sm-8">
                <input    value="<?php if(isset($designation)) echo  $designation; ?>"  type="name" class="form-control" id="designation" name="designation" placeholder="Enter Employee Designation" required>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">Staff's Picture<br />
              <img src="<?php if(isset($staff_pic)) echo base_url().'assets/pic/'.$staff_pic; ?>" alt="<?php if(isset($staff_pic)) echo  $staff_pic;?>" class="img-thumbnail" style="height:100px; width:125px;">
              <label for="staff_pic"></label>
              <input type="file" id="staff_pic" name="staff_pic" >
            </div>
          </div>
          <div class="form-group">
            <label for="dob" class="col-sm-2 control-label">Date Of Birth</label>
            <div class="col-sm-3">
              <input    value="<?php if(isset($dob)) echo  $dob; ?>"  type="date" class="form-control" id="dob" placeholder="DOB" name="dob" required>
            </div>
            <label for="age" class="col-sm-1 control-label">Age</label>
            <div class="col-sm-2">
              <input    value="<?php if(isset($age)) echo  $age; ?>"  type="name" class="form-control" id="age" placeholder="Age" name="age" required>
            </div>
            <label for="gender" class="col-sm-1 control-label">Gender</label>
            <div class="col-sm-3">
              <select  class="form-control"  id="gender" name="gender"  required>
                <option  selected="selected">
                <?php if(isset($gender)) echo  $gender; ?>
                </option>
                <option value="Male" >Male</option>
                <option value="Female" >Female</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="blood" class="col-sm-2 control-label">Blood</label>
            <div class="col-sm-3">
              <input    value="<?php if(isset($blood)) echo  $blood; ?>"  type="name" class="form-control" id="blood" placeholder="blood" name="blood" required>
            </div>
            <label for="nationality" class="col-sm-1 control-label">Nationality</label>
            <div class="col-sm-2">
              <input    value="<?php if(isset($nationality)) echo  $nationality; ?>"  type="name" class="form-control" id="nationality" placeholder="Nationality" name="nationality" >
            </div>
            <label for="religion" class="col-sm-1 control-label">Religion</label>
            <div class="col-sm-3">
              <select  class="form-control"  id="religion" name="religion"  required>
                <option  selected="selected">
                <?php if(isset($religion)) echo  $religion; ?>
                </option>
                <option>Islam</option>
                <option>Hindu</option>
                <option>Other</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="national_id" class="col-sm-2 control-label">National ID</label>
            <div class="col-sm-3">
              <input    value="<?php if(isset($national_id)) echo  $national_id; ?>"  type="name" class="form-control" id="national_id" placeholder="National Id Number" name="national_id" required>
            </div>
            <label for="mobile" class="col-sm-1 control-label">Mobile</label>
            <div class="col-sm-2">
              <input    value="<?php if(isset($mobile)) echo  $mobile; ?>"  type="name" class="form-control" id="mobile" placeholder="mobile" name="mobile" required>
            </div>
            <label for="email" class="col-sm-1 control-label">Email</label>
            <div class="col-sm-3">
              <input    value="<?php if(isset($email)) echo  $email; ?>"  type="email" class="form-control" id="email" placeholder="email" name="email" >
            </div>
          </div>
          <div class="form-group">
            <label for="present_address" class="col-sm-2 control-label">Present Address</label>
            <div class="col-sm-4">
              <textarea   class="form-control" name="present_address" id="present_address" rows="3" required ><?php if(isset($religion)) echo  $religion; ?>
</textarea>
            </div>
            <label for="permanent_address" class="col-sm-2 control-label">Permanent Address</label>
            <div class="col-sm-4">
              <textarea   class="form-control" name="permanent_address" id="permanent_address" required rows="3" ><?php if(isset($religion)) echo  $religion; ?>
</textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br />
  <div class="row" style="background:yellowgreen;">
    <div class="col-md-12">
      <h1 align="center"><u>Parent's Information</u>
        <hr />
      </h1>
      <h3 align="center"><u>Father</u></h3>
      <div class="form-group">
        <label for="f_name" class="col-sm-2 control-label">Father's Name</label>
        <div class="col-sm-6">
          <input    value="<?php if(isset($f_name)) echo  $f_name; ?>"  type="name" class="form-control" id="f_name" name="f_name" placeholder="Enter Father's Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="f_occu" class="col-sm-2 control-label">Occupation</label>
        <div class="col-sm-4">
          <input    value="<?php if(isset($f_occu)) echo  $f_occu; ?>"  type="name" class="form-control" id="f_occu" placeholder="Enter Occupation" name="f_occu">
        </div>
      </div>
      <div class="form-group">
        <label for="f_national_id" class="col-sm-2 control-label">National ID</label>
        <div class="col-sm-4">
          <input    value="<?php if(isset($f_national_id)) echo  $f_national_id; ?>"  type="name" class="form-control" id="f_national_id" placeholder="Father's National Id Number" name="f_national_id" required>
        </div>
      </div>
      <div class="form-group">
        <label for="f_edu_quali" class="col-sm-2 control-label">Educational Qualification</label>
        <div class="col-sm-6">
          <input    value="<?php if(isset($f_edu_quali)) echo  $f_edu_quali; ?>"  type="name" class="form-control" id="f_edu_quali" placeholder="Father's Educational Qualification" name="f_edu_quali">
        </div>
      </div>
      </h1>
      <h3 align="center"><u>Mother</u></h3>
      <div class="form-group">
        <label for="m_name" class="col-sm-2 control-label">Mother's Name</label>
        <div class="col-sm-6">
          <input    value="<?php if(isset($m_name)) echo  $m_name; ?>"  type="name" class="form-control" id="m_name" name="m_name" placeholder="Enter Mother's Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="m_occu" class="col-sm-2 control-label">Occupation</label>
        <div class="col-sm-4">
          <input    value="<?php if(isset($m_occu)) echo  $m_occu; ?>"  type="name" class="form-control" id="m_occu" placeholder="Enter Occupation" name="m_occu">
        </div>
      </div>
      <div class="form-group">
        <label for="m_national_id" class="col-sm-2 control-label">National ID</label>
        <div class="col-sm-4">
          <input    value="<?php if(isset($m_national_id)) echo  $m_national_id; ?>"  type="name" class="form-control" id="m_national_id" placeholder="Father's National Id Number" name="m_national_id" required>
        </div>
      </div>
      <div class="form-group">
        <label for="m_edu_quali" class="col-sm-2 control-label">Educational Qualification</label>
        <div class="col-sm-6">
          <input    value="<?php if(isset($m_edu_quali)) echo  $m_edu_quali; ?>"  type="name" class="form-control" id="m_edu_quali" placeholder="Father's Educational Qualification" name="m_edu_quali">
        </div>
      </div>
    </div>
  </div>
  <br />
  <div class="row" style="background:powderblue;">
    <div class="col-md-12">
      <h1 align="center"><u>Office Information</u>
        <hr />
      </h1>
      <h3 align="center"><u>School's Information</u></h3>
      <div class="form-group">
        <label for="staff_type" class="col-sm-2 control-label"> Type / Catagory</label>
        <div class="col-sm-5">
          <select  class="form-control"  id="staff_type" name="staff_type"  required>
            <option selected="selected">
            <?php if(isset($staff_type)) echo  $staff_type; ?>
            </option>
            <option value="Teacher">Teacher </option>
            <option value="Admin" >Admin </option>
            <option value="Staff" >Staff </option>
            <option value="Director" >Director </option>
            <option value="Donor" >Donor </option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="working_shift" class="col-sm-2 control-label"> Working Shift</label>
        <div class="col-sm-5">
          <select  class="form-control"  id="working_shift" name="working_shift"  required>
            <option  selected="selected">
            <?php if(isset($working_shift)) echo  $working_shift; ?>
            </option>
            <option value="Morning">Morning </option>
            <option value="Evening" >Evening </option>
            <option value="Full" >Full </option>
            <option value="Other" >Other </option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="timeFrom" class="col-sm-2 control-label"> Working Hour</label>
        <div class="col-sm-2">
          <input  type="text" value="<?php if(isset($start_time)) echo  $start_time; ?>"  id="timeFrom" name="start_time" class="form-control" placeholder="8.00 AM">
        </div>
        <label class=" col-sm-1 control-label" style="width:20px !important;">To</label>
        <div class="col-sm-2">
          <input  type="text" value="<?php if(isset($end_time)) echo  $end_time; ?>"  id="timeTo" name="end_time" class="form-control" placeholder="8.00 PM">
        </div>
      </div>
      <div class="form-group">
        <label for="appointed_for" class="col-sm-2 control-label">Appointed For</label>
        <div class="col-sm-4">
          <input    value="<?php if(isset($appointed_for)) echo  $appointed_for; ?>"  type="name" class="form-control" id="appointed_for" placeholder="Appointed For" name="appointed_for" required>
        </div>
        <label for="designation" class="col-sm-1 control-label">Designation</label>
        <div class="col-sm-4">
          <input    value="<?php if(isset($designation)) echo  $designation; ?>"  type="name" class="form-control" id="designation" placeholder="designation" name="designation" required>
        </div>
      </div>
      <div class="form-group">
        <label for="joinning_date" class="col-sm-2 control-label">Joinning Date</label>
        <div class="col-sm-4">
          <input    value="<?php if(isset($joinning_date)) echo  $joinning_date; ?>"  type="date" class="form-control" id="joinning_date" placeholder="Joinning Date" name="joinning_date" >
        </div>
      </div>
      <div class="form-group">
        <label for="subject" class="col-sm-2 control-label">Subject</label>
        <div class="col-sm-4">
          <input    value="<?php if(isset($subject)) echo  $subject; ?>"  type="name" class="form-control" id="subject" placeholder="subject" name="subject" >
        </div>
        <label for="class" class="col-sm-1 control-label">Class</label>
        <div class="col-sm-4">
          <input    value="<?php if(isset($class)) echo  $class; ?>"  type="name" class="form-control" id="class" placeholder="class" name="class" >
        </div>
      </div>
      <div class="form-group">
        <label for="dept" class="col-sm-2 control-label">Department</label>
        <div class="col-sm-4">
          <input    value="<?php if(isset($dept)) echo  $dept; ?>"  type="name" class="form-control" id="dept" placeholder="dept" name="dept" >
        </div>
        <label for="section" class="col-sm-1 control-label">Section</label>
        <div class="col-sm-4">
          <input    value="<?php if(isset($section)) echo  $section; ?>"  type="name" class="form-control" id="section" placeholder="section" name="section" >
        </div>
      </div>
      <h3 align="center"><u>Bank Information</u></h3>
      <div class="form-group">
        <label for="bank_acc" class="col-sm-2 control-label">Account Number</label>
        <div class="col-sm-4">
          <input    value="<?php if(isset($bank_acc)) echo  $bank_acc; ?>"  type="number" class="form-control" id="bank_acc" name="bank_acc" placeholder="Enter Account Number" required>
        </div>
      </div>
      <div class="form-group">
        <label for="bank_acc_name" class="col-sm-2 control-label">Account Name</label>
        <div class="col-sm-6">
          <input    value="<?php if(isset($bank_acc_name)) echo  $bank_acc_name; ?>"  type="name" class="form-control" id="bank_acc_name" placeholder="Enter Account Name" name="bank_acc_name">
        </div>
      </div>
      <div class="form-group">
        <label for="bank_name" class="col-sm-2 control-label">Bank Name</label>
        <div class="col-sm-4">
          <input    value="<?php if(isset($bank_name)) echo  $bank_name; ?>" type="name" class="form-control" id="bank_name" placeholder="Bank Name" name="bank_name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="bank_branch" class="col-sm-2 control-label">Branch Name</label>
        <div class="col-sm-6">
          <input    value="<?php if(isset($bank_branch)) echo  $bank_branch; ?>"  type="name" class="form-control" id="bank_branch" placeholder="Bnak Branch Name" name="bank_branch">
        </div>
      </div>
      <h3 align="center"><u>Quantam Information</u></h3>
      <div class="form-group">
        <label for="quantan_grad" class="col-sm-2 control-label">Quantam Graduate / Promoter</label>
        <div class="col-sm-4">
          <input    value="<?php if(isset($quantan_grad)) echo  $quantan_grad; ?>"  type="name" class="form-control" id="quantan_grad" name="quantan_grad" placeholder="Quantam Graduate / Promoter ?" required>
        </div>
      </div>
      <div class="form-group">
        <label for="quantam_id" class="col-sm-2 control-label">Graduate ID</label>
        <div class="col-sm-6">
          <input    value="<?php if(isset($quantam_id)) echo  $quantam_id; ?>"  type="name" class="form-control" id="quantam_id" placeholder="Graduate ID" name="quantam_id">
        </div>
      </div>
      <div class="form-group">
        <label for="quan_prom_id" class="col-sm-2 control-label">Promoter ID</label>
        <div class="col-sm-4">
          <input    value="<?php if(isset($quan_prom_id)) echo  $quan_prom_id; ?>" type="name" class="form-control" id="quan_prom_id" placeholder="Promoter ID" name="quan_prom_id" required>
        </div>
      </div>
      <div class="form-group">
        <label for="quan_branch" class="col-sm-2 control-label">Branch/Center</label>
        <div class="col-sm-6">
          <input    value="<?php if(isset($quan_branch)) echo  $quan_branch; ?>"  type="name" class="form-control" id="quan_branch" placeholder="Branch Name" name="quan_branch">
        </div>
      </div>
      <h3 align="center"><u>Other Information</u></h3>
      <div class="form-group">
        <label for="political_inv" class="col-sm-2 control-label">Political Involvment</label>
        <div class="col-sm-2">
          <input    value="<?php if(isset($political_inv)) echo  $political_inv; ?>"  type="name" class="form-control" id="political_inv" name="political_inv" placeholder="Political Involvment ?" >
        </div>
        <label for="political_inv_detail" class="col-sm-1 control-label">Details</label>
        <div class="col-sm-7">
          <input    value="<?php if(isset($political_inv_detail)) echo  $political_inv_detail; ?>"  type="name" class="form-control" id="political_inv_detail" name="political_inv_detail" placeholder="Political Involvment Details" >
        </div>
      </div>
      <div class="form-group">
        <label for="special_qual" class="col-sm-2 control-label">Special Quality</label>
        <div class="col-sm-10">
          <input    value="<?php if(isset($special_qual)) echo  $special_qual; ?>"  type="name" class="form-control" id="special_qual" placeholder="Special Quality" name="special_qual">
        </div>
      </div>
      <div class="form-group">
        <label for="ntrca_exam" class="col-sm-2 control-label">NTRCA Exam Passed</label>
        <div class="col-sm-4">
          <input    value="<?php if(isset($ntrca_exam)) echo  $ntrca_exam; ?>" type="name" class="form-control" id="ntrca_exam" placeholder="NTRCA Exam Passed?" name="ntrca_exam" >
        </div>
      </div>
      <div class="form-group">
        <label for="others" class="col-sm-2 control-label">Others</label>
        <div class="col-sm-10">
          <input    value="<?php if(isset($others)) echo  $others; ?>"  type="name" class="form-control" id="others" placeholder="Other Informations" name="others">
        </div>
      </div>
      
       <div class="form-group">
        <label for="status" class="col-sm-2 control-label">Status</label>
        <div class="col-sm-4">
          <select class="form-control"  id="status" name="status"  required>
            <option value="" >Select Status</option>
            <option <?php if($status==1) echo 'selected="selected"'; ?> value="1">Enable</option>
            <option  <?php if($status==0) echo 'selected="selected"'; ?> value="0">Disable</option>
          </select>
        </div>
      </div>
      
    </div>
  </div>
  <br />
  <div class="form-group">
    <div class="col-sm-9"> </div>
    <input type="submit" class=" btn btn-lg btn-success" id="update_employee_submit" name="update_employee_submit" value="Update Employee" placeholder="Update Employee">
  </div>
</form>
<script type="text/javascript">

jQuery.validator.setDefaults({});
	$( "#staff_form" ).validate({
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
