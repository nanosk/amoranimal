
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
            Cambiar Contraseña
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
		<div class="col-xs-6">
		
		

<div class="page-header">
	<h1>
		Mi Cuenta
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			 Cambiar contraseña
		</small>
	</h1>
</div><!-- /.page-header -->


<?php echo $this->Form->create('User',array('action'=>'cambiarpass', 'class'=>'form-group')); ?>

<div class="form-group">
<?php echo $this->Form->input('username',array('disabled'=>'true', 
		'label'=>'Nombre de Usuario','class'=>'form-control'));?>
</div>
<div class="form-group">
<?php echo $this->Form->input('password',array('label'=>'Ingresar Nueva contraseña','class'=>'form-control'));?>
</div>
<div class="form-group">
<?php echo $this->Form->input('passwordrepeat',array('type'=>'password', 'label'=>'Repetir la Nueva contraseña','class'=>'form-control'));?>
</div>

<div class="form-group">
<button class="btn btn-primary" type="submit">
 <i class="fa fa-save"></i> Guardar
<?php echo $this->Form->end(); ?> 
</button>


<button class="btn" type="reset">
	<i class="ace-icon fa fa-undo bigger-110"></i>
	Cancelar
</button>
</div>

	


		<!-- PAGE CONTENT ENDS -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->
