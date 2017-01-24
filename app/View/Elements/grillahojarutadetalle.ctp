<!-- recibe como parametro
$hojaruta
-->

<div class="col-xs-12" id="grillahojarutadetalle">
	<table id="simple-table" class="table table-striped">

		<thead>

		<th>Id</th>
		<th>Cliente</th>
		<th>Razon social</th>
		

		<th>Hora</th>
		
		<th width="5%"></th>
		<th width="5%"></th>
		
		</thead>
		<tbody>
		<?php // debug($Pedidocabecera) ?>
		<?php foreach ($hojaruta['Hojarutadetalle'] as $item): ?>


		<tr>
		
		<td><?php echo $item['id']; ?></td>
		<td><?php echo $item['Cliente']['apellidoynombre']; ?></td>
		<td><?php echo $item['Cliente']['razonsocial']; ?></td>
		<td><?php echo $item['hora']; ?></td>

		<?php if( in_array ($USER_ROL ,array($ROL_CARGADATOS, $ROL_ADMIN, $ROL_DESARROLLO))){ ?>
			<td>
			<?php echo $this->Html->link('', array('controller' => 'Hojarutadetalles','action' => 'edit', 
			$item['id']),
			array('class'=>'glyphicon glyphicon-edit',
			'title'=>'Editar registro','data-toggle'=>'tooltip', 'data-placement'=>'top'));?>
			</td>
			<td>
			<?php 
			$mensaje = 'Estas Seguro que desea eliminar el registro?'.
			$item['id'];
			echo $this->Form->postLink('', 
			array('controller' => 'Hojarutas','action' => 'deletedetalle', $item['id'], $item['hojaruta_id']),	
			array('confirm' => $mensaje , 'class'=>'glyphicon glyphicon-trash',
			'title'=>'Eliminar registro','data-toggle'=>'tooltip', 'data-placement'=>'top')); 
			?>
			</td>
		<?php } ?>
	
		</tr>
		
		
		<?php endforeach; ?>
		</tbody>
	</table>
</div> <!-- FIN GRILLA HOJARUTA DETALLE -->