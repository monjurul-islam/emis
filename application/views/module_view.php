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
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?php echo base_url();?>assets/css/sticky-footer-navbar.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>

<script src="<?php echo base_url();?>assets/js/jquery.timeentry.package-2.0.1/jquery.timeentry.css"></script>

<script src="<?php echo base_url();?>assets/js/jquery.timeentry.package-2.0.1/jquery.plugin.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.timeentry.package-2.0.1/jquery.timeentry.js"></script>


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
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">
      <?php if(isset($org_name))echo $org_name; else echo '___NotSET___'; ?>
      </a> </div>
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
    <div class="col-md-2">
      <div class="panel panel-primary" style="min-height:450px;">
        <div class="panel-heading" id="side_bar_head"><h4><?php if(isset($feature_name)) echo $feature_name;?></h4></div>
        <div class="panel-body" style="padding-left:0px !important;">
          <?php if(isset($side_menu)) echo $side_menu;?>
        </div>
      </div>
    </div>
    <div class="col-md-10">
      <div class="panel panel-primary" style="min-height:450px;" > 
        <!-- Default panel contents -->
        <div class="panel-heading" id="content_head"><u>
          <?php if(isset($content_title))echo $content_title; else echo 'Main Content'; ?>
          </u></div>
        <div class="panel-body" id="printable">
          <?php if(isset($content)) echo $content; else echo '<h3>Welcome '.strtoupper($username).'.</h3>'; ?>
        </div>
      </div>
    </div>
  </div>
  
<!--  <a class="btn btn-info" href="#" onclick="printIt(document.getElementById('printable').innerHTML); return true">Print</a>
--> 

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
<script type="text/javascript">

  var win=null;
  function printIt(printThis)
  {
    win = window.open();
    self.focus();
    win.document.open();
    win.document.write('<'+'html'+'><'+'head'+'><'+'style'+'>');
    win.document.write('body, td { font-family: Verdana; font-size: 10pt;}');
    win.document.write('<'+'/'+'style'+'><'+'/'+'head'+'><'+'body'+'>');
    win.document.write(printThis);
    win.document.write('<'+'/'+'body'+'><'+'/'+'html'+'>');
    win.document.close();
    win.print();
    win.close();
  }
  
function generate_excel(tableid) {
  var table= document.getElementById(tableid);  
  var html = table.outerHTML;
  window.open('data:application/vnd.ms-excel;base64,' + base64_encode(html));
}

function base64_encode (data) {
 
  var b64 = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
  var o1, o2, o3, h1, h2, h3, h4, bits, i = 0,
    ac = 0,
    enc = "",
    tmp_arr = [];

  if (!data) {
    return data;
  }

  do { // pack three octets into four hexets
    o1 = data.charCodeAt(i++);
    o2 = data.charCodeAt(i++);
    o3 = data.charCodeAt(i++);

    bits = o1 << 16 | o2 << 8 | o3;

    h1 = bits >> 18 & 0x3f;
    h2 = bits >> 12 & 0x3f;
    h3 = bits >> 6 & 0x3f;
    h4 = bits & 0x3f;

    // use hexets to index into b64, and append result to encoded string
    tmp_arr[ac++] = b64.charAt(h1) + b64.charAt(h2) + b64.charAt(h3) + b64.charAt(h4);
  } while (i < data.length);

  enc = tmp_arr.join('');

  var r = data.length % 3;

  return (r ? enc.slice(0, r - 3) : enc) + '==='.slice(r || 3);

}

</script>



<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="lg_modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" id="modal_content" style="overflow-x:hidden; padding:5px;" >
      ...
    </div>
  </div>
</div>


</body>
</html>
