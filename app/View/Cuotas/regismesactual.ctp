
  <script type="text/javascript">
	try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
</script>
			

<?php $this->start('opciones') ?> 
	<?php echo $this->element('boton',array('botones'=>$botones)); ?>
<?php $this->end('opciones') ?>

		
<?php $this->start('filtros') ?> 
	<?php 	echo $this->element('filtro2',$datos);  ?>
<?php $this->end('filtros') ?>


<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Clientes que abonaron la Cuota Mes Actual</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
			

<table class="table table-bordered table-hover">

<thead>

<th>Id</th>
<th>Fecha de Cuota</th>
<th>Cliente</th>
<th>Mes</th>
<th>Año</th>
<th>Importe</th>
<th></th>
<th></th>
<th></th>
</thead>
<tbody>
<?php foreach ($registros as $item): ?>
<tr>
<td><?php echo $item['Cuota']['id']; ?></td>
<td><?php echo $item['Cuota']['created']; ?></td>
<td><?php echo $item['Cliente']['nombre'] . ' '. $item['Cliente']['apellido']; ?></td>
<td><?php echo $meses[$item['Cuota']['mes']]; ?></td>
<td><?php echo $item['Cuota']['anio']; ?></td>
<td><?php echo $item['Cuota']['importe']; ?></td>

<?php echo $this->element('actions', array('controller'=>'Cuotas','entidad'=>'Cuota', 'item'=>$item ));?>



</tr>

<?php endforeach; ?>
</tbody>
</table>
    
	
	</div>

</div>
