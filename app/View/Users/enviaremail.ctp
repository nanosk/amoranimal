

<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Enviar Email</h3>
  </div><!-- /.box-header -->
  <div class="box-body">


			
<?php echo $this->Form->create('User',array('action'=>'enviaremail', 'class'=>'form-horizontal'));?>

<?php echo $this->element('createform', $form); ?>

<?php echo $this->element('submit')?>
			

	
  </div><!-- /.box-body -->
</div><!-- /.box -->
			

