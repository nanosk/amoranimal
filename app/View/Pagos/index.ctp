
<?php $this->start('script') ?>
<script type="text/javascript">
	jQuery(function($){
			$('#mnu_adm').addClass( "treeview active");
			$('#mnu_adm_pagos').addClass( "active"); 
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
    <h3 class="box-title">Pagos</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
    
    
	
	
	    
	
	<table class="table table-bordered table-hover">
	<thead>
	<th>Socio</th>
	<th>Forma de Pago</th>
	
	<th>Monto</th>
	
	<th>Fecha de pago</th>
	<th>Vencido</th>
	<th>Activo</th>
	<th width="15%"></th>
	
	</thead>
	<tbody>
	
	<?php foreach ($registros as $item): ?>
	<td><a href="<?php echo $this->Html->url(array('action'=>'view', $item['Pago']['id']))?>">
		<?php echo $item['Socio']['apellidoynombre']; ?></a>   
	</td>
	
	<td><?php echo $item['Formapago']['descripcion']; ?>  </td>
	<td><?php echo $item['Pago']['monto']; ?>  </td>
	<td><?php echo $this->Convertfecha->DMY($item['Pago']['fecha_pago']); ?>  </td>
	<td><?php echo $this->Convertdatos->booltexto($item['Pago']['vencido']); ?>  </td>
	<td><?php echo $this->Convertdatos->booltexto($item['Pago']['activo']); ?>  </td>
	



	
	<?php echo $this->element('actions', array('controller'=>'Pagos','entidad'=>'Pago', 'item'=>$item ));?>
	</tr>
	
	<?php endforeach; ?>
	</tbody>
	</table>
	<?php echo $this->element('paginador') ?>

    
	
	
	
  </div><!-- /.box-body -->
</div><!-- /.box -->

<?php $this->start('script') ?>
<script type="text/javascript">
	jQuery(function($){
			$('#mnu_adm').addClass( "treeview active");
			$('#mnu_adm_pagos').addClass( "active"); 
		});
</script>
<?php $this->end('script') ?>
