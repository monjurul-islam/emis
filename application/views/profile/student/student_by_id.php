<!--<button style="float:right; margin:2px;" id="std_by_id" class="btn btn-primary " >Print</button>
-->
<form id="student_form" class="form-horizontal" style=" cursor:text !important;" >
  <h2>Student ID :
    <?php if(isset($std_id)) echo  $std_id;?>
  </h2>
  <div class="row" style="background:mediumturquoise;">
    <div class="col-md-12">
      <h1 align="center"><u>Students Information</u>
        <hr />
      </h1>
      <div class="form-group" style="background:powderblue;">
        <label for="class_struct" class="col-sm-2 control-label">
        <h4>Class Structure</h4>
        </label>
        <div class="col-sm-10">
          <?php if(isset($id)) echo  $this->m_common->get_active_class_structure_by_std_id($id);?>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="col-sm-8">
          <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Students Name</label>
            <div class="col-sm-9">
              <input  disabled value="<?php if(isset($name)) echo  $name; ?>"  type="name" class="form-control" id="name" name="name"  required>
            </div>
          </div>
          <div class="form-group">
            <label for="name_in_bangla" class="col-sm-3 control-label">Students Name (In Bangla)</label>
            <div class="col-sm-9">
              <input  disabled value="<?php if(isset($name_in_bangla)) echo  $name_in_bangla; ?>"  type="name" class="form-control" id="name_in_bangla" name="name_in_bangla" >
            </div>
          </div>
          <div class="form-group">
            <label for="rfid_no" class="col-sm-3 control-label">Card Number</label>
            <div class="col-sm-9">
              <input disabled value="<?php if(isset($rfid_no)) echo  $rfid_no; ?>"  type="name" class="form-control" id="rfid_no" name="rfid_no" placeholder="Enter RFID NO." required>
            </div>
          </div>
          <div class="form-group">
            <label for="dob" class="col-sm-3 control-label">Date Of Birth</label>
            <div class="col-sm-4">
              <input  disabled value="<?php if(isset($dob)) echo  $dob; ?>"  type="date" class="form-control" id="dob" "DOB" name="dob" required>
            </div>
            <label for="age" class="col-sm-1 control-label">Age</label>
            <div class="col-sm-4">
              <input style="visibility:hidden;"  disabled value="<?php if(isset($age)) echo  $age; ?>"  type="name" class="form-control" id="age" "Age" name="age" required>
            </div>
          </div>
          <div class="form-group">
            <label for="gender" class="col-sm-3 control-label">Gender</label>
            <div class="col-sm-4">
              <select disabled class="form-control"  id="gender" name="gender"  required>
                <option value="" selected="selected">
                <?php if(isset($gender)) echo  $gender; ?>
                </option>
                <option value="Male" >Male</option>
                <option value="Female" >Female</option>
              </select>
            </div>
            <label for="blood" class="col-sm-1 control-label">Blood</label>
            <div class="col-sm-4">
              <input  disabled value="<?php if(isset($blood)) echo  $blood; ?>"  type="name" class="form-control" id="blood" "blood" name="blood" required>
            </div>
          </div>
          <div class="form-group">
            <label for="nationality" class="col-sm-3 control-label">Nationality</label>
            <div class="col-sm-4">
              <input  disabled value="<?php if(isset($nationality)) echo  $nationality; ?>"  type="name" class="form-control" id="nationality" "Nationality" name="nationality" >
            </div>
            <label for="religion" class="col-sm-1 control-label">Religion</label>
            <div class="col-sm-4">
              <select disabled class="form-control"  id="religion" name="religion"  required>
                <option value="" selected="selected">
                <?php if(isset($religion)) echo  $religion; ?>
                </option>
                <option>Islam</option>
                <option>Hindu</option>
                <option>Other</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm-4"><img src="<?php if(isset($std_pic)) echo base_url().'assets/pic/'.$std_pic; ?>" alt="<?php if(isset($std_id)) echo  $std_id;?>" class="img-thumbnail" style=" height:240px; "></div>
      </div>
      <div class="form-group">
        <label for="present_address" class="col-sm-2 control-label">Present Address</label>
        <div class="col-sm-4">
          <textarea disabled  class="form-control" name="present_address" id="present_address" rows="3" required ><?php if(isset($present_address)) echo  $present_address; ?>
