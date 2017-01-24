<!-- recibe como parametro
$pedidodetalle
-->

<div class="col-xs-12" id="grillapedidodetalle">
  <div class="table-responsive">
	<table id="simple-table" class="table">

		<thead>

		
		<th>Producto</th>
		<th>Cantidad</th>
		<th></th>
		<th>Precio</th>
		<th>Monto</th>
		
		<th width="10%"></th>
		
		
		</thead>
		<tbody>
		<?php //debug($Pedidocabecera) 
		$subtotal = 0.00;
		/*
		$bonificacion = $pedidocabecera['Pedidocabecera']['bonificacion'];
		$subtotal= $pedidocabecera['Pedidocabecera']['subtotal'];
		$total = $pedidocabecera['Pedidocabecera']['monto'];
		$iva = $pedidocabecera['Pedidocabecera']['iva'];
		*/
		?>
		<?php 
			foreach ($pedidocabecera['Pedidodetalle'] as $item): 
			//$subtotal = $subtotal + $item['monto'];
			
		?>


		<tr>
		
			
			<td><?php echo $item['Producto']['nombre']; ?></td>
			
			
			
			<?php $idfrm = 'frmactualizarprecio'.$item['id']; ?>
			<?php $idcampomonto = "monto".$item['id']; ?>
			<!-- columna de Cantidad actualizable solo si tiene permisos -->
			<td>
			<?php if( in_array ($USER_ROL ,array($ROL_DEPOSITO, $ROL_ADMIN, $ROL_DESARROLLO))){ ?>
			
			<div class="form-group">
				<!-- actualizar cantidad por pedidodetalle -->
				

				<?php echo $this->Form->create('Pedidodetalle', array( 'id'=>$idfrm, 'default' => false,  'class'=>'frmactcant')); ?>
				<?php echo $this->Form->hidden('id',array('value'=>$item['id'] ));?>
				<?php echo $this->Form->hidden('pedidocabecera_id',array('value'=>$item['pedidocabecera_id'] ,'type'=>'text'));?>
				<?php echo $this->Form->hidden('producto_id',array('value'=>$item['producto_id'] ,'type'=>'text'));?>
				<?php echo $this->Form->hidden('preciounitario',array('value'=>$item['preciounitario'] ,'type'=>'text'));?>
				
					<?php echo $this->Form->input('cantidad', array('id'=>'cantidad','value'=>$item['cantidad'], 'label'=>false, 'form-control'));?>
				
				
			</div>	
	
			
			<?php 

			$this->Js->get('#'.$idfrm)->event(
					'submit',
					$this->Js->request(
							array('controller'=>'pedidodetalles', 'action' => 'actualizarcantidad'),
							array(
									'update' => '#'.$idcampomonto,
									'async' => true,
									'dataExpression'=>true,
									'method'=>'post',
									'data'=>$this->Js->serializeForm(array('isForm'=>true, 'inline'=>true))
							)
					));
					
					//refresto totales
					
								
					
							

		}else{
				
				echo $item['cantidad'];
				
			} ?>
			
			</td>
			<!-- FIN DE CANTIDAD ACTUALIZABLE -->
			<td>
			<button class="btn btn-xs btn-link cantidad" type="submit">
				<i class="glyphicon glyphicon-refresh"></i>
				
				<?php echo $this->Form->end(); ?>
			</button>
				
			</td>
			
			
			
			<td>$<?php echo $item['preciounitario']; ?></td>
			
			<td><div id="<?php echo $idcampomonto;  ?>"> $<?php echo $item['monto']; ?></td></div>
			

		<?php if( in_array ($USER_ROL ,array($ROL_CARGADATOS, $ROL_ADMIN, $ROL_DESARROLLO))){ ?>
			<td>
			<?php echo $this->Html->link('', array('controller' => 'Pedidodetalles','action' => 'edit', 
			$item['id']),
			array('class'=>'glyphicon glyphicon-edit',
			'title'=>'Editar registro','data-toggle'=>'tooltip', 'data-placement'=>'top'));
			
			
			$mensaje = 'Estas Seguro que desea eliminar el registro?'.
			$item['id'];
			echo $this->Form->postLink('', 
			array('controller' => 'pedidocabeceras','action' => 'deletedetalle', $item['id'], $item['pedidocabecera_id']),	
			array('confirm' => $mensaje , 'class'=>'glyphicon glyphicon-trash',
			'title'=>'Eliminar registro','data-toggle'=>'tooltip', 'data-placement'=>'top')); 
			?>
			</td>
		<?php } ?>
	
		</tr>
		
		
		<?php endforeach; ?>
		
		
		
		</tbody>
	</table>
</div>
	
	

	
	<div class="col-xs-12 col-lg-4 col-sm-4 col-md-4 well">

				<?php echo $this->Form->create('Pedidocabecera', array(  'default' => false, 'id'=>'actualizarbonificacion')); ?>
					<?php echo $this->Form->hidden('id',array('value'=>$pedidocabecera['Pedidocabecera']['id'] ));?>
					
					<?php 
					  $param =    array('type'=>'text', 'value'=>$pedidocabecera['Pedidocabecera']['bonificacion'],  'label'=>'Bonificacion',  'input'=>'bonificacion');
					  echo  $this->element('row',array('param'=>$param));
					  ?>
				
					
					
					<button class="btn btn-xs btn-info" type="submit" data-dismiss="modal">
						<i class="glyphicon glyphicon-refresh"></i> Actualizar Bonificacion
						<?php echo $this->Form->end(); ?>
				   </button>
				   
<?php 
//INGRESAR BONIFICACION
$this->Js->get('#actualizarbonificacion')->event(
		'submit',
		$this->Js->request(
				array('controller'=>'pedidocabeceras', 'action' => 'actualizarbonificacion'),
				array(
						'update' => '#grillapedidototales',
						'async' => true,
						'dataExpression'=>true,
						'method'=>'post',
						'data'=>$this->Js->serializeForm(array('isForm'=>true, 'inline'=>true))
				)
		));
?>
</div>

	<?php 
		echo $this->element('grillapedidototales',array('pedidocabecera'=>$pedidocabecera));
	?>
	
	
	
          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              
			  
			  <a href="<?php echo $this->Html->url(array('controller'=>'pedidocabeceras','action'=>'adminpedido2',$pedidocabecera['Pedidocabecera']['id']))?>" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-file-pdf-o"></i> Ver Factura</a>
              <div id="refrescartotales" class="btn btn-default pull-right" style="margin-right: 5px;"><i class="fa fa-refresh"></i> Actualizar Totales</div>
			</div>
          </div>
      
<?php 

$this->Js->get("#refrescartotales")->event(
  		'click',
		$this->Js->request(
				array('controller'=>'pedidocabeceras', 'action' => 'pedidototales',$pedidocabecera['Pedidocabecera']['id']),
				array(
						'update' => '#grillapedidototales',
						'async' => true,
						'dataExpression'=>true,
						'method'=>'post',
						'data'=>$this->Js->serializeForm(array('isForm'=>true, 'inline'=>true))
				)
		));

?>	
</div> <!-- FIN GRILLA pedidodetalle DETALLE -->



