
                                
            
	
	<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
				<div class="col-xs-12 col-sm-12" >
								<?php  echo $this->element('mensaje'); ?>
							</div>

					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<h1>Ingresar al Sistema</h1>
						</div>
							
						<div class="signin">
							 <?php echo $this->Form->create('User',array( 'action'=>'login')); ?>
							
							<div class="log-input">
								<div class="log-input-left">
								 	<?php echo $this->Form->input('username',array( 'label'=>false, 'class'=>'form-control','placeholder'=>'Email o Usuario'));?>
								</div>
									
								<div class="clearfix"> </div>
							</div>
							
							
							<div class="log-input">
								<div class="log-input-left">
								   <?php echo $this->Form->input('password',array('label'=>false,'placeholder'=>'Password', 'type'=>'password', 'class'=>'form-control')); ?>
           
								</div>
								
								<div class="clearfix"> </div>
							</div>
							<input type="submit" value="Ingresar">
								<?php echo $this->Form->end(); ?>          
						</div>
					
					</div>
				</div>
			</div>