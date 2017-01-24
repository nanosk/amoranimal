<?PHP 


	//debug($ACTION_CAN_EDIT);
?>

<td>
<?php echo $this->Html->link('', array('controller' => $controller,'action' => 'view', 
	$item[$entidad]['id']),
	array('class'=>'btn btn-xs btn-default fa fa-file-o',
	'title'=>'Detalle registro','data-toggle'=>'tooltip', 'data-placement'=>'top'));
?>



<!-- SOLO PUEDE MODIFICAR EL ROL ADMIN y CARGADATOS -->


<?php 
if ($ACTION_CAN_EDIT == 1){
	
	echo $this->Html->link('', array('controller' => $controller,'action' => 'edit', $item[$entidad]['id']), 
							array('class'=>'btn btn-xs btn-default fa fa-pencil',
							'title'=>'Editar registro','data-toggle'=>'tooltip', 'data-placement'=>'top'));
} ?> 
		
<!-- SOLO PUEDE ELIMINAR EL ROL ADMIN -->		
 <?php 
		if ($ACTION_CAN_DELETE == 1){
			
				$mensaje = 'Estas Seguro que desea eliminar el registro?'.
				$item[$entidad]['id'];
				echo $this->Form->postLink('', 
				array('controller' => $controller,'action' => 'delete', $item[$entidad]['id']),	
				array('confirm' => $mensaje , 'class'=>'btn btn-xs btn-default fa fa-trash-o',
				'title'=>'Eliminar registro','data-toggle'=>'tooltip', 'data-placement'=>'top')); 
		 } 
		 ?> 

</td>



