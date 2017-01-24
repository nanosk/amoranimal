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
		
	<div class="accordion" id="accordion2">
    <div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
					<h4>Filtros <small>(click aqui para desplegar filtros)</small></h4>
				</a>
			</div>
	
		<div id="collapse3" class="accordion-body collapse">
		<div class="accordion-inner">
		<?php 
	//	echo $this->Form->create('User', array('action' => 'edit',$id));
	//	echo $this->Form->input('id', array('type' => 'hidden'));
//		echo $this->Form->input('solicitarpedido', array('type' => 'hidden', 'value'=>'1'));
		
		?>
			<legend><small>Filtros para buscar pedidos </small></legend>
			<div class="span5 no_margin_left">
				
					  <div class="control-group">
					    <?php echo $this->Form->input('nropedido',array('label'=>'Nro de Pedido','class'=>'span4'));?>
					  </div>
					  <div class="control-group">
						<?php echo $this->Form->input('mp',array('label'=>'Medio de Pago','class'=>'span4'));?>
					  </div>					 
					  <div class="control-group">
						<?php echo $this->Form->input('estado',array('label'=>'Estado del pedido','class'=>'span4'));?>
					  </div>
  					 <div class="control-group">
						<?php echo $this->Form->input('fecha',array('label'=>'Fecha','class'=>'span4'));?>
					  </div>
					  
			</div>
			<div class="span5 no_margin_left">
					
					  <div class="control-group">
					    <?php echo $this->Form->input('nombre',array('label'=>'Nombre de usuario','class'=>'span4'));?>
					  </div>
	
					  <div class="control-group">
					    <?php echo $this->Form->input('producto',array('label'=>'Producto','class'=>'span4'));?>
					  </div>
					  				  
					  <div class="control-group">
						<?php echo $this->Form->input('monto',array('label'=>'Monto','class'=>'span4'));?>
					  </div>					  
			<?php echo '<button class="btn btn-primary">Buscar'.$this->Form->end().'</button>'; ?>	 
			</div>	
			
          				
		</div>
		
		
	</div>
	</div>
	
	
	<hr>
	
	
	
	
	
	
	
	
	<div class="row">
	<div class="span12">
	
	
	<legend>Historico de pedidos</legend>
	
	 
        <table class="table table-bordered table-striped">
		  <thead>
			  <tr>
				<th>Nro (Ver)</th>
				<th>Fecha</th>
				<th>Subtotal</th>
				<th>Iva</th>
				<th>Monto</th>
				<th>Medio de pago</th>
				<th>Estado</th>
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
<td><?php echo $item['Mediopago']['descripcion'] ; ?></td>
<td><?php echo $item['Estado']['descripcion'] ; ?></td>

</tr>
<?php endforeach; ?>

</tbody>
</table>
</div>
</div>






</div> <!-- /container -->
