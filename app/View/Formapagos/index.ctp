<?php $this->start('script') ?>
<script type="text/javascript">
	jQuery(function($){
			$('#mnu_adm').addClass( "treeview active");
			$('#mnu_adm_formapagos').addClass( "active"); 
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
    <h3 class="box-title">Forma de pagos</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
    
    
	
	
	    
	
	<table class="table table-bordered table-hover">
	<thead>
	<th>Descripcion</th>
	<th>Activo</th>
	
	<th width="15%"></th>
	
	</thead>
	<tbody>
	
	<?php foreach ($registros as $item): ?>
	
	
	<td><a href="<?php echo $this->Html->url(array('action'=>'view', $item['Formapago']['id']))?>">
		<?php echo $item['Formapago']['descripcion']; ?></a>   
	</td>
	

	<td><?php echo $this->Convertdatos->booltexto($item['Formapago']['activo']); ?></td>
	
	
	
	<?php echo $this->element('actions', array('controller'=>'Formapagos','entidad'=>'Formapago', 'item'=>$item ));?>
	</tr>
	
	<?php endforeach; ?>
	</tbody>
	</table>
	<?php echo $this->element('paginador') ?>

    
	
	
	
  </div><!-- /.box-body -->
</div><!-- /.box -->




