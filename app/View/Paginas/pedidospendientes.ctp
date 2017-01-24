<div class="container">

		<?php 
		echo $this->element('header'); 
		
		$datos_navbar=array( 'categorias' => $categorias, 'razon_social'=>$empresa);
  		echo $this->element('nav_bar_galeria2', $datos_navbar);
  		
  		//echo var_dump($carrito);
  		?>
		
		
	
	
	<div class="row">
	<div class="span12">
	<?php echo $this->element('barra_nav'); ?>
	<legend>Pedidos pendientes de pago</legend>
	<h6>Nombre de Usuario: <?php echo $usuario ;?></h6>
	
	 
        <table class="table table-bordered table-striped">
		  <thead>
			  <tr>
				<th>Nro (Ver)</th>
				<th>Fecha</th>
				<th>Subtotal</th>
				<th>Iva</th>
				<th>Monto</th>
				<th>Estado</th>
				<th>Medio de pago</th>
				<th></th>
			  </tr>
			</thead>
			<tbody>		

<?php foreach ($cabecera as $item):  ?>
<tr>
<td class="muted center_text">
<?php echo $this->Html->link($item['Carritocabecera']['id'],array('controller' => 'paginas', 'action' => 'verpedido',$item['Carritocabecera']['id']));?>
</td>
<td ><?php echo $item['Carritocabecera']['fecha']; ?></td>
<td><?php echo $item['Carritocabecera']['subtotal']; ?></td>
<td><?php echo $item['Carritocabecera']['iva']; ?></td>
<td><?php echo $item['Carritocabecera']['monto'] ; ?></td>
<td><?php echo $item['Estado']['descripcion'] ; ?></td>
<td><?php echo $item['Mediopago']['descripcion'] ; ?></td>
<td>
	<?php echo $this->Html->link('Realizar Pago',array('controller' => 'mediopago', 'action' => 'galeria'),array('class'=>'btn btn-primary pull-right'));?>
</td>

</tr>
<?php endforeach; ?>

</tbody>
</table>
</div>
</div>






<?php echo $this->Html->link('Volver',array('controller' => 'paginas', 'action' => 'galeria'),array('class'=>'btn btn-primary pull-right'));?>

</div> <!-- /container -->
