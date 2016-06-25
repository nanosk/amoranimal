<div class="socios search">
<h2><?php echo __('Socio'); ?></h2>

<?php 
	echo $this->Form->create('Socio', 
								array(
								'url'=> array('Controller'=>'socios', 
												'action' => 'verify'))); 
	echo $this->Form->input('dni');	
	//echo $this->Form->button('Buscar');
	echo $this->Form->end('Buscar!');
?>
</div>





<?php if (!empty($socio)) { ?>


<div class="socios view">
<!--VER INFORMACION DE UN ITEM-->
<h1>Ver Detalle <?php echo $socio['Socio']['dni']?></h1>
<p> DNI: <?php echo $socio['Socio']['dni']?></p>
<p> Nombre: <?php echo $socio['Socio']['nombre']?></p>
<p> Apellido: <?php echo $socio['Socio']['apellido']?></p>

<p> Uruario: <?php echo $socio['Usuario']['usuario']?></p>

</div>

<?php }  ?>
