<?php $this->start('script') ?>
<script type="text/javascript">
	jQuery(function($){
			$('#mnu_adm').addClass( "treeview active");
			$('#mnu_adm_admins').addClass( "active"); 
		});
</script>
<?php $this->end('script') ?>


<?php $this->start('filtros') ?> 
	<?php 	echo $this->element('filtro2',$datos);  ?>
<?php $this->end('filtros') ?>
		
<?php $this->start('opciones') ?> 
	<?php echo $this->element('boton',array('botones'=>$botones)); ?>
<?php $this->end('opciones') ?>

<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Administradores</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
    
    
	
	
	    
	
	<table class="table table-bordered table-hover">
	<thead>

	<th>Usuario</th>
	<th>Apellido y nombre</th>

	<th>Direccion</th>
	
	<th>Email</th>

	<th>Activo</th>
	
	<th width="15%"></th>
	
	</thead>
	<tbody>
	
	<?php foreach ($registros as $item): ?>
	
	
	<td><?php echo $item['User']['username']; ?></td>
	
	<td><a href="<?php echo $this->Html->url(array('action'=>'view', $item['Administradore']['id']))?>">
		<?php echo $item['Administradore']['apellidoynombre']; ?></a>   
	</td>

	<td><?php echo $item['Administradore']['direccion']; ?></td>
	<td><?php echo $item['Administradore']['email']; ?></td>
	
	<td><?php echo $this->Convertdatos->booltexto($item['Administradore']['activo']); ?></td>
	
	<?php echo $this->element('actions', array('controller'=>'Administradores','entidad'=>'Administradore', 'item'=>$item ));?>
	</tr>
	
	<?php endforeach; ?>
	</tbody>
	</table>
	<?php echo $this->element('paginador') ?>

    
	
	
	
  </div><!-- /.box-body -->
</div><!-- /.box -->




