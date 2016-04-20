<div class="socios index">
	<h2><?php echo __('Socios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dni'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('telenono'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('activo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($socios as $socio): ?>
	<tr>
		<td><?php echo h($socio['Socio']['id']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['dni']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['telenono']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['email']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['created']); ?>&nbsp;</td>
		<td><?php echo h($socio['Socio']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($socio['Usuario']['usuario'], array('controller' => 'usuarios', 'action' => 'view', $socio['Usuario']['id'])); ?>
		</td>
		<td><?php echo h($socio['Socio']['activo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $socio['Socio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $socio['Socio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $socio['Socio']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $socio['Socio']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Socio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuotas'), array('controller' => 'cuotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuota'), array('controller' => 'cuotas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pagos'), array('controller' => 'pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pago'), array('controller' => 'pagos', 'action' => 'add')); ?> </li>
	</ul>
</div>
