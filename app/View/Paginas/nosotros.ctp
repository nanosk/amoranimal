<div class="container">

		<?php 
		echo $this->element('header'); 
		
		$datos_navbar=array( 'categorias' => $categorias, 'razon_social'=>$empresa);
  		echo $this->element('nav_bar_galeria2', $datos_navbar);
  		?>
    
    
	<div class="row">

	
  <div class="span12">
  <div class="page-header">
    <h3>Acerca de Nosotros <small> lo que hacemos...</small></h3>
  </div>

  <!-- Headings & Paragraph Copy -->
  <div class="row">
  
      <div class="span12">
      <blockquote class="pull-right">
        <p><?php  echo $datos[0][0]['Empresadato']['descripcion'];  ?></p>
        <small><?php  echo $datos[0][0]['Empresadato']['descripcion'];  ?> </small>
      </blockquote>

    </div>
  
    <div class="span9">
      <h4>Que hacemos?</h4>
      <p><?php  echo $datos[1][0]['Empresadato']['descripcion'];  ?></p>

    </div>



  <!-- Misc Elements -->
  
  </div><!-- /row -->

	</div>

</div>

</div> <!-- /container -->
$datos[0][0]['Empresadato']['descripcion'];  ?> </small>
      </blockquote>

    </div>
  
    <div class="span9">
      <h3>Que hacemos?</h3>
      <p><?php  echo $datos[1][0]['Empresadato']['descripcion'];  ?></p>

    </div>



  <!-- Misc Elements -->
  
  </div><!-- /row -->

	</div>

</div>

</div> <!-- /container -->
