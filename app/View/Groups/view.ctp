    
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
		
		
<div class="page-header">
	<h1>
		Groups 
	</h1>
</div><!-- /.page-header -->
				
	


<?php echo $this->Form->create('Groups',array('action'=>'view'),array('class'=>'form-group')); ?>
<?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
<div class="row">
<div class="col-xs-8">
<div class="profile-user-info profile-user-info-striped">


<div class="col-xs-12">
<h4 class="header blue bolder smaller">Datos del registro </h4>

<div class="profile-info-row">
	<div class="profile-info-name"> ID: </div>

	<div class="profile-info-value">
		<span class="editable" id="age"><?php echo $Group['Group']['id'] ;?>  </span>
	</div>
</div>

<div class="profile-info-row">
	<div class="profile-info-name"> Nombre: </div>

	<div class="profile-info-value">
		<span class="editable" id="age" ><?php echo $Group['Group']['name'] ;?> </span>
	</div>
</div>
<div class="profile-info-row">
	<div class="profile-info-name"> Creado: </div>

	<div class="profile-info-value">
		<span class="editable" id="age" ><?php echo $Group['Group']['created'] ;?> </span>
	</div>
</div>



<br>
</div><!--  col 8 -->

 
</div>
</div>
    			  
			  



								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				
			</div><!-- /.main-content -->










