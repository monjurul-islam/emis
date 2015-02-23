<h2>New Admission</h2>
<form class="form-horizontal">
  <div class="row" style="background:mediumturquoise;">
    <div class="col-md-12">
      <h1 align="center"><u>Students Information</u>
        <hr />
      </h1>
      <div class="form-group">
        <label for="year_season" class="col-sm-2 control-label">Year/Season</label>
        <div class="col-sm-3">
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
          <select class="form-control"  id="edu_struct" name="edu_struct"  required onchange="class_struct_by_edu_struct()">
            <option value="" selected="selected">First Select Year/Season</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="edu_struct" class="col-sm-2 control-label"><strong>Class Structure</strong></label>
        <div class="col-sm-7">
          <select class="form-control"  id="edu_struct" name="edu_struct"  required >
            <option value="" selected="selected">Select Class Structure</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Students Name</label>
        <div class="col-sm-6">
          <input type="name" class="form-control" id="name" name="name" placeholder="Enter Students Name">
        </div>
      </div>
      <div class="form-group">
        <label for="name_in_bangla" class="col-sm-2 control-label">Students Name (In Bangla)</label>
        <div class="col-sm-6">
          <input type="name" class="form-control" id="name_in_bangla" name="name_in_bangla" placeholder="Enter Students Name in Bangla">
        </div>
      </div>
      <div class="form-group">
        <label for="dob" class="col-sm-2 control-label">Date Of Birth</label>
        <div class="col-sm-2">
          <input type="name" class="form-control" id="dob" placeholder="DOB" name="dob">
        </div>
        <label for="age" class="col-sm-1 control-label">Age</label>
        <div class="col-sm-3">
          <input type="name" class="form-control" id="age" placeholder="Age" name="age">
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
        <div class="col-sm-2">
          <input type="name" class="form-control" id="blood" placeholder="blood" name="blood">
        </div>
        <label for="nationality" class="col-sm-1 control-label">Nationality</label>
        <div class="col-sm-3">
          <input type="name" class="form-control" id="nationality" placeholder="Nationality" name="nationality">
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
          <textarea  class="form-control" name="present_address" id="present_address" rows="3" ></textarea>
        </div>
        <label for="permanent_address" class="col-sm-2 control-label">Permanent Address</label>
        <div class="col-sm-4">
          <textarea  class="form-control" name="permanent_address" id="permanent_address" rows="3" ></textarea>
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
          <input type="name" class="form-control" id="previous_school" name="previous_school" placeholder="Enter Previous School's Name">
        </div>
      </div>
      <div class="form-group">
        <label for="previous_school" class="col-sm-2 control-label">Address</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="previous_school_address" name="previous_school_address" placeholder="Enter School's Address" ></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="previous_school_phone" class="col-sm-2 control-label">Phone</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="previous_school_phone" name="previous_school_phone" placeholder="Enter Phone Number">
        </div>
        <label for="previous_school_email" class="col-sm-2 control-label">E-mail</label>
        <div class="col-sm-4">
          <input type="name" class="form-control" id="previous_school_email" name="previous_school_email" placeholder="Enter Email Address">
        </div>
      </div>
      <div class="form-group">
        <label for="previous_school_last_class" class="col-sm-2 control-label">Last Grade/Class</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="previous_school_last_class" name="previous_school_last_class" placeholder="Enter Last Class">
        </div>
        <label for="previous_school_result" class="col-sm-2 control-label">Annual Assessment / Percentage of Marks</label>
        <div class="col-sm-4">
          <input type="name" class="form-control" id="previous_school_result" name="previous_school_result" placeholder="Enter Annual Assesment/Marks">
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
          <input type="name" class="form-control" id="f_name" name="f_name" placeholder="Enter Father's Name">
        </div>
      </div>
      <div class="form-group">
        <label for="f_name_in_bangla" class="col-sm-2 control-label">Father's Name(in Bangla)</label>
        <div class="col-sm-6">
          <input type="name" class="form-control" id="f_name_in_bangla" name="f_name_in_bangla" placeholder="Enter Father's Name in Bangla">
        </div>
      </div>
      <div class="form-group">
        <label for="f_nationality" class="col-sm-2 control-label">Nationality</label>
        <div class="col-sm-3">
          <input type="name" class="form-control" id="f_nationality" placeholder="Enter Nationality" name="f_nationality">
        </div>
        <label for="f_national_id" class="col-sm-2 control-label">National ID</label>
        <div class="col-sm-4">
          <input type="name" class="form-control" id="f_national_id" placeholder="Father's National Id Number" name="f_national_id">
        </div>
      </div>
      <div class="form-group">
        <label for="f_religion" class="col-sm-2 control-label">Religion</label>
        <div class="col-sm-3">
          <select class="form-control"  id="f_religion" name="f_religion"  required>
            <option value="" selected="selected">Select Religion</option>
            <option>Islam</option>
            <option>Hindu</option>
            <option>Other</option>
          </select>
        </div>
        <label for="f_edu_quali" class="col-sm-2 control-label">Educational Qualification</label>
        <div class="col-sm-4">
          <input type="name" class="form-control" id="f_edu_quali" placeholder="Father's Educational Qualification" name="f_edu_quali">
        </div>
      </div>
      <div class="form-group">
        <label for="f_profession" class="col-sm-2 control-label">Father's Profession</label>
        <div class="col-sm-6">
          <input type="name" class="form-control" id="f_profession" name="f_profession" placeholder="Enter Father's Profession">
        </div>
      </div>
      <div class="form-group">
        <label for="f_organisation" class="col-sm-2 control-label">Father's Organisation</label>
        <div class="col-sm-6">
          <input type="name" class="form-control" id="f_organisation" name="f_organisation" placeholder="Enter Father's Organisation">
        </div>
      </div>
      <div class="form-group">
        <label for="f_designation" class="col-sm-2 control-label">Father's Designation</label>
        <div class="col-sm-5">
          <input type="name" class="form-control" id="f_designation" name="f_designation" placeholder="Enter Father's Designation">
        </div>
        <label for="f_income" class="col-sm-2 control-label">Father's Yearly Income(BDT)</label>
        <div class="col-sm-3">
          <input type="name" class="form-control" id="f_income" name="f_income" placeholder="Father's Yearly Income">
        </div>
      </div>
      <div class="form-group">
        <label for="f_present_address" class="col-sm-2 control-label">Present Address</label>
        <div class="col-sm-4">
          <textarea  class="form-control" name="f_present_address" id="f_present_address" rows="3" ></textarea>
        </div>
        <label for="f_permanent_address" class="col-sm-2 control-label">Permanent Address</label>
        <div class="col-sm-4">
          <textarea  class="form-control" name="f_permanent_address" id="f_permanent_address" rows="3" ></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="f_phone" class="col-sm-2 control-label">Phone</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="f_phone" name="f_phone" placeholder="Enter Phone Number">
        </div>
        <label for="f_mobile" class="col-sm-2 control-label">Mobile</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="f_mobile" name="f_mobile" placeholder="Enter Mobile Number">
        </div>
      </div>
      <div class="form-group">
        <label for="f_email" class="col-sm-2 control-label">E-mail</label>
        <div class="col-sm-4">
          <input type="name" class="form-control" id="f_email" name="f_email" placeholder="Enter Email Address">
        </div>
        <label for="f_blood" class="col-sm-2 control-label">Blood</label>
        <div class="col-sm-4">
          <input type="name" class="form-control" id="f_blood" placeholder="blood" name="f_blood">
        </div>
      </div>
      <h3 align="center"><u>Mother</u></h3>
      <div class="form-group">
        <label for="m_name" class="col-sm-2 control-label">Mother's Name</label>
        <div class="col-sm-6">
          <input type="name" class="form-control" id="m_name" name="m_name" placeholder="Enter Mother's Name">
        </div>
      </div>
      <div class="form-group">
        <label for="m_name_in_bangla" class="col-sm-2 control-label">Mother's Name(in Bangla)</label>
        <div class="col-sm-6">
          <input type="name" class="form-control" id="m_name_in_bangla" name="m_name_in_bangla" placeholder="Enter Mother's Name in Bangla">
        </div>
      </div>
      <div class="form-group">
        <label for="m_nationality" class="col-sm-2 control-label">Nationality</label>
        <div class="col-sm-3">
          <input type="name" class="form-control" id="m_nationality" placeholder="Enter Nationality" name="m_nationality">
        </div>
        <label for="m_national_id" class="col-sm-2 control-label">National ID</label>
        <div class="col-sm-4">
          <input type="name" class="form-control" id="m_national_id" placeholder="Mother's National Id Number" name="m_national_id">
        </div>
      </div>
      <div class="form-group">
        <label for="m_religion" class="col-sm-2 control-label">Religion</label>
        <div class="col-sm-3">
          <select class="form-control"  id="m_religion" name="m_religion"  required>
            <option value="" selected="selected">Select Religion</option>
            <option>Islam</option>
            <option>Hindu</option>
            <option>Other</option>
          </select>
        </div>
        <label for="m_edu_quali" class="col-sm-2 control-label">Educational Qualification</label>
        <div class="col-sm-4">
          <input type="name" class="form-control" id="m_edu_quali" placeholder="Mother's Educational Qualification" name="m_edu_quali">
        </div>
      </div>
      <div class="form-group">
        <label for="m_profession" class="col-sm-2 control-label">Mother's Profession</label>
        <div class="col-sm-6">
          <input type="name" class="form-control" id="m_profession" name="m_profession" placeholder="Enter Mother's Profession">
        </div>
      </div>
      <div class="form-group">
        <label for="m_organisation" class="col-sm-2 control-label">Mother's Organisation</label>
        <div class="col-sm-6">
          <input type="name" class="form-control" id="m_organisation" name="m_organisation" placeholder="Enter Mother's Organisation">
        </div>
      </div>
      <div class="form-group">
        <label for="m_designation" class="col-sm-2 control-label">Mother's Designation</label>
        <div class="col-sm-5">
          <input type="name" class="form-control" id="m_designation" name="m_designation" placeholder="Enter Mother's Designation">
        </div>
        <label for="m_income" class="col-sm-2 control-label">Mother's Yearly Income(BDT)</label>
        <div class="col-sm-3">
          <input type="name" class="form-control" id="m_income" name="m_income" placeholder="Mother's Yearly Income">
        </div>
      </div>
      <div class="form-group">
        <label for="m_present_address" class="col-sm-2 control-label">Present Address</label>
        <div class="col-sm-4">
          <textarea  class="form-control" name="m_present_address" id="m_present_address" rows="3" ></textarea>
        </div>
        <label for="m_permanent_address" class="col-sm-2 control-label">Permanent Address</label>
        <div class="col-sm-4">
          <textarea  class="form-control" name="m_permanent_address" id="m_permanent_address" rows="3" ></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="m_phone" class="col-sm-2 control-label">Phone</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="m_phone" name="m_phone" placeholder="Enter Phone Number">
        </div>
        <label for="m_mobile" class="col-sm-2 control-label">Mobile</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="m_mobile" name="m_mobile" placeholder="Enter Mobile Number">
        </div>
      </div>
      <div class="form-group">
        <label for="m_email" class="col-sm-2 control-label">E-mail</label>
        <div class="col-sm-4">
          <input type="name" class="form-control" id="m_email" name="m_email" placeholder="Enter Email Address">
        </div>
        <label for="m_blood" class="col-sm-2 control-label">Blood</label>
        <div class="col-sm-4">
          <input type="name" class="form-control" id="m_blood" placeholder="blood" name="m_blood">
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
          <input type="name" class="form-control" id="g_1_name" name="g_1_name" placeholder="Enter Guardian's Name">
        </div>
      </div>
      <div class="form-group">
        <label for="g_1_name_in_bangla" class="col-sm-2 control-label">Guardian's Name(in Bangla)</label>
        <div class="col-sm-6">
          <input type="name" class="form-control" id="g_1_name_in_bangla" name="g_1_name_in_bangla" placeholder="Enter Guardian's Name in Bangla">
        </div>
      </div>
      <div class="form-group">
        <label for="g_1_relation" class="col-sm-2 control-label">Relation With Student</label>
        <div class="col-sm-6">
          <input type="name" class="form-control" id="g_1_relation" placeholder="Relation With Student" name="g_1_relation">
        </div>
      </div>
      <div class="form-group">
        <label for="g_1_national_id" class="col-sm-2 control-label">National ID</label>
        <div class="col-sm-4">
          <input type="name" class="form-control" id="g_1_national_id" placeholder="Guardian's National Id Number" name="g_1_national_id">
        </div>
      </div>
      <div class="form-group">
        <label for="g_1_profession" class="col-sm-2 control-label">Guardian's Profession</label>
        <div class="col-sm-6">
          <input type="name" class="form-control" id="g_1_profession" name="g_1_profession" placeholder="Enter Guardian's Profession">
        </div>
      </div>
      <div class="form-group">
        <label for="g_1_address" class="col-sm-2 control-label">Address</label>
        <div class="col-sm-6">
          <textarea  class="form-control" name="g_1_address" id="g_1_address" rows="3" ></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="g_1_phone" class="col-sm-2 control-label">Phone</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="g_1_phone" name="g_1_phone" placeholder="Enter Phone Number">
        </div>
        <label for="g_1_mobile" class="col-sm-2 control-label">Mobile</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="g_1_mobile" name="g_1_mobile" placeholder="Enter Mobile Number">
        </div>
      </div>
      <div class="form-group">
        <label for="g_1_email" class="col-sm-2 control-label">E-mail</label>
        <div class="col-sm-4">
          <input type="name" class="form-control" id="g_1_email" name="g_1_email" placeholder="Enter Email Address">
        </div>
        <label for="g_1_blood" class="col-sm-2 control-label">Blood</label>
        <div class="col-sm-4">
          <input type="name" class="form-control" id="g_1_blood" placeholder="blood" name="g_1_blood">
        </div>
      </div>
      <h3 align="center"><u>2'nd Guardian</u></h3>
      <div class="form-group">
        <label for="g_2_name" class="col-sm-2 control-label">Guardian's Name</label>
        <div class="col-sm-6">
          <input type="name" class="form-control" id="g_2_name" name="g_2_name" placeholder="Enter Guardian's Name">
        </div>
      </div>
      <div class="form-group">
        <label for="g_2_name_in_bangla" class="col-sm-2 control-label">Guardian's Name(in Bangla)</label>
        <div class="col-sm-6">
          <input type="name" class="form-control" id="g_2_name_in_bangla" name="g_2_name_in_bangla" placeholder="Enter Guardian's Name in Bangla">
        </div>
      </div>
      <div class="form-group">
        <label for="g_2_relation" class="col-sm-2 control-label">Relation With Student</label>
        <div class="col-sm-6">
          <input type="name" class="form-control" id="g_2_relation" placeholder="Relation With Student" name="g_2_relation">
        </div>
      </div>
      <div class="form-group">
        <label for="g_2_national_id" class="col-sm-2 control-label">National ID</label>
        <div class="col-sm-4">
          <input type="name" class="form-control" id="g_2_national_id" placeholder="Guardian's National Id Number" name="g_2_national_id">
        </div>
      </div>
      <div class="form-group">
        <label for="g_2_profession" class="col-sm-2 control-label">Guardian's Profession</label>
        <div class="col-sm-6">
          <input type="name" class="form-control" id="g_2_profession" name="g_2_profession" placeholder="Enter Guardian's Profession">
        </div>
      </div>
      <div class="form-group">
        <label for="g_2_address" class="col-sm-2 control-label">Address</label>
        <div class="col-sm-6">
          <textarea  class="form-control" name="g_2_address" id="g_2_address" rows="3" ></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="g_2_phone" class="col-sm-2 control-label">Phone</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="g_2_phone" name="g_2_phone" placeholder="Enter Phone Number">
        </div>
        <label for="g_2_mobile" class="col-sm-2 control-label">Mobile</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="g_2_mobile" name="g_2_mobile" placeholder="Enter Mobile Number">
        </div>
      </div>
      <div class="form-group">
        <label for="g_2_email" class="col-sm-2 control-label">E-mail</label>
        <div class="col-sm-4">
          <input type="name" class="form-control" id="g_2_email" name="g_2_email" placeholder="Enter Email Address">
        </div>
        <label for="g_2_blood" class="col-sm-2 control-label">Blood</label>
        <div class="col-sm-4">
          <input type="name" class="form-control" id="g_2_blood" placeholder="blood" name="g_2_blood">
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
        <label for="adm_weitten_markl" class="col-sm-1 control-label">Writen</label>
        <div class="col-sm-2">
          <input type="name" class="form-control" id="adm_weitten_markl" name="adm_weitten_markl" placeholder="Written Marks">
        </div>
        <label for="adm_student_viva_mark" class="col-sm-1 control-label">Student's Viva</label>
        <div class="col-sm-2">
          <input type="name" class="form-control" id="adm_student_viva_mark" placeholder="Viva Marks" name="adm_student_viva_mark">
        </div>
        <label for="adm_parents_viva_mark" class="col-sm-1 control-label">Parents's Viva</label>
        <div class="col-sm-2">
          <input type="name" class="form-control" id="adm_parents_viva_mark" placeholder="Viva Marks" name="adm_parents_viva_mark">
        </div>
        <label for="adm_medical_test_mark" class="col-sm-1 control-label">Medical Test</label>
        <div class="col-sm-2">
          <input type="name" class="form-control" id="adm_medical_test_mark" placeholder="Medical Test" name="adm_medical_test_mark">
        </div>
      </div>
      <div class="form-group">
        <label for="adm_physical_test_mark" class="col-sm-1 control-label">Physical Test</label>
        <div class="col-sm-2">
          <input type="name" class="form-control" id="adm_physical_test_mark" name="adm_physical_test_mark" placeholder="Physical Test">
        </div>
        <label for="adm_total_mark" class="col-sm-2 control-label">Total Marks</label>
        <div class="col-sm-3">
          <input type="name" class="form-control" id="adm_total_mark" placeholder="Total Marks" name="adm_total_mark">
        </div>
        <label for="adm_outof_mark" class="col-sm-2 control-label">Out Of Mark</label>
        <div class="col-sm-2">
          <input type="name" class="form-control" id="adm_outof_mark" placeholder="Out Of Mark" name="adm_outof_mark">
        </div>
      </div>
      <div class="form-group">
        <label for="adm_fee" class="col-sm-1 control-label">Admission Fee</label>
        <div class="col-sm-3">
          <input type="name" class="form-control" id="adm_fee" name="adm_fee" placeholder="Admission Fee">
        </div>
        <label for="adm_prime_bank_branch" class="col-sm-2 control-label">Prime Bank(Branch)</label>
        <div class="col-sm-3">
          <input type="name" class="form-control" id="adm_prime_bank_branch" placeholder="Prime Bank(Branch)" name="adm_prime_bank_branch">
        </div>
        <label for="adm_date" class="col-sm-1 control-label">Admission Date</label>
        <div class="col-sm-2">
          <input type="name" class="form-control" id="adm_date" placeholder="Admission Date" name="adm_date">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-9"> </div>
        <div class="col-sm-3">
          <input type="submit" class=" btn btn-lg btn-success" id="adm_fee" name="adm_fee" value="Add New Student" placeholder="Admission Fee">
        </div>
      </div>
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

function class_struct_by_edu_struct()
{
	$("#class_struct").html("<h2>loading...</h2>");	
	var edu_struct_id = $('#edu_struct').val();	
	//alert(edu_struct_id);
	$.ajax({		
		 url:  "<?php echo site_url("profile/ajax_class_struct_by_edu_struct")?>/"+edu_struct_id,		
		 success: function(html){
		 $("#class_struct").html(html);
		}
	});
}

</script> 
