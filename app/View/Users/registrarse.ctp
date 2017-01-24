
                                
                 
	<div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>GYM</b>App</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <h3>Registrar Nueva Cuenta</h3>
		<div class="row">
			<div class="col-xs-12 col-sm-12">
						<!-- mensaje -->
						<?php 
						echo $this->element('mensaje');
						?>
			</div>
		</div>
		  <?php echo $this->Form->create('User',array( 'action'=>'registrarse')); ?>
          
          <div class="form-group has-feedback">
				<?php echo $this->Form->input('username',array( 'label'=>false, 'class'=>'form-control','placeholder'=>'Usuario sistema'));?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		  <div class="form-group has-feedback">
				<?php echo $this->Form->input('razonsocial',array( 'label'=>false, 'class'=>'form-control','placeholder'=>'Razon social'));?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		 
		  <div class="form-group has-feedback">
				<?php echo $this->Form->input('email',array( 'label'=>false, 'class'=>'form-control','placeholder'=>'Email'));?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
		  <div class="form-group has-feedback">
				<?php echo $this->Form->input('telefono',array( 'label'=>false, 'class'=>'form-control','placeholder'=>'Telefono'));?>
				<?php echo $this->Form->hidden('group_id',array('type'=>'text', 'value'=>$ROL_ADMIN ));?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		  
		  
		  <div class="form-group has-feedback">
			<?php echo $this->Form->input('password',array('label'=>false,'placeholder'=>'Password', 'type'=>'password', 'class'=>'form-control')); ?>
            <span class="glyphicon glyphicon-pass form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-4">
				<input type="submit" class="btn btn-flat btn-primary" value="Registrar Cuenta">
				<?php echo $this->Form->end(); ?>            
            </div><!-- /.col -->
          </div>
        

        <div class="social-auth-links text-center">
          
          
        </div><!-- /.social-auth-links -->

        

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->