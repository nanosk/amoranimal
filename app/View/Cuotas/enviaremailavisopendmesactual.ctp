


<?php $this->start('opciones') ?> 
	<?php echo $this->element('boton',array('botones'=>$botones)); ?>
<?php $this->end('opciones') ?>

		

<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Lista de Mails enviados  </h3>
  </div><!-- /.box-header -->
  <div class="box-body">
			

			
			
<table class="table table-bordered table-hover">
<thead>



<th>Cliente</th>
<th>Email</th>

</thead>
<tbody>

<?php 
$cuotas =0;
//debug ($clientesmailsenviados);
foreach ($clientesmailsenviados as $item): 
$cuotas += 1;
 
?>
<tr>

<td><?php echo $item['Cliente']['apellido'] . ', '. $item['Cliente']['nombre']; ?></td>
<td><?php echo $item['Cliente']['email']; ?></td>




</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>

</div>






	

<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Lista de Mails SIN ENVIAR  </h3>
  </div><!-- /.box-header -->
  <div class="box-body">
			

			
			
<table class="table table-bordered table-hover">
<thead>



<th>Cliente</th>
<th>Email</th>

</thead>
<tbody>

<?php 
$cuotas =0;
//debug ($clientesinmails);
foreach ($clientesinmails as $item): 
$cuotas += 1;
 
?>
<tr>

<td><?php echo $item['Cliente']['apellido'] . ', '. $item['Cliente']['nombre']; ?></td>
<td><?php echo $item['Cliente']['email']; ?></td>




</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>

</div>














