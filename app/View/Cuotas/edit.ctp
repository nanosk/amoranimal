
<?php $this->start('filtros') ?> 
	<?php 	echo $this->element('filtro2',array('datos'=>null));  ?>
<?php $this->end('filtros') ?>

<?php $this->start('opciones') ?> 
	<?php echo $this->element('boton',array('botones'=>$botones)); ?>
<?php $this->end('opciones') ?>

		
<?php $this->start('filtros') ?> 
	<?php 	echo $this->element('filtro2',$datos);  ?>
<?php $this->end('filtros') ?>


<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Registrar cuotas</h3>
  </div><!-- /.box-header -->
  <div class="box-body">



<?php echo $this->Form->create('Cuota',array('action'=>'edit', 'class'=>'form-horizontal','role'=>'form')); ?>
<?php echo $this->Form->input('id', array('type' => 'hidden')); ?>

<?php echo $this->element('createform', $form); ?>

<?php echo $this->element('submit')?>
			


	
  </div><!-- /.box-body -->
</div><!-- /.box -->
