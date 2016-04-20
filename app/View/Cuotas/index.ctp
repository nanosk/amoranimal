<div class="cuotas index">
	<h2><?php echo __('Cuotas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('monto_fijo'); ?></th>
			<th><?php echo $this->Paginator->sort('forma_pago_id'); ?></th>
			<th><?php echo $this->Paginator->sort('vencimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('socio_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cuotas as $cuota): ?>
	<tr>
		<td><?php echo h($cuota['Cuota']['id']); ?>&nbsp;</td>
		<td><?php echo h($cuota['Cuota']['monto_fijo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cuota['FormaPago']['descripcion'], array('controller' => 'forma_pagos', 'action' => 'view', $cuota['FormaPago']['id'])); ?>
		</td>
		<td><?php echo h($cuota['Cuota']['vencimiento']); ?>&nbsp;</td>
		<td><?php echo h($cuota['Cuota']['created']); ?>&nbsp;</td>
		<td><?php echo h($cuota['Cuota']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cuota['Socio']['dni'], array('controller' => 'socios', 'action' => 'view', $cuota['Socio']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cuota['Cuota']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cuota['Cuota']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cuota['Cuota']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cuota['Cuota']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Cuota'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Forma Pagos'), array('controller' => 'forma_pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forma Pago'), array('controller' => 'forma_pagos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
	</ul>
</div>
