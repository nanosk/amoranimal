<div class="tipoUsuarios form">
<?php echo $this->Form->create('TipoUsuario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipo Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo');
		echo $this->Form->input('nivel');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TipoUsuario.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('TipoUsuario.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
