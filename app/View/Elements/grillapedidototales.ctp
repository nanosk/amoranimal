<?php //debug($Pedidocabecera) 
	
		$bonificacion = $pedidocabecera['Pedidocabecera']['bonificacion'];
		$subtotal= $pedidocabecera['Pedidocabecera']['subtotal'];
		$total = $pedidocabecera['Pedidocabecera']['monto'];
		$iva = $pedidocabecera['Pedidocabecera']['iva'];
		
		?>
		
		
	<!-- resumen de factura -->
	<div id="grillapedidototales" >
		<!-- accepted payments column -->
		     
		<div class="col-sm-offset-2 col-xs-12 col-sm-6 col-md-6">
		  
		  <div class="table-responsive">
			<table class="table">
			  <tr>
				<th style="width:50%">Subtotal:</th>
				<td>$<?php echo $subtotal ?></td>
			  </tr>
			  <tr>
				<th>Iva (21%)</th>
				<td>$<?php echo $iva ?></td>
			  </tr>
			 <tr>
				<th>Bonificacion:</th>
				<td>(- $<?php echo $bonificacion ?>)</td>
			  </tr>
			  <tr>
				<th>Total:</th>
				<td>$<?php echo $total ?></td>
			  </tr>
			</table>
		  </div>
		</div><!-- /.col -->
	</div><!-- /.row -->
	<!-- /resumen de factura -->