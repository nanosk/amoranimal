

<?php switch ($param['type']) {  //SE GENERA EL CAMPO DE ACUERDO AL TIPO 
   	
case "text":  
?> 
   	
		<label> <?php echo $param['label']; ?> </label>
			
			
			<?php 
			if (!isset($param['value'])){
				echo $this->Form->input($param['input'],array('label'=>false,'class'=>'form-control', 'type'=>$param['type'] )); 
			}else{
				echo $this->Form->input($param['input'],array('label'=>false,'class'=>'form-control', 'type'=>$param['type'], 'value'=>$param['value'] )); 
			}
			?>
			
			
	




<?php 
break; 

case  'select2':   //SELECT2

?>  

		<label> <?php echo $param['label']; ?> </label>
			
			
			
			
			<?php 
			 if (empty($param['values'])){  
					echo $this->Form->input($param['input'], array('label'=>false, 'class'=>'form-control select2', 'style'=>'width: 100%;'));
				}else{

				 echo $this->Form->select($param['input'],$param['values'], 
												array('label'=>false, 'class'=>'form-control select2',   'style'=>'width: 100%;'));
			}
			
			
			?>
		
	
<?php 
break;
}
?>  