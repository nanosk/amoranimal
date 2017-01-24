<?php $this->start('script') ?>
<script type="text/javascript">
	jQuery(function($){
			$('#mnu_adm').addClass( "treeview active");
			$('#mnu_adm_formapagos').addClass( "active"); 
		});
</script>
<?php $this->end('script') ?>

<?php $this->start('filtros') ?> 
	<?php 	echo $this->element('filtro2',array('datos'=>null));  ?>
<?php $this->end('filtros') ?>
		
		
<?php $this->start('opciones') ?> 
	<?php echo $this->element('boton',array('botones'=>$botones)); ?>
<?php $this->end('opciones') ?>	



<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Edicion de Forma de Pago</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
	

<?php echo $this->Form->create('Formapago',array('type'=>'file','class'=>'form-horizontal')); ?>
<?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
		

<?php echo $this->element('createform', $form); ?>
<?php echo $this->element('submit')?>

		
			

		
  </div><!-- /.box-body -->
</div><!-- /.box -->

		
			