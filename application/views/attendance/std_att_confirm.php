<div class="row" style="height:350px; ">
  <div class="col-md-4 ">
    <div class="clock btn btn-block btn-success">
      <div id="Date"></div>
      <ul>
        <li id="hours"></li>
        <li id="point">:</li>
        <li id="min"></li>
        <li id="point">:</li>
        <li id="sec"></li>
        <li id="point"> </li>
        <li id="ampm"></li>
      </ul>
    </div>
    <hr>
    <div  style="animation:2s ease 0s reverse none infinite running mymove;"class="btn btn-danger btn-block btn-lg">Please Tap Your ID Card.</div>
  </div>
  <div class="col-md-4"><img style="height:330px; width:100%;" src="<?php echo base_url();?>assets/pic/<?php echo $std_pic; ?>" alt="..." class="img-thumbnail"></div>
  <div class="col-md-4">
    <div class="btn btn-default btn-block" style=""> <span class="btn btn-lg btn-block" style="font-size:18px"><?php echo $name.' <small> ('.$std_id.')<small>'; ?></span>
      <hr style="padding:0; margin:2px; border:1px solid green;">
      <?php 
	  
	  	$class_struct = $this->m_common->get_active_class_structure_by_std_id($id);
		
		if($class_struct==NULL)
		{
			echo '<div class="text-danger btn btn-lg"> Class/Section/Dept Undefined</div>';
		}
		else
		{
			echo '<div class="text-primary btn btn-default">'.$class_struct.'</div>'; 
		} 
			  
	  
	  ?>
    </div>
    <div class="btn btn-default btn-block" style="font-size:28px; font-weight:bolder;">
      <?php if($att_status==1) echo '<h2 class="btn btn-block btn-primary" style="font-size:30px">In:</h2>at <span id="time_in" class="text-success">'.$time.'</span>'; else echo '<h2 class="btn btn-block btn-danger" style="font-size:30px">Out:</h2>at <span id="time_in" class="text-danger">'.$time.'</span>'; ?>
    </div>
  </div>
</div>
<div class="row" >
  <div class="col-xs-6 col-md-4 text-center"> <img style="height:250px; width:250px;" src="<?php echo base_url();?>assets/pic/<?php echo $f_pic; ?>" alt="..." class="img-thumbnail">
    <h3 style="padding:0; margin:0;"><?php echo $f_name; ?></h3>
  </div>
  <div class="col-xs-6 col-md-4 text-center"> <img style="height:250px; width:250px;" src="<?php echo base_url();?>assets/pic/<?php echo $m_pic; ?>" alt="..." class="img-thumbnail">
    <h3 style="padding:0; margin:0;"><?php echo $m_name; ?></h3>
  </div>
  <div class="col-xs-6 col-md-4 text-center"> <img style="height:250px; width:250px;" src="<?php echo base_url();?>assets/pic/<?php echo $g_1_pic; ?>" alt="..." class="img-thumbnail">
    <h3 style=" padding:0; margin:0;"><?php echo $g_1_name; ?></h3>
  </div>
</div>
