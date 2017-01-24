

<div class="col-xs-12" id="grillapedidodetalle">
	<table id="simple-table" class="table table-striped">

		<thead>

		<th>Id</th>
		<th>Producto</th>
		<th>Cantidad</th>
		<th>Precio</th>
		<th>Monto</th>
		
		<th width="10%"></th>
		
		
		</thead>
		<tbody>
		
		<?php 
			foreach ($pedidocabecera['Pedidodetalle'] as $item): 
		
		?>


		<tr>
		
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['Producto']['nombre']; ?></td>
			
			
			
			<?php $idfrm = 'frmactualizarprecio'.$item['id']; ?>
			<?php $idcampomonto = "monto".$item['id']; ?>
			<!-- columna de Cantidad actualizable solo si tiene permisos -->
			<td><?php echo $item['cantidad']; ?> </td>
			<!-- FIN DE CANTIDAD ACTUALIZABLE -->
			<td>$<?php echo $item['preciounitario']; ?></td>
			<td><div id="<?php echo $idcampomonto;  ?>"> $<?php echo $item['monto']; ?></td></div>
			
		</tr>
		
		<?php endforeach; 
		
		?>
		
		
		
		</tbody>
	</table>

	
	
	
	
	<div class="col-xs-12 col-lg-4 col-sm-6 col-md-6">
	</div>
	
	<?php 
		echo $this->element('grillapedidototales',array('pedidocabecera'=>$pedidocabecera));
	?>

        
      
</div> <!-- FIN GRILLA pedidodetalle DETALLE -->