</textarea>
        </div>
        <label for="permanent_address" class="col-sm-2 control-label">Permanent Address</label>
        <div class="col-sm-4">
          <textarea disabled  class="form-control" name="permanent_address" id="permanent_address" required rows="3" ><?php if(isset($permanent_address)) echo  $permanent_address; ?>
</textarea>
        </div>
      </div>
    </div>
  </div>
  <br />
  <div class="row" style="background:mediumturquoise;">
    <div class="col-md-12">
      <h1 align="center"><u>Previous Study(If Applicable)</u>
        <hr />
      </h1>
      <div class="form-group">
        <label for="previous_school" class="col-sm-2 control-label">Name of the School</label>
        <div class="col-sm-10">
          <input  disabled value="<?php if(isset($previous_school)) echo  $previous_school; ?>"  type="name" class="form-control" id="previous_school" name="previous_school" >
        </div>
      </div>
      <div class="form-group">
        <label for="previous_school_address" class="col-sm-2 control-label">Address</label>
        <div class="col-sm-10">
          <textarea disabled class="form-control" id="previous_school_address" name="previous_school_address" "Enter School's Address" ><?php if(isset($previous_school_address)) echo  $previous_school_address; ?>
</textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="previous_school_phone" class="col-sm-2 control-label">Phone</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($previous_school_phone)) echo  $previous_school_phone; ?>"  type="text" class="form-control" id="previous_school_phone" name="previous_school_phone" "Enter Phone Number">
        </div>
        <label for="previous_school_email" class="col-sm-2 control-label">E-mail</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($previous_school_email)) echo  $previous_school_email; ?>"  type="email" class="form-control" id="previous_school_email" name="previous_school_email" "Enter Email Address">
        </div>
      </div>
      <div class="form-group">
        <label for="previous_school_last_class" class="col-sm-2 control-label">Last Grade/Class</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($previous_school_last_class)) echo  $previous_school_last_class; ?>"  type="text" class="form-control" id="previous_school_last_class" name="previous_school_last_class" "Enter Last Class">
        </div>
        <label for="previous_school_result" class="col-sm-2 control-label">Annual Assessment / Percentage of Marks</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($name)) echo  $previous_school_result; ?>"  type="name" class="form-control" id="previous_school_result" name="previous_school_result" "Enter Annual Assesment/Marks">
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
          <input disabled value="<?php if(isset($f_name)) echo  $f_name; ?>"  type="name" class="form-control" id="f_name" name="f_name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="f_name_in_bangla" class="col-sm-2 control-label">Father's Name(in Bangla)</label>
        <div class="col-sm-6">
          <input  disabled value="<?php if(isset($f_name_in_bangla)) echo  $f_name_in_bangla; ?>"  type="name" class="form-control" id="f_name_in_bangla" name="f_name_in_bangla" >
        </div>
      </div>
      <div class="form-group">
        <label for="f_nationality" class="col-sm-2 control-label">Nationality</label>
        <div class="col-sm-3">
          <input  disabled value="<?php if(isset($f_nationality)) echo  $f_nationality; ?>"  type="name" class="form-control" id="f_nationality" "Enter Nationality" name="f_nationality">
        </div>
        <label for="f_national_id" class="col-sm-2 control-label">National ID</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($f_national_id)) echo  $f_national_id; ?>"  type="name" class="form-control" id="f_national_id" "Father's National Id Number" name="f_national_id" required>
        </div>
      </div>
      <div class="form-group">
        <label for="f_religion" class="col-sm-2 control-label">Religion</label>
        <div class="col-sm-3">
          <select disabled class="form-control"  id="f_religion" name="f_religion"  required>
            <option value="" selected="selected">
            <?php if(isset($f_religion)) echo  $f_religion; ?>
            </option>
            <option>Islam</option>
            <option>Hindu</option>
            <option>Other</option>
          </select>
        </div>
        <label for="f_edu_quali" class="col-sm-2 control-label">Educational Qualification</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($f_edu_quali)) echo  $f_edu_quali; ?>"  type="name" class="form-control" id="f_edu_quali" "Father's Educational Qualification" name="f_edu_quali">
        </div>
      </div>
      <div class="form-group">
        <label for="f_profession" class="col-sm-2 control-label">Father's Profession</label>
        <div class="col-sm-6">
          <input  disabled value="<?php if(isset($f_profession)) echo  $f_profession; ?>"  type="name" class="form-control" id="f_profession" name="f_profession" "Enter Father's Profession" required>
        </div>
      </div>
      <div class="form-group">
        <label for="f_organisation" class="col-sm-2 control-label">Father's Organisation</label>
        <div class="col-sm-6">
          <input  disabled value="<?php if(isset($f_organisation)) echo  $f_organisation; ?>"  type="name" class="form-control" id="f_organisation" name="f_organisation" "Enter Father's Organisation">
        </div>
      </div>
      <div class="form-group">
        <label for="f_designation" class="col-sm-2 control-label">Father's Designation</label>
        <div class="col-sm-5">
          <input  disabled value="<?php if(isset($f_designation)) echo  $f_designation; ?>"  type="name" class="form-control" id="f_designation" name="f_designation" "Enter Father's Designation">
        </div>
        <label for="f_income" class="col-sm-2 control-label">Father's Yearly Income(BDT)</label>
        <div class="col-sm-3">
          <input  disabled value="<?php if(isset($f_income)) echo  $f_income; ?>"  type="name" class="form-control" id="f_income" name="f_income" "Father's Yearly Income" required>
        </div>
      </div>
      <div class="form-group">
        <label for="f_present_address" class="col-sm-2 control-label">Present Address</label>
        <div class="col-sm-4">
          <textarea disabled  class="form-control" name="f_present_address" id="f_present_address" rows="3" required><?php if(isset($f_present_address)) echo  $f_present_address; ?>
