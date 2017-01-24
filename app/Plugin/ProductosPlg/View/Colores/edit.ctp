   

 <div class="main-content">
				<div class="main-content-inner">
 				
<div class="breadcrumbs" id="breadcrumbs">
			<script type="text/javascript">
				try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
			</script>

			<ul class="breadcrumb">
	 		<li>   <i class="fa fa-dashboard"></i> 
            <?php echo $this->Html->link('Inicio',array('controller'=>'administrador', 
            'action'=>'index')); ?> 
        </li>
     
            <li>
               <?php echo $this->Html->link('Listado ', array( 'action'=>'index')); ?>
                </li>
        
	</ul><!-- /.breadcrumb -->
</div>

<div class="page-content">
	<div class="row">
		<div class="col-xs-8">
		
		
<div class="page-header">
	<h1>
		Color
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			 Editar
		</small>
	</h1>
</div><!-- /.page-header -->

<?php echo $this->Form->create('Colore',array('action'=>'edit'),array('class'=>'form-group')); ?>
<?php echo $this->Form->input('id', array('type' => 'hidden')); ?>

<?php echo $this->Form->input('nombre',array('label'=>'Descripcion', 'class'=>'form-control')); ?>
<?php echo $this->Form->input('valor',array('type'=>'text', 'label'=>'Notas', 'class'=>'form-control')); ?>
<?php //echo $this->Form->input('mes',array('label'=>'Mes', 'class'=>'form-control')); ?>

<br>

<div class="form-group">
<button class="btn btn-white btn-info btn-bold">
	<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
	Guardar
	<?php echo $this->Form->end(); ?> 
</button>

<a href="<?php echo $this->Html->url(array('action'=>'index')); ?> " 
class="btn btn-white btn-default btn-bold">
	<i class="ace-icon fa fa-times red2"></i>
	Cancel
</a>


</div>










		
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			
		
			<script type="text/javascript">
			jQuery(function($){
		
				//select2
				$('.select2').css('width','200px').select2({allowClear:false})
		
			});
		</script>	
