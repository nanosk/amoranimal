<div class="pagos index">
	<h2><?php echo __('Pagos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_pago'); ?></th>
			<th><?php echo $this->Paginator->sort('monto'); ?></th>
			<th><?php echo $this->Paginator->sort('pago_anterior'); ?></th>
			<th><?php echo $this->Paginator->sort('socio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cuota_id'); ?></th>
			<th><?php echo $this->Paginator->sort('vencido'); ?></th>
			<th><?php echo $this->Paginator->sort('activo'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pagos as $pago): ?>
	<tr>
		<td><?php echo h($pago['Pago']['id']); ?>&nbsp;</td>
		<td><?php echo h($pago['Pago']['fecha_pago']); ?>&nbsp;</td>
		<td><?php echo h($pago['Pago']['monto']); ?>&nbsp;</td>
		<td><?php echo h($pago['Pago']['pago_anterior']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pago['Socio']['dni'], array('controller' => 'socios', 'action' => 'view', $pago['Socio']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pago['Cuota']['monto_fijo'], array('controller' => 'cuotas', 'action' => 'view', $pago['Cuota']['id'])); ?>
		</td>
		<td><?php echo h($pago['Pago']['vencido']); ?>&nbsp;</td>
		<td><?php echo h($pago['Pago']['activo']); ?>&nbsp;</td>
		<td><?php echo h($pago['Pago']['created']); ?>&nbsp;</td>
		<td><?php echo h($pago['Pago']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pago['Pago']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pago['Pago']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pago['Pago']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $pago['Pago']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Pago'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuotas'), array('controller' => 'cuotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuota'), array('controller' => 'cuotas', 'action' => 'add')); ?> </li>
	</ul>
</div>
