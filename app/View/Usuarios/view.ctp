<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nivel'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nivel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usuario['TipoUsuario']['tipo'], array('controller' => 'tipo_usuarios', 'action' => 'view', $usuario['TipoUsuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['activo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $usuario['Usuario']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Usuarios'), array('controller' => 'tipo_usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Usuario'), array('controller' => 'tipo_usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradores'), array('controller' => 'administradores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administradore'), array('controller' => 'administradores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comercios'), array('controller' => 'comercios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comercio'), array('controller' => 'comercios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Administradores'); ?></h3>
	<?php if (!empty($usuario['Administradore'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $usuario['Administradore']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
	<?php echo $usuario['Administradore']['nombre']; ?>
&nbsp;</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
	<?php echo $usuario['Administradore']['apellido']; ?>
&nbsp;</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
	<?php echo $usuario['Administradore']['direccion']; ?>
&nbsp;</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
	<?php echo $usuario['Administradore']['telefono']; ?>
&nbsp;</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
	<?php echo $usuario['Administradore']['email']; ?>
&nbsp;</dd>
		<dt><?php echo __('Usuario Id'); ?></dt>
		<dd>
	<?php echo $usuario['Administradore']['usuario_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
	<?php echo $usuario['Administradore']['created']; ?>
&nbsp;</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
	<?php echo $usuario['Administradore']['modified']; ?>
&nbsp;</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
	<?php echo $usuario['Administradore']['activo']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Administradore'), array('controller' => 'administradores', 'action' => 'edit', $usuario['Administradore']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Comercios'); ?></h3>
	<?php if (!empty($usuario['Comercio'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $usuario['Comercio']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('razon_social'); ?></dt>
		<dd>
	<?php echo $usuario['Comercio']['razon_social']; ?>
&nbsp;</dd>
		<dt><?php echo __('Nombre Titular'); ?></dt>
		<dd>
	<?php echo $usuario['Comercio']['nombre_titular']; ?>
&nbsp;</dd>
		<dt><?php echo __('Apellido Titular'); ?></dt>
		<dd>
	<?php echo $usuario['Comercio']['apellido_titular']; ?>
&nbsp;</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
	<?php echo $usuario['Comercio']['direccion']; ?>
&nbsp;</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
	<?php echo $usuario['Comercio']['telefono']; ?>
&nbsp;</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
	<?php echo $usuario['Comercio']['email']; ?>
&nbsp;</dd>
		<dt><?php echo __('Logo'); ?></dt>
		<dd>
	<?php echo $usuario['Comercio']['logo']; ?>
&nbsp;</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
	<?php echo $usuario['Comercio']['activo']; ?>
&nbsp;</dd>
		<dt><?php echo __('Usuario Id'); ?></dt>
		<dd>
	<?php echo $usuario['Comercio']['usuario_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
	<?php echo $usuario['Comercio']['created']; ?>
&nbsp;</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
	<?php echo $usuario['Comercio']['modified']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Comercio'), array('controller' => 'comercios', 'action' => 'edit', $usuario['Comercio']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Socios'); ?></h3>
	<?php if (!empty($usuario['Socio'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $usuario['Socio']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Dni'); ?></dt>
		<dd>
	<?php echo $usuario['Socio']['dni']; ?>
&nbsp;</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
	<?php echo $usuario['Socio']['nombre']; ?>
&nbsp;</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
	<?php echo $usuario['Socio']['apellido']; ?>
&nbsp;</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
	<?php echo $usuario['Socio']['direccion']; ?>
&nbsp;</dd>
		<dt><?php echo __('Telenono'); ?></dt>
		<dd>
	<?php echo $usuario['Socio']['telenono']; ?>
&nbsp;</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
	<?php echo $usuario['Socio']['email']; ?>
&nbsp;</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
	<?php echo $usuario['Socio']['created']; ?>
&nbsp;</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
	<?php echo $usuario['Socio']['modified']; ?>
&nbsp;</dd>
		<dt><?php echo __('Usuario Id'); ?></dt>
		<dd>
	<?php echo $usuario['Socio']['usuario_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
	<?php echo $usuario['Socio']['activo']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Socio'), array('controller' => 'socios', 'action' => 'edit', $usuario['Socio']['id'])); ?></li>
			</ul>
		</div>
	</div>
	