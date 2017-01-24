<div class="main-content">
				<div class="main-content-inner">
 				
<div class="breadcrumbs" id="breadcrumbs">
			<script type="text/javascript">
				try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
			</script>

			<ul class="breadcrumb">
	 		<li>   <i class="fa fa-dashboard"></i> 
            <?php echo $this->Html->link('Inicio',array('controller'=>'administrador', 
            'action'=>'index')); ?> 
        </li>
       <li class="active">
            Listado Categorias
        </li>
	</ul><!-- /.breadcrumb -->
</div>
<?php 
$msj =  $this->Session->flash(); 
$this->set('mensaje',$msj);
echo $this->element('mensaje');
?>

<div class="page-content">
	<div class="row">
		<div class="col-xs-12">
		
		

<div class="page-header">
	<h1>
		Categorias 
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			 Listado
		</small>
	</h1>
</div><!-- /.page-header -->
		
		
			
			
			
<div class="form-group">

<a href="<?php echo $this->Html->url(array( 'action' => 'add')); ?>" 
class="btn btn-xs  btn-primary btn-bold">
<i class="ace-icon fa fa-floppy-o bigger-120 white"></i> Nuevo </a>

<button class="btn btn-xs  btn-info btn-bold" data-toggle="modal" data-target="#myModal">
<i class="ace-icon fa fa-search bigger-120 white"></i> Filtrar
</button>


<a href="<?php echo $this->Html->url(array('action' => 'index'))?>"
class="btn btn-xs  btn-primary btn-bold">
<i class="ace-icon fa fa-list bigger-120 white"></i>
Mostrar todos
</a>
<a href="<?php echo $this->Html->url(array('action' => 'create_pdf'))?>"
class="btn btn-xs  btn-default btn-bold">
<i class="ace-icon fa fa-download bigger-120 white "></i>
Generar PDF
</a>

<a href="<?php echo $this->Html->url(array( 'action' => 'exportcsv'))?>"
class="btn btn-xs  btn-success btn-bold">
<i class="fa fa-download"></i>
Exportar a CSV
</a>

</div><!--  fin botonera -->




<table id="simple-table" class="table table-striped table-bordered table-hover">

<thead>
<th><?php echo $this->Paginator->sort('id', 'ID'); ?></th>
<th><?php echo $this->Paginator->sort('descripcion', 'Descripcion'); ?></th>
<th>Desc. larga</th>
<th>En inicio</th>
<th>Imagen</th>
<th width="5%"></th>
<th width="5%"></th>
<th width="5%"></th>
</thead>
<tbody>

<?php foreach ($registros as $item): ?>
<tr>
<td><?php echo $item['Categoria']['id']; ?></td>
<td><?php echo $item['Categoria']['descripcion']; ?></td>
<td><?php echo $item['Categoria']['desc_larga']; ?></td>
<td><?php echo $item['Categoria']['eninicio']; ?></td>
<td>
<?php
if  ($item['Categoria']['imagen']){
echo $this->Html->image('../files/categoria/imagen/'.$item['Categoria']['id'].'/'.
			$item['Categoria']['imagen'],
			array('class'=>'img-rounded','width'=>'100px','height'=>'100px'));
}			
?>
</td>


<td>
<?php echo $this->Html->link('', array('controller' => 'Categorias','action' => 'view', 
$item['Categoria']['id']),
array('class'=>'btn btn-xs btn-success fa fa-eye ',
'title'=>'Detalle registro','data-toggle'=>'tooltip', 'data-placement'=>'top'));?>

</td>
<td>

<?php echo $this->Html->link('', array('controller' => 'Categorias','action' => 'edit', 
$item['Categoria']['id']),
array('class'=>'btn btn-xs btn-info fa fa-pencil',
'title'=>'Editar registro','data-toggle'=>'tooltip', 'data-placement'=>'top'));?>
</td>
<td>
<?php 
$mensaje = 'Estas Seguro que desea eliminar el registro?'.
$item['Categoria']['descripcion'];
echo $this->Form->postLink('', 
array('controller' => 'Categorias','action' => 'delete', $item['Categoria']['id']),	
array('confirm' => $mensaje , 'class'=>'btn btn-xs btn-danger fa fa-trash-o',
'title'=>'Eliminar registro','data-toggle'=>'tooltip', 'data-placement'=>'top')); 
?>
</td>




</tr>

<?php endforeach; ?>
</tbody>
</table>
    
<div class="box-footer clearfix">
<?php
echo $this->Paginator->counter(array(
'format' => 'Pagina %page% de %pages%, Mostrando %current% registros de
%count% en total'
)); 
?>

  <ul class="pagination pagination-sm no-margin pull-right">
	<li>                
	    <?php echo $this->Paginator->prev(' << ',array(),null); ?>
	</li>
	<li>
	    <?php echo $this->Paginator->numbers(); ?>
	</li>
	<li>
	  <?php   echo $this->Paginator->next(' >> ',array(),null,array('class' => 'next disabled'));  ?>                        
	</li>
  </ul>

</div>
<!-- fin contenido -->
			
			




















		
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
