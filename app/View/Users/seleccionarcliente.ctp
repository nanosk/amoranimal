

<div class="col-lg-10 col-lg-offset-1">
<legend> "Seleccionar Cliente" </legend>
<table class="table table-hover table-bordered">
<thead>
<th></th>
<th>Id</th>
<th>username</th>

<th>Nombre</th>
<th>Apellido</th>
<th>Email</th>
<th>Telefono</th>

</thead>

<?php foreach ($users as $User): ?>
<tr>
<td>
<?php echo $this->Html->link('', 
	array('controller'=>'users','action' =>'setearcookie', $User['User']['id']),
	array('class'=>'btn btn-md btn-primary fa fa-arrow-circle-right'));?>
</td>

<td>

<?php echo $User['User']['id']; ?>
</td>
<td><?php echo $User['User']['username']; ?></td>

<td><?php echo $User['User']['nombre']; ?></td>
<td><?php echo $User['User']['apellido']; ?></td>
<td><?php echo $User['User']['email']; ?></td>
<td><?php echo $User['User']['telefono']; ?></td>



</tr>


<?php endforeach; ?>
</table>
</div>
</div> <!-- fin de col 8 offset 3 -->