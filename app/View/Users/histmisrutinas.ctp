<script type="text/javascript">
				try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
			</script>
		
		
<?php $this->start('opciones') ?> 
	<?php echo $this->element('boton',array('botones'=>$botones)); ?>
<?php $this->end('opciones') ?>

<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Historico mis Rutinas</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
    
    
	
	
	    
	
	<table class="table table-bordered table-hover">
	<thead>
	<th width="15%">Desde</th>
	<th  width="15%">Hasta</th>
	<th>Rutina</th>
	
	
	<th>Descripcion.</th>
	
	
	</thead>
	<tbody>
	
	<?php foreach ($registros as $item): ?>
	<td><?php echo $item['Clienterutina']['created']; ?></td>
	<td><?php echo $item['Clienterutina']['fechafin']; ?></td>
	<td><?php echo $item['Rutina']['nombre']; ?></td>
	
	<td><?php echo $item['Rutina']['descripcion']; ?></td>
	
	
	
	
	</tr>
	
	<?php endforeach; ?>
	</tbody>
	</table>
	
    
	
	
	
  </div><!-- /.box-body -->
</div><!-- /.box -->

