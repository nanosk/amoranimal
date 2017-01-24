

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

	

