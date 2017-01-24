
    



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
    <h3 class="box-title">Listado de Modulos</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
    
    
	
	
	    
	
	<table class="table table-bordered table-hover">
	<thead>
	<th width="5%">ID</th> 
    <th>Controlador</th>
    <th>Vista</th>




	<th width="15%"></th>
	
	</thead>
	<tbody>
	
	<?php foreach ($registros as $item): ?>
	
    <td><?php echo $item['Modulo']['id']; ?></td>
    <td><?php echo $item['Modulo']['controller']; ?></td>
    <td><?php echo $item['Modulo']['action']; ?></td>
    
    
    <?php echo $this->element('actions', array('controller'=>'Modulos','entidad'=>'Modulo', 'item'=>$item ));?>
	</tr>
	
	<?php endforeach; ?>
	</tbody>
	</table>
	<?php echo $this->element('paginador') ?>

    
	
	
	
  </div><!-- /.box-body -->
</div><!-- /.box -->





