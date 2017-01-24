
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
    <h3 class="box-title">Clientes Con Cuota/s Pendientes </h3>
  </div><!-- /.box-header -->
  <div class="box-body">
			

			
			
<table class="table table-bordered table-hover">
<thead>

<th>Nro. Doc.</th>

<th>Cliente</th>
<th>Telefono</th>
<th>Email</th>

</thead>
<tbody>

<?php 
$cuotas =0;
foreach ($registros as $item): 
$cuotas += 1;
 
?>
<tr>
<td><?php echo $item['Cliente']['nrodoc']; ?></td>
<td><?php echo $item['Cliente']['apellido'] . ', '. $item['Cliente']['nombre']; ?></td>
<td><?php echo $item['Cliente']['telefono']; ?></td>
<td><?php echo $item['Cliente']['email']; ?></td>




</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>

</div>
			
