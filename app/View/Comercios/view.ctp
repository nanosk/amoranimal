<div class="comercios view">
<h2><?php echo __('Comercio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comercio['Comercio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('razon_social'); ?></dt>
		<dd>
			<?php echo h($comercio['Comercio']['razon_social']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Titular'); ?></dt>
		<dd>
			<?php echo h($comercio['Comercio']['nombre_titular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Titular'); ?></dt>
		<dd>
			<?php echo h($comercio['Comercio']['apellido_titular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($comercio['Comercio']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($comercio['Comercio']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($comercio['Comercio']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logo'); ?></dt>
		<dd>
			<?php echo h($comercio['Comercio']['logo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
			<?php echo h($comercio['Comercio']['activo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comercio['Usuario']['usuario'], array('controller' => 'usuarios', 'action' => 'view', $comercio['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($comercio['Comercio']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($comercio['Comercio']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comercio'), array('action' => 'edit', $comercio['Comercio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comercio'), array('action' => 'delete', $comercio['Comercio']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $comercio['Comercio']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Comercios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comercio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Promos'), array('controller' => 'promos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Promo'), array('controller' => 'promos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Promos'); ?></h3>
	<?php if (!empty($comercio['Promo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Condiciones'); ?></th>
		<th><?php echo __('Valido Desde'); ?></th>
		<th><?php echo __('Valido Hasta'); ?></th>
		<th><?php echo __('Logo Promo'); ?></th>
		<th><?php echo __('Comercio Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($comercio['Promo'] as $promo): ?>
		<tr>
			<td><?php echo $promo['id']; ?></td>
			<td><?php echo $promo['descripcion']; ?></td>
			<td><?php echo $promo['condiciones']; ?></td>
			<td><?php echo $promo['valido_desde']; ?></td>
			<td><?php echo $promo['valido_hasta']; ?></td>
			<td><?php echo $promo['logo_promo']; ?></td>
			<td><?php echo $promo['comercio_id']; ?></td>
			<td><?php echo $promo['created']; ?></td>
			<td><?php echo $promo['modified']; ?></td>
			<td><?php echo $promo['activo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'promos', 'action' => 'view', $promo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'promos', 'action' => 'edit', $promo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'promos', 'action' => 'delete', $promo['id']), array('confirm' => __('Are you sure you want to delete # %s?', $promo['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Promo'), array('controller' => 'promos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
