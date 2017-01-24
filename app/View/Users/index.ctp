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
    <h3 class="box-title">Socios</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
    
    
	
	
	    
	
	<table class="table table-bordered table-hover">
	<thead>
	<th>Nro Doc.</th>
	<th>Usuario</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Email</th>
	<th>Telefono</th>
	
	<th>Activo</th>
	
	<th width="15%"></th>
	
	</thead>
	<tbody>
	
	<?php foreach ($registros as $item): ?>
	
	<td><?php echo $item['Socio']['dni']; ?></td>
	<td><?php //echo $item['User']['username']; ?></td>
	<td><a href="<?php echo $this->Html->url(array('action'=>'edit', $item['Socio']['id']))?>">
		<?php echo $item['Socio']['nombre']; ?></a>   
	</td>
	
	<td><?php echo $item['Socio']['apellido']; ?></td>
	<td><?php echo $item['Socio']['email']; ?></td>
	<td><?php echo $item['Socio']['telefono']; ?></td>
	<td><?php echo $item['User']['activo']; ?></td>
	
	
	
	<?php echo $this->element('actions', array('controller'=>'Socios','entidad'=>'Socio', 'item'=>$item ));?>
	</tr>
	
	<?php endforeach; ?>
	</tbody>
	</table>
	<?php echo $this->element('paginador') ?>

    
	
	
	
  </div><!-- /.box-body -->
</div><!-- /.box -->




