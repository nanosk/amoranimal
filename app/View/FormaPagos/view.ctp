<div class="formaPagos view">
<h2><?php echo __('Forma Pago'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($formaPago['FormaPago']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($formaPago['FormaPago']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
			<?php echo h($formaPago['FormaPago']['activo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Forma Pago'), array('action' => 'edit', $formaPago['FormaPago']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Forma Pago'), array('action' => 'delete', $formaPago['FormaPago']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $formaPago['FormaPago']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Forma Pagos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forma Pago'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuotas'), array('controller' => 'cuotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuota'), array('controller' => 'cuotas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cuotas'); ?></h3>
	<?php if (!empty($formaPago['Cuota'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Monto Fijo'); ?></th>
		<th><?php echo __('Forma Pago Id'); ?></th>
		<th><?php echo __('Vencimiento'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Socio Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($formaPago['Cuota'] as $cuota): ?>
		<tr>
			<td><?php echo $cuota['id']; ?></td>
			<td><?php echo $cuota['monto_fijo']; ?></td>
			<td><?php echo $cuota['forma_pago_id']; ?></td>
			<td><?php echo $cuota['vencimiento']; ?></td>
			<td><?php echo $cuota['created']; ?></td>
			<td><?php echo $cuota['modified']; ?></td>
			<td><?php echo $cuota['socio_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cuotas', 'action' => 'view', $cuota['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cuotas', 'action' => 'edit', $cuota['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cuotas', 'action' => 'delete', $cuota['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cuota['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cuota'), array('controller' => 'cuotas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
