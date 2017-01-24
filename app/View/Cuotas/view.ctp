<div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li>  <i class="fa fa-dashboard"></i> 
                    <?php echo $this->Html->link('Inicio',array('controller'=>'paginas', 'action'=>'administrador')); ?>
             </li>
			<li>  <?php echo $this->Html->link('Listado Pagos'
                    ,array('controller'=>'Pagos', 'action'=>'index')); ?></li>
			     <li class="active">
			     <a href="#">
              		Editar Pago
				  </a>
                </li>
		</ol>
	</div>
</div>
   



<div class="row">
	<div class="col-xs-8 col-sm-8">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Formulario Pagos</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
				<h4 class="page-header">Ver detalle Pago</h4>
<a href="<?php echo $this->Html->url(array('action'=>'index'));?>" 
class="btn btn-default btn-label-left">
<span><i class="fa fa-search"></i></span>
	Buscar Cliente
</a>
				
<?php echo $this->Form->create('Pago',array('action'=>'view', 'class'=>'form-horizontal','role'=>'form')); ?>
<?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
<?php echo $this->Form->input('cliente_id', array('disabled'=>'true', 'type'=>'select', 'id'=>'cli','label'=>'Cliente')); ?>

<div class="form-group">
<div class="col-sm-3">
<label>Mes </label>
<?php echo $this->Form->select('mes',$meses, array('disabled'=>'true', 'class'=>'form-control')); ?>
</div>
<div class="col-sm-3">
<?php echo $this->Form->input('anio',array( 'label'=>'Año', 'class'=>'form-control')); ?>
</div>
<div class="col-sm-4">
<?php echo $this->Form->input('importe',array('label'=>'Importe', 'class'=>'form-control')); ?>
</div>

</div>
<div class="clearfix"></div>




</div>
</div>
</div>	
</div>
<script type="text/javascript">
// Run Select2 on element
function Select2Test(){
	$("#el2").select2();
	$("#cli").select2();
	
}
$(document).ready(function() {
	// Load script of Select2 and run this
	LoadSelect2Script(Select2Test);
	WinMove();
});
</script>