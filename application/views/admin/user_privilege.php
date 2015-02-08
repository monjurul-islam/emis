<!--/**
 * user Privileges view
 *
 * This view takes all data of user Privileges table and parse in this view as necessary
 *
 * @author	s.m. monjurul islam (https://www.facebook.com/islam.rasel)
 */-->

<h2>User Privileges : <strong><?php echo $this->m_common->get_username_by_id($user_id).'('.$user_id.')';?></strong></h2>
<hr/>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <form class="form-inline" method="post" action="">
    <?php 
 	
	foreach($qry_modules as $qry_modules_res)
 	{
		echo '<div class="panel panel-success">
				<div class="panel-heading" role="tab" id="heading'.$qry_modules_res->id.'">
				  <h4 class="panel-title"> 
					<label class="checkbox-inline" >';			
					  if($this->m_priv->priv_module_by_user($qry_modules_res->id, $user_id)==TRUE)
					  echo ' <input type="checkbox" value="'.$qry_modules_res->id.'" name="m_'.$qry_modules_res->id.'" style="margin-top:-8px;" checked> ';
					  else echo ' <input type="checkbox" id="inlineCheckbox'.$qry_modules_res->id.'" value="'.$qry_modules_res->id.'"  style="margin-top:-8px;" name="m_'.$qry_modules_res->id.'">';
					    		  
		 echo '		</label>
		 
		 			<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$qry_modules_res->id.'" aria-expanded="false" aria-controls="collapse'.$qry_modules_res->id.'" style=" margin-left:10px;"> Module: '.$qry_modules_res->name.'('.$qry_modules_res->id.')</a>
		 
				  </h4>
				</div>
				<div id="collapse'.$qry_modules_res->id.'" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading'.$qry_modules_res->id.'">
				  <div class="panel-body" style="padding-left:50px;">';
				  
				    $fi = 0;
					foreach($qry_features as $qry_features_res)
 					{
						if($qry_features_res->module_id == $qry_modules_res->id)
						{
							$fi++;
							echo '  <div class="checkbox">
									  <label>';
									  
										 if($this->m_priv->priv_feature_by_user($qry_features_res->id, $user_id)==TRUE)
										 echo ' <input type="checkbox" value="'.$qry_features_res->id.'" name="f_'.$qry_features_res->id.'" checked> ';
										 else echo ' <input type="checkbox" id="inlineCheckbox'.$qry_features_res->id.'" value="'.$qry_features_res->id.'" name="f_'.$qry_features_res->id.'">';
										
							echo '	   	 <span style="font-size:medium; padding-left:10px;">'.$qry_features_res->name.'('.$qry_features_res->id.')</span>
									  </label>
									</div>';
						}						
					}
					if($fi==0) echo 'No Features In This Module <a target="_blank" href="'.base_url().'admin/add_feature"><strong>Create New Feature</strong></a>';
					
				  
		echo	 '</div>
				</div>
			  </div>';
	} 
 ?>
 	<br />
    <div class="form-group">
      <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
      <input type="submit" class="btn btn-primary" name="update_priv" value="Update Privileges" style="float:right;">
    </div>
  </form>
</div>
