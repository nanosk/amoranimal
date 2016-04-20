<div class="cuotas view">
<h2><?php echo __('Cuota'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cuota['Cuota']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monto Fijo'); ?></dt>
		<dd>
			<?php echo h($cuota['Cuota']['monto_fijo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forma Pago'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cuota['FormaPago']['descripcion'], array('controller' => 'forma_pagos', 'action' => 'view', $cuota['FormaPago']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vencimiento'); ?></dt>
		<dd>
			<?php echo h($cuota['Cuota']['vencimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cuota['Cuota']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cuota['Cuota']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Socio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cuota['Socio']['dni'], array('controller' => 'socios', 'action' => 'view', $cuota['Socio']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cuota'), array('action' => 'edit', $cuota['Cuota']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cuota'), array('action' => 'delete', $cuota['Cuota']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cuota['Cuota']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuotas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuota'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forma Pagos'), array('controller' => 'forma_pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forma Pago'), array('controller' => 'forma_pagos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
	</ul>
</div>
