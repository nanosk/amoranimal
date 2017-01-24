<div class="row">
<div class="col-xs-12 col-sm-12">
<section class="content-header">
          <h1>
           Perfil de Usuario
          </h1>
         
        </section>

		
		<?php $this->start('opciones') ?> 
			<?php echo $this->element('boton',array('botones'=>$botones)); ?>
		<?php $this->end('opciones') ?>
		
        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                
                <?php
					if  ($user['User']['imagen']){
						$imagen = '../files/User/imagen/'.$user['User']['id'].'/'. $user['User']['imagen'];
						
					}else{
						$imagen = 'user2.png'; 
					}			
					echo $this->Html->image($imagen,
							array('class'=>'profile-user-img img-responsive img-circle','width'=>'100px','height'=>'100px'));
					?>
                 
                  <h3 class="profile-username text-center"><?php echo $user['User']['username']?></h3>
                  <p class="text-muted text-center"></p>

                 

                 
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- About Me Box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Acerca mi</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
				
				
                  <?php //echo $this->element('botonsimple',array('boton'=>$btnenviaremailactivacion));?>
				  
				  

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                  <p class="text-muted">ciudad, Provincia</p>


                  <hr>

                  <strong><i class="fa fa-file-text-o margin-r-5"></i> Notas</strong>
                  <p>Notas.</p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab">Datos Personales</a></li>
                  <li><a href="#cambiarpass" data-toggle="tab">Cambiar Usuario y Password</a></li>
                  <li><a href="#settings" data-toggle="tab">Actualizar</a></li>
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  <?php if ($USER_ROL == $ROL_ADMIN){  ?>
				   <label for="inputName" class="control-label">Razon social:</label>
                   <p><?php echo $infouser['Gimnasio']['razonsocial'] ?></p>
                   
  				   <label for="inputName" class="control-label">Direccion:</label>
                   <p><?php echo $infouser['Gimnasio']['direccion'] ?></p>

  				   <label for="inputName" class="control-label">Telefono:</label>
                   <p><?php echo $infouser['Gimnasio']['telefono'] ?></p>
				   
				   <label for="inputName" class="control-label">Email:</label>
                   <p><?php echo $infouser['Gimnasio']['email'] ?></p>
				  
				  <?php } ?>
				  
				  
				   <?php if ($USER_ROL == $ROL_CLIENTE){  ?>
				   <label for="inputName" class="control-label">Apellido y Nombre:</label>
                   <p><?php echo $infouser['Cliente']['cmbtexto2'] ?></p>
                   
  				   <label for="inputName" class="control-label">Direccion:</label>
                   <p><?php echo $infouser['Cliente']['direccion'] ?></p>

  				   <label for="inputName" class="control-label">Telefono:</label>
                   <p><?php echo $infouser['Cliente']['telefono'] ?></p>
				   
				   <label for="inputName" class="control-label">Email:</label>
                   <p><?php echo $infouser['Cliente']['email'] ?></p>
				  
				  <?php } ?>
                  
                   
				   
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="cambiarpass">
                    <!-- The timeline -->
                    
					<?php echo $this->Form->create('User',array('action'=>'cambiarpass', 'class'=>'form-horizontal')); ?>
					<?php echo $this->Form->input('username',array('label'=>'Username','class'=>'form-control'));?>
					<?php echo $this->Form->input('password',array('label'=>'Ingresar Nueva contraseña','class'=>'form-control'));?>
					<?php echo $this->Form->input('passwordrepeat',array('type'=>'password', 'label'=>'Repetir la Nueva contraseña','class'=>'form-control'));?>

										
					
					<button class="btn btn-flat btn-default" type="submit">
					 <i class="fa fa-save"></i> Guardar
					<?php echo $this->Form->end(); ?> 
					</button>

                    
                    
                  </div><!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    
					<div class="row">
					<?php echo $this->Form->create('User',array( 'action'=>'micuenta','class'=>'form-horizontal')); ?>
					
							
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