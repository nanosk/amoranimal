<?php 
/*
Ejemplo de llamada:

$boton= array(
'controller'=>null,
'action'=>'add'
'class'=>'btn btn-sm btn-flat btn-default',
'label'=>'Registrar Cobro',
'icon'=>'glyphicon glyphicon-plus-sign'
)
$this->element('boton',$boton);

btn btn-sm btn-flat btn-success


*/
?>


<div class="box box-default">
 
<div class="box-body">

<?php
foreach ($botones as $boton):
?>
<a class="<?php echo $boton['class'] ?>" href="<?php echo $this->Html->url(array('controller'=> $boton['controller'], 'action'=>$boton['action'] )); ?>"  >
<i class="<?php echo $boton['icon'] ?>"></i> <?php echo $boton['label'] ?></a>

<?php endforeach; ?>


</div><!-- /.box-body -->
</div>
