

<?php 
// row para generar un formulario

// SETEO VALORES POR DEFAULT 

if (!isset($param['classfield'])){
	$param['classfield'] = 'col-sm-6';
} 

if(!isset($param['class'])) {
	$param['class'] ='form-control';
}

if(!isset($param['placeholder']) and isset($param['label']) ){
	$param['placeholder'] = $param['label'];
}

//Si tipo de forulario es VIEW, entonces se bloquean los controles para no poder manipular los datos
if($typeform =='VIEW'){
	$disabled = true;

}else{
	$disabled = false;

}


// debug($param);
?>



<?php switch ($param['type']) {  //SE GENERA EL CAMPO DE ACUERDO AL TIPO 
	
case "link":  
?>  
	<?php echo $disabled ?>
    
        <a href="<?php echo $this->Html->url(array('controller'=> $param['url']['controller'], 
												   'action'=>$param['url']['action'])); ?>" class="btn btn-xs btn-flat btn-primary">
		<?php echo $param['label'] ?>
		</a>
		
    
    
	
<?php 
break; 






case "checkbox":  
?>  	
	
	
	
	<div class="form-group col-xs-12 col-sm-12 col-lg-12">
	<label class="col-sm-4 control-label no-padding-right" > <?php echo $param['label']; ?> </label>
	
		<div class="<?php echo $param['classfield'];  ?>">	
		    <div class="input-group">
		      <span class="input-group-addon">
		        <?php echo $this->Form->input($param['input'], array('label'=>false, 'type'=>'checkbox', 'disabled'=>$disabled));?>
		      </span>
		  
		    </div><!-- /input-group -->
   		 </div>
  	
	</div>
	
	
<?php 
break; 	
	
	
case "money":  
?>  



    <div class="input-prepend input-append">
    <span class="add-on">$</span>
    <?php echo $this->Form->input($param['input'], array('label'=>false,'id'=>'appendedPrependedInput', 'class'=>'span2', 'type'=>'text', 'disabled'=>$disabled));?>
    
    </div>
	
	
<?php 
break; 
	
case  "select":   
?>  

	<div class="form-group col-sm-12">
		<label class="col-sm-4 control-label no-padding-right" > <?php echo $param['label']; ?>select</label>
			<div class="<?php echo $param['classfield'];  ?>">
		<?php echo $this->Form->select($param['input'],$param['values'], array('label'=>false,
										'class'=>$param['class'], 'type'=>$param['type'], 'disabled'=>$disabled));?>
			</div>
	</div>
<?php 
break; 

case  'select2':   //SELECT2

?>  

	<div class="form-group col-sm-12">
	
		<label class="col-sm-4 control-label no-padding-right" > <?php echo $param['label']; ?></label>
			<div class="<?php echo $param['classfield'];  ?>">
			
			<?php 
			 if (empty($param['values'])){  
					echo $this->Form->input($param['input'], array('label'=>false, 'class'=>'form-control select2', 'style'=>'width: 100%;','disabled'=>$disabled));
				}else{
		
				 echo $this->Form->select($param['input'],$param['values'], 
												array('label'=>false, 'class'=>'form-control select2',   'style'=>'width: 100%;', 'disabled'=>$disabled));
			}
			
			
			?>
			</div>
	</div>
<?php
 
break; 
case  "timepicker":  //SI ES UN TIMEPICKER ?>  
	<div class="form-group col-sm-12">
		<label class="col-sm-4 control-label no-padding-right" > <?php echo $param['label']; ?></label>
			<div class="col-sm-3">
	<div class="bootstrap-timepicker">
		<div class="form-group">
		<div class="input-group">
			<?php echo $this->Form->input($param['input'],array('label'=>false,'type'=> 'text', 'class'=>'form-control timepicker', 'disabled'=>$disabled ));?>
			<div class="input-group-addon">
			  <i class="fa fa-clock-o"></i>
			</div>
		  </div><!-- /.input group -->
		  
		</div><!-- /.form group -->
	  </div>
	</div>	
	</div>	
<?php	break;   ?>


<?php
 
break; 
case  "datepicker":  //SI ES UN Datepicker ?>  
	<div class="form-group col-sm-12">
		<label class="col-sm-4 control-label no-padding-right" > <?php echo $param['label']; ?></label>
			<div class="col-sm-3">
			<div class="bootstrap-timepicker">
				<div class="form-group">
				<div class="input-group">
					<?php echo $this->Form->input($param['input'],array('label'=>false,'type'=> 'text', 'class'=>'form-control datepicker', 'disabled'=>$disabled ));?>
					<div class="input-group-addon">
					  <i class="fa fa-clock-o"></i>
					</div>
				  </div><!-- /.input group -->
				  
				</div><!-- /.form group -->
			  </div>
			</div>	
	</div>	
<?php	break;   ?>


	
<?php  case "text":  //SI ES UN TEXTO O UN TEXTAREA O CUALQUIERA Q NO REQUIERA TRATAMIENTO ESPECIAL 
 ?>
	<div class="form-group col-sm-12">
		<label class="col-sm-4 control-label no-padding-right" > <?php echo $param['label']; ?> </label>
			<div class="<?php echo $param['classfield'];  ?>">
			
			<?php 
			if (!isset($param['value'])){
				echo $this->Form->input($param['input'],array('label'=>false,'class'=>$param['class'], 'type'=>$param['type'] , 'disabled'=>$disabled)); 
			}else{
				echo $this->Form->input($param['input'],array('label'=>false,'class'=>$param['class'], 'type'=>$param['type'], 'value'=>$param['value'] , 'disabled'=>$disabled)); 
			}
			?>
			
			</div>
	</div>

<?php  
break; 
case "hidden":  //SI ES UN TEXTO O UN TEXTAREA O CUALQUIERA Q NO REQUIERA TRATAMIENTO ESPECIAL 
 ?>
	
			<?php 
			if (!isset($param['value'])){
				echo $this->Form->input($param['input'],array('label'=>false, 'type'=>$param['type'] )); 
			}else{
				echo $this->Form->input($param['input'],array('label'=>false, 'type'=>$param['type'], 'value'=>$param['value'] )); 
			}
			?>
	

<?php 
break;
case "label": 
?>

<div class="form-group col-sm-12">
		<label class="col-sm-4 control-label no-padding-right" > <?php echo $param['label']; ?></label>
			<div class="<?php echo $param['classfield'];  ?>">			
			
			<p style="font-style:bold"> <?php echo $param['value'];  ?> </p>
			
			</div>
	</div>

<?php 
break;
default: 

?>
<div class="form-group col-sm-12">
		<label class="col-sm-4 control-label no-padding-right" > <?php echo $param['label']; ?> </label>
			<div class="<?php echo $param['classfield'];  ?>">
			
			<?php 
			if (!isset($param['value'])){
				echo $this->Form->input($param['input'],array('label'=>false,'class'=>$param['class'], 'type'=>$param['type'], 'disabled'=>$disabled )); 
			}else{
				echo $this->Form->input($param['input'],array('label'=>false,'class'=>$param['class'], 'type'=>$param['type'], 
															  'value'=>$param['value'], 'disabled'=>$disabled
															  )); 
			}
			?>
			
			</div>
	</div>






<?php 
break;
}?>





	
	
	

