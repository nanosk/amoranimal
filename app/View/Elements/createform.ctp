


<?php if (empty($linklistado) ){ 
		echo $this->start('linklistado') ?>
			<a class="btn btn-xs btn-link" href="<?php echo $this->Html->url(array('action'=>'index'))?>">Ir al Listado </a>
<?php 
		echo $this->end('linklistado'); 
 } ?>
	


<?php

if (!isset($typeform)){
	//Formulario del tipo Alta o Modificacion
	$typeform = 'EDIT';
}

foreach ($form as $param): 
	
	echo $this->element('row', array('param'=>$param, 'typeform'=>$typeform));
endforeach;
?>