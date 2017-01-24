<div class="row">
<div class="col-xs-12 col-sm-12">
<section class="content-header">
          <h1>
           Perfil de Usuario Administrador
          </h1>
         
        </section>

		
		<?php $this->start('opciones') ?> 
			<?php echo $this->element('boton',array('botones'=>$botones)); ?>
		<?php $this->end('opciones') ?>
		
        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-3">

             

              
            </div><!-- /.col -->
            <div class="col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab">Datos Personales</a></li>
                  <li><a href="#cambiarpass" data-toggle="tab">Cambiar Constraseña</a></li>
                  <li><a href="#settings" data-toggle="tab">Actualizar</a></li>
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
             
				   <label for="inputName" class="control-label">Nombre:</label>
                   <p><?php echo $infouser['Administradore']['nombre'] ?></p>
				   
				   <label for="inputName" class="control-label">Apellido:</label>
                   <p><?php echo $infouser['Administradore']['apellido'] ?></p>
                   
  				   <label for="inputName" class="control-label">Direccion:</label>
                   <p><?php echo $infouser['Administradore']['direccion'] ?></p>

  				   <label for="inputName" class="control-label">Telefono:</label>
                   <p><?php echo $infouser['Administradore']['telefono'] ?></p>
				   
				   <label for="inputName" class="control-label">Email:</label>
                   <p><?php echo $infouser['Administradore']['email'] ?></p>
				
				  
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="cambiarpass">
                    <!-- The timeline -->
                    
					<?php echo $this->Form->create('User',array('action'=>'cambiarpass', 'class'=>'form-horizontal')); ?>
					<?php echo $this->Form->input('password',array('label'=>'Ingresar Nueva contraseña','class'=>'form-control'));?>
					<?php echo $this->Form->input('passwordrepeat',array('type'=>'password', 'label'=>'Repetir la Nueva contraseña','class'=>'form-control'));?>

										
					
					<button class="btn btn-flat btn-default" type="submit">
					 <i class="fa fa-save"></i> Guardar
					<?php echo $this->Form->end(); ?> 
					</button>

                    
                    
                  </div><!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    
					<div class="row">
					<?php echo $this->Form->create('User',array('controller'=>'users', 'action'=>'micuentaadmin','class'=>'form-horizontal')); ?>
					<?php echo $this->element('createform', $form); ?>
					<?php echo $this->element('submit')?>
					                      
                     </div>
                      
                      
                 
                  </div><!-- /.tab-pane -->
				  
				  
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->
		  

        </section><!-- /.content -->
   </div>
</div>        