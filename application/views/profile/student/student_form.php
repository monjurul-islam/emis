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
        <label for="age" class="col-sm-2 control-label">Age</label>
        <div class="col-sm-2">
          <input type="name" class="form-control" id="age" placeholder="Age" name="age">
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
</form>
<br />
<div class="row">
  <div class="col-md-6">.col-md-6</div>
  <div class="col-md-6">.col-md-6</div>
</div>
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
