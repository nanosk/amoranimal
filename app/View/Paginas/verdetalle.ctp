<?php 
   
  
     
 	 $idp            = $productos['Producto']['id'];
 	 $nombre_prod    = $productos['Producto']['nombre'];
 	 $desc_larga     = $productos['Producto']['desc_larga'];
 	 $descripcion    = $productos['Producto']['descripcion'];
 	 $precio         = $productos['Producto']['precio'];
 	 $imagen         = $productos['Producto']['imagen'];
 	 $id_marca       = $productos['Producto']['marca_id'];
 	 $id_categoria   = $productos['Producto']['categoria_id'];
 	 $marca_desc     = $productos['Marca']['descripcion'];
 	 $categoria_desc = $productos['Categoria']['descripcion'];
 	 
 	   
?>

<div class="container">

		<?php 
		echo $this->element('header'); 
		
		$datos_navbar=array( 'categorias' => $categorias, 'razon_social'=>$empresa);
  		echo $this->element('nav_bar_galeria2', $datos_navbar);
  		echo $this->element('slider_bar2'); 
  		?>
		<div class="span9">
		    <?php echo $this->element('barra_nav'); ?>
	
	
	 <div class="row">
		 <div class="span9">
			<h1><?php echo $nombre_prod; ?></h1>
		 </div>
	</div>
	<hr>
	
	 <div class="row">
		 <div class="span3">
			<?php echo $this->Html->image($imagen, array('alt' => 'Imagen no encontrada')); ?>
			
			<ul class="thumbnails">
				
				<li class="span1">
					<a href="#" class="thumbnail">
						<?php echo $this->Html->image($imagen, array('alt' => 'Imagen no encontrada')); ?>
					</a>
				</li>
				
				<li class="span1">
					<a href="#" class="thumbnail">
						<?php echo $this->Html->image($imagen, array('alt' => 'Imagen no encontrada')); ?>
					</a>
				</li>					
				
				<li class="span1">
					<a href="#" class="thumbnail">
						<?php echo $this->Html->image($imagen, array('alt' => 'Imagen no encontrada')); ?>
					</a>
				</li>
			</ul>
		</div>	 
	  
	  <div class="span6">
	  
		<div class="span6">
			<address>
				<strong>Codigo:</strong> <span>Producto <?php echo $idp ;?></span><br>
				<strong>Marca:</strong> <span><?php echo $marca_desc ;?></span><br>
				<strong>Categoria:</strong> <span><?php echo $categoria_desc ;?></span><br>
				
				<strong>En Stock:</strong> <span>Out Of Stock</span><br>
			</address>
		</div>	
				
		<div class="span6">
			<h2>
				<strong>Precio: $<?php echo $precio;?></strong> <small>Antes: $500.00</small><br><br>
			</h2>
		</div>	
		
		<div class="span6">
		
			<?php
			  echo $this->Form->create('Carrito',array('controller'=>'carritos','action'=>'add', 'class'=>'form-inline'));
			  echo $this->Form->hidden('producto_id',array('value'=>  $idp ));
		      echo $this->Form->hidden('user_id',array('value'=> $user_id ));
		      echo $this->Form->hidden('monto',array('value'=>$precio));
			?>
		    
		  <label>Cantidad:</label>
		  
		  <?php 
		  
		  echo $this->Form->input('cantidad',array('label' => '','class'=>'span1', 'placeholder'=>"1"));
		  echo '<br>';
		  echo '<button class="btn btn-primary">Agregar al carrito'.$this->Form->end().'</button>';
		?>
	     </div>	
		  
		
				
				
			</form>
			
			
		</div>	
		
		<div class="span6">
		
	<p>
	<span class="star-rating-control"></span></p>
	<div class="rating-cancel"><a title="Cancel Rating"></a></div>
	<div class="star-rating rater-0 star star-rating-applied star-rating-live"><a title="on">on</a></div><div class="star-rating rater-0 star star-rating-applied star-rating-live"><a title="on">on</a></div><div class="star-rating rater-0 star star-rating-applied star-rating-live"><a title="on">on</a></div><div class="star-rating rater-0 star star-rating-applied star-rating-live"><a title="on">on</a></div><div class="star-rating rater-0 star star-rating-applied star-rating-live"><a title="on">on</a></div><input style="display: none;" name="star1" class="star star-rating-applied" type="radio">
	<input style="display: none;" name="star1" class="star star-rating-applied" type="radio">
	<input style="display: none;" name="star1" class="star star-rating-applied" type="radio">
	<input style="display: none;" name="star1" class="star star-rating-applied" type="radio">
	<input style="display: none;" name="star1" class="star star-rating-applied" type="radio">&nbsp;&nbsp;
			
			
		</div>	
		
		
	  </div>	


  </div>
   <hr>
   
	<div class="row">
	<div class="span9">
    
    <div class="tabbable">
    <ul class="nav nav-tabs">
    
    <li class="active"><a href="#descripcion" data-toggle="tab">Descripcion</a></li>
    <li><a href="#enviar" data-toggle="tab">Enviar Consulta</a></li>
    <li><a href="#consultas" data-toggle="tab">Ver consultas</a></li>
    
    </ul>
    
    <div class="tab-content">
    <div class="tab-pane active" id="descripcion">
   		 <p>  <?php echo $desc_larga; ?> </p>
    </div>
    
    
   
    <div class="tab-pane" id="enviar">
   		
        <legend>Enviar Consulta</legend>
		
		<?php
		  echo $this->Form->create('Consulta',array('controller'=>'consultas','action'=>'add'));
		  echo $this->Form->hidden('producto_id',array('value'=>  $idp ));
		  echo $this->Form->hidden('user_id',array('value'=> $user_id ));
		  echo $this->Form->hidden('destinatario_id',array('value'=> $admin_id ));
		  echo $this->Form->hidden('origen',array('value'=> 'verdetalle' ));
		  echo $this->Form->hidden('tipomensaje_id',array('value'=> $tipomensaje_id ));
		  echo $this->Form->input('nombreusuario',array('value'=> $username,'label' => 'Nombre de Usuario:', 'class'=>"span5", 'placeholder'=>"Ingrese su Nombre..."));
		  echo $this->Form->input('email',array('value'=>$email,'label' => 'Email:', 'class'=>"span5", 'placeholder'=>"Ingrese su Email..."));
		  echo $this->Form->input('texto',array('type'=>'textarea','label' => 'Consulta:', 'class'=>"span8", 'placeholder'=>"Escriba aqui su pregunta..."));
		  echo $this->Form->end('Enviar Consulta',array('class'=>'btn btn-primary pull-right'));
		?>
    </div>
    
    
   
    <div class="tab-pane" id="consultas">
	
	<?php foreach ($consultas as $registro): ?>
		<div class="panel-consulta"> 
		<blockquote>
	      <q>Pregunta: <?php echo $registro['Consulta']['texto']; ?></q>
	      <small>Usuario: <?php echo $registro['User']['username']; ?></small>
	    
	      <?php
	      	if($registro['Consulta']['respuesta']!=""){
	      	echo
	      	'<blockquote>
	        <r>Respuesta: '. $registro['Consulta']['respuesta'] .' </r>
	        
	        <small>Market Shoes</small>
	        </blockquote>';
	      	
	      	} 
	      ?>
		
	    </blockquote>
	    </div>
    <?php endforeach; ?>
    </div>    
    
	
	    </div>
	    </div>
		</div>
		</div>
		</div>






    <br>
    <br>
    <br>
    <br>
    
	<div class="row">
	<div class="span12">
    
    <div class="tabbable">
    <ul class="nav nav-tabs">
    
    <li class="active"><a href="#descripcion" data-toggle="tab">Productos Relacionados</a></li>
    
    </ul>
    
    <div class="tab-content">
    <div class="tab-pane active" id="descripcion">
   	    <ul class="thumbnails related_products">
       
        <?php foreach ($productos_relacionados as $producto): 
            $id = $producto['Producto']['id'];
		    $nombre = $producto['Producto']['nombre'];
		    $desc = $producto['Producto']['descripcion'];
		    $desc_larga = $producto['Producto']['desc_larga'];
		    $img = $producto['Producto']['imagen'];
		    $precio = $producto['Producto']['precio'];
		    $marca = $producto['Marca']['descripcion'];
		    $categoria = $producto['Categoria']['descripcion'];
        
        ?>
            
	    <li class="span2">
          <div class="thumbnail">
            <?php echo $this->Html->image($img, array('alt' => 'Imagen no encontrada')); ?>
            <div class="caption">
              <h5><?php echo $this->Html->link($nombre, array('controller' => 'paginas', 'action' => 'verdetalle',$id));?></h5>
              <?php echo  $categoria ;?><br>
              <?php echo  $marca ;?><br>
              <?php echo '$'. $precio ;?><br>
            </div>
          </div>
        </li>
       <?php endforeach; ?>
       
       

      </ul>
   	</div>
	</div>
	</div>
    </div>
	</div>
</div> <!-- /container -->




