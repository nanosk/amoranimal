<div class="tipoUsuarios form">
<?php echo $this->Form->create('TipoUsuario'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipo Usuario'); ?></legend>
	<?php
		echo $this->Form->input('tipo');
		echo $this->Form->input('nivel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipo Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
