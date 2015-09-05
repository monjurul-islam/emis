
<button style="float:right; margin:2px;" onclick="generate_excel('ajax_report')" class="btn btn-primary " >Export To Excel</button>
<div id="att_report" class="att_report">
  <h1 align="center">Staff Attendance Report<small> Cosmo School</small></h1>
  <hr />
  <form class="form-horizontal" method="post" action="">
    <div class="form-group input-lg">
      <label for="staff_type" class="col-sm-3 control-label"><strong>Select Staff Type</strong></label>
      <div class="col-sm-7">
        <select class="form-control"  id="staff_type" name="staff_type"  required  >
         	<option value="" selected="selected">Select Employee Type </option>
            <option value="Teacher">Teacher </option>
            <option value="Admin" >Admin </option>
            <option value="Staff" >Staff </option>
            <option value="Director" >Director </option>
            <option value="Donor" >Donor </option>
        </select>
      </div>
    </div>
    <div class="form-group input-lg">
      <label for="class_struct" class="col-sm-3 control-label"><strong>Select Date Range -</strong></label>
      <div class="col-sm-2">
        <input type="text" class="form-control from"  id="from"   required >
      </div>
      <div class="col-sm-2">
        <input type="text" class="form-control to"  id="to"  required >
      </div>
      <div class="col-sm-3">
        <div id="report_load" class="btn btn-primary" onclick="load_report()">Load Report </div>
      </div>
    </div>
  </form>
  <div id="ajax_report"> </div>
</div>
<script>
	
$('.from').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3d'
})

$('.to').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3d'
})

function load_report()
{
	//alert('called');
	
	var from = $('#from').val();
	  
	var to   = $('#to').val();
	
	var staff_type = $('#staff_type').val();		
	$.ajax({
			  type: "POST",
			  url: "<?php echo site_url();?>attendance/staff_date_wise_report/"+from+"/"+to+"/"+staff_type,
			  dataType: "html",
			  success:function(data){
			   $('#ajax_report').html(data);
			  },	
		}); 
	
}





var pdf = new jsPDF('p', 'pt', 'letter')

// source can be HTML-formatted string, or a reference
// to an actual DOM element from which the text will be scraped.
, source = $('#ajax_report')[0]

// we support special element handlers. Register them with jQuery-style
// ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
// There is no support for any other type of selectors
// (class, of compound) at this time.
, specialElementHandlers = {
    // element with id of "bypass" - jQuery style selector
    '#bypassme': function(element, renderer){
        // true = "handled elsewhere, bypass text extraction"
        return true
    }
}

margins = {
    top: 80,
    bottom: 60,
    left: 40,
    width: 522
  };
  // all coords and widths are in jsPDF instance's declared units
  // 'inches' in this case
pdf.fromHTML(
    source // HTML string or DOM elem ref.
    , margins.left // x coord
    , margins.top // y coord
    , {
        'width': margins.width // max width of content on PDF
        , 'elementHandlers': specialElementHandlers
    },
    function (dispose) {
      // dispose: object with X, Y of the last line add to the PDF
      //          this allow the insertion of new lines after html
        pdf.save('Test.pdf');
      },
    margins
  )








</script>