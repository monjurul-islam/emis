<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="rasel" content="">
<?php if(!$this->tank_auth->is_logged_in()) redirect('/auth/login/');?>
<link rel="icon" href="<?php echo base_url();?>assets/favicon.ico">
<title>
<?php if(isset($page_title))echo $page_title; else echo '....'; ?>
</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">

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

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
   <div class="navbar-header">
      <img src="<?php echo base_url(); ?>assets/img/logo.png " style=" height:50px;"> <span style="padding:3px; font-size:18px;"><?php if(isset($org_name))echo $org_name; else echo '___NotSET___'; ?></span>
     </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
        <?php if(isset($menu)) echo $menu; ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"> <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Hello, <?php echo strtoupper($username); ?> <span class="caret"></span></a>
          <ul role="menu" class="dropdown-menu">
            <li><a href="#">View Profile</a></li>
            <li><a href="<?php echo base_url(); ?>auth/change_password">Change Password</a></li>
            <li ><a style=" color:red;" href="<?php echo base_url(); ?>auth/logout"><strong>logout</strong></a></li>
          </ul>
        </li>
      </ul>
    </div>
    
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
      <div class="panel panel-primary" style="min-height:450px;"> 
        <!-- Default panel contents -->
        <div class="panel-heading" id="content_head"><u>
          <?php if(isset($content_title))echo $content_title; else echo 'Main Content'; ?>
          </u></div>
        <div class="panel-body">
          <?php if(isset($content)) echo $content; else echo '<h3>Welcome '.strtoupper($username).'.</h3>'; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="container">
    <p class="text-muted">
      <?php if(isset($org_dialog))echo $org_dialog; else echo '___NotSET___'; ?>
    </p>
  </div>
</footer>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
<script src="<?php echo base_url();?>assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="<?php echo base_url();?>assets/jquery_ui/jquery-ui.min.js"></script>
</body>
</html>
