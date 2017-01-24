	
<?php echo $this->start('linkactual')?>Ver Datos de Usuario  

 <?php echo $this->end('linkactual')?>

		
<?php echo $this->start('contenttitle') ?> Ver Datos de Usuario  



<?php echo $this->end('contenttitle')?>

<?php echo $this->Form->create('User',array('action'=>'edit','class'=>'form-horizontal')); ?>
<?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
		
<?php echo $this->element('createform', $form); ?>
<?php echo $this->element('submit')?>

