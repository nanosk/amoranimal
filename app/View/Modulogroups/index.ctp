
<?php $this->start('filtros') ?> 
	<?php 	echo $this->element('filtro2',$datos);  ?>
<?php $this->end('filtros') ?>
		
<?php $this->start('opciones') ?> 
	<?php echo $this->element('boton',array('botones'=>$botones)); ?>
<?php $this->end('opciones') ?>



<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Listado de Permisos</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
    
    
	

	
	    
	
	<table class="table table-bordered table-hover">
	<thead>
	
    <th>Grupo de Usuario</th>
    <th>Modulo</th>
    <th>Funcionalidad</th>
    <th>Tiene Permiso</th>
	<th width="15%"></th>
	
	</thead>
	<tbody>
	

<?php foreach ($registros as $item): ?>
<tr>
<td><?php echo $item['Group']['name']; ?></td>
<td><?php echo $item['Modulo']['controller']; ?></td>
<td><?php echo $item['Modulo']['action']; ?></td>
<td><?php echo $this->Convertdatos->booltexto($item['Modulogroup']['tienepermiso']); ?></td>

<?php echo $this->element('actions', array('controller'=>'Modulogroups','entidad'=>'Modulogroup', 'item'=>$item ));?>
</tr>
<?php endforeach; ?>    
    
</tbody>
</table>
<?php echo $this->element('paginador') ?>

    
	
	
	
  </div><!-- /.box-body -->
</div><!-- /.box -->

