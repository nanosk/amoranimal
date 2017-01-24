
<?php echo $this->start('linkactual')?> Listado de Modulos  <?php echo $this->end('linkactual')?>
<?php echo $this->start('contenttitle') ?>   Listado de Modulos   <?php echo $this->end('contenttitle')?>
			
		

			
			

<table id="simple-table" class="datatable table-striped table-bordered table-hover">

<thead>
 
<th>Controlador</th>



<th width="10%"></th>
</thead>
<tbody>

<?php foreach ($regs as $item): ?>
<tr>
<td><?php echo $item; ?></td>



</tr>

<?php endforeach; ?>
</tbody>
</table>
    
