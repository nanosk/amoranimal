<?php echo $this->start('header')?>

	<div class="main-banner banner text-center">
	  <div class="container">    
			<h1>Titulo</h1>
			<p>Texto </p>
			<a href="<?php echo $this->Html->url(array('controller' => 'paginas', 'action' => 'promociones')); ?>">Ver Promociones</a>
	  </div>
	</div>
<?php $this->end('header'); ?>


<?php 
$contador = 1;
?>
<div class="trending-ads">
				<div class="container">
				<!-- slider -->
				<div class="trend-ads">
					<h2>Promociones </h2>
							<ul id="flexiselDemo3">
								
							<?php 
								$contador = 1;
								foreach ($Promos as $Promo): 
									$id = $Promo['Promo']['id'];
									$desc = $Promo['Promo']['descripcion'];
									$condiciones = $Promo['Promo']['condiciones'];
									$validodesde = $Promo['Promo']['valido_desde'];
									$validohasta = $Promo['Promo']['valido_hasta'];
									$imagen = $Promo['Promo']['imagen'];
									
									
								if ($contador > 4){
									$contador = 1;
									echo '<li>';
									}
								?>
								
							
								
									
									<div class="col-md-3 biseller-column">
										<a href="#">
											
											<?php 
											
											echo $this->Html->image("../files/promo/imagen/$id/$imagen");?> 
											
										</a> 
										<div class="ad-info">
											<h5><?php echo $desc ?></h5>
											<p> Desde el <?php echo $this->Convertdatos->fechaDMY($Promo['Promo']['valido_desde']); ?> al  <?php echo $this->Convertdatos->fechaDMY($Promo['Promo']['valido_hasta']); ?></p>
											<span><?php echo $condiciones ?></span>
										
										</div>
									</div>
									
								<?php 
								$contador = $contador + 1;
								if ($contador > 4){
										echo '</li>';
									}
								?>
								
								<?php endforeach; ?>
								
						</ul>
					<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo2").flexisel({
								visibleItems:1,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 5000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems:1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems:1
									},
									tablet: { 
										changePoint:768,
										visibleItems:1
									}
								}
							});
							
						});
					   </script>
					
					</div>   
			</div>
			<!-- //slider -->				
			</div>