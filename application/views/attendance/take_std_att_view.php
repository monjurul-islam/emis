<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="rasel" content="">
<link rel="icon" href="<?php echo base_url();?>assets/favicon.ico">
<title>
<?php if(isset($page_title))echo $page_title; else echo '....'; ?>
</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/clock.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?php echo base_url();?>assets/css/sticky-footer-navbar.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="<?php echo base_url();?>assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="<?php echo base_url();?>assets/js/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="overflow:hidden;">

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top" >
  <div class="container">
    <div class="navbar-header">
      <img src="<?php echo base_url(); ?>assets/img/logo.png " style=" height:50px;"> <span style="padding:3px; font-size:18px;"><?php if(isset($org_name))echo $org_name; else echo '___NotSET___'; ?></span>
      <small> Student Attendance System</small> </a> </div>
    	<input type="text" value="" name="rfid_no" id="rfid_no" autofocus onClick="take_attendance()" style=" float:right;  z-index:-175; position:inherit; margin-top:-100px;">
    <!--/.nav-collapse --> 
  </div>
</nav>

<!-- Begin page content -->
<div class="container">
  <div class="row"> 
    <!--<div class="col-md-2">
      <div class="panel panel-primary" style="min-height:450px;">
        <div class="panel-heading" id="side_bar_head">Sider Bar</div>
        <div class="panel-body">
          <?php //if(isset($side_menu)) echo $side_menu;?>
        </div>
      </div>
    </div>-->
    <div class="col-md-12">
      <div class="panel panel-primary" style="min-height:700px;"> 
        <!-- Default panel contents -->
        <div class="panel-heading" id="content_head"><u>
          <?php if(isset($content_title))echo $content_title; else echo 'Main Content'; ?>
          </u></div>
        <div class="panel-body" style="background:mintcream;" id="std_atd_body">
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
            <div class="col-md-4"><img style="height:330px; width:100%;" src="<?php echo base_url();?>assets/img/student_.jpg" alt="..." class="img-thumbnail"></div>
            <div class="col-md-4">
              <div class="btn btn-default btn-block" style=""> <span class="btn btn-lg btn-block" style="font-size:18px">Student's Name ..............</span>
                <hr style="padding:0; margin:0; border:1px solid green;">
                <div class="btn btn-sm"> Class: ........</div>
                <div class="btn btn-sm"> Section: ........</div>
                <div class="btn btn-sm"> Dept: .......</div>
              </div>
             <!-- <div class="btn btn-default btn-block" style="font-size:28px; font-weight:bolder;">Time In: <span id="time_in" class="text-success">............</span></div>
              <div class="btn btn-default btn-block" style="font-size:28px; font-weight:bolder;">Time Out: <span id="time_in" class="text-danger">............</span></div>-->
            </div>
          </div>
          <div class="row" >
            <div class="col-xs-6 col-md-4 text-center"> <img style="height:250px; width:auto;" src="<?php echo base_url();?>assets/img/father.jpg" alt="..." class="img-thumbnail">
              <h3 style="padding:0; margin:0;">Father's Name</h3>
            </div>
            <div class="col-xs-6 col-md-4 text-center"> <img style="height:250px; width:auto;" src="<?php echo base_url();?>assets/img/mother.jpg" alt="..." class="img-thumbnail">
              <h3 style="padding:0; margin:0;">Mother's Name</h3>
            </div>
            <div class="col-xs-6 col-md-4 text-center"> <img style="height:250px; width:auto;" src="<?php echo base_url();?>assets/img/gurdian.jpg" alt="..." class="img-thumbnail">
              <h3 style=" padding:0; margin:0;">Gurdian's Name</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
<script src="<?php echo base_url();?>assets/js/ie10-viewport-bug-workaround.js"></script> 
<script type="text/javascript">
$(document).ready(function() {
// Create two variable with the names of the months and days in an array
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

// Create a newDate() object
var newDate = new Date();
// Extract the current date from Date object
newDate.setDate(newDate.getDate());
// Output the day, date, month and year   
$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

setInterval( function() {
	// Create a newDate() object and extract the seconds of the current time on the visitor's
	var seconds = new Date().getSeconds();
	// Add a leading zero to seconds value
	$("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
	},1000);
	
setInterval( function() {
	// Create a newDate() object and extract the minutes of the current time on the visitor's
	var minutes = new Date().getMinutes();
	// Add a leading zero to the minutes value
	$("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);
	
setInterval( function() {
	// Create a newDate() object and extract the hours of the current time on the visitor's
	var hours = new Date().getHours();
	// Add a leading zero to the hours value
	$("#ampm").html(( hours < 12 ? " AM" : " PM" ));
    }, 1000);	

setInterval( function() {
// Create a newDate() object and extract the hours of the current time on the visitor's
	var hours = new Date().getHours();
//convert to 12 hour clock
	var hours = hours > 12 ? hours - 12 : hours;
// Add a leading zero to the hours value
	$("#hours").html(( hours < 10 ? "0" : "" ) + hours);
	}, 1000);
});

$( "#rfid_no" ).keypress(function( event ) {
  if ( event.which == 13 ) {
	  
	  rfid_no = $('#rfid_no').val();
	  
	  rfid_no_length = rfid_no.length; 
	  	  
	  if(rfid_no!="" && rfid_no_length > 8)
	  {			  
		  $.ajax({
			type: "POST",
			url: "<?php echo site_url();?>unauth/save_std_att/"+rfid_no,
			dataType: "html",
			success:function(data){
			 $('#std_atd_body').html(data);
			},
	  
		  }); 
	  }
	  
	 $('#rfid_no').val('');
  }
});

$('body').click(function() {
   $( "#rfid_no" ).focus();
});


</script>
</body>
</html>
