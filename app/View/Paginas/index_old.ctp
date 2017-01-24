<div class= "container">

		<?php 
		
		echo $this->element('header'); 
		
		$datos_navbar=array( 'categorias' => $categorias, 'razon_social'=>$empresa);
  		echo $this->element('nav_bar_galeria2', $datos_navbar);
  
		
		echo $this->element('slider_bar2'); 
		
		
		echo $this->element('carousel2') ;
		
		
		?>
      
		<div class="span7 popular_products">
			<?php echo $this->element('productos_destacados',$productos_destacados);?> 
	     	<?php echo  $this->element('masvendidos',$masvendidos);?>
		</div>
        
	<?php echo $this->element('newsletter2');?>
    </div>
    
    
    
    
    
    
    
    
   <?php echo $this->element('footer2');?>
</div>

