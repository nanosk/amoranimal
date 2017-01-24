<?php $this->start('script') ?>
<script type="text/javascript">
	jQuery(function($){
			$('#mnu_adm').addClass( "treeview active");
			$('#mnu_adm_promos').addClass( "active"); 
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
    <h3 class="box-title">Promos</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
    
    
	
	
	    
	
	<table class="table table-bordered table-hover">
	<thead>
	<th>Logo Promo</th>
	<th>Comercio</th>
	<th>Descripcion</th>
	<th>Valido Desde</th>
	<th>Valido Hasta</th>
    <th>Activo</th>
	<th width="15%"></th>
	
	</thead>
	<tbody>
	
	<?php foreach ($registros as $item): ?>
	<td>
	<?php
	
	if  ($item['Promo']['imagen']){
		
    echo $this->Html->link($this->Html->image('../files/promo/imagen/'.$item['Promo']['id'].'/'.
				$item['Promo']['imagen'],
				array('class'=>'img-rounded','width'=>'100px','height'=>'100px')),
                       '#',
                       array('escape' => false));	
					   }
	?>
	</td>

	<td><?php echo $item['Comercio']['razon_social']; ?></td>
	
	<td><a href="<?php echo $this->Html->url(array('action'=>'view', $item['Promo']['id']))?>">
		<?php echo $item['Promo']['descripcion']; ?></a>   
	</td>
	
	<td><?php echo $this->Convertdatos->fechaDMY($item['Promo']['valido_desde']); ?></td>
	<td><?php echo $this->Convertdatos->fechaDMY($item['Promo']['valido_hasta']); ?></td>
	<td><?php echo $this->Convertdatos->booltexto($item['Promo']['activo']); ?></td>
	
	
	<?php echo $this->element('actions', array('controller'=>'Promos','entidad'=>'Promo', 'item'=>$item ));?>
	</tr>
	
	<?php endforeach; ?>
	</tbody>
	</table>
	<?php echo $this->element('paginador') ?>

    
	
	
	
  </div><!-- /.box-body -->
</div><!-- /.box -->




