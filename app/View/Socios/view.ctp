<div class="socios view">
<h2><?php echo __('Socio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dni'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['dni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telenono'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['telenono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($socio['Usuario']['usuario'], array('controller' => 'usuarios', 'action' => 'view', $socio['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['activo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Socio'), array('action' => 'edit', $socio['Socio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Socio'), array('action' => 'delete', $socio['Socio']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $socio['Socio']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Socios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuotas'), array('controller' => 'cuotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuota'), array('controller' => 'cuotas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pagos'), array('controller' => 'pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pago'), array('controller' => 'pagos', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Cuotas'); ?></h3>
	<?php if (!empty($socio['Cuota'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $socio['Cuota']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Monto Fijo'); ?></dt>
		<dd>
	<?php echo $socio['Cuota']['monto_fijo']; ?>
&nbsp;</dd>
		<dt><?php echo __('Forma Pago Id'); ?></dt>
		<dd>
	<?php echo $socio['Cuota']['forma_pago_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Vencimiento'); ?></dt>
		<dd>
	<?php echo $socio['Cuota']['vencimiento']; ?>
&nbsp;</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
	<?php echo $socio['Cuota']['created']; ?>
&nbsp;</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
	<?php echo $socio['Cuota']['modified']; ?>
&nbsp;</dd>
		<dt><?php echo __('Socio Id'); ?></dt>
		<dd>
	<?php echo $socio['Cuota']['socio_id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Cuota'), array('controller' => 'cuotas', 'action' => 'edit', $socio['Cuota']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Pagos'); ?></h3>
	<?php if (!empty($socio['Pago'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha Pago'); ?></th>
		<th><?php echo __('Pago Anterior'); ?></th>
		<th><?php echo __('Socio Id'); ?></th>
		<th><?php echo __('Vencido'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($socio['Pago'] as $pago): ?>
		<tr>
			<td><?php echo $pago['id']; ?></td>
			<td><?php echo $pago['fecha_pago']; ?></td>
			<td><?php echo $pago['pago_anterior']; ?></td>
			<td><?php echo $pago['socio_id']; ?></td>
			<td><?php echo $pago['vencido']; ?></td>
			<td><?php echo $pago['activo']; ?></td>
			<td><?php echo $pago['created']; ?></td>
			<td><?php echo $pago['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pagos', 'action' => 'view', $pago['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pagos', 'action' => 'edit', $pago['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pagos', 'action' => 'delete', $pago['id']), array('confirm' => __('Are you sure you want to delete # %s?', $pago['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pago'), array('controller' => 'pagos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
