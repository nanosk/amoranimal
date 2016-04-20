<div class="comercios form">
<?php echo $this->Form->create('Comercio'); ?>
	<fieldset>
		<legend><?php echo __('Edit Comercio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('razon_social');
		echo $this->Form->input('nombre_titular');
		echo $this->Form->input('apellido_titular');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('email');
		echo $this->Form->input('logo');
		echo $this->Form->input('activo');
		echo $this->Form->input('usuario_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Comercio.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Comercio.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Comercios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Promos'), array('controller' => 'promos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Promo'), array('controller' => 'promos', 'action' => 'add')); ?> </li>
	</ul>
</div>
