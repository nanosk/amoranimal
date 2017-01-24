<?php $this->start('script') ?>
<script type="text/javascript">
	jQuery(function($){
			$('#mnu_adm').addClass( "treeview active");
			$('#mnu_adm_comercios').addClass( "active"); 
		});
</script>
<?php $this->end('script') ?>



<?php $this->start('filtros') ?> 
	<?php 	echo $this->element('filtro2',array('datos'=>null));  ?>
<?php $this->end('filtros') ?>
		
		
<?php $this->start('opciones') ?> 
	<?php echo $this->element('boton',array('botones'=>$botones)); ?>
<?php $this->end('opciones') ?>	

<?php $this->start('script') ?>
<script type="text/javascript">
	jQuery(function($){
			$('#mnu_adm').addClass( "treeview active");
			$('#mnu_adm_comercios').addClass( "active"); 
		});
</script>
<?php $this->end('script') ?>


<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Comercio</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
	

<?php echo $this->Form->create('Comercio',array('type'=>'file','class'=>'form-horizontal')); ?>
<?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
		

<?php echo $this->element('createform', array('form'=>$form, 'typeform'=> 'VIEW') ); ?>

		
			

		
  </div><!-- /.box-body -->
</div><!-- /.box -->

		
			