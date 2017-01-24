
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
		<div class="col-xs-12">
		
		
<div class="page-header">
	<h1>
		Productos
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			 Nuevo
		</small>
	</h1>
</div><!-- /.page-header -->
					

			<div id="user-profile-3" class="user-profile row">
				<div class="col-sm-11">
					
				<div class="space"></div>

	
	<?php echo $this->Form->create('Producto',array('action'=>'add', 'type'=>'file','class'=>'form-horizontal')); ?>
	
		<div class="tabbable">
			<ul class="nav nav-tabs padding-16">
				<li class="active">
					<a data-toggle="tab" href="#tabs1">
						<i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
						Informacion General
					</a>
				</li>

				<li>
					<a data-toggle="tab" href="#tabs2">
						<i class="green ace-icon fa  fa-cogs bigger-125"></i>
						Medidas
					</a>
				</li>

				<li>
					<a data-toggle="tab" href="#tabs3">
						<i class="green ace-icon fa fa-user bigger-125"></i>
						Otros datos
					</a>
				</li>
				
			</ul>

<div class="tab-content profile-edit-tab-content">


<div id="tabs1" class="tab-pane in active">
							<h4 class="header blue bolder smaller">General</h4>



<div class="row">
<div class="profile-user-info ">
	
<?php
echo $this->Form->input('nombre',array('label'=>'Nombre','class'=>'form-control'));
echo $this->Form->input('descripcion',array('label'=>'Descripcion','class'=>'form-control'));

echo $this->Form->input('desc_larga',array('type'=>'textarea', 'label'=>'Descripcion Larga','class'=>'form-control'));

?>

<div class="form-group">
<div class="col-xs-4">
<?php echo $this->Form->input('precio',array('label'=>'Precio','class'=>'form-control')); ?>
</div>
</div>


	<div class="form-group">
	<span class="profile-picture">
		<?php 
		
		echo $this->Form->input('Producto.imagen', array(  
		 'class'=>'editable img-responsive', 'type' => 'file','label'=>false)); 
		echo $this->Form->input('Producto.imagen_dir', array('type' => 'hidden'));
		
		?>
	</span>	
	</div>


<div class="form-group">
<div class="col-xs-4">
			<?php echo $this->Form->checkbox('oferta', array( 'label'=>false, 
			'class'=>'ace input-lg')); ?>
			<span class="lbl bigger-120"> 
			<i class="ace-icon fa fa-comments green"></i> Oferta   
			</span> 
</div>
</div>	


<div class="form-group">
<div class="col-xs-4">			
			<?php echo $this->Form->checkbox('nuevo', array( 'label'=>false, 
			'class'=>'ace input-lg')); ?>
			<span class="lbl bigger-120"> 
			<i class="ace-icon fa fa-facebook blue"></i> Nuevo
			</span> 
</div>
</div>


<div class="form-group">
<div class="col-xs-4">			
			<?php echo $this->Form->checkbox('destacado', array( 'label'=>false, 
			'class'=>'ace input-lg')); ?>
			<span class="lbl bigger-120"> 
			<i class="ace-icon fa fa-comments green"></i> Destacado   
			</span> 
</div>
</div>

<div class="form-group">
<div class="col-xs-4">
<label>Marca</label>
<?php echo $this->Form->input('marca_id',array('label'=>false,'class'=>'select2'));?>
</div>
<div class="col-xs-4">
<label>Categoria</label>
<?php  echo $this->Form->input('categoria_id',array('label'=>false,'class'=>'select2')); ?>
</div>
</div>
<br>

</div>
</div>
</div>


<!-- Segundo Panel -->
<div id="tabs2" class="tab-pane">
  
	<h4 class="header blue bolder smaller">Medidas</h4>

</div>

			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					
					
					<button class="btn btn-info" type="submit">
						<i class="ace-icon fa fa-check bigger-110"></i>
						Guardar
						 <?php echo $this->Form->end(); ?>
						</button>

					&nbsp; &nbsp;
					<button class="btn" type="reset">
						<i class="ace-icon fa fa-undo bigger-110"></i>
						Cancelar
					</button>
				</div>
			</div>
		
	</div>
	</div>							
</div>
</div>
</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				
			</div><!-- /.main-content -->


<script type="text/javascript">
	jQuery(function($) {

		//editables on first profile page
		$.fn.editable.defaults.mode = 'inline';
		$.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
	    $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
	                                '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';    

			$('.form_date').datetimepicker({
                    		        language:  'es',
                    		        weekStart: 1,
                    		        todayBtn:  1,
                    				autoclose: 1,
                    				todayHighlight: 1,
                    				startView: 2,
                    				minView: 2,
                    				forceParse: 0,
                    				format: 'yyyy/mm/dd'
                    		    });


		$('#username')
		.editable({
			type: 'text',
			name: 'username'
	    });

		
		$('#user-profile-3')
		.find('input[type=file]').ace_file_input({
			style:'well',
			btn_choose:'Elegir Imagen',
			btn_change:null,
			no_icon:'ace-icon fa fa-picture-o',
			thumbnail:'large',
			droppable:true,
			allowExt: ['jpg', 'jpeg', 'png', 'gif'],
			allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
		})
		.end().find('button[type=reset]').on(ace.click_event, function(){
			$('#user-profile-3 input[type=file]').ace_file_input('reset_input');
		});
		
		$('.select2').select2();
		$('.select2').css({'width': '15em'});
/*
		$('#signup').editable({
			type: 'adate',
			date: {
				//datepicker plugin options
				format: 'yyyy/mm/dd',
				viewformat: 'yyyy/mm/dd',
				weekStart: 1,
				language:  'es',
				 
				//,nativeUI: true//if true and browser support input[type=date], native browser control will be used
				//,format: 'yyyy-mm-dd',
				//viewformat: 'yyyy-mm-dd'
			}
		});
		*/

		$("[data-mask]").inputmask();
		$(".datemask").inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"});
		
		 $('#age').editable({
		        type: 'spinner',
				name : 'age',
				spinner : {
					min : 16,
					max : 99,
					step: 1,
					on_sides: true
					//,nativeUI: true//if true and browser support input[type=number], native browser control will be used
				}
			});
					

			
		

	    
		});
</script>