</textarea>
        </div>
        <label for="f_permanent_address" class="col-sm-2 control-label">Permanent Address</label>
        <div class="col-sm-4">
          <textarea disabled  class="form-control" name="f_permanent_address" id="f_permanent_address" rows="3" required><?php if(isset($f_permanent_address)) echo  $f_permanent_address; ?>
</textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="f_phone" class="col-sm-2 control-label">Phone</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($f_phone)) echo  $f_phone; ?>"  type="text" class="form-control" id="f_phone" name="f_phone" "Enter Phone Number">
        </div>
        <label for="f_mobile" class="col-sm-2 control-label">Mobile</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($f_mobile)) echo  $f_mobile; ?>"  type="text" class="form-control" id="f_mobile" name="f_mobile" "Enter Mobile Number" required>
        </div>
      </div>
      <div class="form-group">
        <label for="f_email" class="col-sm-2 control-label">E-mail</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($f_email)) echo  $f_email; ?>"  type="email" class="form-control" id="f_email" name="f_email" "Enter Email Address">
        </div>
        <label for="f_blood" class="col-sm-2 control-label">Blood</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($f_blood)) echo  $f_blood; ?>"  type="name" class="form-control" id="f_blood" "blood" name="f_blood" required>
        </div>
      </div>
      <h3 align="center"><u>Mother</u></h3>
      <div class="form-group">
        <label for="m_name" class="col-sm-2 control-label">Mother's Name</label>
        <div class="col-sm-6">
          <input  disabled value="<?php if(isset($m_name)) echo  $m_name; ?>"  type="name" class="form-control" id="m_name" name="m_name" "Enter Mother's Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="m_name_in_bangla" class="col-sm-2 control-label">Mother's Name(in Bangla)</label>
        <div class="col-sm-6">
          <input  disabled value="<?php if(isset($m_name_in_bangla)) echo  $m_name_in_bangla; ?>"  type="name" class="form-control" id="m_name_in_bangla" name="m_name_in_bangla" "Enter Mother's Name in Bangla">
        </div>
      </div>
      <div class="form-group">
        <label for="m_nationality" class="col-sm-2 control-label">Nationality</label>
        <div class="col-sm-3">
          <input  disabled value="<?php if(isset($m_nationality)) echo  $m_nationality; ?>"  type="name" class="form-control" id="m_nationality" "Enter Nationality" name="m_nationality">
        </div>
        <label for="m_national_id" class="col-sm-2 control-label">National ID</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($m_national_id)) echo  $m_national_id; ?>"  type="name" class="form-control" id="m_national_id" "Mother's National Id Number" name="m_national_id">
        </div>
      </div>
      <div class="form-group">
        <label for="m_religion" class="col-sm-2 control-label">Religion</label>
        <div class="col-sm-3">
          <select disabled class="form-control"  id="m_religion" name="m_religion"  required>
            <option value="" selected="selected">
            <?php if(isset($m_religion)) echo  $m_religion; ?>
            </option>
            <option>Islam</option>
            <option>Hindu</option>
            <option>Other</option>
          </select>
        </div>
        <label for="m_edu_quali" class="col-sm-2 control-label">Educational Qualification</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($m_edu_quali)) echo  $m_edu_quali; ?>"  type="name" class="form-control" id="m_edu_quali" "Mother's Educational Qualification" name="m_edu_quali">
        </div>
      </div>
      <div class="form-group">
        <label for="m_profession" class="col-sm-2 control-label">Mother's Profession</label>
        <div class="col-sm-6">
          <input  disabled value="<?php if(isset($m_profession)) echo  $m_profession; ?>"  type="name" class="form-control" id="m_profession" name="m_profession" "Enter Mother's Profession" required>
        </div>
      </div>
      <div class="form-group">
        <label for="m_organisation" class="col-sm-2 control-label">Mother's Organisation</label>
        <div class="col-sm-6">
          <input  disabled value="<?php if(isset($m_organisation)) echo  $m_organisation; ?>"  type="name" class="form-control" id="m_organisation" name="m_organisation" "Enter Mother's Organisation">
        </div>
      </div>
      <div class="form-group">
        <label for="m_designation" class="col-sm-2 control-label">Mother's Designation</label>
        <div class="col-sm-5">
          <input  disabled value="<?php if(isset($m_designation)) echo  $m_designation; ?>"  type="name" class="form-control" id="m_designation" name="m_designation" "Enter Mother's Designation">
        </div>
        <label for="m_income" class="col-sm-2 control-label">Mother's Yearly Income(BDT)</label>
        <div class="col-sm-3">
          <input  disabled value="<?php if(isset($m_income)) echo  $m_income; ?>"  type="name" class="form-control" id="m_income" name="m_income" "Mother's Yearly Income" required>
        </div>
      </div>
      <div class="form-group">
        <label for="m_present_address" class="col-sm-2 control-label">Present Address</label>
        <div class="col-sm-4">
          <textarea disabled  class="form-control" name="m_present_address" id="m_present_address" rows="3" required ><?php if(isset($m_present_address)) echo  $m_present_address; ?>
