<?php $this->start('script') ?>
<script type="text/javascript">
	jQuery(function($){
			$('#mnu_adm').addClass( "treeview active");
			$('#mnu_adm_Logbackups').addClass( "active"); 
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
    <h3 class="box-title">Mantenimiento de Base de datos</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
    
    
	
	
	    
	
	<table class="table table-bordered table-hover">
	<thead>
		<th>Nro</th>
	<th>Tipo de operacion</th>
	<th>Fecha</th>
	
	<th width="15%"></th>
	
	</thead>
	<tbody>
	
	<?php foreach ($registros as $item): ?>
	
	<td><?php echo $item['Logbackup']['id'] ?></td>
	<td><a href="<?php echo $this->Html->url(array('action'=>'view', $item['Logbackup']['id']))?>">
		<?php echo $item['Logbackup']['type']; ?></a>   
	</td>
	

	<td><?php echo $this->Convertfecha->DMYms($item['Logbackup']['created']); 
	//$date = new DateTime($item['Logbackup']['created']);
	//echo $date->format('d/m/Y H:i:s');
	
		
	?></td>
	
	
	
	<?php //echo $this->element('actions', array('controller'=>'Logbackups','entidad'=>'Logbackup', 'item'=>$item ));?>
	</tr>
	
	<?php endforeach; ?>
	</tbody>
	</table>
	<?php echo $this->element('paginador') ?>

    
	
	
	
  </div><!-- /.box-body -->
</div><!-- /.box -->




