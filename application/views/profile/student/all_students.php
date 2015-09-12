<!--/**
 * students by class view
 * *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h4>All Students</h4>
<table class="table table-striped  table-condensed table-bordered table-hover"  id="all_students"
           data-toolbar="#toolbar"
           data-search="true"
           data-show-refresh="true"
           data-show-toggle="true"
           data-show-columns="true"
           data-show-export="true"
           data-minimum-count-columns="2"
           data-show-pagination-switch="true"
           data-pagination="true"
           data-id-field="id"
           data-page-list="[5, 25, 50, 100, ALL]"
           data-response-handler="responseHandler">
  <thead>
    <tr>
      <th>SL.</th>
      <th>Std ID</th>
      <th>Name</th>
      <th>Gender</th>
      <th>Father</th>
      <th>F Mobile</th>
      <th>Mother</th>
      <th>M Mobile</th>      
      <th>Address</th>
      <th>Status</th>
      <th>Details</th>
    </tr>
  </thead>
  <tbody>
    <?php 
	if($qry_success == 1)
	{
		$i=1;
		foreach($qry_result as $qry_res)
		{
		
			echo '<tr>
					  <td>'.$i.'</td>
					  <td id="'.$qry_res->std_id.'">'.$qry_res->std_id.'</td>
					  <td >'.$qry_res->name.' <!--<br /><img src="'.base_url().'assets/pic/'.$qry_res->std_pic.'" alt="'.$qry_res->std_pic.'" class="img-thumbnail" style=" height:60px;  ">--></td>
					  <td>'.$qry_res->gender.'</td>
					  <td>'.$qry_res->f_name.'</td>
					   <td>'.$qry_res->f_mobile.'</td>
					  <td>'.$qry_res->m_name.'</td>
					   <td>'.$qry_res->m_mobile.'</td>
					  
					  <td>'.$qry_res->present_address.'</td>
					  <td>'.$this->m_common->status_text($qry_res->status).'</td>
					  <td> <button class="btn btn-info btn-sm" onclick="students_by_id_modal_view('.$qry_res->id.')" >View Details</button><br /><hr style="margin: 3px;">
					  	   <a class="btn btn-primary btn-sm" href="'.base_url().'profile/edit_student/'.$qry_res->id.'">Edit Student</a></td>
				</tr>';		
     		$i++;					  
		}
	}
	?>
  </tbody>
</table>

<button style="float:right; margin:2px;" onclick="generate_excel('all_students')" class="btn btn-primary " >Export To Excel</button>

<script>

function students_by_id_modal_view(std_id)
{
	$.ajax({		
		 url:  "<?php echo site_url("profile/ajax_student_by_id")?>/"+std_id,		
		 success: function(html){
		 $("#modal_content").html(html);
		}
	});	
	$('#lg_modal').modal();
}

</script> 
<script>
      var $table = $('#all_students'),
   $remove = $('#remove'),
   selections = [];
    $(function () {
        $table.bootstrapTable({
            height: getHeight(),
            columns: 
			[                
				{
					align: 'center',
					sortable: true
				}, {
					
					align: 'center',
					sortable: true,
				}, {
					align: 'center',
					sortable: true,
				},
									{
					align: 'center',
					sortable: true
				}, {
					
					align: 'center',
					sortable: true,
				}, {
					align: 'center',
					sortable: true,
				},
									{
					align: 'center',
					sortable: true
				}, {
					
					align: 'center',
					sortable: true,
				}, {
					align: 'center',
					sortable: true,
				}		
            ]
        });
        // sometimes footer render error.
        setTimeout(function () {
            $table.bootstrapTable('resetView');
        }, 200);
        $table.on('check.bs.table uncheck.bs.table ' +
                'check-all.bs.table uncheck-all.bs.table', function () {
            $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);
            // save your data, here just save the current page
            selections = getIdSelections();
            // push or splice the selections if you want to save all data selections
        });
        $table.on('expand-row.bs.table', function (e, index, row, $detail) {
            if (index % 2 == 1) {
                $detail.html('Loading from ajax request...');
                $.get('LICENSE', function (res) {
                    $detail.html(res.replace(/\n/g, '<br>'));
                });
            }
        });
        $table.on('all.bs.table', function (e, name, args) {
            console.log(name, args);
        });
        $remove.click(function () {
            var ids = getIdSelections();
            $table.bootstrapTable('remove', {
                field: 'id',
                values: ids
            });
            $remove.prop('disabled', true);
        });
        $(window).resize(function () {
            $table.bootstrapTable('resetView', {
                height: getHeight()
            });
        });
    });
	
	
    function totalTextFormatter(data) {
        return 'Total';
    }
    function totalNameFormatter(data) {
        return data.length;
    }
    function totalPriceFormatter(data) {
        var total = 0;
        $.each(data, function (i, row) {
            total += +(row.price.substring(1));
        });
        return '$' + total;
    }
    function getHeight() {
        return $(window).height() - $('h1').outerHeight(true);
    }
</script> 
