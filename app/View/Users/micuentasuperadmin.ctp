<div class="row">
<div class="col-xs-12 col-sm-12">
<section class="content-header">
          <h1>
           Perfil de Usuario SUPERADMIN
          </h1>
         
        </section>

		
		
		
        <!-- Main content -->
        <section class="content">

          <div class="row">
           
            <div class="col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#cambiarpass" data-toggle="tab">Cambiar Constraseña</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="cambiarpass">
                    <!-- The timeline -->
                    
					<?php echo $this->Form->create('User',array('action'=>'cambiarpass', 'class'=>'form-horizontal')); ?>
					
					<?php echo $this->Form->input('password',array('label'=>'Ingresar Nueva contraseña','class'=>'form-control'));?>
					<?php echo $this->Form->input('passwordrepeat',array('type'=>'password', 'label'=>'Repetir la Nueva contraseña','class'=>'form-control'));?>

										
					
					<button class="btn btn-flat btn-default" type="submit">
					 <i class="fa fa-save"></i> Guardar
					<?php echo $this->Form->end(); ?> 
					</button>
        
                  </div><!-- /.tab-pane -->

            	  
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->
		  

        </section><!-- /.content -->
   </div>
</div>        