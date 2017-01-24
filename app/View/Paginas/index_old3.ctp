<div class="content">
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="#"><?php echo $this->Html->image('../blocky/images/logo.png') ?></a>
			</div>
			<div class="navigation">
				<span class="menu"><?php echo $this->Html->image('../blocky/images/menu.png') ?></span>
								
								<ul class="nav1">
									<li><a class="active" href="index.html">INICIO</a></li>
									<li><a href="#">SERVICIOS</a></li>	
									
								</ul>
								<!-- script for menu -->
									<script> 
										$( "span.menu" ).click(function() {
										$( "ul.nav1" ).slideToggle( 300, function() {
										 // Animation complete.
										});
										});
									</script>
								<!-- //script for menu -->

			</div>
			<div class="search">
				<form>
					<input type="search" value="SEARCH" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'SEARCH';}" required="">
					<input type="submit" value=" ">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<div class="content-top">
			<div class="wrap">
				<div class="col-md-5 content-left">
					<h1>Gym Online</h1>
					<div class="border"></div>
					<p>Registra tu cuenta, lleva el control de tus clientes, pagos y rutinas.</p>
					<p>Cliente, lleva el control de tus rutinas y pagos.</p>
					<a href="#registrarse" class="hvr-rectangle-out button">Registrarse</a>
					<a href="#iniciarsesion"class="hvr-rectangle-in button more-mar">Iniciar Sesion</a>
				</div>
				<div class="col-md-7 content-right">
					<!-- responsiveslides -->
						
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								 // Slideshow 4
								$("#slider3").responsiveSlides({
									auto: true,
									pager: true,
									nav: false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
								$('.events').append("<li>before event fired.</li>");
								},
								after: function () {
									$('.events').append("<li>after event fired.</li>");
									}
									});
									});
							</script>
					<!-- responsiveslides -->
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="slider-image">
									
									<?php echo $this->Html->image('../blocky/images/444.jpg') ?>
								</div>
							</li>
							<li>
								<div class="slider-image">
									<img src="images/pic3.jpg" alt=""/>
									<?php echo $this->Html->image('../blocky/images/pic3.jpg') ?>
								</div>
							</li>
							<li>
								<div class="slider-image">
								<?php echo $this->Html->image('../blocky/images/555.jpg') ?>
									<img src="images/555.jpg" alt=""/>
								</div>
							</li>
							<li>
								<div class="slider-image">
								<?php echo $this->Html->image('../blocky/images/444.jpg') ?>
									
								</div>
							</li>
							<li>
								<div class="slider-image">
								    <?php echo $this->Html->image('../blocky/images/pic3.jpg') ?>
									
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="content-bottom" id="registrarse">
			<div class="col-md-5 con-btm-left">
				<div class="register">
					<div class="reg-header">
						<h2>Registrar nueva Cuenta</h2>
						<div class="strip"></div>						
					</div>
					<div class="register-grids">
						<div class="register-left">
							<img src="images/hhh.jpg" alt=""/>
							<input type="submit" value="Upload"> a photo
							 <input type="file" value="Choose file..">
						</div>
						<div class="register-right">
							<div class="user-form">
								<form>
										<h3>EMAIL ADDRESS</h3>
										<input type="text" value="name@email.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name@email.com';}" required="">
										<h3>CHOOSE PASSWORD</h3>
										<input type="password" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}" required="">
										<h3>CONFIRM PASSWORD</h3>
										<input type="password" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}" required="">
										<h3>DATE OF BIRTH</h3>
										<ul>
											<li>
												<input type="number" class="text_box" type="text" value="28" min="1" />	
											</li>
											<li>
												<input type="number" class="text_box" type="text" value="06" min="01" />	
											</li>
											<li>
												<input type="number" class="text_box" type="text" value="1988" min="1" />	
											</li>
											<div class="clearfix"></div>
										</ul>
								</form>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="form-btm">
						<form>
							<div class="form-left">
								<label><input type="checkbox" name="checkbox" checked=""><i>Recieve weekly newsletter?</i></label>
							</div>
							<div class="form-right">
								<input type="submit" value="SUBMIT">
							</div>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
				
				
			</div>
			<div class="col-md-7 con-btm-right">
				<div class="con-btm-grids">
					<div class="con-btm-l">
						<div class="login-tab">
							<div class="user-login">
								<h2>Login</h2>
								<div class="strip"></div>
								<?php echo $this->Form->create('User',array('action'=>'login'))?>
									<?php echo $this->Form->input('username',array('label'=>false, 'placeholder'=>'name@email.com'));?>
									<?php echo $this->Form->input('password',array('label'=>false,'placeholder'=>'Password', 'type'=>'password')); ?>
										<div class="user-grids">
											<div class="user-left">
												<label><input type="checkbox" name="checkbox" checked=""><i>Recordarme </i></label>
											</div>
											<div class="user-right">
												<button class="btn btn-xs btn-info">Iniciar sesion
												<?php echo $this->Form->end() ?>
												</button>
											</div>
											<div class="clearfix"></div>
										</div>
								</form>
							</div>
						</div>
						<div class="fb-connect">
								<h2>Connect</h2>
								<div class="strip"></div>
								<ul>
									<li><a href="#" class="twitter">Login via <b>Twitter</b></a></li>
									<li><a href="#" class="facebook">Login via <b>Facebook</b></a></li>
								</ul>
						</div>
						
					</div>
					<div class="con-btm-r">
						<div class="follow">
							<div class="follow-img">
								
							</div>
							<div class="follow-info">
							
							</div>
							<div class="follow-grids">
								
							</div>
							<div class="follow-pos"><img src="images/pic5.jpg" alt=""/></div>
						</div>
						<div class="sap_tabs">	
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								 <ul class="resp-tabs-list">
									  <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>POPULAR</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>RECENT</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>TOP RATED</span></li>
									  <div class="clearfix"></div>
								 </ul>				  	 
								<div class="resp-tabs-container">
									<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0">
									<span class="resp-arrow"></span>TAB DATA</h2>
										<div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
											<div class="facts">
												<div class="facts-grids">
													<div class="facts-left">
													  <img src="images/eee.jpg" alt=""/>
													</div> 
													<div class="facts-right">
														<h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a> </h4>
														<p>14 July 2014    <a href="#">19 Comments</a></p>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="facts-grids">
													<div class="facts-left">
													  <img src="images/fff.jpg" alt=""/>
													</div> 
													<div class="facts-right">
														<h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a> </h4>
														<p>14 July 2014    <a href="#">19 Comments</a></p>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="facts-grids">
													<div class="facts-left">
													  <img src="images/ggg.jpg" alt=""/>
													</div> 
													<div class="facts-right">
														<h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></h4>
														<p>14 July 2014    <a href="#">19 Comments</a></p>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>	
										</div>
										<h2 class="resp-accordion" role="tab" aria-controls="tab_item-1">
										<span class="resp-arrow"></span>TAB DATA</h2>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
											<div class="facts">									
												<div class="facts-grids">
													<div class="facts-left">
													  <img src="images/ggg.jpg" alt=""/>
													</div> 
													<div class="facts-right">
														<h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a> </h4>
														<p>14 July 2014    <a href="#">19 Comments</a></p>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="facts-grids">
													<div class="facts-left">
													  <img src="images/eee.jpg" alt=""/>
													</div> 
													<div class="facts-right">
														<h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a> </h4>
														<p>14 July 2014    <a href="#">19 Comments</a></p>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="facts-grids">
													<div class="facts-left">
													  <img src="images/ggg.jpg" alt=""/>
													</div> 
													<div class="facts-right">
														<h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></h4>
														<p>14 July 2014    <a href="#">19 Comments</a></p>
													</div>
													<div class="clearfix"></div>
												</div>										
											</div>	
										</div>									
										<h2 class="resp-accordion" role="tab" aria-controls="tab_item-2">
										<span class="resp-arrow"></span>TAB DATA</h2>
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
											<div class="facts">
												<div class="facts-grids">
													<div class="facts-left">
													  <img src="images/fff.jpg" alt=""/>
													</div> 
													<div class="facts-right">
														<h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a> </h4>
														<p>14 July 2014    <a href="#">19 Comments</a></p>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="facts-grids">
													<div class="facts-left">
													  <img src="images/ggg.jpg" alt=""/>
													</div> 
													<div class="facts-right">
														<h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
														<p>14 July 2014    <a href="#">19 Comments</a></p>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="facts-grids">
													<div class="facts-left">
													  <img src="images/eee.jpg" alt=""/>
													</div> 
													<div class="facts-right">
														<h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></h4>
														<p>14 July 2014    <a href="#">19 Comments</a></p>
													</div>
													<div class="clearfix"></div>
												</div> 
											</div>	
										</div>
								</div>
							</div>
							<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							   </script>	
						</div>

					</div>
					<div class="clearfix"></div>
				</div>
				div class="pricing-grids">
					<div class="pricing-grid">
						<div class="basic-plan">
							<h3>BASIC</h3>
							<p>$<span>6</span>.00</p>
						</div>
						<ul>
							<li>5x <span>Users</span></li>
							<li>10x <span>Projects</span></li>
							<li>1x <span>Email Account</span></li>
							<li>10GB <span>Storage</span></li>
						</ul>
						<div class="sig-up"><a href="#">SIGN UP</a></div>
					</div>
					<div class="pricing-grid">
						<div class="basic-plan a">
							<h3>PREMIUM</h3>
							<p>$<span>12</span>.00</p>
						</div>
						<ul>
							<li>20x <span>Users</span></li>
							<li>50x <span>Projects</span></li>
							<li>10x <span>Email Accounts</span></li>
							<li>100GB <span>Storage</span></li>
						</ul>
						<div class="sig-up"><a href="#">SIGN UP</a></div>
					</div>
					<div class="pricing-grid">
						<div class="basic-plan b">
							<h3>ELITE</h3>
							<p>$<span>19</span>.00</p>
						</div>
						<ul>
							<li>Unlimited <span>Users</span></li>
							<li>Unlimited <span>Projects</span></li>
							<li>Unlimited <span>Email Account</span></li>
							<li>Unlimited <span>Storage</span></li>
						</ul>
						<div class="sig-up"><a href="#">SIGN UP</a></div>
					</div>
					<div class="clearfix"></div>
				</div>
				
				<div class="video-grids">
					<div class="video-left">
						<iframe src="https://www.youtube.com/embed/4-JJEwwPR5w" frameborder="0" allowfullscreen></iframe>
					</div>
					
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="footer">
			<p>Copyright &copy; 2015 Blocky UI Kit. All Rights Reserved | Template by <a href="http://w3layouts.com/"> W3layouts</a></p>
		</div>
	</div>
</div>