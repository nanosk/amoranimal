<div class="promos view">
<h2><?php echo __('Promo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($promo['Promo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($promo['Promo']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Condiciones'); ?></dt>
		<dd>
			<?php echo h($promo['Promo']['condiciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valido Desde'); ?></dt>
		<dd>
			<?php echo h($promo['Promo']['valido_desde']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valido Hasta'); ?></dt>
		<dd>
			<?php echo h($promo['Promo']['valido_hasta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logo Promo'); ?></dt>
		<dd>
			<?php echo h($promo['Promo']['logo_promo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comercio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($promo['Comercio']['razon social'], array('controller' => 'comercios', 'action' => 'view', $promo['Comercio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($promo['Promo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($promo['Promo']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
			<?php echo h($promo['Promo']['activo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Promo'), array('action' => 'edit', $promo['Promo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Promo'), array('action' => 'delete', $promo['Promo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $promo['Promo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Promos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Promo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comercios'), array('controller' => 'comercios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comercio'), array('controller' => 'comercios', 'action' => 'add')); ?> </li>
	</ul>
</div>
