<script type="text/javascript">
				try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
			</script>
		
		
<?php $this->start('filtros') ?> 
	<?php 	echo $this->element('filtro2',$datos);  ?>
<?php $this->end('filtros') ?>
		
<?php $this->start('opciones') ?> 
	<?php echo $this->element('boton',array('botones'=>$botones)); ?>
<?php $this->end('opciones') ?>

<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Cuotas</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
    
    
	
	
	    
	
	<table class="table table-bordered table-hover">
	<thead>
	<th>Monto Fijo</th>
	<th>Forma Pago</th>
	<th>Vencimiento</th>
	<th>Socio</th>

	<th width="15%"></th>
	
	</thead>
	<tbody>
	
	<?php foreach ($registros as $item): ?>
	
	<td><?php echo $item['Cuota']['monto_fijo']; ?></td>
	
	<td><a href="<?php echo $this->Html->url(array('action'=>'edit', $item['Cuota']['id']))?>">
		<?php echo $item['Formapago']['descripcion']; ?></a>   
	</td>
	
	<td><?php echo $this->Convertdatos->fechaDMY($item['Cuota']['vencimiento']); ?></td>
	<td><?php echo $item['Socio']['apellidoynombre']; ?></td>
	
	
	
	<?php echo $this->element('actions', array('controller'=>'Cuotas','entidad'=>'Cuota', 'item'=>$item ));?>
	</tr>
	
	<?php endforeach; ?>
	</tbody>
	</table>
	<?php echo $this->element('paginador') ?>

    
	
	
	
  </div><!-- /.box-body -->
</div><!-- /.box -->




