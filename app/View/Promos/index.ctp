<div class="promos index">
	<h2><?php echo __('Promos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('condiciones'); ?></th>
			<th><?php echo $this->Paginator->sort('valido_desde'); ?></th>
			<th><?php echo $this->Paginator->sort('valido_hasta'); ?></th>
			<th><?php echo $this->Paginator->sort('logo_promo'); ?></th>
			<th><?php echo $this->Paginator->sort('comercio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('activo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($promos as $promo): ?>
	<tr>
		<td><?php echo h($promo['Promo']['id']); ?>&nbsp;</td>
		<td><?php echo h($promo['Promo']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($promo['Promo']['condiciones']); ?>&nbsp;</td>
		<td><?php echo h($promo['Promo']['valido_desde']); ?>&nbsp;</td>
		<td><?php echo h($promo['Promo']['valido_hasta']); ?>&nbsp;</td>
		<td><?php echo h($promo['Promo']['logo_promo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($promo['Comercio']['razon_social'], array('controller' => 'comercios', 'action' => 'view', $promo['Comercio']['id'])); ?>
		</td>
		<td><?php echo h($promo['Promo']['created']); ?>&nbsp;</td>
		<td><?php echo h($promo['Promo']['modified']); ?>&nbsp;</td>
		<td><?php echo h($promo['Promo']['activo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $promo['Promo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $promo['Promo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $promo['Promo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $promo['Promo']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Promo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Comercios'), array('controller' => 'comercios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comercio'), array('controller' => 'comercios', 'action' => 'add')); ?> </li>
	</ul>
</div>
