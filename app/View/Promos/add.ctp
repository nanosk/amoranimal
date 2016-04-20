<div class="promos form">
<?php echo $this->Form->create('Promo'); ?>
	<fieldset>
		<legend><?php echo __('Add Promo'); ?></legend>
	<?php
		echo $this->Form->input('descripcion');
		echo $this->Form->input('condiciones');
		echo $this->Form->input('valido_desde');
		echo $this->Form->input('valido_hasta');
		echo $this->Form->input('logo_promo');
		echo $this->Form->input('comercio_id');
		echo $this->Form->input('activo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Promos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Comercios'), array('controller' => 'comercios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comercio'), array('controller' => 'comercios', 'action' => 'add')); ?> </li>
	</ul>
</div>
