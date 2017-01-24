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
            Editar datos de la cuenta
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
		Mi Cuenta
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			 Editar datos de la cuenta
		</small>
	</h1>

	
</div><!-- /.page-header -->


<div class="well">
<a href="<?php echo $this->Html->url(array('controller'=>'clientes', 'action' => 'edit'))?>"
class="btn btn-xs  btn-primary btn-bold">
Editar datos personales
</a>
</div>
<div class="col-xs-6">
<?php echo $this->Form->create('User', array('action' => 'editusuario'), array('class'=>'form-group'));
echo $this->Form->input('id', array('type' => 'hidden'));?>

<div class="form-group">
<?php echo $this->Form->input('username',array('label'=>'Nombre de usuario', 'class'=>'form-control'));?>
</div>

<div class="form-group">
<?php echo $this->Form->input('email',array('label'=>'Email','class'=>'form-control'));?>
</div>
<div class="form-group">
<?php echo $this->Form->input('empresanombre',array('label'=>'Razon Social','class'=>'form-control'));?>
</div>
<div class="form-group">

<button class="btn btn-primary" type="submit">
 <i class="fa fa-check"></i> Guardar
<?php echo $this->Form->end(); ?> 
</button>

<button class="btn" type="reset">
	<i class="ace-icon fa fa-undo bigger-110"></i>
	Cancelar
</button>

</div>

</div>

	<br>  





		<!-- PAGE CONTENT ENDS -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->
