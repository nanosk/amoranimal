<div class="pagos view">
<h2><?php echo __('Pago'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Pago'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['fecha_pago']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monto'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['monto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pago Anterior'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['pago_anterior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Socio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pago['Socio']['dni'], array('controller' => 'socios', 'action' => 'view', $pago['Socio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuota'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pago['Cuota']['monto_fijo'], array('controller' => 'cuotas', 'action' => 'view', $pago['Cuota']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vencido'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['vencido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['activo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pago'), array('action' => 'edit', $pago['Pago']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pago'), array('action' => 'delete', $pago['Pago']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $pago['Pago']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Pagos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pago'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuotas'), array('controller' => 'cuotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuota'), array('controller' => 'cuotas', 'action' => 'add')); ?> </li>
	</ul>
</div>
