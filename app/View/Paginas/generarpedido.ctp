<div class="container">

		<?php 
		echo $this->element('header'); 
		
		$datos_navbar=array( 'categorias' => $categorias, 'razon_social'=>$empresa);
  		echo $this->element('nav_bar_galeria2', $datos_navbar);
  		
  		//echo var_dump($carrito);
  		?>
		
		
	
	
	<div class="row">
	<div class="span12">
		<?php echo $mensaje;?>
	</div>
	</div>
      	

</div> <!-- /container -->






