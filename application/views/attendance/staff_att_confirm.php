<div class="panel-body" style="background:mintcream;" id="staff_atd_body">
  <div class="row" style="height:auto; ">
    <div class="col-md-5"> <img style="height:400px;; width:100%;" src="<?php echo base_url();?>assets/pic/<?php echo $staff_pic; ?>" alt="..." class="img-thumbnail">
      <h3 class="text-capitalize" style="margin-top:7px;;"><?php echo $name; ?></h3>
      <h4><?php echo $designation; ?></h4>
    </div>
    <div class="col-md-4 ">
      <div class="clock btn btn-block btn-primary">
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
      <hr>
      <div class="btn btn-lg btn-default btn-block">
      
      <?php if($att_status==1) echo '<h1 class="text-success" style="font-size:60px;"><strong >In: <hr>'.$time.'</strong></h1>'; else echo '<h1 class="text-danger" style="font-size:60px;"><strong >Out: <hr>'.$time.'</strong></h1>'; ?>
      
        
      </div>
    </div>
    <div class="col-md-3">
      <div class="btn btn-default btn-block" style=""> <span class="btn btn-lg btn-block" style="font-size:18px">
      	<p class="text-capitalize"><strong><u><?php echo $name; ?></u></strong></p>Todays Log</span>
        <hr style="padding:0; margin:3px; border:1px solid green;">
       <?php echo $todays_log;?>
      </div>
    </div>
    <!--<div class="row" >
              <div class="col-md-12 ">
                <div class="highlight text-center">
                  <h2 style="padding:0;margin:0;">Notice: </h2>
                  <hr style="padding:0;margin:2px;">
                  <h3 style="padding:0; margin:0;">Your application for Visa Approval Letter (VAL) was submitted to the Immigration Department of Malaysia for approval. Issuance of VAL is entirely at the discretion of the Immigration Department and EMGS does not have any influence over this process.</h3>
                </div>
              </div>
            </div>--> 
  </div>
</div>
