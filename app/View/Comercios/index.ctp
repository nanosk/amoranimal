<?php $this->start('script') ?>
<script type="text/javascript">
	jQuery(function($){
			$('#mnu_adm').addClass( "treeview active");
			$('#mnu_adm_comercios').addClass( "active"); 
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
    <h3 class="box-title">Comercios</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
    
    
	
	
	    
	
	<table class="table table-bordered table-hover">
	<thead>
	<th>ID</th>
	<th>Logo</th>
	<th>Razon Social</th>
	<th>Nombre</th>
	<th>Direccion</th>

	<th>Activo</th>
	

	
	<th width="15%"></th>
	
	</thead>
	<tbody>
	
	<?php foreach ($registros as $item): ?>
	
	<td><?php echo $item['Comercio']['id']; ?></td>
	
	<td>
	<?php
	if  ($item['Comercio']['logo']){
		
    echo $this->Html->link($this->Html->image('../files/comercio/logo/'.$item['Comercio']['id'].'/'.
				$item['Comercio']['logo'],
				array('class'=>'img-rounded','width'=>'100px','height'=>'100px')),
                       '#',
                       array('escape' => false));	
					   }
	?>
	</td>
	<td><a href="<?php echo $this->Html->url(array('action'=>'view', $item['Comercio']['id']))?>">
		<?php echo $item['Comercio']['razon_social']; ?></a>   
	</td>
	<td><?php echo $item['Comercio']['nombre_titular']; ?></td>
	<td><?php echo $item['Comercio']['direccion']; ?></td>
	<td><?php echo $this->Convertdatos->booltexto($item['Comercio']['activo']); ?></td>
	
	
	
	<?php echo $this->element('actions', array('controller'=>'Comercios','entidad'=>'Comercio', 'item'=>$item ));?>
	</tr>
	
	<?php endforeach; ?>
	</tbody>
	</table>
	<?php echo $this->element('paginador') ?>

    
	
	
	
  </div><!-- /.box-body -->
</div><!-- /.box -->




