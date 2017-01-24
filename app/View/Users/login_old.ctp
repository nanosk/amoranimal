
				 
				 <div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Ingresar datos de usuario
											</h4>

											<div class="space-6"></div>

<?php echo $this->Form->create('User',array('action'=>'login')); ?>
	<fieldset>
		<label class="block clearfix">
			<span class="block input-icon input-icon-right">
			

 <?php echo $this->Form->input('username',array('label'=>false, 'class'=>'form-control','placeholder'=>'Email o Usuario'));?>
				<i class="ace-icon fa fa-user"></i>
			</span>
		</label>

		<label class="block clearfix">
			<span class="block input-icon input-icon-right">
<?php echo $this->Form->input('password',array('label'=>false,'placeholder'=>'Password', 'type'=>'password', 'class'=>'form-control')); ?>
				<i class="ace-icon fa fa-lock"></i>
			</span>
		</label>

		<div class="space"></div>

		<div class="clearfix">
			<label class="inline">
				<input type="checkbox" class="ace" />
				<span class="lbl"> Recordarme</span>
			</label>
				
			<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
				<i class="ace-icon fa fa-key"></i>
				
				<span class="bigger-110">Ingresar</span>
				<?php echo $this->Form->end(); ?>
			</button>
		</div>

		<div class="space-4"></div>
	</fieldset>

	<div class="social-or-login center">
		<span class="bigger-110">Or Login Using</span>
	</div>

	<div class="space-6"></div>

	<div class="social-login center">
		<a class="btn btn-primary">
			<i class="ace-icon fa fa-facebook"></i>
		</a>

		<a class="btn btn-info">
			<i class="ace-icon fa fa-twitter"></i>
		</a>

		<a class="btn btn-danger">
			<i class="ace-icon fa fa-google-plus"></i>
		</a>
	</div>
</div><!-- /.widget-main -->

<div class="toolbar clearfix">
	<div>
		<a href="#" data-target="#forgot-box" class="forgot-password-link">
			<i class="ace-icon fa fa-arrow-left"></i>
			Perdi mi contraseÃ±a
		</a>
	</div>

	<div>

		<a href="#" data-target="#signup-box" class="user-signup-link">
			Registrarse
			
			<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Recortar contraseña
											</h4>

											<div class="space-6"></div>
											<p>
												Enter your email and to receive instructions
											</p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">Send Me!</span>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												Back to login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->

								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="ace-icon fa fa-users blue"></i>
												Registracion de nuevo usuario

											</h4>

											<div class="space-6"></div>
											<p> Ingresar datos de usuario: </p>
<?php echo $this->Form->create('User',array('action'=>'registrarse')); ?>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														<i class="ace-icon fa fa-envelope"></i>
<?php echo $this->Form->input('email',array('label'=>false, 'class'=>'form-control','placeholder'=>'Email'));?>
														
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
<?php echo $this->Form->input('username',array('label'=>false, 'class'=>'form-control','placeholder'=>'NombredeUsuario'));?>
															
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
<?php echo $this->Form->input('password',array('label'=>false, 'class'=>'form-control','placeholder'=>'password'));?>
															
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
<?php echo $this->Form->input('passwordrepeat',array('label'=>false,'type'=>'password', 'class'=>'form-control','placeholder'=>'password'));?>
<?php echo $this->Form->hidden('role',array('value'=>1));?>
<?php echo $this->Form->hidden('group_id',array('value'=>1));?>

															<i class="ace-icon fa fa-retweet"></i>
														</span>
													</label>

												
													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="ace-icon fa fa-refresh"></i>
															<span class="bigger-110">Reset</span>
														</button>

		<button type="submit" class="width-65 pull-right btn btn-sm btn-success">
			<span class="bigger-110">Registrar</span>
			<?php echo $this->Form->end(); ?>
			<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
		</button>
													</div>
												</fieldset>
											
										</div>

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												Back to login
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->