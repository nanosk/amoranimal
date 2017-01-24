	
<?php echo $this->start('linkactual')?>Ver Datos de Usuario  

 <?php echo $this->end('linkactual')?>
 
		 <a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'edit'))?>" class="btn btn-sm btn-default">
                                    <span class="icon fa fa-user"></span><span class="title">Editar datos</span>
         </a>

		
<?php echo $this->start('contenttitle') ?> Ver Datos de Usuario  



<?php echo $this->end('contenttitle')?>

<?php echo $this->Form->create('User',array('action'=>'edit','class'=>'form-horizontal')); ?>
<?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
		
<?php echo $this->element('createform', $form); ?>

