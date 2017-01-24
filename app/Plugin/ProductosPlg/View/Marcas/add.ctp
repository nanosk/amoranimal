   

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
		Marca 
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			 Nuevo
		</small>
	</h1>
</div><!-- /.page-header -->


<div id="user-profile-3" class="user-profile row">
				<div class="col-sm-11">
					

<?php echo $this->Form->create('Marca',array('action'=>'add', 'type'=>'file','class'=>'form-horizontal')); ?>



			




<div class="row">
<div class="profile-user-info ">
<?php echo $this->Form->input('descripcion',array('label'=>'Descripcion', 'class'=>'form-control')); ?>


<br>
<div class="form-group ">
	<span class="profile-picture">
		<?php 
		
		echo $this->Form->input('Marca.imagen', array(  
		 'class'=>'editable img-responsive', 'type' => 'file','label'=>false)); 
		echo $this->Form->input('Marca.imagen_dir', array('type' => 'hidden'));
		
		?>
	</span>	
	</div>

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
</div>
</div>
</div>
</div>









		
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
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
		
