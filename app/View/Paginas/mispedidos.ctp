<div class="container">

		<?php 
		echo $this->element('header'); 
		
		$datos_navbar=array( 'categorias' => $categorias, 'razon_social'=>$empresa);
  		echo $this->element('nav_bar_galeria2', $datos_navbar);
  		
  		//echo var_dump($carrito);
  		?>
		
		
	
	
	<div class="row">
	<div class="span12">
	
	<legend>Resumen del pedido</legend>
	<h6>Nombre de Usuario: <?php echo $usuario ;?></h6>
	
	 
        <table class="table table-bordered table-striped">
		  <thead>
			  <tr>
				<th>Nro</th>
				<th>Fecha</th>
				<th>Subtotal</th>
				<th>Iva</th>
				<th>Monto</th>
				
				<th>Medio de pago</th>
			  </tr>
			</thead>
			<tbody>		

<tr>
<td class="muted center_text"><?php echo $cabecera['Carritocabecera']['id']; ?></td>
<td ><?php echo $cabecera['Carritocabecera']['fecha']; ?></td>
<td><?php echo $cabecera['Carritocabecera']['subtotal']; ?></td>
<td><?php echo $cabecera['Carritocabecera']['iva']; ?></td>
<td><?php echo $cabecera['Carritocabecera']['monto'] ; ?></td>
<td>Medio de pago</td>
</tr>
</tbody>
</table>
</div>
</div>





<div class="row">
	<div class="span12">
	
	<legend>Detalle del pedido </legend>
	 
        <table class="table table-bordered table-striped">
		  <thead>
			  <tr>
				<th>Orden</th>
				<th>Producto</th>
				<th>Cantidad</th>
				<th>Precio</th>
				<th>Monto</th>
				<th>Estado</th>
				
			  </tr>
			</thead>
			<tbody>		

<?php foreach ($detalles as $item):  ?>

<tr>
<td class="muted center_text"><?php echo $item['Carritodetalle']['id']; ?></td>
<td ><?php echo $item['Producto']['nombre']; ?></td>
<td><?php echo $item['Carritodetalle']['cantidad']; ?></td>
<td><?php echo $item['Producto']['precio']; ?></td>
<td><?php echo $item['Carritodetalle']['monto'] ; ?></td>
<td><?php echo $item['Estado']['descripcion'] ; ?></td>
</tr>
<?php endforeach; ?>


</tbody>
</table>
</div>
</div>


<?php echo $this->Html->link('Volver',array('controller' => 'paginas', 'action' => 'galeria'),array('class'=>'btn btn-primary pull-right'));?>

</div> <!-- /container -->
