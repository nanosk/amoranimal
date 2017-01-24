	
			

<?php $this->start('filtros') ?> 
	<?php 	echo $this->element('filtro2',array('datos'=>null));  ?>
<?php $this->end('filtros') ?>


<?php $this->start('opciones') ?> 
	<?php echo $this->element('boton',array('botones'=>$botones)); ?>
<?php $this->end('opciones') ?>

		



<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Asignar Permisos a Grupo</h3>
  </div><!-- /.box-header -->
  <div class="box-body">



<?php echo $this->Form->create('Modulogroup',array('action'=>'asignarpermisos', 'class'=>'form-horizontal','role'=>'form')); ?>
<h3>Seleccionar el Grupo...</h3>
<?php echo $this->element('createform', $form); ?>

<?php echo $this->element('submit')?>
			


	
  </div><!-- /.box-body -->
</div><!-- /.box -->
