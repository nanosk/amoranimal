	
			

<?php $this->start('filtros') ?> 
	<?php 	echo $this->element('filtro2',array('datos'=>null));  ?>
<?php $this->end('filtros') ?>


<?php $this->start('opciones') ?> 
	<?php echo $this->element('boton',array('botones'=>$botones)); ?>
<?php $this->end('opciones') ?>

		



<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Edicion de Grupo</h3>
  </div><!-- /.box-header -->
  <div class="box-body">



<?php echo $this->Form->create('Group',array('action'=>'edit', 'class'=>'form-horizontal','role'=>'form')); ?>

<?php echo $this->element('createform', $form); ?>

<?php echo $this->element('submit')?>
			


	
  </div><!-- /.box-body -->
</div><!-- /.box -->