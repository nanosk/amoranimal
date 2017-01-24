

<script type="text/javascript">
	try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
</script>
<?php  echo $this->element('botonera');?>
	
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Listados de Niveles</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
    
    
	
	
	    
	
<table class="table table-bordered table-hover">


<thead>
<th width="5%">ID</th> 
<th>Descripcion</th>

<th>Imagen</th>
<th width="10%"></th>
</thead>
<tbody>

<?php foreach ($registros as $item): ?>
<tr>
<td><?php echo $item['Level']['id']; ?></td>
<td><?php echo $item['Level']['nombre']; ?></td>
<td><?php echo $item['Level']['descripcion']; ?></td>


<?php echo $this->element('actions', array('controller'=>'Levels','entidad'=>'Level', 'item'=>$item ));?>

</tr>

<?php endforeach; ?>
</tbody>
</table>

	
  </div><!-- /.box-body -->
</div><!-- /.box -->
