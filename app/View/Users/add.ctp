

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
        	<li>  
            <?php echo $this->Html->link('Listado',array('action'=>'index')); ?> 
        	</li>
       <li class="active">
           Alta de Usuario
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
			 Alta de usuario
		</small>
	</h1>
</div><!-- /.page-header -->


<div class="col-xs-6">
<?php echo $this->Form->create('User', array('action' => 'add'), array('class'=>'form-group'));?>

<div class="form-group">
<?php echo $this->Form->input('username',array('label'=>'Nombre de usuario', 'class'=>'form-control'));?>
</div>

<div class="form-group">
<?php echo $this->Form->input('apellidoynombre',array('label'=>'Apellido y nombre', 'class'=>'form-control'));?>
</div>


<div class="form-group">
<?php echo $this->Form->input('email',array('label'=>'Email', 'class'=>'form-control'));?>
</div>

<div class="form-group">
<?php echo $this->Form->input('password',array('type'=>'password', 'label'=>'Password','class'=>'form-control'));?>
</div>




<label>Grupo</label>
<div class="form-group">
<?php echo $this->Form->input('group_id',array('label'=>false,'class'=>'select2'));?>
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


	
	
				

	<script type="text/javascript">
			jQuery(function($){
		
				//select2
				$('.select2').css('width','200px').select2({allowClear:false})
		
			});
		</script>	
  
    			  
			  
  