</textarea>
        </div>
        <label for="m_permanent_address" class="col-sm-2 control-label">Permanent Address</label>
        <div class="col-sm-4">
          <textarea disabled  class="form-control" name="m_permanent_address" id="m_permanent_address" rows="3" required ><?php if(isset($m_permanent_address)) echo  $m_permanent_address; ?>
</textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="m_phone" class="col-sm-2 control-label">Phone</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($m_phone)) echo  $m_phone; ?>"  type="text" class="form-control" id="m_phone" name="m_phone" "Enter Phone Number">
        </div>
        <label for="m_mobile" class="col-sm-2 control-label">Mobile</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($m_mobile)) echo  $m_mobile; ?>"  type="text" class="form-control" id="m_mobile" name="m_mobile" "Enter Mobile Number" required>
        </div>
      </div>
      <div class="form-group">
        <label for="m_email" class="col-sm-2 control-label">E-mail</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($m_email)) echo  $m_email; ?>"  type="email" class="form-control" id="m_email" name="m_email" "Enter Email Address">
        </div>
        <label for="m_blood" class="col-sm-2 control-label">Blood</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($m_blood)) echo  $m_blood; ?>"  type="name" class="form-control" id="m_blood" "blood" name="m_blood" required>
        </div>
      </div>
    </div>
  </div>
  <br />
  <div class="row" style="background:whitesmoke;">
    <div class="col-md-12">
      <h1 align="center"><u>Local Guardian or Others</u>
        <hr />
      </h1>
      <h3 align="center"><u>1'st Guardian</u></h3>
      <div class="form-group">
        <label for="g_1_name" class="col-sm-2 control-label">Guardian's Name</label>
        <div class="col-sm-6">
          <input  disabled value="<?php if(isset($g_1_name)) echo  $g_1_name; ?>"  type="name" class="form-control" id="g_1_name" name="g_1_name" "Enter Guardian's Name">
        </div>
      </div>
      <div class="form-group">
        <label for="g_1_name_in_bangla" class="col-sm-2 control-label">Guardian's Name(in Bangla)</label>
        <div class="col-sm-6">
          <input  disabled value="<?php if(isset($g_1_name_in_bangla)) echo  $g_1_name_in_bangla; ?>"  type="name" class="form-control" id="g_1_name_in_bangla" name="g_1_name_in_bangla" "Enter Guardian's Name in Bangla">
        </div>
      </div>
      <div class="form-group">
        <label for="g_1_relation" class="col-sm-2 control-label">Relation With Student</label>
        <div class="col-sm-6">
          <input  disabled value="<?php if(isset($g_1_relation)) echo  $g_1_relation; ?>"  type="name" class="form-control" id="g_1_relation" "Relation With Student" name="g_1_relation">
        </div>
      </div>
      <div class="form-group">
        <label for="g_1_national_id" class="col-sm-2 control-label">National ID</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($g_1_national_id)) echo  $g_1_national_id; ?>"  type="name" class="form-control" id="g_1_national_id" "Guardian's National Id Number" name="g_1_national_id">
        </div>
      </div>
      <div class="form-group">
        <label for="g_1_profession" class="col-sm-2 control-label">Guardian's Profession</label>
        <div class="col-sm-6">
          <input  disabled value="<?php if(isset($g_1_profession)) echo  $g_1_profession; ?>"  type="name" class="form-control" id="g_1_profession" name="g_1_profession" "Enter Guardian's Profession">
        </div>
      </div>
      <div class="form-group">
        <label for="g_1_address" class="col-sm-2 control-label">Address</label>
        <div class="col-sm-6">
          <textarea disabled  class="form-control" name="g_1_address" id="g_1_address" rows="3" ><?php if(isset($g_1_address)) echo  $g_1_address; ?>
</textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="g_1_phone" class="col-sm-2 control-label">Phone</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($g_1_phone)) echo  $g_1_phone; ?>"  type="text" class="form-control" id="g_1_phone" name="g_1_phone" "Enter Phone Number">
        </div>
        <label for="g_1_mobile" class="col-sm-2 control-label">Mobile</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($g_1_mobile)) echo  $g_1_mobile; ?>"  type="text" class="form-control" id="g_1_mobile" name="g_1_mobile" "Enter Mobile Number">
        </div>
      </div>
      <div class="form-group">
        <label for="g_1_email" class="col-sm-2 control-label">E-mail</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($g_1_email)) echo  $g_1_email; ?>"  type="email" class="form-control" id="g_1_email" name="g_1_email" "Enter Email Address">
        </div>
        <label for="g_1_blood" class="col-sm-2 control-label">Blood</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($g_1_blood)) echo  $g_1_blood; ?>"  type="name" class="form-control" id="g_1_blood" "blood" name="g_1_blood">
        </div>
      </div>
      <h3 align="center"><u>2'nd Guardian</u></h3>
      <div class="form-group">
        <label for="g_2_name" class="col-sm-2 control-label">Guardian's Name</label>
        <div class="col-sm-6">
          <input  disabled value="<?php if(isset($g_2_name)) echo  $g_2_name; ?>"  type="name" class="form-control" id="g_2_name" name="g_2_name" "Enter Guardian's Name">
        </div>
      </div>
      <div class="form-group">
        <label for="g_2_name_in_bangla" class="col-sm-2 control-label">Guardian's Name(in Bangla)</label>
        <div class="col-sm-6">
          <input  disabled value="<?php if(isset($g_2_name_in_bangla)) echo  $g_2_name_in_bangla; ?>"  type="name" class="form-control" id="g_2_name_in_bangla" name="g_2_name_in_bangla" "Enter Guardian's Name in Bangla">
        </div>
      </div>
      <div class="form-group">
        <label for="g_2_relation" class="col-sm-2 control-label">Relation With Student</label>
        <div class="col-sm-6">
          <input  disabled value="<?php if(isset($g_2_relation)) echo  $g_2_relation; ?>"  type="name" class="form-control" id="g_2_relation" "Relation With Student" name="g_2_relation">
        </div>
      </div>
      <div class="form-group">
        <label for="g_2_national_id" class="col-sm-2 control-label">National ID</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($g_2_national_id)) echo  $g_2_national_id; ?>"  type="name" class="form-control" id="g_2_national_id" "Guardian's National Id Number" name="g_2_national_id">
        </div>
      </div>
      <div class="form-group">
        <label for="g_2_profession" class="col-sm-2 control-label">Guardian's Profession</label>
        <div class="col-sm-6">
          <input  disabled value="<?php if(isset($g_2_profession)) echo  $g_2_profession; ?>"  type="name" class="form-control" id="g_2_profession" name="g_2_profession" "Enter Guardian's Profession">
        </div>
      </div>
      <div class="form-group">
        <label for="g_2_address" class="col-sm-2 control-label">Address</label>
        <div class="col-sm-6">
          <textarea disabled  class="form-control" name="g_2_address" id="g_2_address" rows="3" ><?php if(isset($g_2_address)) echo  $g_2_address; ?>
</textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="g_2_phone" class="col-sm-2 control-label">Phone</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($g_2_phone)) echo  $g_2_phone; ?>"  type="text" class="form-control" id="g_2_phone" name="g_2_phone" "Enter Phone Number">
        </div>
        <label for="g_2_mobile" class="col-sm-2 control-label">Mobile</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($g_2_mobile)) echo  $g_2_mobile; ?>"  type="text" class="form-control" id="g_2_mobile" name="g_2_mobile" "Enter Mobile Number">
        </div>
      </div>
      <div class="form-group">
        <label for="g_2_email" class="col-sm-2 control-label">E-mail</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($g_2_email)) echo  $g_2_email; ?>"  type="email" class="form-control" id="g_2_email" name="g_2_email" "Enter Email Address">
        </div>
        <label for="g_2_blood" class="col-sm-2 control-label">Blood</label>
        <div class="col-sm-4">
          <input  disabled value="<?php if(isset($g_2_blood)) echo  $g_2_blood; ?>"  type="name" class="form-control" id="g_2_blood" "blood" name="g_2_blood">
        </div>
      </div>
    </div>
  </div>
  <br />
  <div class="row" style="background:tan;">
    <div class="col-md-12">
      <h1 align="center"><u>Admission Information</u>
        <hr />
      </h1>
      <h3 align="center"><u>Obtained Marks</u></h3>
      <div class="form-group">
        <label for="adm_written_mark" class="col-sm-1 control-label">Writen</label>
        <div class="col-sm-2">
          <input  disabled value="<?php if(isset($adm_written_mark)) echo  $adm_written_mark; ?>"  type="number" class="form-control" id="adm_written_mark" name="adm_written_mark" "Written Marks" required>
        </div>
        <label for="adm_student_viva_mark" class="col-sm-1 control-label">Student's Viva</label>
        <div class="col-sm-2">
          <input  disabled value="<?php if(isset($adm_student_viva_mark)) echo  $adm_student_viva_mark; ?>"  type="number" class="form-control" id="adm_student_viva_mark" "Viva Marks" name="adm_student_viva_mark" required>
        </div>
        <label for="adm_parents_viva_mark" class="col-sm-1 control-label">Parents's Viva</label>
        <div class="col-sm-2">
          <input  disabled value="<?php if(isset($adm_parents_viva_mark)) echo  $adm_parents_viva_mark; ?>"  type="number" class="form-control" id="adm_parents_viva_mark" "Viva Marks" name="adm_parents_viva_mark" required>
        </div>
        <label for="adm_medical_test_mark" class="col-sm-1 control-label">Medical Test</label>
        <div class="col-sm-2">
          <input  disabled value="<?php if(isset($adm_medical_test_mark)) echo  $adm_medical_test_mark; ?>"  type="number" class="form-control" id="adm_medical_test_mark" "Medical Test" name="adm_medical_test_mark" required>
        </div>
      </div>
      <div class="form-group">
        <label for="adm_physical_test_mark" class="col-sm-1 control-label">Physical Test</label>
        <div class="col-sm-2">
          <input  disabled value="<?php if(isset($adm_physical_test_mark)) echo  $adm_physical_test_mark; ?>"  type="number" class="form-control" id="adm_physical_test_mark" name="adm_physical_test_mark" "Physical Test" required>
        </div>
        <label for="adm_total_mark" class="col-sm-2 control-label">Total Marks</label>
        <div class="col-sm-3">
          <input  disabled value="<?php if(isset($adm_total_mark)) echo  $adm_total_mark; ?>"  type="number" class="form-control" id="adm_total_mark" "Total Marks" name="adm_total_mark" required>
        </div>
        <label for="adm_outof_mark" class="col-sm-1 control-label">Out Of Mark</label>
        <div class="col-sm-3">
          <input  disabled value="<?php if(isset($adm_outof_mark)) echo  $adm_outof_mark; ?>"  type="number" class="form-control" id="adm_outof_mark" "Out Of Mark" name="adm_outof_mark" required>
        </div>
      </div>
      <div class="form-group">
        <label for="adm_fee" class="col-sm-1 control-label">Admission Fee(BDT)</label>
        <div class="col-sm-2">
          <input  disabled value="<?php if(isset($adm_fee)) echo  $adm_fee; ?>"  type="number" class="form-control" id="adm_fee" name="adm_fee" "Admission Fee" required>
        </div>
        <label for="adm_prime_bank_branch" class="col-sm-2 control-label">Prime Bank(Branch)</label>
        <div class="col-sm-3">
          <input  disabled value="<?php if(isset($adm_prime_bank_branch)) echo  $adm_prime_bank_branch; ?>"  type="name" class="form-control" id="adm_prime_bank_branch" "Prime Bank(Branch)" name="adm_prime_bank_branch" required>
        </div>
        <label for="adm_date" class="col-sm-1 control-label">Admission Date</label>
        <div class="col-sm-3">
          <input  disabled value="<?php if(isset($adm_date)) echo  $adm_date; ?>"  type="date" class="form-control" id="adm_date" "Admission Date" name="adm_date" required>
        </div>
      </div>
    </div>
  </div>
  <div class="row" style="background:skyblue;">
    <div class="col-md-12">
      <h1 align="center"><u>Images</u>
        <hr />
      </h1>
      <div class="form-group" style="overflow:hidden;">
        <div class="col-sm-3">
          <label for="std_pic">Student's Picture</label>
          <img src="<?php if(isset($std_pic)) echo base_url().'assets/pic/'.$std_pic; ?>" alt="<?php if(isset($std_id)) echo  $std_id;?>" class="img-thumbnail" style="height:170px; width:170px;"> </div>
        <div class="col-sm-3">
          <label for="std_pic">Father's Picture</label>
          <img src="<?php if(isset($f_pic)) echo base_url().'assets/pic/'.$f_pic; ?>" alt="<?php if(isset($std_id)) echo  $std_id;?>" class="img-thumbnail" style="height:170px; width:170px !important;"> </div>
        <div class="col-sm-3">
          <label for="std_pic">Mother's Picture</label>
          <img src="<?php if(isset($m_pic)) echo base_url().'assets/pic/'.$m_pic; ?>" alt="<?php if(isset($std_id)) echo  $std_id;?>" class="img-thumbnail" style="height:170px; width:170px;"> </div>
        <div class="col-sm-3">
          <label for="std_pic">Guardian's Picture</label>
          <img src="<?php if(isset($g_1_pic)) echo base_url().'assets/pic/'.$g_1_pic; ?>" alt="<?php if(isset($std_id)) echo  $std_id;?>" class="img-thumbnail" style="height:170px; width:170px !important;"> </div>
      </div>
    </div>
  </div>
  <br />
  <div class="form-group">
    <div class="col-sm-9"> </div>
    <div class="col-sm-3"> <a class="btn btn-primary" href="<?php echo base_url(); ?>profile/edit_student/<?php echo $id; ?>">Edit Student</a></div>
  </div>
</form>
